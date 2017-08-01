@include('admin.header')
<div class="content-wrapper" id="" ng-controller="" ng-init="">

    <section class="content-header">
        <h1>
            {{$cms}}
            <small>{{$item}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
            <li><a href="#">{{$category }}</a></li>
            <li class="active">{{$item}}</li>
        </ol>
    </section>


    <section class="content">
        <div class="callout callout-danger">
            <h4>抱歉!</h4>
            您没有权限操作这部分内容

        </div>
    </section>

</div>

@include('admin.footer')