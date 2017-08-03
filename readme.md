

![image](https://github.com/lovelife10000/L-php-cms/raw/master/public/upload/image/preview.jpg)
     
# L-php-cms
## L-php-cms是基于php+laravel+angular编写的一套内容管理系统，Laravel是一套简洁、优雅的PHP Web开发框架(PHP Web Framework)。它可以让你从面条一样杂乱的代码中解脱出来；它可以帮你构建一个完美的网络APP，而且每行代码都可以简洁、富于表达力。如果你是前端工程师，如果你还不会一门后端语言，那么php一定是你最好的选择，那么laravel一定也是你最好的选择，那么L-php-cms一定也是你最应该学习的一款cms。

### 代码演示1.[基于L-php-cms 定制的CMS系统](http://www.viralnova.wang) 管理地址：http://www.viralnova.wang/admin  （账号:test,密码：L-php-cms）

## 操作文档链接：
## http://www.viralnova.wang
## 开发文档链接：
## http://www.viralnova.wang


### -------------------------------------------------------------------------------

# L-php-cms开发指南
- 一、 L-php-cms安装
- 1.1 运行环境安装（LNMP或者LAMP）
- 1.2 安装Laravel
- 1.3 安装composer
- 1.4 生成迁移
- 1.5 安装L-php-cms
- 1.6 访问地址
- 二、 L-php-cms开发
- 2.1 目录说明
- 2.2 关于路由	
- 2.3 关于模板	
- 2.4 中间件	
- 2.5 用到的插件	
- 2.6 关于编码	
- 三、总结
- 四、FAQ	

## 一、L-php-cms安装
### 1.1 运行环境安装
- web服务器安装，觉得配置服务器太麻烦的可以采用一件安装包，有LAMP,LNMP，推荐使用LNMP，不过我自己本地用的是wampserver。具体安装过程就不赘述了，相信大家都会的。

### 1.2 安装Laravel
- Laravel是一套简洁、优雅的PHP Web开发框架(PHP Web Framework)。它可以让你从面条一样杂乱的代码中解脱出来；它可以帮你构建一个完美的网络APP，而且每行代码都可以简洁、富于表达力。
关于laravel的使用，我推荐三个网站给大家
## laravel中国：
## http://d.laravel-china.org/
## laravel学院：
## http://laravelacademy.org
## laravel官网：
## https://laravel.com/
laravel社区比较活跃，中文资料很全面，不过文档里的东西还是有些简单，有些地方还是得自己去看源码，比如用户认证的系统服务，我就花了很长时间去看源码怎么写的，最后还是搞定了。
安装过程这里也就不赘述了，按照上面的网址去找相关的内容，你一定很快能安装好的。

### 1.3 安装composer
- 前端工程师可能不怎么知道composer是什么，但是一定知道npm吧，如果你不知道，那么说明你还只是刚入前端的菜鸟啊，哈哈。废话不多时，composer相当于nodejs的npm包管理工具。只不过一个是nodejs中用的，一个是php中用的。功能都是一样的。
这里给出composer的中文官网，里面有很想尽的资料，相信你也能很快安装好composer的。
##composer中文网
##http://docs.phpcomposer.com

### 1.4 生成迁移
- laravel提供了一个快捷创建表和字段的功能，可以快速创建我们想要的表。
```sh
php artisan migrate
```

### 1.5 安装L-php-cms
- 接下来就是安装L-php-cms啦。到github项目里直接下载L-php-cms。下载到你配置好的web服务器的根目录，如果是wampserver的话，就是在www目录下。
然后解压，把L-php-cms-master目录里的内容全部拷贝到www目录里。
- 接下来就是安装一些包软件了。我已经把必要的都放在composer.json里了。
```js
   "require": {
        "php": ">=5.5.9",
        "laravel/framework": "5.2.*",
        "gregwar/captcha": "1.*",
        "predis/predis": "~1.0",
        "jaeger/querylist": "^3.2",
        "jaeger/querylist-ext-request": "^1.0",
        "jaeger/querylist-ext-multi": "^1.0",
        "jaeger/querylist-ext-login": "^1.0",
        "guzzlehttp/guzzle": "~5.3|~6.0",
        "aws/aws-sdk-php": "~3.0",
        "arcanedev/log-viewer": "^4.3"
    },
```
只需要在www目录下运行
```sh
composer install
```
然后就会自动下载包软件了。下载的包软件都自动存放在vender文件夹里，laravel框架核心源码也存放在vender文件夹里。

### 1.6 访问地址
- L-php-cms的后台地址是http://localhost/admin，
- 这里的localhost如果你是本地就是这个，如果你部署在服务器上，就是你的ip或者你绑定的域名。后台模版我采用的是国际上比较流行的adminlte。

- 访问前台页面的话就是，http://localhost
- L-php-cms系统自带了一款模版，是采用的我是产品经理的模版，采用了它的html和css。前端我用的是angular和jquery。
相信到这里你应该就可以访问到啦，哈哈。

## 一、L-php-cms开发
### 1.2 目录说明
```js
app //这里主要是我们编写后端程序的目录，包含控制器，命令，模型等内容。
app/Http/Controllers //存放控制器目录，下面已经分好模块，分别是后台，前台，认证，和安装
app/Http/Model //这里存放的是数据库模型
bootstrap //是一些系统连接文件
config //是配置目录，配置都集中在这个目录
database //主要是存放迁移的文件
public //存放的是一些静态资源文件
public/plugins //一些系统用的的插件
public/upload　//上传目录
public/js //下面有四个目录，分别是common、controllers、directives、filters、services
resources //主要存放了一些视图文件
resources/views //下面是视图文件，也相应的分成了模块
storage //系统的存储目录，一些缓存啥的
test
vender //包软件目录
.env //你的自定义配置文件
...
```

