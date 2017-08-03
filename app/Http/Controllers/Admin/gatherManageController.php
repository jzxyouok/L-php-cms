<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Doc;
use App\Http\Model\Gather;
use App\Http\Model\Upload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use QL\QueryList;
use Illuminate\Support\Facades\Validator;

class gatherManageController extends Controller
{
  public function view(Request $request)
  {
    return view('admin.gather', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.doc_manage'),
      'item' => config('cms.gather_manage'),
      'userInfo' => $request->session()->get('userInfo'),
    ]);
  }

  public function getGather(Request $request)
  {

    $gather = Gather::all();

    return response()->json(['code' => 1, 'msg' => '获取成功', 'data' => $gather->toArray()]);

  }

  public function addGather(Request $request)
  {
    $siteName = $request->input('siteName');
    $docTitle = $request->input('docTitle');
    $docContent = $request->input('docContent');
    $gather = new Gather;
    $gather->site_name = $siteName;
    $gather->doc_title = $docTitle;
    $gather->doc_content = $docContent;
    $res = $gather->save();
    if ($res) {
      return response()->json(['code' => 1, 'msg' => '添加成功']);
    } else {
      return response()->json(['code' => 0, 'msg' => '添加失败']);
    }


  }

  public function deep_in_array($value, $array)
  {
    foreach ($array as $item) {
      if (!is_array($item)) {
        if ($item == $value) {
          return true;
        } else {
          continue;
        }
      }

      if (in_array($value, $item)) {
        return true;
      } else if ($this->deep_in_array($value, $item)) {
        return true;
      }
    }
    return false;
  }

  public function isDomain($domain)
  {
    return preg_match('/(\.us|\.tv|\.org\.cn|\.org|\.net\.cn|\.net|\.mobi|\.me|\.la|\.info|\.hk|\.gov\.cn|\.edu|\.com\.cn|\.com|\.co\.jp|\.co|\.cn|\.cc|\.biz)/i', $domain) ? true : false;
  }



  /**
   * 下载远程图片
   * @param string $url 图片的绝对url
   * @param string $filepath 文件的完整路径（包括目录，不包括后缀名,例如/www/images/test） ，此函数会自动根据图片url和http头信息确定图片的后缀名
   * @return mixed 下载成功返回一个描述图片信息的数组，下载失败则返回false
   */
  function downloadImage($url, $filepath,$d) {
    //服务器返回的头信息
    $responseHeaders = array();
    //原始图片名
    $originalfilename = '';
    //图片的后缀名
    $ext = '';
    $ch = curl_init($url);
    //设置curl_exec返回的值包含Http头
    curl_setopt($ch, CURLOPT_HEADER, 1);
    //设置curl_exec返回的值包含Http内容
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //设置抓取跳转（http 301，302）后的页面
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    //设置最多的HTTP重定向的数量
    curl_setopt($ch, CURLOPT_MAXREDIRS, 2);

    //服务器返回的数据（包括http头信息和内容）
    $html = curl_exec($ch);
    //获取此次抓取的相关信息
    $httpinfo = curl_getinfo($ch);
    curl_close($ch);
    if ($html !== false) {
      //分离response的header和body，由于服务器可能使用了302跳转，所以此处需要将字符串分离为 2+跳转次数 个子串
      $httpArr = explode("\r\n\r\n", $html, 2 + $httpinfo['redirect_count']);
      //倒数第二段是服务器最后一次response的http头
      $header = $httpArr[count($httpArr) - 2];
      //倒数第一段是服务器最后一次response的内容
      $body = $httpArr[count($httpArr) - 1];
      $header.="\r\n";

      //获取最后一次response的header信息
      preg_match_all('/([a-z0-9-_]+):\s*([^\r\n]+)\r\n/i', $header, $matches);
      if (!empty($matches) && count($matches) == 3 && !empty($matches[1]) && !empty($matches[1])) {
        for ($i = 0; $i < count($matches[1]); $i++) {
          if (array_key_exists($i, $matches[2])) {
            $responseHeaders[$matches[1][$i]] = $matches[2][$i];
          }
        }
      }
      //获取图片后缀名
      if (0 < preg_match('{(?:[^\/\\\\]+)\.(jpg|jpeg|gif|png|bmp)$}i', $url, $matches)) {
        $originalfilename = $matches[0];
        $ext = $matches[1];
      } else {
        if (array_key_exists('Content-Type', $responseHeaders)) {
          if (0 < preg_match('{image/(\w+)}i', $responseHeaders['Content-Type'], $extmatches)) {
            $ext = $extmatches[1];
          }
        }
      }
      //保存文件
      if (!empty($ext)) {
        $filepath .= ".$ext";
        //如果目录不存在，则先要创建目录
        Storage::disk('upload')->makeDirectory('/image/'.$d);
      //  CFiles::createDirectory(dirname($filepath));
        $local_file = fopen($filepath, 'w');
        if (false !== $local_file) {
          if (false !== fwrite($local_file, $body)) {
            fclose($local_file);
            $sizeinfo = getimagesize($filepath);
            return array('filepath' => realpath($filepath), 'width' => $sizeinfo[0], 'height' => $sizeinfo[1], 'orginalfilename' => $originalfilename, 'filename' => pathinfo($filepath, PATHINFO_BASENAME));
          }
        }
      }
    }
    return false;
  }

  public function autoGather(Request $request)
  {
//    $heads = get_headers('http://cms-bucket.nosdn.127.net/a8531657f74a49e2ab60ec57493ed20e20161123153833.jpeg?imageView&thumbnail=550x0', 1);
//    dd($heads);

        //获取所要采集的分类页的网址
        // $siteName = Gather::where('auto', '是')->get()->toArray()['site_name'];

        $gather = Gather::where('auto', '是')->get()->toArray();


        foreach ($gather as $g) {
          $siteName = $g['site_name'];
          $categoryUrl = $g['category_url'];
          $categoryKeyword = explode(',', $g['category_keyword']);
          $time_selector = $g['time_selector'];
          $titleSelector = $g['title_selector'];
          $contentUrlSelector = $g['content_url_selector'];
          $previewImgSelector = $g['preview_img_selector'];
          $docTitle = $g['doc_title'];
          $docContent = $g['doc_content'];
          $categorySite = [];

          foreach ($categoryKeyword as $cK) {
            array_push($categorySite, 'http://' . $siteName . $categoryUrl . '/' . $cK);
          }
          //dd($categorySite);
          foreach ($categorySite as $cS) {
            if ($time_selector) {
              $rules = array(
                'title' => array($titleSelector, 'text'),
                'content_url' => array($contentUrlSelector, 'href'),
                'time' => array($time_selector, 'text'),
                'preview_img' => array($previewImgSelector, 'src'),
              );

            } else {
              $rules = array(
                'title' => array($titleSelector, 'text'),
                'content_url' => array($contentUrlSelector, 'href'),
                'preview_img' => array($previewImgSelector, 'src'),
              );
            }


            $html = $cS;

            $data = array_slice(QueryList::Query($html, $rules)->data, 0, 10);

           // dd($data);
            // dd(!$this->isDomain($data[0]['content_url']));
            if (!$this->isDomain($data[0]['content_url'])) {//判断获取的链接是否包含域名，如果没有域名则添加
              foreach ($data as &$d) {
                $d['content_url'] = 'http://' . $siteName . $d['content_url'];

              }
              // dd($data);
            }


            //  dd(date("Y/m/d"));
            if ($time_selector) {
              foreach ($data as $k => $v) {
                if ($v['time'] !== date("Y/m/d")) {//只保留当天的
                  unset($data[$k]);
                }
              }
            }
           // dd($data);
            $dataOnlyTitle = [];

            foreach ($data as $k => $v) {//只保留title,方便判断是否已经采集了该文章
              array_push($dataOnlyTitle, array('title' => $v['title']));

            }

             // dd($dataOnlyTitle);
             // dd($data);
            foreach ($dataOnlyTitle as $k => $v) {
              $validator = Validator::make($v, ['title' => 'required|exists:docs,title'], ['title.exists' => '文档已经存在', 'required' => '标题不能为空']);

              if ($validator->passes()) {
                unset($dataOnlyTitle[$k]);
              }

            }
            // dd($dataOnlyTitle);
            $finalData = [];
          //  dd($data);
            foreach ($data as $k => $v) {
              if ($this->deep_in_array($v['title'], $dataOnlyTitle)) {
                $t = QueryList::Query($v['content_url'], array(
                  'title' => array($docTitle, 'text'),
                  'content' => array($docContent, 'html'),
                ))->data;
                //  dd($t);
                $t[0]['from'] = $v['content_url'];
                $t[0]['preview_img'] = $v['preview_img'];
                $t[0]['status'] = 'wait_for_verify';
                array_push($finalData, $t[0]);
              }

            }

             //  dd($finalData);


            foreach ($finalData as &$fD) {

            //  $fD['preview_img']
//    $this-> downloadImage($fD['preview_img'],'/public/upload/image/'. date('Ymd').'/'.date('YmdHis') . mt_rand(100, 999));
              $d=date('Ymd');
             $c=$this-> downloadImage($fD['preview_img'],base_path().'/public/upload/image/'.$d.'/'.date('YmdHis'),$d);
              if($c){
              //  dd($c['filepath']);
                $fD['preview_img']=URL::asset(substr($c['filepath'],13));
              };
              Doc::create($fD);
             // dd($fD);

            }
//      dd($finalData);


          }

    }

//    $categoryUrl = Gather::where('auto', '是')->first()->toArray()['category_url'];
//    $categoryKeyword = explode(',', Gather::where('auto', '是')->first()->toArray()['category_keyword']);
//    $categorySite = [];
//
//    foreach ($categoryKeyword as $cK) {
//      array_push($categorySite, 'http://' . $siteName . $categoryUrl . '/' . $cK);
//    }


   // dd(1);


//    $id = $request->input('id');
//    $url = $request->input('url');
//
//    $gather = Gather::where('id', $id)->first();
//    $title = $gather->toArray()['doc_title'];
//    $content = $gather->toArray()['doc_content'];
//
//    $rules = array(
//      'title' => array($title, 'text'),
//      'content' => array($content, 'html'),
//    );
//
//    $html = $url;
//
//    $data = QueryList::Query($html, $rules)->data;
////打印结果
//    return response()->json(['code' => 1, 'msg' => '采集成功', 'gatheredData' => $data[0]]);


//    ignore_user_abort(true);//关掉浏览器，PHP脚本也可以继续执行.
//    set_time_limit(0);// 通过set_time_limit(0)可以让程序无限制的执行下去
//    ini_set('memory_limit', '512M'); // 设置内存限制
//    ob_end_clean();           // 清空缓存
//    ob_start();               // 开始缓冲数据
//    date_default_timezone_set('Asia/Shanghai');//设置时区
//
////
////    while(1){
////      echo str_repeat(" ",1024);  // 写满IE有默认的1k buffer
////      ob_flush();                 // 将缓存中的数据压入队列
////      flush();                    // 输出缓存队列中的数据
////      echo "now time is ".date('h:i:s');  // 打印数据，其实是先将数据存入了缓存中
////      usleep(1000000);            //延迟一秒（暂停一秒）
////    }

  }


}
