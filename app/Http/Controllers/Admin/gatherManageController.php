<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Doc;
use App\Http\Model\Gather;
use App\Http\Model\Upload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use QL\QueryList;


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

  public function autoGather(Request $request)
  {
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


    ignore_user_abort(true);//关掉浏览器，PHP脚本也可以继续执行.
    set_time_limit(0);// 通过set_time_limit(0)可以让程序无限制的执行下去
    ini_set('memory_limit', '512M'); // 设置内存限制
    ob_end_clean();           // 清空缓存
    ob_start();               // 开始缓冲数据
    date_default_timezone_set('Asia/Shanghai');//设置时区

//
//    while(1){
//      echo str_repeat(" ",1024);  // 写满IE有默认的1k buffer
//      ob_flush();                 // 将缓存中的数据压入队列
//      flush();                    // 输出缓存队列中的数据
//      echo "now time is ".date('h:i:s');  // 打印数据，其实是先将数据存入了缓存中
//      usleep(1000000);            //延迟一秒（暂停一秒）
//    }

  }


}
