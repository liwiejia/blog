<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="15317273575564615446375">
    <meta property="og:image" content="https://static.segmentfault.com/v-5b112aa6/global/img/touch-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="alexaVerifyID" content="LkzCRJ7rPEUwt6fVey2vhxiw1vQ">
    <meta name="apple-itunes-app" content="app-id=958101793, app-argument=">
    <title><?php echo ($current['title']); ?>-<?php echo ($webcConfig["sitename"]); ?></title>
    <meta name="description" content="Liweijia-Blog ( blog.liweijia.site) 是开发者技术社区。 我希望为编程爱好者提供一个纯粹、高质的技术交流的平台， 与开发者一起学习、交流与成长，创造属于开发者的时代！">
    <meta name="keywords" content="Liweijia-Blog,Liweijia-Blog,IT技术社区,编程社区,技术问答,技术文章,技术笔记,技术活动,开发者,程序员,极客,编程,代码,开源">
    <link rel="shortcut icon" href="/blog/Public/Image/favicon.ico">
    <link href="/blog/Public/Style/Index/head.css" rel="stylesheet" type="text/css">
    <link href="/blog/Public/Plugin/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body  class="no-skin">
<div class="global-nav blog-header blog-header--index">
    <div class="bottom-nav visible-xs visible-sm ">
        <div class="opts">
            <a class="opts-group active" href="/">
                <i class="fa fa-home" aria-hidden="true"></i>
                <span>首页</span>
            </a>
            <a class="opts-group " href="/questions">
                <i class="fa fa-comments" aria-hidden="true"></i>
                <span>问答</span>
            </a>
            <a class="opts-group " href="/blogs">
                <i class="fa fa-pencil-square" aria-hidden="true"></i>
                <span>专栏</span>
            </a>
            <a class="opts-group " href="/lives">
                <i class="fa fa-play-circle" aria-hidden="true">
                </i><span>讲堂</span></a>
            <div class="opts-group">
                <div class="btn-group dropup"><i class="fa fa-bars dropdown hoverDropdown" data-toggle="dropdown" aria-hidden="true"><span>更多</span></i>
                    <ul class="dropdown-menu">
                        <li><a href="/jobs">职位</a></li>
                        <li><a href="/events">活动</a></li>
                        <li><a href="/tags">标签</a></li>
                        <li><a href="/badges">徽章</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="container nav">
        <div class="visible-xs visible-sm header-response"><a href="<?php echo U('Search/index');?>" style="display:block"><i class="fa fa-search" aria-hidden="true"></i></a>
            <div class="blog-header__logo blog-header__logo--response">
                <h1><a href="/" style="height:24px; background-size: auto 24px;"></a></h1>
            </div>
            <a href="<?php echo U('User/login');?>" class="pull-right login-btn"><i class="fa fa-user" aria-hidden="true"></i></a></div>
        <script>
            mobileScroll(
                function(direction) {
                    if (direction === 'down') {
                        document.querySelector('.bottom-nav').classList.add('hidden')
                    } else {
                        document.querySelector('.bottom-nav').classList.remove('hidden')
                    }
                }
            );
            function mobileScroll( fn ) {
                var beforeScrollTop = document.documentElement.scrollTop || document.body.scrollTop,
                    fn = fn || function() {};
                window.addEventListener("scroll", function() {
                    var afterScrollTop = document.documentElement.scrollTop || document.body.scrollTop,
                        delta = afterScrollTop - beforeScrollTop;
                    if( delta === 0 ) return false;
                    fn( delta > 0 ? "down" : "up" );
                    beforeScrollTop = afterScrollTop;
                }, false);
            }
        </script>
        <div class="row hidden-xs hidden-sm">
            <div class="col-sm-8 col-md-9 col-lg-9">
                <div class="blog-header__logo">
                    <h1><a href=".">Liweijia_Blog</a></h1>
                </div>
                <div>
                    <ul class="menu list-inline pull-left hidden-xs">
                        <li class="menu__item"><a href="/Index" class="active-nav">首页</a></li>
                        <li class="menu__item"><a href="/questions" class="">问答</a></li>
                        <li class="menu__item"><a href="/blogs" class="">专栏</a></li>
                        <li class="menu__item"><a href="/lives" class="">讲堂</a></li>
                        <li class="menu__item"><a href="/groups" class="">圈子</a></li>
                        <li class="menu__item menu__item--more dropdown"><a href="##" class="dropdown-toggle dropdownBtn" data-toggle="dropdown"> 发现<i class="fa fa-caret-down" style="font-size: 14px;margin-left: 5px;" aria-hidden="true"></i></a>
                            <div class="dropdown-block hidden">
                                <ul class="dropdown-content-menu">
                                    <li><a href="/events">活动</a></li>
                                    <li><a href="/tags">标签</a></li>
                                    <li><a href="/jobs">找工作</a></li>
                                    <li><a href="/users">排行榜</a></li>
                                    <li><a href="/badges">徽章</a></li>
                                    <li><a href="/notes">笔记</a></li>
                                    <li><a href="https://docs.segmentfault.com" target="_blank">开发手册<i style="line-height: 20px;font-size: 12px;color: #F5A623;" class="ml10 fa fa-external-link-square"></i></a></li>
                                    <li><a href="https://business.segmentfault.com/ads?utm_source=blog-header" target="_blank">广告投放<i style="line-height: 20px;font-size: 12px;color: #F5A623;" class="ml10 fa fa-external-link-square"></i></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu__item visible-sm-inline-block"><a href="/search"><span class="glyphicon glyphicon-search" style="vertical-align: middle;"></span></a></li>
                    </ul>
                    <form action="<?php echo U('Search/index');?>" class="header-search  hidden-sm hidden-xs pull-right">
                        <button class="btn btn-link"><span class="sr-only">搜索</span><span class="fa fa-search" style="font-size: 14px"></span></button>
                        <input id="searchBox" name="q" type="text" placeholder="搜索问题或关键字" class="form-control" value="<?php echo ($search['title']); ?>">
                    </form>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 text-right">
                <ul class="opts list-inline hidden-xs">
                    <?php if($info == ''): ?><li class="opts__item">
                            <a href="<?php echo U('User/login');?>" class="Register btn-signin" style="margin-bottom:2px;">立即登录</a>
                            <a href="<?php echo U('User/register');?>" class="Login ml10 btn-signup" onClick="">免费注册</a>
                        </li>
                        <?php else: ?>
                        <li class="opts__item dropdown hoverDropdown write-btns visible-lg-inline-block">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 创建 <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="/ask">提问题</a></li>
                                    <li><a href="/submit">发头条</a></li>
                                    <li><a href="/write">写文章</a></li>
                                    <li><a href="/record">记笔记</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="/user/draft">草稿箱（1）</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="opts__item dropdown hoverDropdown write-btns visible-md-inline-block"><a class="dropdownBtn" data-toggle="dropdown" href="/ask"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right ">
                                <li><a href="/ask">提问题</a></li>
                                <li><a href="/submit">发头条</a></li>
                                <li><a href="/write">写文章</a></li>
                                <li><a href="/record">记笔记</a></li>
                                <li class="divider"></li>
                                <li><a href="/user/draft">草稿箱（1）</a></li>
                            </ul>
                        </li>
                        <li class="opts__item message has-unread hidden-sm ml10"><a id="dLabel" class="dropdown-toggle-message" href="/user/notifications"><span class="sr-only">消息</span><span id="messageCount" class="fa fa-bell-o"></span></a>
                            <div class="opts__item--message hide">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <ul class="nav nav-tabs nav-tabs-message">
                                            <li role="presentation" class="active"><a href="#messageGeneral" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><i class="fa fa-bullhorn"></i><span class="notice-dot hide notice-dot-general"></span></a></li>
                                            <li role="presentation" class=""><a href="#messageComment" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><i class="fa fa-commenting-o" aria-hidden="true"></i><span class="notice-dot hide notice-dot-comment"></span></a></li>
                                            <li role="presentation" class=""><a href="#messageRanked" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><i class="fa fa-thumbs-o-up"></i><span class="notice-dot hide notice-dot-ranked"></span></a></li>
                                            <li role="presentation" class=""><a href="#messageFollowed" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><i class="fa fa-user-plus"></i><span class="notice-dot hide notice-dot-followed"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="messageGeneral"></div>
                                            <div role="tabpanel" class="tab-pane" id="messageComment"></div>
                                            <div role="tabpanel" class="tab-pane" id="messageRanked"></div>
                                            <div role="tabpanel" class="tab-pane" id="messageFollowed"></div>
                                            <script type="text/template" id="messageGeneralTpl"><ul class="mCustomScrollbar-message" data-proto="general"  data-mcs-theme="minimal-dark"><% _.each(general,function(d){ %><li class="<%= d.viewed >0 ?'':'bg-warning'%>"><%= d.sentence %>&nbsp;<a
                                                    href="<%= d.url %>"><%= d.excerpt %></a>&nbsp<%= d.appendSentence %></li><% }) %></ul></script><script type="text/template" id="item--general"><% _.each(general,function(d){ %><li class="<%= d.viewed>0 ?'':'bg-warning'%>"><%= d.sentence %>&nbsp;<a
                                                href="<%= d.url %>"><%= d.excerpt %></a></li><% }) %></script><script type="text/template" id="messageCommentTpl"><ul class="mCustomScrollbar-message" data-proto="comment"  data-mcs-theme="minimal-dark"><% _.each(comment,function(d){ %><li class="<%= d.viewed>0 ?'':'bg-warning'%>"><%= d.sentence %>&nbsp;<a
                                                href="<%= d.url %>"><%= d.excerpt %></a>&nbsp<%= d.appendSentence %></li><% }) %></ul></script><script type="text/template" id="item--comment"><% _.each(comment,function(d){ %><li class="<%= d.viewed>0 ?'':'bg-warning'%>"><%= d.sentence %>&nbsp;<a
                                                href="<%= d.url %>"><%= d.excerpt %></a></li><% }) %></script><script type="text/template" id="messageRankedTpl"><ul class="mCustomScrollbar-message" data-proto="ranked"  data-mcs-theme="minimal-dark"><% _.each(ranked,function(d){ %><li class="<%= d.viewed>0 ?'':'bg-warning'%>"><span class="badge
                                                    <% if(d.voted && d.voted.rank!=0){ %><%= d.voted.rank > 0 ? 'green':'red' %><% } else { %> transparent <% } %>"><% if(d.voted){ %><%= d.voted.rank > 0 ? '+'+d.voted.rank:d.voted.rank %><% } %></span><div class="rank-desc"><%= d.sentence %>&nbsp;<a href="<%= d.url %>"><%=
                                            d.excerpt %></a></div></li><% }) %></ul></script><script type="text/template" id="item--ranked"><% _.each(ranked,function(d){ %><li class="<%= d.viewed>0 ?'':'bg-warning'%>"><span class="badge
                                                    <% if(d.voted && d.voted.rank!=0){ %><%= d.voted.rank > 0 ? 'green':'red' %><% } else { %> transparent <% } %>"><% if(d.voted){ %><%= d.voted.rank > 0 ? '+'+d.voted.rank:d.voted.rank %><% } %></span><div class="rank-desc"><%= d.sentence %>&nbsp;<a href="<%= d.url %>"><%=
                                            d.excerpt %></a></div></li><% }) %></script><script type="text/template" id="messageFollowedTpl"><ul class="mCustomScrollbar-message" data-proto="followed"  data-mcs-theme="minimal-dark"><p class="follow-tips">他们最近关注了你</p><% _.each(followed,function(d){ %><li class="<%= d.viewed>0 ?'':'bg-warning'%>"><img class="follower__img avatar-32"
                                                                                                                                                                                                                                                                                                                                                               src="<%= d.triggerUser[0] ? d.triggerUser[0].avatarUrl : '' %>"><div class="follower__info"><% if(d.triggerUser[0] ? d.triggerUser[0].isFollowed : ''){ %><button data-id="<%= d.triggerUser[0] ? d.triggerUser[0].id : '' %>"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 class="btn btn-default btn-xs message__btn--unfollow pull-right active">
                                            已关注
                                        </button><% }else{ %><button data-id="<%= d.triggerUser[0] ? d.triggerUser[0].id : '' %>"
                                                                     class="btn btn-default btn-xs message__btn--follow pull-right">
                                            关注
                                        </button><% } %><a href="<%= d.triggerUser[0] ? d.triggerUser[0].url : '' %>"><%=d.triggerUser[0] ? d.triggerUser[0].name : ''%></a><br><span><%= d.triggerUser[0] ? d.triggerUser[0].rank : '' %> 声望</span></div></li><% }) %></ul></script><script type="text/template" id="item--followed"><% _.each(followed,function(d){ %><li class="<%= d.viewed>0 ?'':'bg-warning'%>"><img class="follower__img avatar-32"
                                                                                                                                                                                                                                                                                                                                                                                                                           src="<%= d.triggerUser[0] ? d.triggerUser[0].avatarUrl : '' %>"><div class="follower__info"><% if(d.triggerUser[0] && d.triggerUser[0].isFollowed){ %><button data-id="<%= d.triggerUser[0] ? d.triggerUser[0].id : '' %>"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         class="btn btn-default btn-xs message__btn--unfollow pull-right active">
                                            已关注
                                        </button><% }else{ %><button data-id="<%= d.triggerUser[0] ? d.triggerUser[0].id : '' %>"
                                                                     class="btn btn-default btn-xs message__btn--follow pull-right">
                                            关注
                                        </button><% } %><a href="<%= d.triggerUser[0] ? d.triggerUser[0].url : '' %>"><%= d.triggerUser[0].name
                                            %></a><br><span><%= d.triggerUser[0].rank %> 声望</span></div></li><% }) %></script></div>
                                        <p class="opts__item--message-loading follow-tips">loading</p>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-sm-6"><a href="javascript:;" class="message-ingore-all hide"><span class="glyphicon glyphicon-ok-sign"></span> 全部标记为已读</a></div>
                                            <div class="col-sm-6"><a class="opts__item--message-view-all" href="/user/notifications">查看全部
                                                »</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="opts__item letter has-unread hidden-sm"><a id="dLabel" class="dropdown-toggle-letter" href="/user/messages"><span class="sr-only">私信</span><span id="letterCount" class="fa fa-envelope-o"></span></a>
                            <div class="opts__item--letter hide">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <ul class="nav nav-tabs nav-tabs-letter">
                                            <li role="presentation" class="active"><span class="opts__item--letter-heading">最近的私信</span></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div id="messageInbox"></div>
                                            <script type="text/template" id="messageInboxTpl"><ul class="mCustomScrollbar-message" data-proto="inbox" data-mcs-theme="minimal-dark"><% _.each(inboxes,function(d){ %><li class="<%= d.viewed>0 ?'':'bg-warning'%>" data-click="<%= d.url %>"><img class="follower__img avatar-32"
                                                                                                                                                                                                                                                                                                  src="<%= d.targetUser.avatarUrl %>"><div class="follower__info"><a href="<%= d.url %>"><%= d.targetUser.name
                                                %></a><br><% if (d.lastMessage.content){ %><span class="ellipsis inline-block" style="width: 245px;"><%= d.lastMessage.content.content %></span><% } %></div></li><% }) %><% if(inboxes.length ==0){ %><p class="text-center">没有人给你发私信</p><% } %></ul></script><script type="text/template" id="item--inboxes"><% _.each(inboxes,function(d){ %><li class="<%= d.viewed>0 ?'':'bg-warning'%>" data-click="<%= d.url %>"><img class="follower__img avatar-32"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                             src="<%= d.targetUser.avatarUrl %>"><div class="follower__info"><a href="<%= d.targetUser.url %>"><%= d.targetUser.name
                                            %></a><br><span class="ellipsis inline-block" style="width: 245px;"><%= d.content %></span></div></li><% }) %></script></div>
                                        <p class="opts__item--letter-loading follow-tips">loading</p>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-sm-6"><a href="javascript:;" class="message-ingore-all hide"><span class="glyphicon glyphicon-ok-sign"></span> 全部标记为已读</a></div>
                                            <div class="col-sm-6"><a class="opts__item--message-view-all" href="/user/messages">查看全部
                                                »</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <style>
                            @media (max-width: 1200px) {
                                .trialCenter-wrapper {
                                    display: none !important;
                                }
                            }
                        </style>
                        <li class="opts__item user dropdown hoverDropdown ml0">
                            <a class="avatar-* dropdownBtn user-avatar" data-toggle="dropdown" style="background-image: url('<?php if($info['head'] == ''): ?>/blog/Public/Image/user-64.png<?php else: echo ($info['head']); endif; ?>')" href="<?php echo U('User/Index',array('user'=>$info['pageurl']));?>"></a>
                            <div class="dropdown-avatar-menu hidden">
                                <div class="menu-score"><span class="score pull-left ml20 mr10">1 声望</span>
                                    <div class=""><span class="badge badge--o badge--sf badge--gold"><i class="badge__icon"></i></span><span class="profile__sidebar--award-badge-count">0</span><span class="badge badge--o badge--sf badge--silver"><i class="badge__icon"></i></span><span class="profile__sidebar--award-badge-count">0</span><span class="badge badge--o badge--sf badge--bronze"><i class="badge__icon"></i></span><span class="profile__sidebar--award-badge-count">0</span></div>
                                </div>
                                <hr>
                                <div class="container-fluid">
                                    <div class="menu-list row">
                                        <div class="col-md-6 col-xs-6 pl0 pr0">
                                            <ul>
                                                <li class="message-response visible-xs"><a href="/user/notifications" id="messageCount-response">通知提醒</a></li>
                                                <li><a href="<?php echo U('User/Notes',array('user'=>$info['pageurl']));?>">我的笔记</a></li>
                                                <li><a href="<?php echo U('User/bookmarks',array('user'=>$info['pageurl']));?>">我的收藏</a></li>
                                                <li><a href="<?php echo U('User/invited',array('user'=>$info['pageurl']));?>">受邀回答</a></li>
                                                <li><a href="<?php echo U('User/experts',array('user'=>$info['pageurl']));?>">付费问答</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xs-6 pl0 pr0">
                                            <ul>
                                                <li class="letter-response  visible-xs"><a href="<?php echo U('User/messages',array('user'=>$info['pageurl']));?>" id="letterCount-response">私信消息</a></li>
                                                <li><a href="<?php echo U('User/Index',array('user'=>$info['pageurl']));?>">我的主页</a></li>
                                                <li><a href="<?php echo U('User/about',array('user'=>$info['pageurl']));?>">我的档案</a></li>
                                                <li><a href="<?php echo U('User/finance',array('user'=>$info['pageurl']));?>">我的资产</a></li>
                                                <li><a href="<?php echo U('User/settings',array('user'=>$info['pageurl']));?>">个人设置</a></li>
                                                <li><a href="<?php echo U('User/logout');?>">退出</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="menu-footer"><a class="js__action--complain" href="javascript:void(0);"><span>用户申诉</span></a> · <a href="/g/1570000009280187"><span>建议反馈</span></a> · <a href="<?php echo U('User/Index',array('user'=>$info['pageurl'],'type'=>'invitation'));?>"><span>邀请朋友</span></a></div>
                            </div>
                            <script type="text/template" id="js__action--complain-tpl"><form class="complain__form" method="post" action="/api/appeals/add"><div class="form-group"><label>理由</label><textarea name="description" class="form-control"rows="3"></textarea></div></form></script></li><?php endif; ?>

                </ul>
            </div>
        </div>
    </nav>
