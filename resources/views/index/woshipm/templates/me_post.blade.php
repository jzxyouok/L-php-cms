@include('index.woshipm.templates.me_layout')
    <div class="user-right">
        <div class="follow-nav">
            <span class="current">全部文章 (0)</span>
            <span class=""><a href="http://www.woshipm.com/me/posts/publish">已发布 (0)</a></span>
            <span class=""><a href="http://www.woshipm.com/me/posts/draft">草稿箱 (0)</a></span>
            <span class=""><a href="http://www.woshipm.com/me/posts/pending">待审核 (0)</a></span>
            <div class="u-floatRight cute"><a href="http://www.woshipm.com/writing">+发布文章</a></div>
        </div>
        <div class="user-main-content">
            <div class="user-post-note u-clearfix">
                <div class="post-notice">提示：如果稿件被删除，说明审核没有通过。审稿需要时间，请耐心等候。</div>
            </div>                 <div class="tag-list-empety">
                <div class="u-textAlignCenter"><span class="iconfont icon-empty"></span>
                    <p>您还没有任何草稿。</p>
                </div>
            </div>


        </div>
    </div>
</div>

@include('index.woshipm.templates.site_footer')
@include('index.woshipm.templates.footer')

