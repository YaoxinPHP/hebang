<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"C:\phpStudy\PHPTutorial\WWW\he\addons\cms\view\default\show_news.html";i:1525746847;s:73:"C:\phpStudy\PHPTutorial\WWW\he\addons\cms\view\default\common\layout.html";i:1527738395;s:74:"C:\phpStudy\PHPTutorial\WWW\he\addons\cms\view\default\common\comment.html";i:1525746847;s:74:"C:\phpStudy\PHPTutorial\WWW\he\addons\cms\view\default\common\sidebar.html";i:1525746847;}*/ ?>
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
        

<div class="container"  id="content-container"> 

    <div class="article-list-body row">

        <div class="col-md-8 article-detail-main">
            <section class="article-section article-content">
                <ol class="breadcrumb">
                    <!-- S 面包屑导航 -->
                    <?php $__LIST__ = \addons\cms\model\Channel::getBreadcrumb(isset($__CHANNEL__)?$__CHANNEL__:[], isset($__ARCHIVES__)?$__ARCHIVES__:[], isset($__TAGS__)?$__TAGS__:[], isset($__PAGE__)?$__PAGE__:[]); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <!-- E 面包屑导航 -->
                </ol>        
                <div class="article-metas">
                    <!-- S 标题区域 -->
                    <div class="pull-left">
                        <div class="date">
                            <div class="day"><?php echo date('d',$__ARCHIVES__['createtime']); ?></div>
                            <div class="month"><?php echo date('m',$__ARCHIVES__['createtime']); ?><?php echo __('Month'); ?></div>
                        </div>
                    </div>
                    <div class="metas-body">
                        <h2 class="title">
                            <?php echo $__ARCHIVES__['title']; ?>
                        </h2>
                        <div class="sns">
                            <span class="views-num">
                                <i class="fa fa-eye"></i><?php echo $__ARCHIVES__['views']; ?>
                            </span>
                            <span class="comment-num">
                                <i class="fa fa-comments"></i><?php echo $__ARCHIVES__['comments']; ?>
                            </span>
                            <span class="like-num">
                                <i class="fa fa-thumbs-o-up"></i><span class="js-like-num"><?php echo $__ARCHIVES__['likes']; ?></span>
                            </span>
                        </div>
                    </div>
                    <!-- E 标题区域 -->
                </div>        
                <div class="article-text">
                    <!-- S 正文 -->
                    <p>
                        <?php echo $__ARCHIVES__['content']; ?>
                    </p>
                    <!-- E 正文 -->
                </div>

                <div class="product-like-wrapper">
                    <!-- S 赞踩 -->
                    <a class="product-like" data-action="vote" data-type="like" data-id="<?php echo $__ARCHIVES__['id']; ?>" href="javascript:;" title="赞"><i class="fa fa-thumbs-up"></i></a>
                    <div class="like-bar-wrapper" data-likes="<?php echo $__ARCHIVES__['likes']; ?>" data-dislikes="<?php echo $__ARCHIVES__['dislikes']; ?>">
                        <div class="bar"><span style="width: <?php echo $__ARCHIVES__['likeratio']; ?>%;"></span></div>
                        <div class="num"><i><?php echo $__ARCHIVES__['likes']; ?></i> : <span><?php echo $__ARCHIVES__['dislikes']; ?></span></div>
                    </div>
                    <a class="product-dislike" data-action="vote" data-type="dislike" data-id="<?php echo $__ARCHIVES__['id']; ?>" href="javascript:;" title="踩"><i class="fa fa-thumbs-down"></i></a>
                    <!-- E 赞踩 -->
                </div>

                <div class="entry-meta">
                    <ul>
                        <!-- S 归档 -->
                        <li><?php echo __('Article category'); ?>：<a href="<?php echo $__CHANNEL__['url']; ?>"><?php echo $__CHANNEL__['name']; ?></a></li>
                        <li><?php echo __('Article tags'); ?>：<?php if(is_array($__ARCHIVES__['tagslist']) || $__ARCHIVES__['tagslist'] instanceof \think\Collection || $__ARCHIVES__['tagslist'] instanceof \think\Paginator): $i = 0; $__LIST__ = $__ARCHIVES__['tagslist'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><a href="<?php echo $tag['url']; ?>" rel="tag"><?php echo $tag['name']; ?></a><?php if(isset($__LIST__[$i])): ?>,<?php endif; endforeach; endif; else: echo "" ;endif; ?></li>
                        <li><?php echo __('Article views'); ?>：<span id="post_view_count"><?php echo $__ARCHIVES__['views']; ?></span> 次浏览</li>
                        <li><?php echo __('Post date'); ?>：<?php echo datetime($__ARCHIVES__['createtime']); ?></li>
                        <li><?php echo __('Article url'); ?>：<a href="<?php echo $__ARCHIVES__['fullurl']; ?>"><?php echo $__ARCHIVES__['fullurl']; ?></a></li>
                        <!-- S 归档 -->
                    </ul>
                    <ul class="entry-relate-links">
                        <!-- S 上一篇下一篇 -->
                        <?php $prev = \addons\cms\model\Archives::getPrevNext("prev", $__ARCHIVES__['id'], $__CHANNEL__['id']);if($prev): ?>
                        <li>
                            <span><?php echo __('Prev'); ?> &gt;：</span>
                            <a href="<?php echo $prev['url']; ?>"><?php echo $prev['title']; ?></a>
                        </li>
                        <?php endif;$next = \addons\cms\model\Archives::getPrevNext("next", $__ARCHIVES__['id'], $__CHANNEL__['id']);if($next): ?>
                        <li>
                            <span><?php echo __('Next'); ?> &gt;：</span>
                            <a href="<?php echo $next['url']; ?>"><?php echo $next['title']; ?></a>
                        </li>
                        <?php endif;?>
                        <!-- E 上一篇下一篇 -->
                    </ul>
                </div>

                <div class="product-action-btn">
                    <div class="pull-left">
                        <a href="javascript:void(0);" name="anchor" id="anchor"></a>
                        <!-- S 收藏 -->
                        <a class="product-favorite addbookbark" href="javascript:;">
                            <i class="fa fa-heart"></i> <?php echo __('Favourite'); ?>
                        </a>
                        <!-- E 收藏 -->
                        <!-- S 分享 -->
                        <span class="bdsharebuttonbox share-box bdshare-button-style0-16">
                            <a class="bds_more share-box-a" data-cmd="more">
                                <i class="fa fa-share"></i> <?php echo __('Share'); ?>
                            </a>
                        </span>
                        <!-- E 分享 -->
                    </div>
                    <div class="pull-right">
                        <!-- S 举报 -->
                        <div class="report-wrapper">
                            <a href="javascript:;"><?php echo __('Report'); ?></a>
                            <span>|</span>
                            <a href="javascript:;"><?php echo __('Error report'); ?></a>
                        </div>
                        <!-- E 举报 -->
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="related-article">
                    <div class="row">
                        <!-- S 相关文章 -->
                        <?php $__LIST__ = \addons\cms\model\Archives::getArchivesList(["id"=>"relate","tags"=>$__ARCHIVES__['tags'],"row"=>"3"]); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$relate): $mod = ($i % 2 );++$i;?>
                        <a class="col-sm-4" href="<?php echo $relate['url']; ?>">
                            <div class="related-item">
                                <div class="title">
                                    <?php echo $relate['title']; ?>
                                </div>
                                <img class="img-responsive" src="<?php echo $relate['image']; ?>" alt="<?php echo $relate['title']; ?>">
                                <div class="image-overlay"></div>
                            </div>
                        </a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <!-- E 相关文章 -->
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>

            <div class="panel panel-default" id="comments">
                <div class="panel-heading">
                    <?php echo __('Comment list'); ?>(<?php echo $__ARCHIVES__['comments']; ?>)
                </div>
                <div class="panel-body">
                    <div id="comment-container"> 
    <!-- S 评论列表 -->
    <div id="commentlist">
        <?php $aid = $__ARCHIVES__['id']; $__COMMENTLIST__ = \addons\cms\model\Comment::getCommentList(["id"=>"comment","type"=>"archives","aid"=>"$aid","pagesize"=>"10"]); if(is_array($__COMMENTLIST__) || $__COMMENTLIST__ instanceof \think\Collection || $__COMMENTLIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__COMMENTLIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comment): $mod = ($i % 2 );++$i;?>
        <dl id="comment-<?php echo $comment['id']; ?>"> 
            <dt><a href="<?php echo $comment['website']; ?>" title="查看<?php echo $comment['username']; ?>的主页" rel="nofollow" target="_blank"><img alt='' src='https://secure.gravatar.com/avatar/<?php echo md5($comment['email']); ?>?s=48&d=&r=X' class='avatar' /></a></dt>
            <dd>
                <div class="parent">
                    <cite><a href='<?php echo $comment['website']; ?>' rel='external nofollow' target="_blank"><?php echo $comment['username']; ?></a></cite>
                    <small> <?php echo human_date($comment['createtime']); ?> <a href="javascript:;" rel="<?php echo $comment['id']; ?>" title="" class="reply">回复TA</a></small>
                    <p><?php echo $comment['content']; ?></p> 
                </div>
                <?php if(is_array($comment['sublist']) || $comment['sublist'] instanceof \think\Collection || $comment['sublist'] instanceof \think\Paginator): $i = 0; $__LIST__ = $comment['sublist'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$subcomment): $mod = ($i % 2 );++$i;?>
                <dl id="comment-<?php echo $subcomment['id']; ?>"> 
                    <dt><a href="<?php echo $subcomment['website']; ?>" title="查看<?php echo $subcomment['username']; ?>的主页" rel="nofollow" target="_blank"><img alt='' src='https://secure.gravatar.com/avatar/<?php echo md5($subcomment['email']); ?>?s=48&d=&r=X' class='avatar' /></a></dt>
                    <dd>
                        <div class="parent">
                            <cite><a href='<?php echo $comment['website']; ?>' rel='external nofollow' target="_blank"><?php echo $subcomment['username']; ?></a></cite>
                            <small> <?php echo human_date($subcomment['createtime']); ?> <a href="javascript:;" rel="<?php echo $comment['id']; ?>" title="@<?php echo $subcomment['username']; ?> " title="" class="reply">回复TA</a></small>
                            <p><?php echo $subcomment['content']; ?></p> 
                        </div>
                    </dd>
                    <div class="clearfix"></div>
                </dl>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </dd>
            <div class="clearfix"></div>
        </dl>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!-- E 评论列表 -->

    <!-- S 评论分页 -->
    <div id="commentpager" class="text-center">
        <?php echo $__COMMENTLIST__->render(["type"=>"full"]); ?> 
    </div>
    <!-- E 评论分页 -->

    <!-- S 发表评论 -->
    <div id="postcomment">
        <h3>发表评论 <a href="javascript:;"><small>取消回复</small></a></h3> 
        <form action="<?php echo addon_url('cms/comment/post'); ?>" method="post" id="postform">  
            <?php echo token(); ?>
            <input type="hidden" name="type" value="archives" />
            <input type="hidden" name="aid" value="<?php echo $__ARCHIVES__['id']; ?>" />
            <input type="hidden" name="pid" id="pid" value="0" />
            <div class="form-group">
                <label class="control-label" for="username"><small>名称 (必须)</small></label>
                <input type="text" class="form-control" style="width:40%;" name="username" id="username" value="" size="22" tabindex="1" /> 
            </div> 
            <div class="form-group">
                <label class="control-label" for="email"><small>邮件地址 (不会被公开) (必须)</small></label>
                <input type="text" class="form-control" style="width:40%;" name="email" id="email" value="" size="22" tabindex="2" /> 
            </div> 
            <div class="form-group">
                <label class="control-label" for="url"><small>网站或博客</small></label>
                <input type="text" class="form-control" style="width:40%;" name="website" id="website" value="" size="22" tabindex="3" /> 
            </div> 
            <div class="form-group">
                <label class="control-label" for="url"><small>评论内容</small></label>
                <textarea name="content" class="form-control" id="commentcontent" cols="6" rows="5" tabindex="4"></textarea>
            </div> 
            <div class="form-group">
                <input name="submit" type="submit" id="submit" tabindex="5" value="提交评论(Ctrl+回车)" class="btn btn-primary" />
                <span id="actiontips"></span>
            </div>
            <div class="checkbox">
                <label>
                    <input name="rememberme" type="checkbox" class="checkbox" tabindex="6" checked value="1" /> 记住我的信息，方便下次评论
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input name="subscribe" type="checkbox" class="checkbox" tabindex="7" checked value="1" /> 有人回复时邮件通知我
                </label>
            </div>
        </form> 
    </div> 
    <!-- E 发表评论 -->