</div>


<div class="modal" style="display: none;">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer hidden"></div>
        </div>
    </div>
</div>


<div class="in"></div>
<div class="wrap" data-blogid="1200000005036838">
    <div class="container mt30" style="position:relative">
        <div class="row">
            <div class="col-xs-12 col-md-9 main ">
                <div class="post-topheader custom- pt0">
                    <div class="mb20">
                        <div class="block-for-right-border">
                            <div class="row">
                                <div class="col-md-12article__author col-sm-12 col-xs-12">


                                    <div class="post-topheader__info" data-username="Charlie_Jade" data-userslug="summerblue">

                                        <div>

                                            <div class="article__author">
                                                <a href="<?php echo U('User/Index',array('user'=>$data['pageurl']));?>" class="inline-block pull-left pr10">
                                                    <img class="avatar-40" src="<?php echo ($data['head']); ?>" alt="Charlie_Jade">
                                                </a>
                                                <div style="display: inline">
                                                    <a href="<?php echo U('User/Index',array('user'=>$data['pageurl']));?>" class="mr5 "><strong><?php echo ($data['nickname']); ?></strong></a>
                                                    发布于
                                                    <a href="/blog/summerblue"><?php echo ($data['name']); ?></a>


                                                    <span class="hidden-xs">
                                                                                                                                                          <button type="button" class="btn btn-xs btn-success follow-article ml10" data-do="follow" data-type="blog" data-id="1200000005036838">关注专栏
                                                       </button>
                                                                                                                                                   </span>
                                                </div>

                                                <span style="display: block">
                                                    <?php echo (mdate($data['date'])); ?>
                                                    &nbsp;·&nbsp;
                                                    <?php echo (num2tring($data['view'])); ?>人阅读
                                                </span>
                                            </div>
                                        </div>

                                        <h1 class="h1 post-topheader__info--title" id="articleTitle" data-id="1190000015166527">
                                            <a href="<?php echo U('Article/Index',array('id'=>$val['id']));?>"><?php echo ($data['title']); ?></a>
                                        </h1>

                                        <div class="content__tech blog-type-common blog-type-1-before hidden-xs">
                                            <ul class="taglist--inline inline-block article__title--tag mr10">
                                                <li class="tagPopup mb5">
                                                    <a class="tag" href="/t/laravel/blogs" data-toggle="popover" data-img="" data-placement="top" data-original-title="laravel" data-id="1040000000196640">
                                                        <?php echo ($data['name']); ?>
                                                    </a>
                                                </li>

                                            </ul>

                                        </div>

                                        <form class="form form__tech hidden" data-action="#">
                                            <span class="pull-right">
                                                <button class="btn btn-default save-tags-btn" type="button">保存</button>
                                            </span>
                                            <div class="form-group" style="margin-right: 65px">
                                                <label for="tags" class="sr-only">标签：至少1个，最多5个</label>
                                                <input class="tagsInput form-control hidden" data-init="[{&quot;name&quot;:&quot;laravel&quot;,&quot;url&quot;:&quot;\/t\/laravel&quot;,&quot;id&quot;:&quot;1040000000196640&quot;,&quot;thumbnailUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/160\/911\/1609111127-1040000000196640_big64&quot;,&quot;contentCount&quot;:4397,&quot;iconUrl&quot;:&quot;&quot;},{&quot;name&quot;:&quot;php\u6846\u67b6&quot;,&quot;url&quot;:&quot;\/t\/php%E6%A1%86%E6%9E%B6&quot;,&quot;id&quot;:&quot;1040000000719757&quot;,&quot;thumbnailUrl&quot;:&quot;&quot;,&quot;contentCount&quot;:522,&quot;iconUrl&quot;:&quot;&quot;},{&quot;name&quot;:&quot;php&quot;,&quot;url&quot;:&quot;\/t\/php&quot;,&quot;id&quot;:&quot;1040000000089387&quot;,&quot;thumbnailUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/188\/805\/188805810-1040000000089387_big64&quot;,&quot;contentCount&quot;:35982,&quot;iconUrl&quot;:&quot;&quot;}]" name="tags" type="text" placeholder="标签，如：php 可使用逗号,分号;分隔" data-role="tagsinput"><div class="sf-typeHelper sf-typeHelper--fortags"><span class="sf-typeHelper-item  ">laravel<span data-role="remove">×</span></span><span class="sf-typeHelper-item  ">php框架<span data-role="remove">×</span></span><span class="sf-typeHelper-item  ">php<span data-role="remove">×</span></span><input type="text" data-role="sf_typeHelper-input" class="sf-typeHelper-input" placeholder="标签，如：php 可使用逗号,分号;分隔" style="width: 20em;"><ul class="sf-typeHelper-list dropdown-menu"></ul></div>
                                                <div role="tabpanel" class="techTags panel panel-default techTags-panel" data-tech="{&quot;\u5f00\u53d1\u8bed\u8a00&quot;:[{&quot;id&quot;:&quot;1040000000089436&quot;,&quot;name&quot;:&quot;javascript&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089387&quot;,&quot;name&quot;:&quot;php&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089434&quot;,&quot;name&quot;:&quot;css&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089571&quot;,&quot;name&quot;:&quot;html&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089449&quot;,&quot;name&quot;:&quot;java&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/868\/271\/868271510-54cb382abb7a1_small&quot;},{&quot;id&quot;:&quot;1040000000089409&quot;,&quot;name&quot;:&quot;html5&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/102\/500\/1025005915-54cb538538eea_small&quot;},{&quot;id&quot;:&quot;1040000000089534&quot;,&quot;name&quot;:&quot;python&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/252\/177\/2521771040-54cb53b372821_small&quot;},{&quot;id&quot;:&quot;1040000000089918&quot;,&quot;name&quot;:&quot;node.js&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089741&quot;,&quot;name&quot;:&quot;c++&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089457&quot;,&quot;name&quot;:&quot;c&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090209&quot;,&quot;name&quot;:&quot;objective-c&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090203&quot;,&quot;name&quot;:&quot;golang&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089669&quot;,&quot;name&quot;:&quot;shell&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000531223&quot;,&quot;name&quot;:&quot;swift&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089581&quot;,&quot;name&quot;:&quot;c#&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000365394&quot;,&quot;name&quot;:&quot;typescript&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089699&quot;,&quot;name&quot;:&quot;ruby&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/336\/760\/3367608758-54cb53ca5a132_small&quot;},{&quot;id&quot;:&quot;1040000000089686&quot;,&quot;name&quot;:&quot;bash&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000091262&quot;,&quot;name&quot;:&quot;sass&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090433&quot;,&quot;name&quot;:&quot;asp.net&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090600&quot;,&quot;name&quot;:&quot;less&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090208&quot;,&quot;name&quot;:&quot;lua&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090228&quot;,&quot;name&quot;:&quot;scala&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000161068&quot;,&quot;name&quot;:&quot;coffeescript&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090194&quot;,&quot;name&quot;:&quot;actionscript&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090201&quot;,&quot;name&quot;:&quot;erlang&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089698&quot;,&quot;name&quot;:&quot;perl&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000311191&quot;,&quot;name&quot;:&quot;rust&quot;,&quot;iconUrl&quot;:&quot;&quot;}],&quot;\u5e73\u53f0\u6846\u67b6&quot;:[{&quot;id&quot;:&quot;1040000000196640&quot;,&quot;name&quot;:&quot;laravel&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090103&quot;,&quot;name&quot;:&quot;spring&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089564&quot;,&quot;name&quot;:&quot;django&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000125263&quot;,&quot;name&quot;:&quot;flask&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000166256&quot;,&quot;name&quot;:&quot;express&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090398&quot;,&quot;name&quot;:&quot;yii&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089646&quot;,&quot;name&quot;:&quot;ruby-on-rails&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000116331&quot;,&quot;name&quot;:&quot;tornado&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089638&quot;,&quot;name&quot;:&quot;struts&quot;,&quot;iconUrl&quot;:&quot;&quot;}],&quot;\u670d\u52a1\u5668&quot;:[{&quot;id&quot;:&quot;1040000000089392&quot;,&quot;name&quot;:&quot;linux&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090145&quot;,&quot;name&quot;:&quot;nginx&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089761&quot;,&quot;name&quot;:&quot;apache&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000366352&quot;,&quot;name&quot;:&quot;docker&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090245&quot;,&quot;name&quot;:&quot;ubuntu&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/335\/109\/3351090335-569f0f26a2a86_small&quot;},{&quot;id&quot;:&quot;1040000000090249&quot;,&quot;name&quot;:&quot;centos&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090117&quot;,&quot;name&quot;:&quot;tomcat&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090401&quot;,&quot;name&quot;:&quot;\u7f13\u5b58&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090107&quot;,&quot;name&quot;:&quot;\u8d1f\u8f7d\u5747\u8861&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090646&quot;,&quot;name&quot;:&quot;unix&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089648&quot;,&quot;name&quot;:&quot;hadoop&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090609&quot;,&quot;name&quot;:&quot;windows-server&quot;,&quot;iconUrl&quot;:&quot;&quot;}],&quot;\u6570\u636e\u5e93\u548c\u7f13\u5b58&quot;:[{&quot;id&quot;:&quot;1040000000089439&quot;,&quot;name&quot;:&quot;mysql&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/949\/844\/9498447-54cb56e325a72_small&quot;},{&quot;id&quot;:&quot;1040000000089431&quot;,&quot;name&quot;:&quot;redis&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090049&quot;,&quot;name&quot;:&quot;sql&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089488&quot;,&quot;name&quot;:&quot;mongodb&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/183\/816\/1838168166-54cb5552ef5de_small&quot;},{&quot;id&quot;:&quot;1040000000090701&quot;,&quot;name&quot;:&quot;oracle&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089432&quot;,&quot;name&quot;:&quot;nosql&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089873&quot;,&quot;name&quot;:&quot;memcached&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090424&quot;,&quot;name&quot;:&quot;sqlserver&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090354&quot;,&quot;name&quot;:&quot;sqlite&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090861&quot;,&quot;name&quot;:&quot;postgresql&quot;,&quot;iconUrl&quot;:&quot;&quot;}],&quot;\u5f00\u53d1\u5de5\u5177&quot;:[{&quot;id&quot;:&quot;1040000000089459&quot;,&quot;name&quot;:&quot;git&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000091226&quot;,&quot;name&quot;:&quot;github&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089467&quot;,&quot;name&quot;:&quot;vim&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000126097&quot;,&quot;name&quot;:&quot;sublime-text&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089579&quot;,&quot;name&quot;:&quot;xcode&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000002720957&quot;,&quot;name&quot;:&quot;visual-studio-code&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090560&quot;,&quot;name&quot;:&quot;intellij-idea&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089509&quot;,&quot;name&quot;:&quot;eclipse&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090186&quot;,&quot;name&quot;:&quot;maven&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089447&quot;,&quot;name&quot;:&quot;svn&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090473&quot;,&quot;name&quot;:&quot;ide&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090524&quot;,&quot;name&quot;:&quot;atom&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090231&quot;,&quot;name&quot;:&quot;visual-studio&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090216&quot;,&quot;name&quot;:&quot;emacs&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000183694&quot;,&quot;name&quot;:&quot;hg&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089663&quot;,&quot;name&quot;:&quot;textmate&quot;,&quot;iconUrl&quot;:&quot;&quot;}],&quot;\u7cfb\u7edf\u8bbe\u5907&quot;:[{&quot;id&quot;:&quot;1040000000089658&quot;,&quot;name&quot;:&quot;android&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/287\/281\/287281599-5a263edae47e9_small&quot;},{&quot;id&quot;:&quot;1040000000089442&quot;,&quot;name&quot;:&quot;ios&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/300\/191\/3001919899-5488009eb028c_small&quot;},{&quot;id&quot;:&quot;1040000000089407&quot;,&quot;name&quot;:&quot;chrome&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/281\/209\/2812096638-54cb55083b2cc_small&quot;},{&quot;id&quot;:&quot;1040000000089709&quot;,&quot;name&quot;:&quot;windows&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089498&quot;,&quot;name&quot;:&quot;iphone&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090217&quot;,&quot;name&quot;:&quot;firefox&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/334\/705\/334705769-54cb552688a94_small&quot;},{&quot;id&quot;:&quot;1040000000125504&quot;,&quot;name&quot;:&quot;internet-explorer&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000089499&quot;,&quot;name&quot;:&quot;safari&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090638&quot;,&quot;name&quot;:&quot;ipad&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090218&quot;,&quot;name&quot;:&quot;opera&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000002871462&quot;,&quot;name&quot;:&quot;apple-watch&quot;,&quot;iconUrl&quot;:&quot;&quot;}],&quot;\u5176\u5b83&quot;:[{&quot;id&quot;:&quot;1040000000089409&quot;,&quot;name&quot;:&quot;html5&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/102\/500\/1025005915-54cb538538eea_small&quot;},{&quot;id&quot;:&quot;1040000002893277&quot;,&quot;name&quot;:&quot;react.js&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090137&quot;,&quot;name&quot;:&quot;\u641c\u7d22\u5f15\u64ce&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000123810&quot;,&quot;name&quot;:&quot;virtualenv&quot;,&quot;iconUrl&quot;:&quot;&quot;},{&quot;id&quot;:&quot;1040000000090316&quot;,&quot;name&quot;:&quot;lucene&quot;,&quot;iconUrl&quot;:&quot;&quot;}]}">
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li role="presentation" class="active"><a href="#开发语言" aria-controls="type" role="tab" data-toggle="tab">开发语言</a>
                                                        </li>
                                                        <li role="presentation" class=""><a href="#平台框架" aria-controls="type" role="tab" data-toggle="tab">平台框架</a>
                                                        </li>
                                                        <li role="presentation" class=""><a href="#服务器" aria-controls="type" role="tab" data-toggle="tab">服务器</a>
                                                        </li>
                                                        <li role="presentation" class=""><a href="#数据库和缓存" aria-controls="type" role="tab" data-toggle="tab">数据库和缓存</a>
                                                        </li>
                                                        <li role="presentation" class=""><a href="#开发工具" aria-controls="type" role="tab" data-toggle="tab">开发工具</a>
                                                        </li>
                                                        <li role="presentation" class=""><a href="#系统设备" aria-controls="type" role="tab" data-toggle="tab">系统设备</a>
                                                        </li>
                                                        <li role="presentation" class=""><a href="#其它" aria-controls="type" role="tab" data-toggle="tab">其它</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active" id="开发语言">
                                                            <ul class="taglist--inline">
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089436&quot;,&quot;name&quot;:&quot;javascript&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        javascript
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089387&quot;,&quot;name&quot;:&quot;php&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        php
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089434&quot;,&quot;name&quot;:&quot;css&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        css
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089571&quot;,&quot;name&quot;:&quot;html&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        html
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089449&quot;,&quot;name&quot;:&quot;java&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/868\/271\/868271510-54cb382abb7a1_small&quot;}" href="javascript: void(0);">
                                                                        <img src="https://sfault-avatar.b0.upaiyun.com/868/271/868271510-54cb382abb7a1_small">
                                                                        java
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089409&quot;,&quot;name&quot;:&quot;html5&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/102\/500\/1025005915-54cb538538eea_small&quot;}" href="javascript: void(0);">
                                                                        <img src="https://sfault-avatar.b0.upaiyun.com/102/500/1025005915-54cb538538eea_small">
                                                                        html5
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089534&quot;,&quot;name&quot;:&quot;python&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/252\/177\/2521771040-54cb53b372821_small&quot;}" href="javascript: void(0);">
                                                                        <img src="https://sfault-avatar.b0.upaiyun.com/252/177/2521771040-54cb53b372821_small">
                                                                        python
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089918&quot;,&quot;name&quot;:&quot;node.js&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        node.js
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089741&quot;,&quot;name&quot;:&quot;c++&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        c++
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089457&quot;,&quot;name&quot;:&quot;c&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        c
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090209&quot;,&quot;name&quot;:&quot;objective-c&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        objective-c
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090203&quot;,&quot;name&quot;:&quot;golang&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        golang
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089669&quot;,&quot;name&quot;:&quot;shell&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        shell
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000531223&quot;,&quot;name&quot;:&quot;swift&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        swift
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089581&quot;,&quot;name&quot;:&quot;c#&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        c#
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000365394&quot;,&quot;name&quot;:&quot;typescript&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        typescript
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089699&quot;,&quot;name&quot;:&quot;ruby&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/336\/760\/3367608758-54cb53ca5a132_small&quot;}" href="javascript: void(0);">
                                                                        <img src="https://sfault-avatar.b0.upaiyun.com/336/760/3367608758-54cb53ca5a132_small">
                                                                        ruby
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089686&quot;,&quot;name&quot;:&quot;bash&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        bash
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000091262&quot;,&quot;name&quot;:&quot;sass&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        sass
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090433&quot;,&quot;name&quot;:&quot;asp.net&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        asp.net
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090600&quot;,&quot;name&quot;:&quot;less&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        less
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090208&quot;,&quot;name&quot;:&quot;lua&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        lua
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090228&quot;,&quot;name&quot;:&quot;scala&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        scala
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000161068&quot;,&quot;name&quot;:&quot;coffeescript&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        coffeescript
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090194&quot;,&quot;name&quot;:&quot;actionscript&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        actionscript
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090201&quot;,&quot;name&quot;:&quot;erlang&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        erlang
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089698&quot;,&quot;name&quot;:&quot;perl&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        perl
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000311191&quot;,&quot;name&quot;:&quot;rust&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        rust
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane " id="平台框架">
                                                            <ul class="taglist--inline">
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000196640&quot;,&quot;name&quot;:&quot;laravel&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        laravel
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090103&quot;,&quot;name&quot;:&quot;spring&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        spring
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089564&quot;,&quot;name&quot;:&quot;django&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        django
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000125263&quot;,&quot;name&quot;:&quot;flask&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        flask
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000166256&quot;,&quot;name&quot;:&quot;express&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        express
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090398&quot;,&quot;name&quot;:&quot;yii&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        yii
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089646&quot;,&quot;name&quot;:&quot;ruby-on-rails&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        ruby-on-rails
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000116331&quot;,&quot;name&quot;:&quot;tornado&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        tornado
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089638&quot;,&quot;name&quot;:&quot;struts&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        struts
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane " id="服务器">
                                                            <ul class="taglist--inline">
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089392&quot;,&quot;name&quot;:&quot;linux&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        linux
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090145&quot;,&quot;name&quot;:&quot;nginx&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        nginx
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089761&quot;,&quot;name&quot;:&quot;apache&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        apache
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000366352&quot;,&quot;name&quot;:&quot;docker&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        docker
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090245&quot;,&quot;name&quot;:&quot;ubuntu&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/335\/109\/3351090335-569f0f26a2a86_small&quot;}" href="javascript: void(0);">
                                                                        <img src="https://sfault-avatar.b0.upaiyun.com/335/109/3351090335-569f0f26a2a86_small">
                                                                        ubuntu
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090249&quot;,&quot;name&quot;:&quot;centos&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        centos
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090117&quot;,&quot;name&quot;:&quot;tomcat&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        tomcat
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090401&quot;,&quot;name&quot;:&quot;\u7f13\u5b58&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        缓存
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090107&quot;,&quot;name&quot;:&quot;\u8d1f\u8f7d\u5747\u8861&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        负载均衡
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090646&quot;,&quot;name&quot;:&quot;unix&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        unix
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089648&quot;,&quot;name&quot;:&quot;hadoop&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        hadoop
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090609&quot;,&quot;name&quot;:&quot;windows-server&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        windows-server
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane " id="数据库和缓存">
                                                            <ul class="taglist--inline">
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089439&quot;,&quot;name&quot;:&quot;mysql&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/949\/844\/9498447-54cb56e325a72_small&quot;}" href="javascript: void(0);">
                                                                        <img src="https://sfault-avatar.b0.upaiyun.com/949/844/9498447-54cb56e325a72_small">
                                                                        mysql
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089431&quot;,&quot;name&quot;:&quot;redis&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        redis
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090049&quot;,&quot;name&quot;:&quot;sql&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        sql
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089488&quot;,&quot;name&quot;:&quot;mongodb&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/183\/816\/1838168166-54cb5552ef5de_small&quot;}" href="javascript: void(0);">
                                                                        <img src="https://sfault-avatar.b0.upaiyun.com/183/816/1838168166-54cb5552ef5de_small">
                                                                        mongodb
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090701&quot;,&quot;name&quot;:&quot;oracle&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        oracle
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089432&quot;,&quot;name&quot;:&quot;nosql&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        nosql
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089873&quot;,&quot;name&quot;:&quot;memcached&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        memcached
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090424&quot;,&quot;name&quot;:&quot;sqlserver&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        sqlserver
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090354&quot;,&quot;name&quot;:&quot;sqlite&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        sqlite
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090861&quot;,&quot;name&quot;:&quot;postgresql&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        postgresql
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane " id="开发工具">
                                                            <ul class="taglist--inline">
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089459&quot;,&quot;name&quot;:&quot;git&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        git
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000091226&quot;,&quot;name&quot;:&quot;github&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        github
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089467&quot;,&quot;name&quot;:&quot;vim&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        vim
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000126097&quot;,&quot;name&quot;:&quot;sublime-text&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        sublime-text
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089579&quot;,&quot;name&quot;:&quot;xcode&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        xcode
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000002720957&quot;,&quot;name&quot;:&quot;visual-studio-code&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        visual-studio-code
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090560&quot;,&quot;name&quot;:&quot;intellij-idea&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        intellij-idea
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089509&quot;,&quot;name&quot;:&quot;eclipse&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        eclipse
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090186&quot;,&quot;name&quot;:&quot;maven&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        maven
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089447&quot;,&quot;name&quot;:&quot;svn&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        svn
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090473&quot;,&quot;name&quot;:&quot;ide&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        ide
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090524&quot;,&quot;name&quot;:&quot;atom&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        atom
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090231&quot;,&quot;name&quot;:&quot;visual-studio&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        visual-studio
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090216&quot;,&quot;name&quot;:&quot;emacs&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        emacs
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000183694&quot;,&quot;name&quot;:&quot;hg&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        hg
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089663&quot;,&quot;name&quot;:&quot;textmate&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        textmate
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane " id="系统设备">
                                                            <ul class="taglist--inline">
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089658&quot;,&quot;name&quot;:&quot;android&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/287\/281\/287281599-5a263edae47e9_small&quot;}" href="javascript: void(0);">
                                                                        <img src="https://sfault-avatar.b0.upaiyun.com/287/281/287281599-5a263edae47e9_small">
                                                                        android
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089442&quot;,&quot;name&quot;:&quot;ios&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/300\/191\/3001919899-5488009eb028c_small&quot;}" href="javascript: void(0);">
                                                                        <img src="https://sfault-avatar.b0.upaiyun.com/300/191/3001919899-5488009eb028c_small">
                                                                        ios
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089407&quot;,&quot;name&quot;:&quot;chrome&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/281\/209\/2812096638-54cb55083b2cc_small&quot;}" href="javascript: void(0);">
                                                                        <img src="https://sfault-avatar.b0.upaiyun.com/281/209/2812096638-54cb55083b2cc_small">
                                                                        chrome
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089709&quot;,&quot;name&quot;:&quot;windows&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        windows
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089498&quot;,&quot;name&quot;:&quot;iphone&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        iphone
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090217&quot;,&quot;name&quot;:&quot;firefox&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/334\/705\/334705769-54cb552688a94_small&quot;}" href="javascript: void(0);">
                                                                        <img src="https://sfault-avatar.b0.upaiyun.com/334/705/334705769-54cb552688a94_small">
                                                                        firefox
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000125504&quot;,&quot;name&quot;:&quot;internet-explorer&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        internet-explorer
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089499&quot;,&quot;name&quot;:&quot;safari&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        safari
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090638&quot;,&quot;name&quot;:&quot;ipad&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        ipad
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090218&quot;,&quot;name&quot;:&quot;opera&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        opera
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000002871462&quot;,&quot;name&quot;:&quot;apple-watch&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        apple-watch
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane " id="其它">
                                                            <ul class="taglist--inline">
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000089409&quot;,&quot;name&quot;:&quot;html5&quot;,&quot;iconUrl&quot;:&quot;https:\/\/sfault-avatar.b0.upaiyun.com\/102\/500\/1025005915-54cb538538eea_small&quot;}" href="javascript: void(0);">
                                                                        <img src="https://sfault-avatar.b0.upaiyun.com/102/500/1025005915-54cb538538eea_small">
                                                                        html5
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000002893277&quot;,&quot;name&quot;:&quot;react.js&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        react.js
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090137&quot;,&quot;name&quot;:&quot;\u641c\u7d22\u5f15\u64ce&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        搜索引擎
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000123810&quot;,&quot;name&quot;:&quot;virtualenv&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        virtualenv
                                                                    </a>
                                                                </li>
                                                                <li class="mb5">
                                                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000090316&quot;,&quot;name&quot;:&quot;lucene&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                                                        lucene
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end .post-topheader -->

                <div class="visible-lg">
                    <div class="side-widget" style="display: flex;">
                        <i id="side-widget-votes-num" class="">28</i>
                        <a class="btn btn-default item " id="side-widget-votes-btn">
                            <i class="fa fa-thumbs-o-up"></i>
                        </a>
                        <i class="fa fa-bookmark item" id="side-widget-bookmarks-btn"></i>
                        <i class="fa fa-share-alt item" data-container=".side-widget" data-toggle="popover" data-placement="bottom" id="side-widget-share-wrapper" data-original-title="" title=""></i>
                    </div>
                </div>


                <div class="article fmt article__content" data-id="1190000015166527" data-license="cc">

                    <p><span class="img-wrap"><img data-src="/img/remote/1460000015166532" src="/img/remote/1460000015166532" alt="file" title="file" style="cursor: pointer; display: inline;"></span></p>
                    <blockquote>本文翻译改编自 <a href="https://github.com/alexeymezenin/laravel-best-practices" rel="nofollow noreferrer" target="_blank">Laravel 的十八个最佳实践</a>
                    </blockquote>
                    <p>这篇文章并不是什么由 Laravel 改编的 SOLID 原则、模式等。</p>
                    <p>只是为了让你注意你在现实生活的 Laravel 项目中最常忽略的内容。</p>
                    <h2 id="articleHeader0">单一责任原则</h2>
                    <p>一个类和一个方法应该只有一个职责。<br>错误的做法：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="public function getFullNameAttribute()
{
    if (auth()->user() &amp;&amp; auth()->user()->hasRole('client') &amp;&amp; auth()->user()->isVerified()) {
        return 'Mr. ' . $this->first_name . ' ' . $this->middle_name . ' ' $this->last_name;
    } else {
        return $this->first_name[0] . '. ' . $this->last_name;
    }
}" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code><span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">getFullNameAttribute</span><span class="hljs-params">()</span>
</span>{
    <span class="hljs-keyword">if</span> (auth()-&gt;user() &amp;&amp; auth()-&gt;user()-&gt;hasRole(<span class="hljs-string">'client'</span>) &amp;&amp; auth()-&gt;user()-&gt;isVerified()) {
        <span class="hljs-keyword">return</span> <span class="hljs-string">'Mr. '</span> . <span class="hljs-keyword">$this</span>-&gt;first_name . <span class="hljs-string">' '</span> . <span class="hljs-keyword">$this</span>-&gt;middle_name . <span class="hljs-string">' '</span> <span class="hljs-keyword">$this</span>-&gt;last_name;
    } <span class="hljs-keyword">else</span> {
        <span class="hljs-keyword">return</span> <span class="hljs-keyword">$this</span>-&gt;first_name[<span class="hljs-number">0</span>] . <span class="hljs-string">'. '</span> . <span class="hljs-keyword">$this</span>-&gt;last_name;
    }
}</code></pre>
                    <p>推荐的做法：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="public function getFullNameAttribute()
{
    return $this->isVerifiedClient() ? $this->getFullNameLong() : $this->getFullNameShort();
}

