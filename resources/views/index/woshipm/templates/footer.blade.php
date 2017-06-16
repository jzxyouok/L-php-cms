</div>
<div class="back2top"><span class="icon-top iconfont"></span></div>
<div class="loadingBar"></div>

</div>
<script src="{{ URL::asset('resources/views/index/woshipm/assets/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ URL::asset('resources/views/index/woshipm/assets/js/default.controller.js') }}"></script>
<script src="{{ URL::asset('resources/views/index/woshipm/assets/js/swiper.min.js') }}"></script>


<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {

        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        //autoplay: 5000,//可选选项，自动滑动
        paginationClickable: true,

        loop: true
    });
</script>
</body>
</html>