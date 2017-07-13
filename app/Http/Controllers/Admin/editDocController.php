<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Doc;
use App\Http\Model\Upload;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;

class editDocController extends Controller
{
  public function view(Request $request, $docId)
  {
    return view('admin.edit_doc', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.doc_manage'),
      'item' => config('cms.edit_doc'),
      'userInfo' => $request->session()->get('userInfo'),
      'docId' => $docId,
    ]);
  }

  public function getDocById(Request $request)
  {
    $id = $request->input('id');
    $data = Doc::where('id', $id)->first()->toArray();

    return response()->json(['code' => 1, 'data' => $data]);

  }

  public function updateDoc(Request $request)
  {
    $id = $request->input('id');
    $type = $request->input('type');
    $title = $request->input('title');
    $previewImg = $request->input('previewImg');
    $tag = $request->input('tag');
    $category = $request->input('category');
    $abstract = $request->input('abstract');
    $keyword = $request->input('keyword');
    $view = $request->input('view');
    $author = $request->input('author');
    $from = $request->input('from');
    $content = $request->input('content');


    $res = Doc::where('id', $id)->update([
      'type' => $type,
      'title' => $title,
      'preview_img' => $previewImg,
      'tag' => $tag,
      'category' => $category,
      'abstract' => $abstract,
      'keyword' => $keyword,
      'view' => $view,
      'author' => $author,
      'from' => $from,
      'content' => $content,
      'url' => date('Y-m-d H:i:s', time()),
      'publisher_id' => $request->session()->get('userInfo')->id,
    ]);


    if ($res) {
      return response()->json(['code' => 1, 'msg' => '更新成功']);
    }
  }


}
