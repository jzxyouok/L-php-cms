<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Doc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class waitForVerifyController extends Controller
{
  public function view(Request $request)
  {
    return view('admin.wait_for_verify', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.doc_manage'),
      'item' => config('cms.wait_for_verify'),
      'userInfo'=>$request->session()->get('userInfo'),
    ]);
  }

  public function getWaitForVerifyDoc(Request $request)
  {

    $limit = $request->input('limit');
    $currentPage = $request->input('currentPage');
    $offset = ($currentPage - 1) * $limit;

    $docs = Doc::where(['status' => 'wait_for_verify'])->orderBy('created_at', 'desc')->offset($offset)->limit($limit)->get()->toArray();
    $docsCount = Doc::where(['status' => 'wait_for_verify'])->count();

    return response()->json(['code' => 1, 'msg' => '获取成功', 'data' => $docs, 'count' => $docsCount, 'allPage' => ceil($docsCount / $limit)]);

  }
}