public function isVerfiedClient()
{
    return auth()->user() &amp;&amp; auth()->user()->hasRole('client') &amp;&amp; auth()->user()->isVerified();
}

public function getFullNameLong()
{
    return 'Mr. ' . $this->first_name . ' ' . $this->middle_name . ' ' . $this->last_name;
}

public function getFullNameShort()
{
    return $this->first_name[0] . '. ' . $this->last_name;
}" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code><span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">getFullNameAttribute</span><span class="hljs-params">()</span>
</span>{
    <span class="hljs-keyword">return</span> <span class="hljs-keyword">$this</span>-&gt;isVerifiedClient() ? <span class="hljs-keyword">$this</span>-&gt;getFullNameLong() : <span class="hljs-keyword">$this</span>-&gt;getFullNameShort();
}

<span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">isVerfiedClient</span><span class="hljs-params">()</span>
</span>{
    <span class="hljs-keyword">return</span> auth()-&gt;user() &amp;&amp; auth()-&gt;user()-&gt;hasRole(<span class="hljs-string">'client'</span>) &amp;&amp; auth()-&gt;user()-&gt;isVerified();
}

<span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">getFullNameLong</span><span class="hljs-params">()</span>
</span>{
    <span class="hljs-keyword">return</span> <span class="hljs-string">'Mr. '</span> . <span class="hljs-keyword">$this</span>-&gt;first_name . <span class="hljs-string">' '</span> . <span class="hljs-keyword">$this</span>-&gt;middle_name . <span class="hljs-string">' '</span> . <span class="hljs-keyword">$this</span>-&gt;last_name;
}

