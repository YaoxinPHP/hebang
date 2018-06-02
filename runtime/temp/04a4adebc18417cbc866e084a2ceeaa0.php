<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"C:\phpStudy\PHPTutorial\WWW\he\addons\cms\view\default\list_honor.html";i:1527846337;s:73:"C:\phpStudy\PHPTutorial\WWW\he\addons\cms\view\default\common\layout.html";i:1527738395;}*/ ?>
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
<div class="aptitude">
	<div class="wrap">
		<div class="aptitude-item">
			<div class="picScroll-left">
				<div class="hd">
					<a class="next"></a>
					<a class="prev"></a>
				</div>
				<div class="bd">
					<ul class="picList">
						<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $k=>$v): ?>
						<li <?php if($k == 0): ?>class="active"<?php endif; ?>>
							<div class="pic">
								<a href="javascript:;" target="_blank" onclick="showIntro(this,<?php echo $k+1; ?>)">
									<img src="<?php echo $v['image']; ?>" alt="" />
								</a>
							</div>
							<div class="mt5">
								<a href="javascript:;" onclick="showIntro(this,<?php echo $k+1; ?>)"><?php echo $v[title]; ?></a>
							</div>
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>

			<script type="text/javascript">
				jQuery(".picScroll-left").slide({
					titCell: ".hd ul",
					mainCell: ".bd ul",
					autoPage: true,
					effect: "left",
					vis: 4
				});
			</script>
			<div class="tab-con-aptitude" id="introParent">
			<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $k=>$v): ?>
				<div class="aptitude-content" <?php if($k == 0): ?>style="display: block;"<?php endif; ?>>
					<div class="show-img">
						<img src="images/slide.jpg" alt="" />
					</div>
					<h1 style="text-align: center;font-size: 24px;"><?php echo $v[title]; ?></h1>
					<?php echo $v[content]; ?>
				</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<!--切换-->
			<script type="text/javascript">
				function showIntro(thisObjParent, num) {
					$(thisObjParent).parent().parent().addClass("active");
					$(thisObjParent).parent().parent().siblings().removeClass("active");
					$("#introParent>.aptitude-content").eq(num - 1).show();
					$("#introParent>.aptitude-content").eq(num - 1).siblings().hide();
				}
			</script>
			<!--切换 end-->
		</div>

	</div>
</div>
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