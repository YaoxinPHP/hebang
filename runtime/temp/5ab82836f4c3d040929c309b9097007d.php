<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"C:\phpStudy\PHPTutorial\WWW\he\addons\cms\view\default\a.html";i:1527664497;s:73:"C:\phpStudy\PHPTutorial\WWW\he\addons\cms\view\default\common\layout.html";i:1527664949;}*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=""> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
        <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta name="renderer" content="webkit">
        <title><?php echo \think\Config::get("cms.title"); ?> - <?php echo \think\Config::get("cms.sitename"); ?></title>
        <meta name="keywords" content="<?php echo \think\Config::get("cms.keywords"); ?>" />
        <meta name="description" content="<?php echo \think\Config::get("cms.description"); ?>" />

        <link rel="stylesheet" media="screen" href="/assets/addons/cms/css/common.css?v=<?php echo \think\Config::get("site.version"); ?>" />
        <link rel="stylesheet" media="screen" href="/assets/addons/cms/css/font-awesome.min.css?v=<?php echo \think\Config::get("site.version"); ?>" />

        <link rel="stylesheet" media="screen" href="/assets/addons/cms/css/jquery.colorbox.css?v=<?php echo \think\Config::get("site.version"); ?>" />
        <link rel="stylesheet" href="//at.alicdn.com/t/font_1461494259_6884313.css">

        <!--[if lt IE 9]>
          <script src="/assets/addons/cms/libs/html5shiv.js?v=<?php echo \think\Config::get("site.version"); ?>"></script>
          <script src="/assets/addons/cms/libs/respond.min.js?v=<?php echo \think\Config::get("site.version"); ?>"></script>
        <![endif]-->

        <script type="text/javascript" src="/assets/libs/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/assets/addons/cms/js/bootstrap-typeahead.min.js"></script>
        <script type="text/javascript" src="/assets/addons/cms/js/common.js"></script>
    </head>
    <body class="group-page"  >

        <header class="header">
            <!-- S 导航 -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo \think\Config::get("cms.indexurl"); ?>"><img src="/assets/addons/cms/img/logo.png" width="180" alt=""></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <!--以下是两种实现导航菜单的方法-->

                            <!--如果你需要自定义NAV,可使用channellist标签来完成,这里只设置了2级-->

                            <!--实现无限级下拉菜单,maxlevel来控制最大层级-->
                            <?php $__LIST__ = \addons\cms\model\Channel::getNav(isset($__CHANNEL__)?$__CHANNEL__:[], ["maxlevel"=>"3","cache"=>"0"]); ?><?php echo $__LIST__; ?>
                        </ul>
                        <ul class="nav navbar-right hidden">
                            <ul class="nav navbar-nav">
                                <li><a href="javascript:;" class="addbookbark"><i class="fa fa-star"></i> 加入收藏</a></li>
                                <li><a href="javascript:;" class=""><i class="fa fa-phone"></i> 联系我们</a></li>
                            </ul>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <form class="form-inline navbar-form" action="<?php echo addon_url('cms/search/index'); ?>" method="get">
                                    <div class="form-search hidden-sm">
                                        <input class="form-control typeahead" name="search" data-typeahead-url="<?php echo addon_url('cms/search/typeahead'); ?>" type="text" id="searchinput" placeholder="搜索">
                                    </div>
                                    <div class="form-search visible-sm">
                                        <a href="javascript:;" class="btn btn-default" id="searchbtn"><i class="fa fa-search"></i></a>
                                    </div>
                                </form>
                            </li>
                            <li class="dropdown">
                                <?php if($user): ?>
                                <a href="<?php echo url('index/user/index'); ?>" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 10px;height: 50px;">
                                    <span class="avatar-img"><img src="<?php echo $user['avatar']; ?>" style="width:30px;height:30px;border-radius:50%;" alt=""></span>
                                </a>
                                <?php else: ?>
                                <a href="<?php echo url('index/user/index'); ?>" class="dropdown-toggle" data-toggle="dropdown">会员<span class="hidden-sm">中心</span> <b class="caret"></b></a>
                                <?php endif; ?>
                                <ul class="dropdown-menu">
                                    <?php if($user): ?>
                                    <li><a href="<?php echo url('index/user/index'); ?>"><i class="fa fa-user fa-fw"></i>会员中心</a></li>
                                    <li><a href="<?php echo url('index/user/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i>退出</a></li>
                                    <?php else: ?>
                                    <li><a href="<?php echo url('index/user/login'); ?>"><i class="fa fa-sign-in fa-fw"></i>登录</a></li>
                                    <li><a href="<?php echo url('index/user/register'); ?>"><i class="fa fa-user-o fa-fw"></i>注册</a></li>
                                    <?php endif; ?>

                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
            <!-- E 导航 -->

        </header>

        <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>sad</h1>
</body>
</html>

        <footer>
            <div class="container-fluid" id="footer">
                <div class="container">
                    <div class="row footer-inner">
                        
                    </div>
                </div>
            </div>
        </footer>

        <div id="floatbtn">
            <!-- S 浮动按钮 -->
            <!--
                <a id="fb-tipoff" class="hover" href="javascript:;" target="_blank">
                <i class="iconfont icon-pencil"></i>
            </a>-->
            <?php if($config['qrcode']): ?>
            <a id="fb-qrcode" href="javascript:;">
                <i class="iconfont icon-qrcode"></i>
                <div id="fb-qrcode-wrapper">
                    <div class="qrcode"><img src="<?php echo $config['qrcode']; ?>"></div>
                    <p>微信公众账号</p>
                    <p>微信扫一扫加关注</p>
                </div>
            </a>
            <?php endif; if(isset($__ARCHIVES__)): ?>
            <a id="feedback" class="hover" href="#comments">
                <i class="iconfont icon-feedback"></i>
            </a>
            <?php endif; ?>
            <a id="back-to-top" class="hover" href="javascript:;">
                <i class="iconfont icon-backtotop"></i>
            </a>
            <!-- E 浮动按钮 -->
        </div>

    </body>
</html>