<span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">getFullNameShort</span><span class="hljs-params">()</span>
</span>{
    <span class="hljs-keyword">return</span> <span class="hljs-keyword">$this</span>-&gt;first_name[<span class="hljs-number">0</span>] . <span class="hljs-string">'. '</span> . <span class="hljs-keyword">$this</span>-&gt;last_name;
}</code></pre>
                    <h2 id="articleHeader1">强大的模型 &amp; 简单控制器</h2>
                    <p>如果你使用查询构造器或原始 SQL 来查询，请将所有与数据库相关的逻辑放入 Eloquent 模型或存储库类中。 </p>
                    <p>坏：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="public function index()
{
    $clients = Client::verified()
        ->with(['orders' => function ($q) {
            $q->where('created_at', '>', Carbon::today()->subWeek());
        }])
        ->get();

    return view('index', ['clients' => $clients]);
}" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code><span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">index</span><span class="hljs-params">()</span>
</span>{
    $clients = Client::verified()
        -&gt;with([<span class="hljs-string">'orders'</span> =&gt; <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-params">($q)</span> </span>{
            $q-&gt;where(<span class="hljs-string">'created_at'</span>, <span class="hljs-string">'&gt;'</span>, Carbon::today()-&gt;subWeek());
        }])
        -&gt;get();

    <span class="hljs-keyword">return</span> view(<span class="hljs-string">'index'</span>, [<span class="hljs-string">'clients'</span> =&gt; $clients]);
}</code></pre>
                    <p>好：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="public function index()
{
    return view('index', ['clients' => $this->client->getWithNewOrders()]);
}

Class Client extends Model
{
    public function getWithNewOrders()
    {
        return $this->verified()
            ->with(['orders' => function ($q) {
                $q->where('created_at', '>', Carbon::today()->subWeek());
            }])
            ->get();
    }
}" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code><span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">index</span><span class="hljs-params">()</span>
</span>{
    <span class="hljs-keyword">return</span> view(<span class="hljs-string">'index'</span>, [<span class="hljs-string">'clients'</span> =&gt; <span class="hljs-keyword">$this</span>-&gt;client-&gt;getWithNewOrders()]);
}

<span class="hljs-class"><span class="hljs-keyword">Class</span> <span class="hljs-title">Client</span> <span class="hljs-keyword">extends</span> <span class="hljs-title">Model</span>
</span>{
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">getWithNewOrders</span><span class="hljs-params">()</span>
    </span>{
        <span class="hljs-keyword">return</span> <span class="hljs-keyword">$this</span>-&gt;verified()
            -&gt;with([<span class="hljs-string">'orders'</span> =&gt; <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-params">($q)</span> </span>{
                $q-&gt;where(<span class="hljs-string">'created_at'</span>, <span class="hljs-string">'&gt;'</span>, Carbon::today()-&gt;subWeek());
            }])
            -&gt;get();
    }
}</code></pre>
                    <h2 id="articleHeader2">验证</h2>
                    <p>将验证从控制器移动到请求类。 </p>
                    <p>很常见但不推荐的做法：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="public function store(Request $request)
{
    $request->validate([
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
        'publish_at' => 'nullable|date',
    ]);

    ....
}" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code><span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">store</span><span class="hljs-params">(Request $request)</span>
</span>{
    $request-&gt;validate([
        <span class="hljs-string">'title'</span> =&gt; <span class="hljs-string">'required|unique:posts|max:255'</span>,
        <span class="hljs-string">'body'</span> =&gt; <span class="hljs-string">'required'</span>,
        <span class="hljs-string">'publish_at'</span> =&gt; <span class="hljs-string">'nullable|date'</span>,
    ]);

    ....
}</code></pre>
                    <p>最好是这样：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="public function store(PostRequest $request)
{
    ....
}

class PostRequest extends Request
{
    public function rules()
    {
        return [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
            'publish_at' => 'nullable|date',
        ];
    }
}" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code><span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">store</span><span class="hljs-params">(PostRequest $request)</span>
</span>{
    ....
}

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">PostRequest</span> <span class="hljs-keyword">extends</span> <span class="hljs-title">Request</span>
</span>{
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">rules</span><span class="hljs-params">()</span>
    </span>{
        <span class="hljs-keyword">return</span> [
            <span class="hljs-string">'title'</span> =&gt; <span class="hljs-string">'required|unique:posts|max:255'</span>,
            <span class="hljs-string">'body'</span> =&gt; <span class="hljs-string">'required'</span>,
            <span class="hljs-string">'publish_at'</span> =&gt; <span class="hljs-string">'nullable|date'</span>,
        ];
    }
}</code></pre>
                    <h2 id="articleHeader3">业务逻辑应该在服务类中</h2>
                    <p>一个控制器必须只有一个职责，因此应该将业务逻辑从控制器移到服务类。 </p>
                    <p>坏：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="public function store(Request $request)
{
    if ($request->hasFile('image')) {
        $request->file('image')->move(public_path('images') . 'temp');
    }

    ....
}" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code><span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">store</span><span class="hljs-params">(Request $request)</span>
</span>{
    <span class="hljs-keyword">if</span> ($request-&gt;hasFile(<span class="hljs-string">'image'</span>)) {
        $request-&gt;file(<span class="hljs-string">'image'</span>)-&gt;move(public_path(<span class="hljs-string">'images'</span>) . <span class="hljs-string">'temp'</span>);
    }

    ....
}</code></pre>
                    <p>好：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="public function store(Request $request)
{
    $this->articleService->handleUploadedImage($request->file('image'));

    ....
}

class ArticleService
{
    public function handleUploadedImage($image)
    {
        if (!is_null($image)) {
            $image->move(public_path('images') . 'temp');
        }
    }
}" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code><span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">store</span><span class="hljs-params">(Request $request)</span>
</span>{
    <span class="hljs-keyword">$this</span>-&gt;articleService-&gt;handleUploadedImage($request-&gt;file(<span class="hljs-string">'image'</span>));

    ....
}

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ArticleService</span>
</span>{
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">handleUploadedImage</span><span class="hljs-params">($image)</span>
    </span>{
        <span class="hljs-keyword">if</span> (!is_null($image)) {
            $image-&gt;move(public_path(<span class="hljs-string">'images'</span>) . <span class="hljs-string">'temp'</span>);
        }
    }
}</code></pre>
                    <h2 id="articleHeader4">不要重复你自己（DRY）</h2>
                    <p>尽可能重用代码。 SRP（单一职责原则）正在帮助你避免重复。当然，这也包括了 Blade 模板、Eloquent 的范围等。</p>
                    <p>坏：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="public function getActive()
{
    return $this->where('verified', 1)->whereNotNull('deleted_at')->get();
}

public function getArticles()
{
    return $this->whereHas('user', function ($q) {
            $q->where('verified', 1)->whereNotNull('deleted_at');
        })->get();
}" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code><span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">getActive</span><span class="hljs-params">()</span>
</span>{
    <span class="hljs-keyword">return</span> <span class="hljs-keyword">$this</span>-&gt;where(<span class="hljs-string">'verified'</span>, <span class="hljs-number">1</span>)-&gt;whereNotNull(<span class="hljs-string">'deleted_at'</span>)-&gt;get();
}

<span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">getArticles</span><span class="hljs-params">()</span>
</span>{
    <span class="hljs-keyword">return</span> <span class="hljs-keyword">$this</span>-&gt;whereHas(<span class="hljs-string">'user'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-params">($q)</span> </span>{
            $q-&gt;where(<span class="hljs-string">'verified'</span>, <span class="hljs-number">1</span>)-&gt;whereNotNull(<span class="hljs-string">'deleted_at'</span>);
        })-&gt;get();
}</code></pre>
                    <p>好：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="public function scopeActive($q)
{
    return $q->where('verified', 1)->whereNotNull('deleted_at');
}

public function getActive()
{
    return $this->active()->get();
}

