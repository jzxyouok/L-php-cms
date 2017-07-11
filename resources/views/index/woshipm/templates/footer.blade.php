</div>
<div class="back2top"><span class="icon-top iconfont"></span></div>
<div class="loadingBar"></div>

</div>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="{{ URL::asset('resources/views/index/woshipm/assets/js/default.service.js') }}"></script>
<script src="{{ URL::asset('resources/views/index/woshipm/assets/js/default.controller.js') }}"></script>
<script src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.min.js"></script>


<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {

        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        //autoplay: 5000,//可选选项，自动滑动
        paginationClickable: true,


        longSwipesRatio: 0.3,
        touchRatio:1,
        loop: true,
        observer:true,//修改swiper自己或子元素时，自动初始化swiper
        observeParents:true,//修改swiper的父元素时，自动初始化swiper

    });
</script>
</body>
</html>