/**
 * Created by v_lljunli on 2017/5/17.
 */
app.filter('trustHtml', function ($sce) {
    return function (input) {
        return $sce.trustAsHtml(input);
    }
});

app.filter('sizeFormat', function () { //可以注入依赖
    return function (text) {
        return Math.round(text / 1024) + ' KB';
    }
});
app.filter('urlCut', function () { //可以注入依赖
    return function (text) {

        return (text.match(/\/public\/upload\/(image|zip|rar|pdf)\/\d{8}/))[0];
    }
});
app.filter('urlCutNoNumber', function () { //可以注入依赖
    return function (text) {

        return (text.match(/\/public\/upload\/(zip|rar|pdf)/))[0];

    }
});
//$sce是angularJS自带的安全处理模块，$sce.trustAsHtml(input)方法便是将数据内容以html的形式进行解析并返 回  。