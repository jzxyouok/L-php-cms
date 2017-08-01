<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\Upload;
use App\Http\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class userManageController extends Controller
{


  public function view(Request $request)
  {

    $power=$this->getPower($request);

    if( json_decode($power['power'])->user_manage==='true'){
      return view('admin.user_manage', [
        'cms' => config('cms.cms'),
        'cms_name' => config('cms.cms_name'),
        'category' => config('cms.user_manage'),
        'item' => config('cms.user_manage'),
        'userInfo' => Auth::guard('adminLogin')->user()->toArray(),
      ]);
    }else if(json_decode($power['power'])->user_manage==='false'){
      return view('admin.no_power', [
        'cms' => config('cms.cms'),
        'cms_name' => config('cms.cms_name'),
        'category' => config('cms.user_manage'),
        'item' => config('cms.user_manage'),
        'userInfo' => Auth::guard('adminLogin')->user()->toArray(),
      ]);
    }


  }

  public function getUser(Request $request)
  {
    $users = DB::table('users')->get();
    return response()->json($users);
  }

  public function checkPhone(Request $request)
  {
    $input = Input::all();

    $rules = [
      'phone' => 'unique:users,phone',

    ];
    $messages = [
      'phone.unique' => '手机号码已经被注册',

    ];
    $validator = Validator::make($input, $rules, $messages);

    if ($validator->passes()) {


      return response()->json(['code' => 1, 'msg' => '可以注册']);


    } else {
      return response()->json(['code' => 0, 'msg' => $validator->errors()->first()]);
    }
  }

  public function checkEmail(Request $request)
  {
    $input = Input::all();

    $rules = [
      'email' => 'unique:users,email',

    ];
    $messages = [
      'email.unique' => '邮箱已经被注册',

    ];
    $validator = Validator::make($input, $rules, $messages);

    if ($validator->passes()) {


      return response()->json(['code' => 1, 'msg' => '可以注册']);


    } else {
      return response()->json(['code' => 0, 'msg' => $validator->errors()->first()]);
    }
  }

  public function addUserCommit(Request $request)
  {
    $input = Input::all();
    //dd($input);


    $rules = [

      'phone' => array('required', 'regex:/^0?(13[0-9]|15[012356789]|17[013678]|18[0-9]|14[57])[0-9]{8}$/', 'unique:users,phone'),
      'email' => array('required', 'regex:/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/', 'unique:users,email'),
      'nickname' => array('required'),
      'password' => array('required', 'regex:/^[_a-zA-Z]\w{5,21}$/'),
      'remark' => array('required'),
    ];
    $messages = [
      'phone.unique' => '手机号已经被注册',
      'email.unique' => '邮箱已经被注册',
      'nickname' => '昵称格式不正确',
    ];

    $validator = Validator::make($input, $rules, $messages);

    if ($validator->passes()) {

      $input['password'] = bcrypt($input['password']);
      if ($input['user_group_id'] == 1 || $input['user_group_id'] == 2 || $input['user_group_id'] == 3) {
        $input['is_admin_user'] = 1;
      } else {
        $input['is_admin_user'] = 0;
      }
      $res = User::create($input);
      if ($res) {
        return response()->json(['code' => 1, 'msg' => '注册成功']);
      }


    } else {
      return response()->json(['code' => 0, 'msg' => $validator->errors()->first()]);
    }
  }

  public function forbiddenStatus(Request $request)
  {

    $id=$request->input('id');

    $user=User::where('id', $id)->first();
    $user->status=0;
    $user->save();
  }

  public function startUsing(Request $request)
  {
    $id=$request->input('id');

    $user=User::where('id', $id)->first();
    $user->status=1;
    $user->save();
  }

  public function editUserCommit(Request $request)
  {
    $id = $request->input('id');
    $input = Input::only(['user_group_id','phone','email','nickname','remark']);


    $rules = [

      'phone' => array('required', 'regex:/^0?(13[0-9]|15[012356789]|17[013678]|18[0-9]|14[57])[0-9]{8}$/'),
      'email' => array('required', 'regex:/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/'),
      'nickname' => array('required'),
      'remark' => array('required'),
    ];
    $messages = [
      'phone.required' => '手机号必填',
      'phone.regex' => '手机号正则错误',
      'email.required' => '邮箱必填',
      'email.regex' => '邮箱正则错误',
      'nickname' => '昵称格式不正确',
    ];

    $validator = Validator::make($input, $rules, $messages);

    if ($validator->passes()) {


      if ($input['user_group_id'] == 1 || $input['user_group_id'] == 2 || $input['user_group_id'] == 3) {
        $input['is_admin_user'] = 1;
      } else {
        $input['is_admin_user'] = 0;
      }
      $res = User::where('id',$id)->update($input);
      if ($res) {
        return response()->json(['code' => 1, 'msg' => '更新成功']);
      }else{
        return response()->json(['code' => 1, 'msg' => '更新失败']);
      }


    } else {
      return response()->json(['code' => 0, 'msg' => $validator->errors()->first()]);
    }
  }

  public function removeUserCommit(Request $request)
  {
    $id = $request->input('id');


    $res=User::where('id',$id)->delete();
if($res){
  return response()->json(['code' => 1, 'msg' => '删除成功']);
}else{
  return response()->json(['code' => 0, 'msg' => '删除失败']);
}


  }

  public function uploadAvatar(Request $request)
  {
    //$file=Input::file('Filedata');
    $file = $request->file('Filedata');
    if ($file->isValid()) {


      $realPath = $file->getRealPath();
      $extension = $file->getClientOriginalExtension();
      $fileNameOriginal = $file->getClientOriginalName();

      $fileName = date('YmdHis') . mt_rand(100, 999) . '.' . $extension;
      $extensionReal = $file->guessExtension();
      $size = $file->getClientSize();

      if ($extension !== 'jpg' || $extensionReal !== 'jpeg') {
        if ($extension !== $extensionReal) {

          return response()->json(['code' => 0, 'msg' => '文件类型错误!!!']);
        }
      }
      $dir = 'image';
      $path = $file->move(base_path() . '/public/upload/' . $dir . '/' . date('Ymd'), $fileName);

      if ($path) {
        $uploadTime = date('Y-m-d H:i:s', $path->getMTime());
        $fileNameNow = $path->getFilename();
        $fileType = $path->guessExtension();
        $fileSize = $path->getSize();
        $uploadPath = $path->getPath();

        $upload = new Upload;

        $upload->upload_user_id = Auth::guard('adminLogin')->user()->toArray()['id'];
        $upload->filename_original = $fileNameOriginal;
        $upload->filename_now = $fileNameNow;
        $upload->url = $uploadPath;
        $upload->type_real = $fileType;
        $upload->size = $fileSize;
        $upload->upload_time = $uploadTime;
        $res = $upload->save();
      }


      return response()->json(['code' => 1, 'msg' => '上传成功', 'url' => '/public/upload/' . $dir . '/' . date('Ymd') . '/' . $fileName, 'fileName' => $fileName, 'size' => round($size / 1024, 2)]);


    }


    //判断请求中是否包含name=file的上传文件
    //return response()->json(['code'=>$request->hasFile('file')]);
//    dd($request->hasFile('file'));
//    if (!$request->hasFile('file')) {
//      dd('上传文件为空！');
//    }
  }

  public function uploadAvatarCommit(Request $request)
  {
    $id=$request->input('id');
    $avatar=$request->input('avatar');
    $res=User::where('id',$id)->update(['avatar'=>$avatar]);
    if($res){
      return response()->json(['code'=>1,'msg'=>'上传成功']);
    }

  }

}
