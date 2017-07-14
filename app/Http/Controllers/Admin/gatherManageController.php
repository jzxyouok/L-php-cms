<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Doc;
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

  public function startGather(Request $request)
  {
    $rules = array(
      //采集id为one这个元素里面的纯文本内容
      'text' => array('#one', 'text'),
      //采集class为two下面的超链接的链接
      'link' => array('.two>a', 'href'),
      //采集class为two下面的第二张图片的链接
      'img' => array('.two>img:eq(1)', 'src'),
      //采集span标签中的HTML内容
      'other' => array('span', 'html')
    );

    $html = <<<STR
<div id="one">
    <div class="two">
        <a href="http://querylist.cc">QueryList官网</a>
        <img src="http://querylist.com/1.jpg" alt="这是图片">
        <img src="http://querylist.com/2.jpg" alt="这是图片2">
    </div>
    <span>其它的<b>一些</b>文本</span>
</div>        
STR;

    $data = QueryList::Query($html, $rules)->data;
//打印结果
    dd($data);
  }


}
