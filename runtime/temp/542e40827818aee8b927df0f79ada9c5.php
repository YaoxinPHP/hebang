<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"C:\phpStudy\PHPTutorial\WWW\he\addons\cms\view\default\list_develop.html";i:1527845785;s:73:"C:\phpStudy\PHPTutorial\WWW\he\addons\cms\view\default\common\layout.html";i:1527738395;}*/ ?>
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
		<div class="join history">
			<div class="sloct wrap">
				<div class="picScroll-left">
					<div class="hd">
						<a class="next"></a>
						<a class="prev"></a>
					</div>
					<div class="bd">
						<ul class="picList">
							<?php if(is_array($data['years']) || $data['years'] instanceof \think\Collection || $data['years'] instanceof \think\Paginator): if( count($data['years'])==0 ) : echo "" ;else: foreach($data['years'] as $k=>$v): ?>
							<li <?php if($k == 0): ?>class="active"<?php else: ?>class="pic"<?php endif; ?>>
								<div class="pic">
									<a href="javascript:;" target="_blank" onclick="showIntro(this,<?php echo $k+1; ?>)"><?php echo $v['years']; ?></a>
								</div>
								<span class="hr"></span>
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
						vis: 5
					});
				</script>

				<div class="tab-con" id="introParent">

					<!--item1-->
					<?php if(is_array($data['content']) || $data['content'] instanceof \think\Collection || $data['content'] instanceof \think\Paginator): if( count($data['content'])==0 ) : echo "" ;else: foreach($data['content'] as $k=>$v): ?>
					<div class="history-content" <?php if($k == 0): ?>style="display: block;"<?php endif; ?>>
						<div class="history-title-timer">
							<div class="timer">
								<span><?php echo date('Y',$v[0][publishtime]); ?>年</span>
								<i></i>
							</div>
						</div>

						<!--cell-->
						<?php if(is_array($v) || $v instanceof \think\Collection || $v instanceof \think\Paginator): if( count($v)==0 ) : echo "" ;else: foreach($v as $kk=>$vv): ?>
						<div class="history-cell">
							<div class="timer">
								<?php echo date('m',$vv[publishtime]); ?>月
							</div>
							<a href="javascript:;" class="clerfix" onclick="" ids='<?php echo $vv[id]; ?>'>
								<div class="img-con">
									<img src="<?php echo $vv[image]; ?>" />
								</div>
								<div class="intro-con">
									<?php echo $vv[resume]; ?>
									<!-- <div class="intro-t">
										上海股权托管交易中心创客正式开版
									</div>
									<div class="intro-b ellipsis">
										总之，有个国家承认的本科学历在当今社会无疑很重要，平时看似没有用，当需要学历时，再去着手，不仅需要花更多的时间和金钱，重要的是人生的机遇也丧失许多了，所以建议各位在职人员…
									</div> -->
								</div>
							</a>
						</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>

					</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					<!--item1 end-->
				</div>

				<!--时间轴切换-->
				<script type="text/javascript">
					function showIntro(thisObjParent, num) {
						$(thisObjParent).parent().parent().addClass("active");
						$(thisObjParent).parent().parent().siblings().removeClass("active");
						$("#introParent>.history-content").eq(num - 1).show();
						$("#introParent>.history-content").eq(num - 1).siblings().hide();
					}
				</script>
				<!--时间轴切换 end-->

			</div>
		</div>

		<!--发展历程详情弹窗-->
		<div class="news_details_layer">
			<div class="layer-con">

				<a href="javascript:;" class="close-layer">

				</a>

				<div class="scroll" id="info_layers">
					<div class="news-head">
						<h1 class="news-title"></h1>
						<div class="title-intro">
						</div>
					</div>

					<div class="news-body">
					</div>
				</div>
			</div>

			<div class="layer-mask">

			</div>
		</div>
		<!--发展历程详情弹窗 end-->

		<!--弹窗展示-->
		<script type="text/javascript">
			$(function() {
				$(".history-content .history-cell a.clerfix").on("click", function() {
					if($(".news_details_layer").hasClass("active")) {
						$(".news_details_layer").fadeOut(500);
						$(".news_details_layer").removeClass("active");
					} else {
						$(".news_details_layer").fadeIn(500);
						$(".news_details_layer").addClass("active");
						var data = {'id':$(this).attr('ids')}
						$.ajax({
							url:'/api/index/getgetDevelopInfo',
							data:data,
							success:function(obj){
								if(obj.data){
									$('#info_layers .news-title').text(obj.data['title']);
									$('#info_layers .title-intro').text('发布时间：'+obj.data['datetime']);
									$('#info_layers .news-body').html(obj.data['content']);
								}
							}
						})
					}
				})

				$('.news_details_layer .layer-mask').on('click', function() {
					$(".news_details_layer").fadeOut(500);
					$(".news_details_layer").removeClass("active");
				})

				$('.news_details_layer .close-layer').on('click', function() {
					$(".news_details_layer").fadeOut(500);
					$(".news_details_layer").removeClass("active");
				})

			})
		</script>

	</body>

	<!-- Mirrored from www.szwgmf.com/contact.aspx by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 May 2018 02:46:41 GMT -->

</html>
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