public function getArticles()
{
    return $this->whereHas('user', function ($q) {
            $q->active();
        })->get();
}" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code><span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">scopeActive</span><span class="hljs-params">($q)</span>
</span>{
    <span class="hljs-keyword">return</span> $q-&gt;where(<span class="hljs-string">'verified'</span>, <span class="hljs-number">1</span>)-&gt;whereNotNull(<span class="hljs-string">'deleted_at'</span>);
}

<span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">getActive</span><span class="hljs-params">()</span>
</span>{
    <span class="hljs-keyword">return</span> <span class="hljs-keyword">$this</span>-&gt;active()-&gt;get();
}

<span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">getArticles</span><span class="hljs-params">()</span>
</span>{
    <span class="hljs-keyword">return</span> <span class="hljs-keyword">$this</span>-&gt;whereHas(<span class="hljs-string">'user'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-params">($q)</span> </span>{
            $q-&gt;active();
        })-&gt;get();
}</code></pre>
                    <h2 id="articleHeader5">最好倾向于使用 Eloquent 而不是 Query Builder 和原生的 SQL 查询。要优先于数组的集合</h2>
                    <p>Eloquent 可以编写可读和可维护的代码。此外，Eloquent 也拥有很棒的内置工具，比如软删除、事件、范围等。</p>
                    <p>比如你这样写：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="SELECT *
FROM `articles`
WHERE EXISTS (SELECT *
              FROM `users`
              WHERE `articles`.`user_id` = `users`.`id`
              AND EXISTS (SELECT *
                          FROM `profiles`
                          WHERE `profiles`.`user_id` = `users`.`id`)
              AND `users`.`deleted_at` IS NULL)
AND `verified` = '1'
AND `active` = '1'
ORDER BY `created_at` DESC" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs n1ql"><code><span class="hljs-keyword">SELECT</span> *
<span class="hljs-keyword">FROM</span> <span class="hljs-symbol">`articles`</span>
<span class="hljs-keyword">WHERE</span> <span class="hljs-keyword">EXISTS</span> (<span class="hljs-keyword">SELECT</span> *
              <span class="hljs-keyword">FROM</span> <span class="hljs-symbol">`users`</span>
              <span class="hljs-keyword">WHERE</span> <span class="hljs-symbol">`articles`</span>.<span class="hljs-symbol">`user_id`</span> = <span class="hljs-symbol">`users`</span>.<span class="hljs-symbol">`id`</span>
              <span class="hljs-keyword">AND</span> <span class="hljs-keyword">EXISTS</span> (<span class="hljs-keyword">SELECT</span> *
                          <span class="hljs-keyword">FROM</span> <span class="hljs-symbol">`profiles`</span>
                          <span class="hljs-keyword">WHERE</span> <span class="hljs-symbol">`profiles`</span>.<span class="hljs-symbol">`user_id`</span> = <span class="hljs-symbol">`users`</span>.<span class="hljs-symbol">`id`</span>)
              <span class="hljs-keyword">AND</span> <span class="hljs-symbol">`users`</span>.<span class="hljs-symbol">`deleted_at`</span> <span class="hljs-keyword">IS</span> <span class="hljs-literal">NULL</span>)
<span class="hljs-keyword">AND</span> <span class="hljs-symbol">`verified`</span> = <span class="hljs-string">'1'</span>
<span class="hljs-keyword">AND</span> <span class="hljs-symbol">`active`</span> = <span class="hljs-string">'1'</span>
<span class="hljs-keyword">ORDER</span> <span class="hljs-keyword">BY</span> <span class="hljs-symbol">`created_at`</span> <span class="hljs-keyword">DESC</span></code></pre>
                    <p>还不如这样写：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="Article::has('user.profile')->verified()->latest()->get();" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs livescript"><code style="word-break: break-word; white-space: initial;">Article::has<span class="hljs-function"><span class="hljs-params">(<span class="hljs-string">'user.profile'</span>)</span>-&gt;</span>verified<span class="hljs-function"><span class="hljs-params">()</span>-&gt;</span>latest<span class="hljs-function"><span class="hljs-params">()</span>-&gt;</span>get();</code></pre>
                    <h2 id="articleHeader6">批量赋值</h2>
                    <p>比如你这样写：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="$article = new Article;
$article->title = $request->title;
$article->content = $request->content;
$article->verified = $request->verified;
// Add category to article
$article->category_id = $category->id;
$article->save();" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code>$article = <span class="hljs-keyword">new</span> Article;
$article-&gt;title = $request-&gt;title;
$article-&gt;content = $request-&gt;content;
$article-&gt;verified = $request-&gt;verified;
<span class="hljs-comment">// Add category to article</span>
$article-&gt;category_id = $category-&gt;id;
$article-&gt;save();</code></pre>
                    <p>是不是还不如这样写：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="$category->article()->create($request->all());" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs xl"><code style="word-break: break-word; white-space: initial;">$<span class="hljs-function"><span class="hljs-title">category</span>-&gt;</span><span class="hljs-function"><span class="hljs-title">article</span>()-&gt;</span><span class="hljs-function"><span class="hljs-title">create</span>($request-&gt;</span>all());</code></pre>
                    <h2 id="articleHeader7">不要在 Blade 模板中执行查询并使用关联加载（N + 1 问题）</h2>
                    <p>不好的地方在于，这对于100 个用户来说，等于执行 101 个 DB 查询：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="[@foreach](https://laravel-china.org/users/5651) (User::all() as $user)
    {{ $user->profile->name }}
