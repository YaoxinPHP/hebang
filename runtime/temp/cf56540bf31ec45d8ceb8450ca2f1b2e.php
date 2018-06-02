<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"C:\phpStudy\PHPTutorial\WWW\he\addons\cms\view\default\list_getnews.html";i:1527847557;s:73:"C:\phpStudy\PHPTutorial\WWW\he\addons\cms\view\default\common\layout.html";i:1527738395;}*/ ?>
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
<div class="news_center">
	<div class="wrap">
		<div class="news-item">
			<div class="news-list">
				<ul>
					<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $k=>$v): ?>
					<li>
						<div class="intro">
							<a href="javascript:;" ids="<?php echo $v['id']; ?>">
								<?php echo $v['title']; ?>
							</a>
						</div>
						<div class="timer">
							<a href="javascript:;"><?php echo date('Y-m-d',$v['createtime']); ?></a>
						</div>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<!--分页-->
			<div class="pagination-box">
				<?php echo $data->render(); ?>
				<!-- <ul class="pagination">
					<li class="disabled"><span><i class="icon-angle-double-left"></i></span></li>
					<li class="active"><span>1</span></li>
					<li>
						<a href="#">2</a>
					</li>
					<li>
						<a href="#">3</a>
					</li>
					<li>
						<a href="#">4</a>
					</li>
					<li><span>...</span></li>
					<li>
						<a href="#">20</a>
					</li>
					<li>
						<a href="#"><i class="icon-angle-double-right"></i></a>
					</li>
				</ul> -->
			</div>
			<!--分页-->
		</div>
	</div>
</div>

<!--新闻详情弹窗-->
<div class="news_details_layer">
	<div class="layer-con">

		<a href="javascript:;" class="close-layer">

		</a>

		<div class="scroll" id="info_layers">
			<div class="news-head">
				<h1 class="news-title">植物益生元获评:“2017年度营养健康科技创新产品”</h1>
				<div class="title-intro">
					发布时间：2018年5月29日
				</div>
			</div>
			
			
			<div class="news-body">
				<p style="text-align: center;margin: 20px; 0"><img src="images/news.jpg" alt="" /></p>
				<br />
				<p>
					&emsp;&emsp;2016年7月11日，人力资源中心学习与发展部邀请LD伟师咨询CEO刘伟师先生作为项目导师，讲解能力字典“辅导与教导”，学员们认真讨论导师提的问题，围绕“店长模式探索、创新经营模式、会员营销扩大效益、新客单数提升”等核心指标展开行动学习议题，制定个人发展计划。
				</p>
				<br />
				<br />
				<p>
					&emsp;&emsp;学无止境，不进则退。紧接着，8月31日伟师咨询公司顾问经理王微女士就在经营领导力发展微信群中开讲微课，打破空间的限制。2017年2月21日领导力项目的第四次课程开始，各大区总监、高潜区域经理陆续从全国各地赶来深圳总部参加培训。五谷磨房食品集团董事长桂常青女士提到，每次课程烧脑长达48-72小时，但精神亢奋中成长更迅速。
				</p>

				<br /><br />

				<p>
					&emsp;&emsp;学无止境，不进则退。紧接着，8月31日伟师咨询公司顾问经理王微女士就在经营领导力发展微信群中开讲微课，打破空间的限制。2017年2月21日领导力项目的第四次课程开始，各大区总监、高潜区域经理陆续从全国各地赶来深圳总部参加培训。五谷磨房食品集团董事长桂常青女士提到，每次课程烧脑长达48-72小时，但精神亢奋中成长更迅速。
				</p>
				<br /><br />
				<p>
					&emsp;&emsp;学无止境，不进则退。紧接着，8月31日伟师咨询公司顾问经理王微女士就在经营领导力发展微信群中开讲微课，打破空间的限制。2017年2月21日领导力项目的第四次课程开始，各大区总监、高潜区域经理陆续从全国各地赶来深圳总部参加培训。五谷磨房食品集团董事长桂常青女士提到，每次课程烧脑长达48-72小时，但精神亢奋中成长更迅速。
				</p>
			</div>
		</div>
	</div>
	<div class="layer-mask">

	</div>
</div>
<!--新闻详情弹窗 end-->

<!--弹窗展示-->
<script type="text/javascript">
	$(function() {
		$(".news-list .intro a").on("click", function() {
			if($(".news_details_layer").hasClass("active")) {
				$(".news_details_layer").fadeOut(500);
				$(".news_details_layer").removeClass("active");
			} else {
				$(".news_details_layer").fadeIn(500);
				$(".news_details_layer").addClass("active");
				var data = {'id':$(this).attr('ids')}
					$.ajax({
						url:'/api/index/getInfo',
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
<!--弹窗展示 end-->
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