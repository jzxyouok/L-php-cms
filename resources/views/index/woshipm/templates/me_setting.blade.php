@include('index.woshipm.templates.me_layout')
<div class="user-right">
    <div class="follow-nav">
        <span class="current">资料设置</span>
        <span class=""><a href="http://www.woshipm.com/me/setting/password">密码设置</a></span>
        <span class=""><a href="http://www.woshipm.com/me/setting/avatar">头像设置</a></span>
    </div>
    <form class="password-form" id="user-info-update">
        <p><label>用户名</label><input type="text" disabled="true" value="18520877639" name="user_name"></p>
        <p><label>手机号</label><input type="text" name="user_phone" disabled="true" value="18520877639"></p>
        <p><label>昵称</label><input type="text" name="nickname" value="不知道取什么昵称"></p>
        <p><label>公司</label><input type="text" name="user_company" value=""></p>
        <p><label>个人认证</label><textarea name="description" placeholder="例如：起点学院移动端高级产品经理"></textarea></p>
        <p><label></label><input type="submit" value="更新资料"></p>
        <p class="user-info-message"></p>
    </form>
</div>
</div>

@include('index.woshipm.templates.site_footer')
@include('index.woshipm.templates.footer')