</div>
                </div>
            </div>

        </div>

        <aside class="col-md-4 article-sidebar">
            <div class="panel panel-adimg">
                
            </div>
            <!-- S 热门资讯 -->
<div class="panel panel-default hot-article">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Hot news'); ?></h3>
    </div>
    <div class="panel-body">
        <?php $__LIST__ = \addons\cms\model\Archives::getArchivesList(["id"=>"hot","row"=>"10","orderby"=>"id","orderway"=>"asc"]); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot): $mod = ($i % 2 );++$i;?>
        <div class="media media-number">
            <div class="media-left">
                <span class="num"><?php echo $i; ?></span>
            </div>
            <div class="media-body">
                <a class="link-dark" href="<?php echo $hot['url']; ?>" title="<?php echo $hot['title']; ?>"><?php echo $hot['title']; ?></a>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<!-- E 热门资讯 -->

<!-- S 热门标签 -->
<div class="panel panel-default hot-tags">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Hot tags'); ?></h3>
    </div>
    <div class="panel-body">
        <?php $__LIST__ = \addons\cms\model\Tags::getTagsList(["id"=>"tag","orderby"=>"rand","limit"=>"30"]); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?>
        <a href="<?php echo $tag['url']; ?>"> <span class="badge"><i class="fa fa-tags"></i> <?php echo $tag['name']; ?></span></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<!-- E 热门标签 -->

<!-- S 推荐资讯 -->
<div class="panel panel-default recommend-article">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('Recommend news'); ?></h3>
    </div>
    <div class="panel-body">
        <?php $__LIST__ = \addons\cms\model\Archives::getArchivesList(["id"=>"hot","row"=>"10","flag"=>"recommend|new","orderby"=>"id","orderway"=>"asc"]); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot): $mod = ($i % 2 );++$i;?>
        <div class="media media-number">
            <div class="media-left">
                <span class="num"><?php echo $i; ?></span>
            </div>
            <div class="media-body">
                <a class="link-dark" href="<?php echo $hot['url']; ?>" title="<?php echo $hot['title']; ?>"><?php echo $hot['title']; ?></a>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<!-- E 推荐资讯 -->
        </aside>
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