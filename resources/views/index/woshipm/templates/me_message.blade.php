@include('index.woshipm.templates.me_layout')
<div class="user-right">
    <div class="follow-nav">
        <span class="uc-tab-item system-nav current" data-type="system">系统消息</span>
        <span class="uc-tab-item wen-nav" data-type="wen">问答消息</span>
    </div>
    <div class="user-main-content">
        <div class="pm-notice-content">
            <div class="tag-list-empety">
                <div class="u-textAlignCenter">
                    <span class="iconfont icon-empty"></span>
                    <p>您还没有通知</p>
                </div>
            </div>  </div>
        <div class="wen-notice-content u-hide">
        </div>

    </div>
</div>
</div>

@include('index.woshipm.templates.site_footer')
@include('index.woshipm.templates.footer')

