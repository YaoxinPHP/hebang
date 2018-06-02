<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"C:\phpStudy\PHPTutorial\WWW\he\addons\cms\view\default\list_news.html";i:1527837101;s:73:"C:\phpStudy\PHPTutorial\WWW\he\addons\cms\view\default\common\layout.html";i:1527738395;}*/ ?>
<!DOCTYPE html>
<html>

    <!-- Mirrored from www.szwgmf.com/products.aspx?cateid=36 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 May 2018 02:41:28 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <!-- /Added by HTTrack -->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo \think\Config::get("cms.title"); ?> - <?php echo \think\Config::get("cms.sitename"); ?></title>
        <meta name="keywords" content="<?php echo \think\Config::get("cms.keywords"); ?>" />
        <meta name="description" content="<?php echo \think\Config::get("cms.description"); ?>" />
        <link href="/assets/addons/cms/static/css/css.css" type="text/css" rel="stylesheet">
        <link href="/assets/addons/cms/static/css/main.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="/assets/addons/cms/static/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="/assets/addons/cms/static/js/selfjs.js"></script>
        <script src="/assets/addons/cms/static/sysaspx/common.js" type="text/javascript"></script>
    </head>

    <body>

        <div class="top">
            <div class="conter">
                <div class="menu">
                    <div class="clist"></div>
                    <ul class="navs-t" style="display: none;">
                        <p class="ded"></p>
                        <?php $__LIST__ = \addons\cms\model\Channel::getNav(isset($__CHANNEL__)?$__CHANNEL__:[], ["maxlevel"=>"1","cache"=>"0"]); ?><?php echo $__LIST__; ?>
                    </ul>
                </div>
                <div class="ml35 fl lidet">
                    <img src="/assets/addons/cms/static/images/wbl.png" />
                </div>
                <div class="logo abs">
                    <a href="/cms">
                        <img src="/assets/addons/cms/static/images/logo.png" width="62" height="62" /></a>
                </div>
                <div class="gwcs">
                    <a href="https://s.click.taobao.com/I2Qk1Uw" target="_blank">购物车</a>
                </div>

            </div>
        </div>
        
<link rel="stylesheet" href="/assets/addons/cms/static/css/video.css" />
<script src="/assets/addons/cms/static/js/jquery.superslide.2.1.1.js" type="text/javascript"></script>
<div id="go-top"></div>
<div class="prest">
    <ul class="gz-ys">
        <?php foreach($banner as $v): ?>
        <li>
            <a href="<?php echo $v['url']; ?>" style="background-image:url(<?php echo $v['image']; ?>)"></a>
        </li>
        <?php endforeach; ?>
    </ul>
    <ul class="dot"></ul>
</div>
<script>
    jQuery(".prest").slide({
        titCell: ".dot",
        mainCell: ".gz-ys",
        effect: "left",
        autoPlay: true,
        delayTime: 700,
        autoPage: true
    });
</script>
<div class="nobost">
    <div class="wrap tc">
       <?php $__LIST__ = \addons\cms\model\Channel::getNav(isset($__CHANNEL__)?$__CHANNEL__:[], ["flag"=>"$__FLAG__","where"=>"parent_id = 49"]); ?><?php echo $__LIST__; ?>
       <!--  <a id="" href="">天然粉粉</a>
        <a id="" class="cur" href="">有机食品</a>
        <a id="" href="">固体饮料</a>
        <a id="" href="">代用茶</a>
        <a id="" href="">粉粉搭档</a>
        <a id="" href="">提神含片</a> -->
    </div>
</div>
<script>
    var cateid = "3";
    $("#d_nav" + cateid).addClass("cur");
</script>

<div class="sloct wrap">

    <div class="sloct w800">
        <div class="btmls tc">
            <img src="<?php echo $data['image']; ?>" alt="" width="50" height="50" />
            <div class="mt10">
                <?php echo $data['content']; ?>
            </div>
        </div>
        <!-- <div class="mt30 tc tm-intro">
            成都中医大、四川农业大学联合研发100多次试验，细胞级深入研究，分析不<br /> 同食材的营养价值。锁住食材全部营养，评估食材适宜的加工温度、加工工艺。60多次反复
            <br /> 调配，只为中国人体质，搭配可靠的食养方。
        </div> -->
    </div>

    <div class="intro-video">

        <img src="<?php echo $data['background']; ?>" alt="" />
        <a href="javascript:;" class="video-li-a">

        </a>
        <!--video-->
        <div class="big-video">
            <div class="big-video-main">
                <video id="my-video" class="video-js" controls preload="auto" width="800" height="500" poster="images/video.jpg" data-setup="{}">
                    <source src="<?php echo trans_src($data['video']); ?>" type="video/mp4">
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a web browser that
                        <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>
            </div>
            <div class="big-video-clo">
                <!--close-->
            </div>
        </div>
        <!--video end-->

    </div>
    <div class="btmls tc mt70" style="text-align: center;">
    <div class="plaskt" style="border:none;">
        <?php echo $data['description']; ?>
    </div>
    <script type="text/javascript">
        function showIntro(thisObj,num) {
            $(thisObj).addClass("active");
            $(thisObj).siblings().removeClass("active");
            $("#introParent>div").eq(num - 1).show();
            $("#introParent>div").eq(num - 1).siblings().hide();
        }
    </script>
</div>

<script type="text/javascript" src="/assets/addons/cms/static/js/video.min.js"></script>
<script>
    jQuery(".prest").slide({
        titCell: ".dot",
        mainCell: ".gz-ys",
        effect: "left",
        autoPlay: true,
        delayTime: 700,
        autoPage: true
    });
</script>

<!--播放视频-->
<script type="text/javascript">
    $(function() {
        //video初始化
        var myPlayer = videojs('my-video');
        videojs("my-video").ready(function() {
            var myPlayer = this;
        });
        //打开
        $(".video-li-a").on("click", function() {
            $(".big-video").css("display", "block");
            myPlayer.play(); //开始播放
        })

        //关闭
        $(".big-video-clo").on("click", function() {
            $(".big-video").css("display", "none");
            myPlayer.pause(); //暂停
        })

    })
</script>
        <div class="foot tc">
            <a href="about7946.html?cateid=6">关于我们</a>|
            <a href="productscc9f.html?cateid=36">产品研发</a>|
            <a href="newsd2ce.html?cateid=33">新闻中心</a>|
            <a href="contact.html">联系我们</a>|&nbsp;<?php echo $site['mobile']; ?>
            <br /><?php echo $site['address']; ?>
            <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $site['beian']; ?></a>
        </div>

    </body>

    <!-- Mirrored from www.szwgmf.com/products.aspx?cateid=36 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 May 2018 02:41:46 GMT -->
</html>