@endforeach" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs markdown"><code>[<span class="hljs-string">@foreach</span>](<span class="hljs-link">https://laravel-china.org/users/5651</span>) (User::all() as $user)
<span class="hljs-code">    {{ $user-&gt;profile-&gt;name }}</span>
@endforeach</code></pre>
                    <p>下面的做法，对于 100 个用户来说，仅仅只执行 2 个 DB 查询：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="$users = User::with('profile')->get();

...

[[@foreach](https://laravel-china.org/users/5651)](https://laravel-china.org/users/5651) ($users as $user)
    {{ $user->profile->name }}
@endforeach" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs markdown"><code>$users = User::with('profile')-&gt;get();

...

[<span class="hljs-string">[@foreach</span>](<span class="hljs-link">https://laravel-china.org/users/5651</span>)](<span class="hljs-link">https://laravel-china.org/users/5651</span>) ($users as $user)
<span class="hljs-code">    {{ $user-&gt;profile-&gt;name }}</span>
@endforeach</code></pre>
                    <h2 id="articleHeader8">与其花尽心思给你的代码写注释，还不如对方法或变量写一个描述性的名称</h2>
                    <p>坏：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="if (count((array) $builder->getQuery()->joins) > 0)" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs lisp"><code style="word-break: break-word; white-space: initial;">if (<span class="hljs-name">count</span>((<span class="hljs-name">array</span>) $builder-&gt;getQuery()-&gt;joins) &gt; <span class="hljs-number">0</span>)</code></pre>
                    <p>好：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="// 确定是否有任何连接。
if (count((array) $builder->getQuery()->joins) > 0)" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code><span class="hljs-comment">// 确定是否有任何连接。</span>
<span class="hljs-keyword">if</span> (count((<span class="hljs-keyword">array</span>) $builder-&gt;getQuery()-&gt;joins) &gt; <span class="hljs-number">0</span>)</code></pre>
                    <p>最好：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="if ($this->hasJoins())" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs kotlin"><code style="word-break: break-word; white-space: initial;"><span class="hljs-keyword">if</span> ($<span class="hljs-keyword">this</span>-&gt;hasJoins())</code></pre>
                    <h2 id="articleHeader9">不要把 JS 和 CSS 放在 Blade 模板中，也不要将任何 HTML 放在 PHP 类中</h2>
                    <p>坏：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="let article = `{{ json_encode($article) }}`;" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs xquery"><code style="word-break: break-word; white-space: initial;"><span class="hljs-keyword">let</span> article = `{{ json_encode($article) }}`;</code></pre>
                    <p>好：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="<input id=&quot;article&quot; type=&quot;hidden&quot; value=&quot;{{ json_encode($article) }}&quot;>

Or

<button class=&quot;js-fav-article&quot; data-article=&quot;{{ json_encode($article) }}&quot;>{{ $article->name }}<button>" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs django"><code><span class="xml"><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"article"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"hidden"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"</span></span></span><span class="hljs-template-variable">{{ json_encode($article) }}</span><span class="xml"><span class="hljs-tag"><span class="hljs-string">"</span>&gt;</span>

Or

<span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"js-fav-article"</span> <span class="hljs-attr">data-article</span>=<span class="hljs-string">"</span></span></span><span class="hljs-template-variable">{{ json_encode($article) }}</span><span class="xml"><span class="hljs-tag"><span class="hljs-string">"</span>&gt;</span></span><span class="hljs-template-variable">{{ $article-&gt;name }}</span><span class="xml"><span class="hljs-tag">&lt;<span class="hljs-name">button</span>&gt;</span></span></code></pre>
                    <p>最好的方法是使用在 Javascript 中这样来传输数据：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="let article = $('#article').val();" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs ebnf"><code style="word-break: break-word; white-space: initial;"><span class="hljs-attribute">let article</span> = $(<span class="hljs-string">'#article'</span>).val();</code></pre>
                    <h2 id="articleHeader10">在代码中使用配置和语言文件、常量，而不是写死它</h2>
                    <p>坏：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="public function isNormal()
{
    return $article->type === 'normal';
}

return back()->with('message', 'Your article has been added!');" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code><span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">isNormal</span><span class="hljs-params">()</span>
</span>{
    <span class="hljs-keyword">return</span> $article-&gt;type === <span class="hljs-string">'normal'</span>;
}

<span class="hljs-keyword">return</span> back()-&gt;with(<span class="hljs-string">'message'</span>, <span class="hljs-string">'Your article has been added!'</span>);</code></pre>
                    <p>好：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="public function isNormal()
{
    return $article->type === Article::TYPE_NORMAL;
}

return back()->with('message', __('app.article_added'));" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code><span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">isNormal</span><span class="hljs-params">()</span>
</span>{
    <span class="hljs-keyword">return</span> $article-&gt;type === Article::TYPE_NORMAL;
}

<span class="hljs-keyword">return</span> back()-&gt;with(<span class="hljs-string">'message'</span>, __(<span class="hljs-string">'app.article_added'</span>));</code></pre>
                    <h2 id="articleHeader11">使用社区接受的标准的 Laravel 工具</h2>
                    <p>最好使用内置的 Laravel 功能和社区软件包，而不是其他第三方软件包和工具。因为将来与你的应用程序一起工作的开发人员都需要学习新的工具。另外，使用第三方软件包或工具的话，如果遇到困难，从 Laravel 社区获得帮助的机会会大大降低。不要让你的客户为此付出代价！</p>
                    <table>
                        <thead><tr>
                            <th>任务</th>
                            <th>标准工具</th>
                            <th>第三方工具</th>
                        </tr></thead>
                        <tbody>
                        <tr>
                            <td>授权</td>
                            <td>Policies</td>
                            <td>Entrust, Sentinel and other packages</td>
                        </tr>
                        <tr>
                            <td>前端编译</td>
                            <td>Laravel Mix</td>
                            <td>Grunt, Gulp, 3rd party packages</td>
                        </tr>
                        <tr>
                            <td>开发环境</td>
                            <td>Homestead</td>
                            <td>Docker</td>
                        </tr>
                        <tr>
                            <td>部署</td>
                            <td>Laravel Forge</td>
                            <td>Deployer and other solutions</td>
                        </tr>
                        <tr>
                            <td>单元测试</td>
                            <td>PHPUnit, Mockery</td>
                            <td>Phpspec</td>
                        </tr>
                        <tr>
                            <td>浏览器测试</td>
                            <td>Laravel Dusk</td>
                            <td>Codeception</td>
                        </tr>
                        <tr>
                            <td>数据库操作</td>
                            <td>Eloquent</td>
                            <td>SQL, Doctrine</td>
                        </tr>
                        <tr>
                            <td>模板</td>
                            <td>Blade</td>
                            <td>Twig</td>
                        </tr>
                        <tr>
                            <td>数据操作</td>
                            <td>Laravel collections</td>
                            <td>Arrays</td>
                        </tr>
                        <tr>
                            <td>表单验证</td>
                            <td>Request classes</td>
                            <td>3rd party packages, validation in controller</td>
                        </tr>
                        <tr>
                            <td>认证</td>
                            <td>Built-in</td>
                            <td>3rd party packages, your own solution</td>
                        </tr>
                        <tr>
                            <td>API 认证</td>
                            <td>Laravel Passport</td>
                            <td>3rd party JWT and OAuth packages</td>
                        </tr>
                        <tr>
                            <td>创建 API</td>
                            <td>Built-in</td>
                            <td>Dingo API and similar packages</td>
                        </tr>
                        <tr>
                            <td>数据库结构操作</td>
                            <td>Migrations</td>
                            <td>Working with DB structure directly</td>
                        </tr>
                        <tr>
                            <td>局部化</td>
                            <td>Built-in</td>
                            <td>3rd party packages</td>
                        </tr>
                        <tr>
                            <td>实时用户接口</td>
                            <td>Laravel Echo, Pusher</td>
                            <td>3rd party packages and working with WebSockets directly</td>
                        </tr>
                        <tr>
                            <td>Generating testing data</td>
                            <td>Seeder classes, Model Factories, Faker</td>
                            <td>Creating testing data manually</td>
                        </tr>
                        <tr>
                            <td>生成测试数据</td>
                            <td>Laravel Task Scheduler</td>
                            <td>Scripts and 3rd party packages</td>
                        </tr>
                        <tr>
                            <td>数据库</td>
                            <td>MySQL, PostgreSQL, SQLite, SQL Server</td>
                            <td>MongoDB</td>
                        </tr>
                        </tbody>
                    </table>
                    <h2 id="articleHeader12">遵循Laravel命名约定</h2>
                    <p>遵循 <a href="http://www.php-fig.org/psr/psr-2/" rel="nofollow noreferrer" target="_blank">PSR 标准</a>。 另外，请遵循 Laravel 社区接受的命名约定：</p>
                    <table>
                        <thead><tr>
                            <th>类型</th>
                            <th>规则</th>
                            <th>正确示例</th>
                            <th>错误示例</th>
                        </tr></thead>
                        <tbody>
                        <tr>
                            <td>Controller</td>
                            <td>单数</td>
                            <td>ArticleController</td>
                            <td><del>ArticlesController</del></td>
                        </tr>
                        <tr>
                            <td>Route</td>
                            <td>复数</td>
                            <td>articles/1</td>
                            <td><del>article/1</del></td>
                        </tr>
                        <tr>
                            <td>Named route</td>
                            <td>带点符号的蛇形命名</td>
                            <td>users.show_active</td>
                            <td><del>users.show-active, show-active-users</del></td>
                        </tr>
                        <tr>
                            <td>Model</td>
                            <td>单数</td>
                            <td>User</td>
                            <td><del>Users</del></td>
                        </tr>
                        <tr>
                            <td>hasOne or belongsTo relationship</td>
                            <td>单数</td>
                            <td>articleComment</td>
                            <td><del>articleComments, article_comment</del></td>
                        </tr>
                        <tr>
                            <td>All other relationships</td>
                            <td>复数</td>
                            <td>articleComments</td>
                            <td><del>articleComment, article_comments</del></td>
                        </tr>
                        <tr>
                            <td>Table</td>
                            <td>复数</td>
                            <td>article_comments</td>
                            <td><del>article_comment, articleComments</del></td>
                        </tr>
                        <tr>
                            <td>Pivot table</td>
                            <td>按字母顺序排列的单数模型名称</td>
                            <td>article_user</td>
                            <td><del>user_article, articles_users</del></td>
                        </tr>
                        <tr>
                            <td>Table column</td>
                            <td>带着模型名称的蛇形命名</td>
                            <td>meta_title</td>
                            <td><del>MetaTitle; article_meta_title</del></td>
                        </tr>
                        <tr>
                            <td>Foreign key</td>
                            <td>带_id后缀的单数型号名称</td>
                            <td>article_id</td>
                            <td><del>ArticleId, id_article, articles_id</del></td>
                        </tr>
                        <tr>
                            <td>Primary key</td>
                            <td>-</td>
                            <td>id</td>
                            <td><del>custom_id</del></td>
                        </tr>
                        <tr>
                            <td>Migration</td>
                            <td>-</td>
                            <td>2017_01_01_000000_create_articles_table</td>
                            <td><del>2017_01_01_000000_articles</del></td>
                        </tr>
                        <tr>
                            <td>Method</td>
                            <td>小驼峰命名</td>
                            <td>getAll</td>
                            <td><del>get_all</del></td>
                        </tr>
                        <tr>
                            <td>Method in resource controller</td>
                            <td><a href="https://laravel.com/docs/master/controllers#resource-controllers" rel="nofollow noreferrer" target="_blank">具体看表格</a></td>
                            <td>store</td>
                            <td><del>saveArticle</del></td>
                        </tr>
                        <tr>
                            <td>Method in test class</td>
                            <td>小驼峰命名</td>
                            <td>testGuestCannotSeeArticle</td>
                            <td><del>test_guest_cannot_see_article</del></td>
                        </tr>
                        <tr>
                            <td>Variable</td>
                            <td>小驼峰命名</td>
                            <td>$articlesWithAuthor</td>
                            <td><del>$articles_with_author</del></td>
                        </tr>
                        <tr>
                            <td>Collection</td>
                            <td>具描述性的复数形式</td>
                            <td>$activeUsers = User::active()-&gt;get()</td>
                            <td><del>$active, $data</del></td>
                        </tr>
                        <tr>
                            <td>Object</td>
                            <td>具描述性的单数形式</td>
                            <td>$activeUser = User::active()-&gt;first()</td>
                            <td><del>$users, $obj</del></td>
                        </tr>
                        <tr>
                            <td>Config and language files index</td>
                            <td>蛇形命名</td>
                            <td>articles_enabled</td>
                            <td><del>ArticlesEnabled; articles-enabled</del></td>
                        </tr>
                        <tr>
                            <td>View</td>
                            <td>蛇形命名</td>
                            <td>show_filtered.blade.php</td>
                            <td><del>showFiltered.blade.php, show-filtered.blade.php</del></td>
                        </tr>
                        <tr>
                            <td>Config</td>
                            <td>蛇形命名</td>
                            <td>google_calendar.php</td>
                            <td><del>googleCalendar.php, google-calendar.php</del></td>
                        </tr>
                        <tr>
                            <td>Contract (interface)</td>
                            <td>形容词或名词</td>
                            <td>Authenticatable</td>
                            <td><del>AuthenticationInterface, IAuthentication</del></td>
                        </tr>
                        <tr>
                            <td>Trait</td>
                            <td>形容词</td>
                            <td>Notifiable</td>
                            <td><del>NotificationTrait</del></td>
                        </tr>
                        </tbody>
                    </table>
                    <h2 id="articleHeader13">尽可能使用更短、更易读的语法</h2>
                    <p>坏：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="$request->session()->get('cart');
$request->input('name');" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs xl"><code>$<span class="hljs-function"><span class="hljs-title">request</span>-&gt;</span><span class="hljs-function"><span class="hljs-title">session</span>()-&gt;</span>get(<span class="hljs-string">'cart'</span>);
$<span class="hljs-function"><span class="hljs-title">request</span>-&gt;</span>input(<span class="hljs-string">'name'</span>);</code></pre>
                    <p>好：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="session('cart');
$request->name;" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs xl"><code>session(<span class="hljs-string">'cart'</span>);
$<span class="hljs-function"><span class="hljs-title">request</span>-&gt;</span><span class="hljs-keyword">name</span>;</code></pre>
                    <p>更多示例：</p>
                    <table>
                        <thead><tr>
                            <th>通用语法</th>
                            <th>更短、更可读的语法</th>
                        </tr></thead>
                        <tbody>
                        <tr>
                            <td><code>Session::get('cart')</code></td>
                            <td><code>session('cart')</code></td>
                        </tr>
                        <tr>
                            <td><code>$request-&gt;session()-&gt;get('cart')</code></td>
                            <td><code>session('cart')</code></td>
                        </tr>
                        <tr>
                            <td><code>Session::put('cart', $data)</code></td>
                            <td><code>session(['cart' =&gt; $data])</code></td>
                        </tr>
                        <tr>
                            <td><code>$request-&gt;input('name'), Request::get('name')</code></td>
                            <td><code>$request-&gt;name, request('name')</code></td>
                        </tr>
                        <tr>
                            <td><code>return Redirect::back()</code></td>
                            <td><code>return back()</code></td>
                        </tr>
                        <tr>
                            <td><code>is_null($object-&gt;relation) ? $object-&gt;relation-&gt;id : null }</code></td>
                            <td><code>optional($object-&gt;relation)-&gt;id</code></td>
                        </tr>
                        <tr>
                            <td><code>return view('index')-&gt;with('title', $title)-&gt;with('client', $client)</code></td>
                            <td><code>return view('index', compact('title', 'client'))</code></td>
                        </tr>
                        <tr>
                            <td><code>$request-&gt;has('value') ? $request-&gt;value : 'default';</code></td>
                            <td><code>$request-&gt;get('value', 'default')</code></td>
                        </tr>
                        <tr>
                            <td><code>Carbon::now(), Carbon::today()</code></td>
                            <td><code>now(), today()</code></td>
                        </tr>
                        <tr>
                            <td><code>App::make('Class')</code></td>
                            <td><code>app('Class')</code></td>
                        </tr>
                        <tr>
                            <td><code>-&gt;where('column', '=', 1)</code></td>
                            <td><code>-&gt;where('column', 1)</code></td>
                        </tr>
                        <tr>
                            <td><code>-&gt;orderBy('created_at', 'desc')</code></td>
                            <td><code>-&gt;latest()</code></td>
                        </tr>
                        <tr>
                            <td><code>-&gt;orderBy('age', 'desc')</code></td>
                            <td><code>-&gt;latest('age')</code></td>
                        </tr>
                        <tr>
                            <td><code>-&gt;orderBy('created_at', 'asc')</code></td>
                            <td><code>-&gt;oldest()</code></td>
                        </tr>
                        <tr>
                            <td><code>-&gt;select('id', 'name')-&gt;get()</code></td>
                            <td><code>-&gt;get(['id', 'name'])</code></td>
                        </tr>
                        <tr>
                            <td><code>-&gt;first()-&gt;name</code></td>
                            <td><code>-&gt;value('name')</code></td>
                        </tr>
                        </tbody>
                    </table>
                    <h2 id="articleHeader14">使用 IoC 容器或 <strong>facades</strong> 代替新的 Class</h2>
                    <p>新的 Class 语法创建类时，不仅使得类与类之间紧密耦合，还加重了测试的复杂度。推荐改用 IoC 容器或 facades。 </p>
                    <p>坏：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="$user = new User;
$user->create($request->all());" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code>$user = <span class="hljs-keyword">new</span> User;
$user-&gt;create($request-&gt;all());</code></pre>
                    <p>好：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="public function __construct(User $user)
{
    $this->user = $user;
}

....

$this->user->create($request->all());" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code><span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__construct</span><span class="hljs-params">(User $user)</span>
</span>{
    <span class="hljs-keyword">$this</span>-&gt;user = $user;
}

....

<span class="hljs-keyword">$this</span>-&gt;user-&gt;create($request-&gt;all());</code></pre>
                    <h2 id="articleHeader15">不要直接从 <code>.env</code> 文件获取数据</h2>
                    <p>将数据传递给配置文件，然后使用辅助函数&nbsp;<code>config()</code>&nbsp;在应用程序中使用数据。</p>
                    <p>坏：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="$apiKey = env('API_KEY');" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs mel"><code style="word-break: break-word; white-space: initial;">$apiKey = <span class="hljs-keyword">env</span>(<span class="hljs-string">'API_KEY'</span>);</code></pre>
                    <p>好：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="// config/api.php
'key' => env('API_KEY'),

// Use the data
$apiKey = config('api.key');" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs mel"><code><span class="hljs-comment">// config/api.php</span>
<span class="hljs-string">'key'</span> =&gt; <span class="hljs-keyword">env</span>(<span class="hljs-string">'API_KEY'</span>),

<span class="hljs-comment">// Use the data</span>
$apiKey = config(<span class="hljs-string">'api.key'</span>);</code></pre>
                    <h2 id="articleHeader16">以标准格式存储日期，必要时就使用访问器和修改器来修改日期格式</h2>
                    <p>坏：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="{{ Carbon::createFromFormat('Y-d-m H-i', $object->ordered_at)->toDateString() }}
{{ Carbon::createFromFormat('Y-d-m H-i', $object->ordered_at)->format('m-d') }}" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs clojure"><code>{{ Carbon::createFromFormat(<span class="hljs-name">'Y-d-m</span> H-i', $object-&gt;ordered_at)-&gt;toDateString() }}
{{ Carbon::createFromFormat(<span class="hljs-name">'Y-d-m</span> H-i', $object-&gt;ordered_at)-&gt;format(<span class="hljs-name">'m-d'</span>) }}</code></pre>
                    <p>好：</p>
                    <div class="widget-codetool" style="display:none;">
                        <div class="widget-codetool--inner">
                            <span class="selectCode code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="全选"></span>
                            <span type="button" class="copyCode code-tool" data-toggle="tooltip" data-placement="top" data-clipboard-text="// Model
protected $dates = ['ordered_at', 'created_at', 'updated_at']
public function getMonthDayAttribute($date)
{
    return $date->format('m-d');
}

// View
{{ $object->ordered_at->toDateString() }}
{{ $object->ordered_at->monthDay }}
" title="" data-original-title="复制"></span>
                            <span type="button" class="saveToNote code-tool" data-toggle="tooltip" data-placement="top" title="" data-original-title="放进笔记"></span>
                        </div>
                    </div><pre class="hljs php"><code><span class="hljs-comment">// Model</span>
<span class="hljs-keyword">protected</span> $dates = [<span class="hljs-string">'ordered_at'</span>, <span class="hljs-string">'created_at'</span>, <span class="hljs-string">'updated_at'</span>]
<span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">getMonthDayAttribute</span><span class="hljs-params">($date)</span>
</span>{
    <span class="hljs-keyword">return</span> $date-&gt;format(<span class="hljs-string">'m-d'</span>);
}

<span class="hljs-comment">// View</span>
{{ $object-&gt;ordered_at-&gt;toDateString() }}
{{ $object-&gt;ordered_at-&gt;monthDay }}
</code></pre>
                    <h2 id="articleHeader17">其他良好做法</h2>
                    <ul>
                        <li>千万不要在路由文件中放置任何逻辑。</li>
                        <li>在 Blade 模板中最小化 vanilla PHP 的使用。</li>
                    </ul>
                    <blockquote>更多现代化 PHP 知识，请前往 <a href="https://laravel-china.org/articles/12762" rel="nofollow noreferrer" target="_blank">Laravel / PHP 知识社区</a>
                    </blockquote>

                </div>



                <div class="clearfix mt10">
                    <ul class="article-operation list-inline pull-left mt15"><li><a target="_blank" href="https://creativecommons.org/licenses/by-nc-nd/4.0/"><img class="mb5" src="https://static.segmentfault.com/v-5b1df2a7/global/img/creativecommons-cc.svg" height="20"></a></li><li class="dropdown js__content-ops hidden-xs" data-module="article" data-id="1190000015166527" data-typetext="文章"><a href="javascript:void(0);" class="dropdown-toggle text-muted" data-toggle="dropdown"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a><ul class="dropdown-menu dropdown-menu-left"><li><a href="#911" data-toggle="modal" data-target="#911" data-action="report">举报</a></li></ul></li></ul>
                    <div class="pull-right mt-10 hidden-xs">
                        <div class="widget-share__full" data-text="Laravel 的十八个最佳实践" data-url="https://segmentfault.com/a/1190000015166527" data-shorturl="http://sfau.lt/b5bbNFz"><div class="widget-share-network sharer-0" style="display: block;"><ul class="sn-inline"><li data-network="weibo"><a href="javascript:void(0);" class="entypo-weibo icon-sn-weibo share-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="分享至新浪微博">新浪微博</a></li><li data-network="wechart"><a href="javascript:void(0);" class="entypo-wechart icon-sn-weixin share-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="分享至微信">微信</a></li><li data-network="twitter"><a href="javascript:void(0);" class="entypo-twitter icon-sn-twitter share-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="分享至 Twitter">Twitter</a></li><li data-network="facebook"><a href="javascript:void(0);" class="entypo-facebook icon-sn-facebook share-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="分享至 Facebook">Facebook</a></li></ul></div><a type="button" class="btn btn-sm shareMore btn-sn-more" data-toggle="popover" data-placement="top" data-url="https://segmentfault.com/a/1190000015166527" data-shorturl="http://sfau.lt/b5bbNFz"><span class="icon-sn-dotted" data-original-title="" title=""></span><strong class="visible-xs-inline">•••</strong></a></div>


                    </div>
                </div>
                <div class="mt10 text-center mb30"><button type="button" id="mainLike" data-id="1190000015166527" class="btn btn-success btn-lg mr15 "><span id="mainLikeText">赞</span>&nbsp;&nbsp;<span class="seprator">|</span>&nbsp;&nbsp;
                    <span id="mainLikeNum">28 </span></button><button type="button" id="mainBookmark" data-type="article" data-id="1190000015166527" class="btn btn-default btn-lg "><span id="mainBookmarkText">收藏</span>&nbsp;&nbsp;<span class="seprator">|</span>&nbsp;&nbsp;<span id="mainBookmarkNum">55</span></button></div>


                <div class="recommend-post pt30 mt40 mb30 border-top hidden-lg hidden-md">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mt0 mb20">你可能感兴趣的文章</h4>
                            <ul class="widget-links list-unstyled">
                                <li class="widget-links__item mb0">
                                    <a href="/a/1190000007984465" title="数据分析 - 最火的 PHP 框架是哪个？">数据分析 - 最火的 PHP 框架是哪个？</a>
                                </li>
                                <li class="widget-links__item mb0">
                                    <a href="/a/1190000004286815" title="PHP 之 Laravel 框架安装及相关开源软件">PHP 之 Laravel 框架安装及相关开源软件</a>
                                </li>
                                <li class="widget-links__item mb0">
                                    <a href="/a/1190000010517754" title="Ruby 程序员学习 laravel 框架笔记 (1)-php 开发环境安装">Ruby 程序员学习 laravel 框架笔记 (1)-php 开发环境安装</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <h4 class="mt0 mb20">系列文章</h4>
                            <ul class="widget-links list-unstyled">
                                <li class="widget-links__item mb0">
                                    <a href="/a/1190000015090891" title="10 个优质的 Laravel 扩展推荐">10 个优质的 Laravel 扩展推荐</a>
                                </li>
                                <li class="widget-links__item mb0">
                                    <a href="/a/1190000015208089" title="Laravel 程序架构设计思路：使用动作类">Laravel 程序架构设计思路：使用动作类</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>


                <div class="comments--news comments--default comments--article
    " data-id="1190000015166527" data-user-id="" data-author-id="1030000000093132 " data-is-admin="null" id="goToReplyArea">
                    <div class="mb10 clearfix">
                        <strong class="comments-stat pull-left mr10">4 条评论</strong>

                        <div class="btn-group btn-group-xs pull-right comments-sort btn-group-menu" role="menu">
                            <a href="javascript:;" class="btn btn-default active" data-sort="default">默认排序</a>
                            <a href="javascript:;" class="btn btn-default" data-sort="desc">时间排序</a>
                        </div>
                    </div>
                    <div class="comments-container">
                        <div class="comments-list">
                            <div class="comments-item" data-id="1050000015176142">
                                <div class="pull-left">
                                    <a href="/u/xiaomeng_139107" target="_blank"><img class="avatar-32 " src="https://sfault-avatar.b0.upaiyun.com/392/329/392329009-1030000000139107_big64" alt=""></a>
                                </div>
                                <div class="comments-content">
                                    <div class="comment-trigger">
                                        <div class="pull-right comment-option">
                                            <a href="#911" class="ml10" data-toggle="modal" data-target="#911" data-action="report" data-action-text="举报" data-module="comment" data-id="1050000015176142" data-typetext="评论" data-placement="top" title="举报"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span></a>
                                        </div>
                                        <strong><a target="_blank" href="/u/xiaomeng_139107">小萌</a></strong>
                                        <span class="comments-isAuthor hide"></span>
                                        <span class="comments-date">  ·  6 天前</span>
                                    </div>

                                    <div class="fmt mb10"><p>后端使用 php  laravel 最新版 <a href="https://www.1024ma.com" rel="nofollow noreferrer" target="_blank">https://www.1024ma.com</a> 欢迎大神指导评论哈</p></div>

                                    <form action="/api/comment/1050000015176142/edit">
                                        <div class="form-group">
                                            <textarea class="editTextarea mono form-control mb10 hidden" rows="1" name="text" style="height: 28px; overflow: hidden; word-wrap: break-word;">后端使用 php  laravel 最新版 https://www.1024ma.com 欢迎大神指导评论哈</textarea>
                                        </div>
                                    </form>

                                    <p class="comment-ops not-reply">
                    <span class="comments-zan ">
                        <i class="fa fa-thumbs-up mr4" aria-hidden="true"></i>
                        <span class="comments-zan-text">赞</span>
                        <span class="comments-zan-value"></span>
                    </span>

                                        <span class="ml15 comments-reply-btn">回复</span>

                                        <span class="pull-right editBtns hidden">
                      <button class="btn btn-link btn-xs cancel" type="button">取消</button>
                      <button class="btn btn-primary btn-xs edit ml10" type="button">保存</button>
                    </span>
                                    </p>

                                    <div class="reply-list reply-list--empty">


                                        <div class="reply-item reply-item--ops" data-obj="obj">
                                            <a class="reply-inner-btn" href="javascript:;">添加回复</a>

                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="comments-item" data-id="1050000015194511">
                                <div class="pull-left">
                                    <a href="/u/jaackie" target="_blank"><img class="avatar-32 " src="https://sfault-avatar.b0.upaiyun.com/333/499/3334996702-5a4f236bbd10b_big64" alt=""></a>
                                </div>
                                <div class="comments-content">
                                    <div class="comment-trigger">
                                        <div class="pull-right comment-option">
                                            <a href="#911" class="ml10" data-toggle="modal" data-target="#911" data-action="report" data-action-text="举报" data-module="comment" data-id="1050000015194511" data-typetext="评论" data-placement="top" title="举报"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span></a>
                                        </div>
                                        <strong><a target="_blank" href="/u/jaackie">Jaackie</a></strong>
                                        <span class="comments-isAuthor hide"></span>
                                        <span class="comments-date">  ·  5 天前</span>
                                    </div>

                                    <div class="fmt mb10"><p>感觉进入Laravel就是进入设计的殿堂，不知道有没有啥按照这个规范来开发的开源项目，想要观摩下</p></div>

                                    <form action="/api/comment/1050000015194511/edit">
                                        <div class="form-group">
                                            <textarea class="editTextarea mono form-control mb10 hidden" rows="1" name="text" style="height: 28px; overflow: hidden; word-wrap: break-word;">感觉进入Laravel就是进入设计的殿堂，不知道有没有啥按照这个规范来开发的开源项目，想要观摩下</textarea>
                                        </div>
                                    </form>

                                    <p class="comment-ops not-reply">
                    <span class="comments-zan ">
                        <i class="fa fa-thumbs-up mr4" aria-hidden="true"></i>
                        <span class="comments-zan-text">赞</span>
                        <span class="comments-zan-value"></span>
                    </span>

                                        <span class="ml15 comments-reply-btn">回复</span>

                                        <span class="pull-right editBtns hidden">
                      <button class="btn btn-link btn-xs cancel" type="button">取消</button>
                      <button class="btn btn-primary btn-xs edit ml10" type="button">保存</button>
                    </span>
                                    </p>

                                    <div class="reply-list reply-list--empty">


                                        <div class="reply-item reply-item--ops" data-obj="obj">
                                            <a class="reply-inner-btn" href="javascript:;">添加回复</a>

                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="comments-item" data-id="1050000015196176">
                                <div class="pull-left">
                                    <a href="/u/byi" target="_blank"><img class="avatar-32 " src="https://sfault-avatar.b0.upaiyun.com/210/326/210326976-575c0cf570c74_big64" alt=""></a>
                                </div>
                                <div class="comments-content">
                                    <div class="comment-trigger">
                                        <div class="pull-right comment-option">
                                            <a href="#911" class="ml10" data-toggle="modal" data-target="#911" data-action="report" data-action-text="举报" data-module="comment" data-id="1050000015196176" data-typetext="评论" data-placement="top" title="举报"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span></a>
                                        </div>
                                        <strong><a target="_blank" href="/u/byi">冰__翼</a></strong>
                                        <span class="comments-isAuthor hide"></span>
                                        <span class="comments-date">  ·  5 天前</span>
                                    </div>

                                    <div class="fmt mb10"><p>感谢分享。另外更正一下，“使用 IoC 容器或 facades 代替新的 Class”， 应该是 “new Class”，不是“新的 Class”</p></div>

                                    <form action="/api/comment/1050000015196176/edit">
                                        <div class="form-group">
                                            <textarea class="editTextarea mono form-control mb10 hidden" rows="1" name="text" style="height: 28px; overflow: hidden; word-wrap: break-word;">感谢分享。另外更正一下，“使用 IoC 容器或 facades 代替新的 Class”， 应该是 “new Class”，不是“新的 Class”</textarea>
                                        </div>
                                    </form>

                                    <p class="comment-ops not-reply">
                    <span class="comments-zan ">
                        <i class="fa fa-thumbs-up mr4" aria-hidden="true"></i>
                        <span class="comments-zan-text">赞</span>
                        <span class="comments-zan-value"></span>
                    </span>

                                        <span class="ml15 comments-reply-btn">回复</span>

                                        <span class="pull-right editBtns hidden">
                      <button class="btn btn-link btn-xs cancel" type="button">取消</button>
                      <button class="btn btn-primary btn-xs edit ml10" type="button">保存</button>
                    </span>
                                    </p>

                                    <div class="reply-list reply-list--empty">


                                        <div class="reply-item reply-item--ops" data-obj="obj">
                                            <a class="reply-inner-btn" href="javascript:;">添加回复</a>

                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="comments-item" data-id="1050000015212858">
                                <div class="pull-left">
                                    <a href="/u/lavenkin" target="_blank"><img class="avatar-32 " src="https://sfault-avatar.b0.upaiyun.com/280/347/2803473478-54c5cc5a19d74_big64" alt=""></a>
                                </div>
                                <div class="comments-content">
                                    <div class="comment-trigger">
                                        <div class="pull-right comment-option">
                                            <a href="#911" class="ml10" data-toggle="modal" data-target="#911" data-action="report" data-action-text="举报" data-module="comment" data-id="1050000015212858" data-typetext="评论" data-placement="top" title="举报"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span></a>
                                        </div>
                                        <strong><a target="_blank" href="/u/lavenkin">Lavenkin</a></strong>
                                        <span class="comments-isAuthor hide"></span>
                                        <span class="comments-date">  ·  4 天前</span>
                                    </div>

                                    <div class="fmt mb10"><p>很好，规范laravel开发设计才能真正发挥它代码优雅之处</p></div>

                                    <form action="/api/comment/1050000015212858/edit">
                                        <div class="form-group">
                                            <textarea class="editTextarea mono form-control mb10 hidden" rows="1" name="text" style="height: 28px; overflow: hidden; word-wrap: break-word;">很好，规范laravel开发设计才能真正发挥它代码优雅之处</textarea>
                                        </div>
                                    </form>

                                    <p class="comment-ops not-reply">
                    <span class="comments-zan ">
                        <i class="fa fa-thumbs-up mr4" aria-hidden="true"></i>
                        <span class="comments-zan-text">赞</span>
                        <span class="comments-zan-value"></span>
                    </span>

                                        <span class="ml15 comments-reply-btn">回复</span>

                                        <span class="pull-right editBtns hidden">
                      <button class="btn btn-link btn-xs cancel" type="button">取消</button>
                      <button class="btn btn-primary btn-xs edit ml10" type="button">保存</button>
                    </span>
                                    </p>

                                    <div class="reply-list reply-list--empty">


                                        <div class="reply-item reply-item--ops" data-obj="obj">
                                            <a class="reply-inner-btn" href="javascript:;">添加回复</a>

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="comments-loading hide">载入中...</div>
                        <div class="comments-more hide"><a href="javascript:;">显示更多评论</a></div>


                        <div class="comments-box" id="goToReplyEditor">
                            <div class="pull-left">
                                <img class="avatar-32 " src="https://static.segmentfault.com/v-5b1df2a7/global/img/user-128.png" alt="">
                            </div>
                            <div class="comments-box-content">
                                <form action="/api/article/1190000015166527/comments/add">
                                    <div class="form-group mb0">
                                        <textarea name="text" rows="3" class="form-control" placeholder="文明社会，理性评论"></textarea>
                                        <div class="mt15 text-right">
                                            <button type="button" class="hide"></button>
                                            <button class=" btn btn-primary" type="button">发布评论</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




                <div id="mm_124884735_33830642_143436142" class="mt20 ad-detail-mm hidden-xs"><div id="ac_wrap_mm_124884735_33830642_143436142" style="width:728px"><script async=""></script>
                    <!-- 中部横幅广告位 -->
                    <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-6330872677300335" data-ad-slot="5598290435" data-adsbygoogle-status="done"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:728px;background-color:transparent;"><ins id="aswift_0_anchor" style="display:block;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:728px;background-color:transparent;"><iframe width="728" height="90" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;width:728px;height:90px;"></iframe></ins></ins></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script><script type="text/javascript"></script><script type="text/javascript"></script><script type="text/javascript"></script><script type="text/javascript"></script><script type="text/javascript"></script></div></div>
                <style>
                    #mm_124884735_33830642_143436142 {
                        display: flex;
                        justify-content: center;
                    }
                </style>

            </div><!-- /.main -->


            <div class="col-md-3 side hidden-sm hidden-xs">

                <div class="mb25 hidden-md hidden-sm hidden-xs">
                    <img src="https://sfault-image.b0.upaiyun.com/997/949/997949714-5b173af81f7d0" alt="Planets" usemap="#gridsMap" width="255" height="255">
                    <map name="gridsMap" id="gridsMap"><area shape="rect" target="_blank" onMouseOver="d(this)" onMouseOut="e(this)" coords="119,0,136,17" href="https://www.xiaoduyu.com" stitle="兴趣社区"><area shape="rect" target="_blank" onMouseOver="d(this)" onMouseOut="e(this)" coords="0,0,17,17" href="http://www.regmy.cn/" stitle="喜迎6.18，域名注册优惠多多"><area shape="rect" target="_blank" onMouseOver="d(this)" onMouseOut="e(this)" coords="17,17,51,34" href="http://sealyun.com/pro/products/?from=seg" stitle="kubernetes离线安装，只需三步,sealyun提供"><area shape="rect" target="_blank" onMouseOver="d(this)" onMouseOut="e(this)" coords="0,238,17,255" href="https://j.youzan.com/pEaMBY" stitle="别吃饭了，我们喂养你~"><area shape="rect" target="_blank" onMouseOver="d(this)" onMouseOut="e(this)" coords="0,119,17,136" href="https://www.ctolib.com" stitle="码库ctolib每天更新最新的GitHub开源项目"><area shape="rect" target="_blank" onMouseOver="d(this)" onMouseOut="e(this)" coords="0,204,17,221" href="https://phpcasts.org?from=sf" stitle="PHPCasts - PHP免费视频教程"></map>
                    <div style="text-align: center;"><a style="text-align:center; color:#9E9E9E; font-size:12px" href="/sponsor">想在上方展示你的广告？</a></div>
                    <script>
                        let areaArr = []
                        fetch("https://sfault-files.b0.upaiyun.com/414/495/4144954725-5b173af89ffad.json?_upt=ea1654451528787257")
                            .then(res => res.json())
                        .then(data => {
                            var sTitle="";
                        window.d = function(o) {
                            sTitle = o.getAttribute('stitle');
                        }

                        window.e = function(o) {
                            sTitle = "";
                        }

                        data.forEach(item => {
                            let html = `<area shape="rect"
                        target="_blank"
                        onmouseover="d(this)"
                        onmouseout="e(this)"
                        coords="${item.area_info.left},${item.area_info.top},${(+item.area_info.left)+(+item.area_info.width)},${(+item.area_info.top)+(+item.area_info.height)}"
                        href="${item.link}"
                        stitle="${item.title}" />`
                            areaArr.push(html)
                        })
                        document.getElementById('gridsMap').innerHTML = areaArr.join('')

                        document.getElementById('gridsMap').onmouseenter = function(e) {
                            document.getElementById("gridMapHoverBox").style.display = "block"
                        }

                        document.getElementById('gridsMap').onmousemove = function(e) {
                            let pos = getMousePos(e)

                            document.getElementById("gridMapHoverBox").style.left = pos.x + 20 + 'px'
                            document.getElementById("gridMapHoverBox").style.top = pos.y + 20 + 'px'

                            document.getElementById("gridMapHoverBox").innerHTML = sTitle

                        }

                        document.getElementById('gridsMap').onmouseout= function(e) {
                            document.getElementById("gridMapHoverBox").innerHTML = sTitle
                            document.getElementById("gridMapHoverBox").style.display = "none"
                        }
                        })

                        function getMousePos(event) {
                            var e = event || window.event;
                            var scrollX = document.documentElement.scrollLeft || document.body.scrollLeft;
                            var scrollY = document.documentElement.scrollTop || document.body.scrollTop;
                            var x = e.pageX || e.clientX + scrollX;
                            var y = e.pageY || e.clientY + scrollY;
                            return { 'x': x, 'y': y };
                        }
                    </script>
                </div>


                <div id="mm_124884735_33830642_145440102" class="mb25 ad-should-be-fixed hidden-md stuckMenu" style="display: block; position: relative; top: 0px;"><div class="sfad-list"><div class="sfad-item"><a target="_blank" href="https://afptrack.alimama.com/clk?bid=0a67342300005b1e1fd010f379ac1741&amp;pid=mm_124884735_33830642_145440102&amp;cid=269154&amp;mid=253922&amp;oid=34478&amp;productType=1&amp;qytInfoMTime=1528653759&amp;e=I6qwXZCGR%2BKMpq0A4M5XO0Pt8JjfeZiJ9mXbrCBe6LR7gMU5avX06IjqbnT%2FIf7ILuRratpqH3liODDozmX0cqbS5ou%2Bcrhd7gBlk0C%2B0TY8dj6cb4pSWefkEjqAj5Ew%2Bdapcbmg9EW7dGXvGiWb2H3dQH6KP1uGnmQXkC5wkBGwSFH8Hbp%2BdPDhoOcS0QRMHj5Ji57QB8MEEl2QYpmOuceSStu1Q3qxF3Quzfkt49Dqj%2BH%2FLTvBUKgzNDotEbATh4Lmt4IqPQNRRrssrjXDW7Owh7t9YKslxYMMSVZTlhSUVr5aSEf%2FGhU2B1xlY7bWEpOVMxxU2vO4vdpS2IkXD6GP%2FY0LENybEfezrvORhD6pirxp%2FkPvjt2R%2BJ6m6ngUmibPrBgINhffVDHn2iPmW0eRTkTwdD2T5FPOw6YNcurjPoT3cknsSKCyzvc0bwqdZRFipqotbMebIo8Do3kEnnJx%2BhAlJcDGM3XRuqlDHzELRDmU99lpShobGa31QjRkPjZYGSuBjg4%3D&amp;k=525"><img src="https://afp.alicdn.com/afp-creative/creative/u124884735/55308755880f8b637dde1f88b84ea9da.png" alt=""></a></div></div><div id="ac_wrap_mm_124884735_33830642_145440102" style="width:255px"><div id="ac_wrap_custommm_124884735_33830642_145440102" style="position:relative;"></div></div></div>

                <div class="widget-box hidden-sm hidden-xs" style="margin-top: 0px;">
                    <h4 class="h4 widget-box__title">你可能感兴趣的文章</h4>
                    <ul class="widget-links list-unstyled">
                        <li class="widget-links__item">
                            <a href="/a/1190000007984465" title="数据分析 - 最火的 PHP 框架是哪个？">数据分析 - 最火的 PHP 框架是哪个？</a>
                            <small class="text-muted">
                                8 收藏，
                                1.7k 浏览
                            </small>
                        </li>
                        <li class="widget-links__item">
                            <a href="/a/1190000004286815" title="PHP 之 Laravel 框架安装及相关开源软件">PHP 之 Laravel 框架安装及相关开源软件</a>
                            <small class="text-muted">
                                2 收藏，
                                1.1k 浏览
                            </small>
                        </li>
                        <li class="widget-links__item">
                            <a href="/a/1190000010517754" title="Ruby 程序员学习 laravel 框架笔记 (1)-php 开发环境安装">Ruby 程序员学习 laravel 框架笔记 (1)-php 开发环境安装</a>
                            <small class="text-muted">
                                629 浏览
                            </small>
                        </li>
                    </ul>
                </div>


                <div class="widget-box hidden-sm hidden-xs">
                    <h4 class="h4 widget-box__title">系列文章</h4>
                    <ul class="widget-links list-unstyled">
                        <li class="widget-links__item">
                            <a href="/a/1190000015090891" title="10 个优质的 Laravel 扩展推荐">10 个优质的 Laravel 扩展推荐</a>
                            <small class="text-muted">
                                12 收藏，
                                256 浏览
                            </small>
                        </li>
                        <li class="widget-links__item">
                            <a href="/a/1190000015208089" title="Laravel 程序架构设计思路：使用动作类">Laravel 程序架构设计思路：使用动作类</a>
                            <small class="text-muted">
                                21 收藏，
                                812 浏览
                            </small>
                        </li>
                    </ul>
                </div>

                <div class="post-nav hidden-xs side-outline hidden-sm" style="display: block; width: 100%; top: 0px;">
                    <div class="panel panel-default widget-outline">
                        <div class="panel-heading">目录</div>
                        <div class="panel-body">
                            <div class="nav-body" style="top: 0px;">
                                <div class="highlight-title" style="top: 0px; height: 27px; display: none;"></div>
                                <ul class="articleIndex"><li class=""><a href="#articleHeader0">单一责任原则</a></li><li class=""><a href="#articleHeader1">强大的模型 &amp; 简单控制器</a></li><li class=""><a href="#articleHeader2">验证</a></li><li class=""><a href="#articleHeader3">业务逻辑应该在服务类中</a></li><li class=""><a href="#articleHeader4">不要重复你自己（DRY）</a></li><li class=""><a href="#articleHeader5">最好倾向于使用 Eloquent 而不是 Query Builder 和原生的 SQL 查询。要优先于数组的集合</a></li><li class=""><a href="#articleHeader6">批量赋值</a></li><li class=""><a href="#articleHeader7">不要在 Blade 模板中执行查询并使用关联加载（N + 1 问题）</a></li><li class=""><a href="#articleHeader8">与其花尽心思给你的代码写注释，还不如对方法或变量写一个描述性的名称</a></li><li class=""><a href="#articleHeader9">不要把 JS 和 CSS 放在 Blade 模板中，也不要将任何 HTML 放在 PHP 类中</a></li><li class=""><a href="#articleHeader10">在代码中使用配置和语言文件、常量，而不是写死它</a></li><li class=""><a href="#articleHeader11">使用社区接受的标准的 Laravel 工具</a></li><li class=""><a href="#articleHeader12">遵循Laravel命名约定</a></li><li class=""><a href="#articleHeader13">尽可能使用更短、更易读的语法</a></li><li class=""><a href="#articleHeader14">使用 IoC 容器或 facades 代替新的 Class</a></li><li class=""><a href="#articleHeader15">不要直接从 .env 文件获取数据</a></li><li class=""><a href="#articleHeader16">以标准格式存储日期，必要时就使用访问器和修改器来修改日期格式</a></li><li class=""><a href="#articleHeader17">其他良好做法</a></li></ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div><!-- /.side -->
        </div>
    </div>
</div>

<footer id="footer">
    <div class="container">
        <div class="row hidden-xs">

            <dl class="col-sm-2 site-link">
                <dt>资源</dt>
                <dd><a href="/weekly?utm_source=sf-footer&amp;utm_medium=footer-nav&amp;utm_campaign=resource&amp;utm_content=footer-links-weekly&amp;utm_term=每周精选">每周精选</a></dd>
                <dd><a href="/users?utm_source=sf-footer&amp;utm_medium=footer-nav&amp;utm_campaign=resource&amp;utm_content=footer-links-users&amp;utm_term=用户排行榜">用户排行榜</a></dd>
                <dd><a href="/badges?utm_source=sf-footer&amp;utm_medium=footer-nav&amp;utm_campaign=resource&amp;utm_content=footer-links-badges&amp;utm_term=徽章">徽章</a></dd>
                <dd><a href="/faq?utm_source=sf-footer&amp;utm_medium=footer-nav&amp;utm_campaign=resource&amp;utm_content=footer-links-faq&amp;utm_term=帮助中心">帮助中心</a></dd>
                <dd><a href="/repu?utm_source=sf-footer&amp;utm_medium=footer-nav&amp;utm_campaign=resource&amp;utm_content=footer-links-repu&amp;utm_term=声望与权限">声望与权限</a></dd>
                <dd><a href="/community?utm_source=sf-footer&amp;utm_medium=footer-nav&amp;utm_campaign=resource&amp;utm_content=footer-links-community&amp;utm_term=社区服务中心">社区服务中心</a></dd>
                <dd><a href="https://docs.segmentfault.com?utm_source=sf-footer&amp;utm_medium=footer-nav&amp;utm_campaign=resource&amp;utm_content=footer-links-docs&amp;utm_term=开发手册">开发手册</a></dd>


            </dl>

            <dl class="col-sm-2 site-link">
                <dt>关于</dt>
                <dd><a href="">关于我们</a></dd>
                <dd><a href="">加入我们</a></dd>
                <dd><a href="">联系我们</a></dd>
            </dl>

            <dl class="col-sm-2 site-link">
                <dt>关注</dt>
                <dd>
                    <ul class="sn-inline">
                        <li>
                            <a class="entypo-wechart icon-sn-weixin weixin-popover-qrcode" data-toggle="popover" data-placement="top" data-content="" data-original-title="" title="">微信</a>
                            <div class="popover fade top in" role="tooltip" id="popover192361" style="top: -80px; left: -31px; display: none;"><div class="arrow" style="left: 50%; pointer-events: all;"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><div class="weixin-qrcode"></div><p class="text-center mb0">添加微信</p></div></div>
                        </li>
                        <li>
                            <a href="tencent://message/?uin=1076217644&Site=http://liweijia.site&Menu=yes" target="_blank" class="entypo-weibo icon-sn-weibo">QQ</a>
                        </li>
                        <li>
                            <a href="https://github.com/liwiejia/blog" target="_blank" class="entypo-facebook icon-sn-github">Github</a>
                        </li>
                        <li>
                            <a href="https://twitter.com/LIWEIJIAAA" target="_blank" class="entypo-twitter icon-sn-twitter">Twitter</a>
                        </li>
                    </ul>
                </dd>
            </dl>

           <!-- <dl class="col-sm-2 site-link" id="license">
                <dt>条款</dt>
                <dd><a href="/tos">服务条款</a></dd>
                <dd><a href="https://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank">内容许可</a></dd>
                <dd>
                    <a href="/app" class="clearfix mt10 block"><img src="https://static.segmentfault.com/v-5b112aa6/page/img/app/appQrcode.png" class="app-qrcode"></a>
                    <div class="app-download-desc">
                        <p>扫一扫下载 App</p>
                    </div>

                </dd>
            </dl>-->
        </div>
        <div class="copyright">
            Copyright © 2017-2018 Liweijia-Blog. 当前呈现版本 V 1.01.01<br>
            <a href="http://www.miibeian.gov.cn/" rel="nofollow">京ICP备 18019844号</a> &nbsp;
           <!-- <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33010602002000" rel="nofollow">浙公网安备 33010602002000号</a>-->
            <span class="ml5">李伟佳个人版权所有</span>

        </div>
    </div>
</footer>
<div id="fixedTools" class="hidden-xs hidden-sm">
    <a id="backtop" class="border-bottom" href="#">回顶部</a>
</div>
<script type="text/javascript" src="/blog/Public/Js/jquery.min.js"></script>
<script type="text/javascript" src="/blog/Public/Js/Index/index.min.js"></script>

</body>
</html>