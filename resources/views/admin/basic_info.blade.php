@include('admin.header')
<div class="content-wrapper" ng-controller="basicInfo">
    <section class="content-header">
        <h1>
            {{$cms}}
            <small> {{$item}} </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
            <li><a href="#">{{$category }}</a></li>
            <li class="active"> {{$item}}</li>
        </ol>
    </section>
    <section class="content ">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">系统信息</h3>
                    </div>
                    <div class="box-body">
                        <div class="well"><h4>版本信息</h4>
                            欢迎使用L-php-cms内容管理系统，您当前的使用版本为：v1.0.0，发布时间：20170802。<br>
                            <a href="">检查更新</a>
                            <h4>项目地址</h4>
                            Github:<a href="https://github.com/lovelife10000/L-php-cms" target="_blank">https://github.com/lovelife10000/L-php-cms</a>
                        </div>
                    </div>
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">关于作者</h3>
                    </div>
                    <div class="box-body">
                        <div class="well">

                            lovelife10000，全栈开发工程师，github：<a href="https://github.com/lovelife10000"
                                                    target="_blank">https://github.com/lovelife10000</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">用户信息</h3>
                    </div>

                    <div class="box-body">
                        <div class="well">
                            <div class="row ">
                                <div class="col-md-3">
                                    <img style="width: 100%" src="{{ $userInfo['avatar'] }}" alt="">
                                </div>
                                <div class="col-md-6  ">
                                    <h1></h1>
                                    <p>手机: {{ $userInfo['phone'] }} </p>
                                    <p>邮箱: {{ $userInfo['email'] }}</p>
                                    <p>注册时间: {{ $userInfo['created_at'] }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">交流方式</h3>
                    </div>
                    <div class="box-body">
                        <div class="well">
                            QQ群512934882，作者QQ1358180015
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('admin.footer')