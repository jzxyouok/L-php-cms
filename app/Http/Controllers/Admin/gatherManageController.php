<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Doc;
use App\Http\Model\Gather;
use App\Http\Model\Upload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
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

  public function autoGather(Request $request)
  {

    //获取所要采集的分类页的网址
    $siteName = Gather::where('auto', '是')->first()->toArray()['site_name'];
    $categoryUrl = Gather::where('auto', '是')->first()->toArray()['category_url'];
    $categoryKeyword = explode(',', Gather::where('auto', '是')->first()->toArray()['category_keyword']);
    $categorySite = [];

    foreach ($categoryKeyword as $cK) {
      array_push($categorySite, 'http://' . $siteName . $categoryUrl . '/' . $cK);
    }

    foreach ($categorySite as $cS) {
      $rules = array(
        'title' => array('.stream-list-item .stream-list-content .stream-list-title a', 'text'),
        'content_url' => array('.stream-list-item .stream-list-content .stream-list-title a', 'href'),
        'time' => array('.stream-list-item .stream-list-content .stream-list-meta time', 'text'),
      );

      $html = $cS;

      $data = QueryList::Query($html, $rules)->data;

      //  dd(date("Y/m/d"));
      foreach ($data as $k => $v) {
        if ($v['time'] !== date("Y/m/d")) {
          unset($data[$k]);
        }
      }
      $dataOnlyTitle = [];

      foreach ($data as $k => $v) {
        array_push($dataOnlyTitle, array('title' => $v['title']));

      }

      //  dd($dataOnlyTitle);
      //  dd($data);
      foreach ($dataOnlyTitle as $k => $v) {
        $validator = Validator::make($v, ['title' => 'required|exists:docs,title'], ['title.exists' => '文档已经存在', 'required' => '标题不能为空']);

        if ($validator->passes()) {
          unset($dataOnlyTitle[$k]);
        }

      }
      // dd($dataOnlyTitle);
      $finalData = [];
      foreach ($data as $k => $v) {
        if ($this->deep_in_array($v['title'], $dataOnlyTitle)) {
          $t = QueryList::Query($v['content_url'], array(
            'title' => array('.post-title', 'text'),
            'content' => array('.entry-content', 'html'),
          ))->data;
          //  dd($t);
          $t[0]['from'] = $v['content_url'];
          $t[0]['status'] = 'wait_for_verify';
          array_push($finalData, $t[0]);
        }

      }

      // dd($finalData);


      foreach ($finalData as $fD) {
        // dd($fD);
        Doc::create($fD);
      }
//      dd($finalData);


    }
    dd(1);


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
