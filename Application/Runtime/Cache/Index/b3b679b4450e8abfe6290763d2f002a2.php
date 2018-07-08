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
    <title><?php echo ($current); ?>-Liweijia Blog</title>
    <meta name="description" content="Liweijia-Blog ( blog.liweijia.site) 是开发者技术社区。 我希望为编程爱好者提供一个纯粹、高质的技术交流的平台， 与开发者一起学习、交流与成长，创造属于开发者的时代！">
    <meta name="keywords" content="Liweijia-Blog,Liweijia-Blog,IT技术社区,编程社区,技术问答,技术文章,技术笔记,技术活动,开发者,程序员,极客,编程,代码,开源">
    <link rel="shortcut icon" href="/blog/Public/Image/favicon.ico">
    <link href="/blog/Public/Style/Index/head.css" rel="stylesheet" type="text/css">
    <link href="/blog/Public/Plugin/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body  class="qa-ask ">
<div class="global-nav blog-header blog-header--index publish">
    <div class="bottom-nav visible-xs visible-sm ">
        <div class="opts">
            <a class="opts-group <?php if(CONTROLLER_NAME== 'Index'): ?>active<?php endif; ?>" href="<?php echo U('Index/index');?>">
                <i class="fa fa-home" aria-hidden="true"></i>
                <span>首页</span>
            </a>
            <a class="opts-group  <?php if(CONTROLLER_NAME== 'Questions'): ?>active<?php endif; ?>" href="<?php echo U('Questions/index');?>">
                <i class="fa fa-comments" aria-hidden="true"></i>
                <span>问答</span>
            </a>

            <a class="opts-group  <?php if(CONTROLLER_NAME== 'Blogs'): ?>active<?php endif; ?>" href="<?php echo U('Blogs/index');?>">
                <i class="fa fa-pencil-square" aria-hidden="true"></i>
                <span>专栏</span>
            </a>
            <a class="opts-group  <?php if(CONTROLLER_NAME== 'lives'): ?>active<?php endif; ?>" href="<?php echo U('lives/index');?>">
                <i class="fa fa-play-circle" aria-hidden="true">
                </i><span>讲堂</span></a>
            <div class="opts-group">
                <div class="btn-group dropup"><i class="fa fa-bars dropdown hoverDropdown" data-toggle="dropdown" aria-hidden="true"><span>更多</span></i>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo U('Jobs');?>">职位</a></li>
                        <li><a href="<?php echo U('Events');?>">活动</a></li>
                        <li><a href="<?php echo U('Tags');?>">标签</a></li>
                        <li><a href="<?php echo U('Badges');?>">徽章</a></li>
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
                        <li class="menu__item"><a href="<?php echo U('Index/index');?>" class="<?php if(CONTROLLER_NAME== 'Index'): ?>active-nav<?php endif; ?>">首页</a></li>
                        <li class="menu__item"><a href="<?php echo U('Questions/index');?>" class="<?php if(CONTROLLER_NAME== 'Questions'): ?>active-nav<?php endif; ?>">问答</a></li>
                        <li class="menu__item"><a href="<?php echo U('Blogs/index');?>" class="<?php if(CONTROLLER_NAME== 'Blogs'): ?>active-nav<?php endif; ?>">专栏</a></li>
                        <li class="menu__item"><a href="<?php echo U('Lives/index');?>" class="<?php if(CONTROLLER_NAME== 'Lives'): ?>active-nav<?php endif; ?>">讲堂</a></li>
                        <li class="menu__item"><a href="<?php echo U('Groups/index');?>" class="<?php if(CONTROLLER_NAME== 'Groups'): ?>active-nav<?php endif; ?>">圈子</a></li>
                        <li class="menu__item menu__item--more dropdown"><a href="##" class="dropdown-toggle dropdownBtn" data-toggle="dropdown"> 发现<i class="fa fa-caret-down" style="font-size: 14px;margin-left: 5px;" aria-hidden="true"></i></a>
                            <div class="dropdown-block hidden">
                                <ul class="dropdown-content-menu">
                                    <li><a href="<?php echo U('events');?>">活动</a></li>
                                    <li><a href="<?php echo U('Tags');?>">标签</a></li>
                                    <li><a href="<?php echo U('Jobs');?>">找工作</a></li>
                                    <li><a href="<?php echo U('Users');?>">排行榜</a></li>
                                    <li><a href="<?php echo U('Badges');?>">徽章</a></li>
                                    <li><a href="<?php echo U('Notes');?>">笔记</a></li>
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
                                    <li><a href="<?php echo U('Ask/index');?>">提问题</a></li>
                                    <li><a href="<?php echo U('submit/index');?>">发头条</a></li>
                                    <li><a href="<?php echo U('write/index');?>">写文章</a></li>
                                    <li><a href="<?php echo U('record/index');?>">记笔记</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo U('User/draft');?>">草稿箱（1）</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="opts__item dropdown hoverDropdown write-btns visible-md-inline-block"><a class="dropdownBtn" data-toggle="dropdown" href="/ask"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right ">
                                <li><a href="<?php echo U('Ask/index');?>">提问题</a></li>
                                <li><a href="<?php echo U('submit/index');?>">发头条</a></li>
                                <li><a href="<?php echo U('write/index');?>">写文章</a></li>
                                <li><a href="<?php echo U('record/index');?>">记笔记</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo U('User/draft');?>">草稿箱（1）</a></li>
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
                                            <div role="tabpanel" class="tab-pane active" id="messageGeneral">1</div>
                                            <div role="tabpanel" class="tab-pane" id="messageComment">2</div>
                                            <div role="tabpanel" class="tab-pane" id="messageRanked">3</div>
                                            <div role="tabpanel" class="tab-pane" id="messageFollowed">4</div>
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
                                            <div class="col-sm-6"><a class="opts__item--message-view-all" href="<?php echo U('User/notifications');?>">查看全部
                                                »</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="opts__item letter has-unread hidden-sm"><a id="dLabel" class="dropdown-toggle-letter" href="<?php echo U('User/messages');?>"><span class="sr-only">私信</span><span id="letterCount" class="fa fa-envelope-o"></span></a>
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
                            <a class="avatar-* dropdownBtn user-avatar" data-toggle="dropdown" style="background-image: url('<?php if($info['head'] == ''): ?>/blog/Public/Image/user-64.png<?php else: echo ($info['head']); endif; ?>')" href="<?php echo U('User/index',array('user'=>$info['pageurl']));?>"></a>
                            <div class="dropdown-avatar-menu hidden">
                                <div class="menu-score"><span class="score pull-left ml20 mr10">1 声望</span>
                                    <div class=""><span class="badge badge--o badge--sf badge--gold"><i class="badge__icon"></i></span><span class="profile__sidebar--award-badge-count">0</span><span class="badge badge--o badge--sf badge--silver"><i class="badge__icon"></i></span><span class="profile__sidebar--award-badge-count">0</span><span class="badge badge--o badge--sf badge--bronze"><i class="badge__icon"></i></span><span class="profile__sidebar--award-badge-count">0</span></div>
                                </div>
                                <hr>
                                <div class="container-fluid">
                                    <div class="menu-list row">
                                        <div class="col-md-6 col-xs-6 pl0 pr0">
                                            <ul>
                                                <li class="message-response visible-xs"><a href="<?php echo U('User/notifications');?>" id="messageCount-response">通知提醒</a></li>
                                                <li><a href="<?php echo U('User/Notes',array('user'=>$info['pageurl']));?>">我的笔记</a></li>
                                                <li><a href="<?php echo U('User/bookmarks',array('user'=>$info['pageurl']));?>">我的收藏</a></li>
                                                <li><a href="<?php echo U('User/invited',array('user'=>$info['pageurl']));?>">受邀回答</a></li>
                                                <li><a href="<?php echo U('User/experts',array('user'=>$info['pageurl']));?>">付费问答</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xs-6 pl0 pr0">
                                            <ul>
                                                <li class="letter-response  visible-xs"><a href="<?php echo U('User/messages',array('user'=>$info['pageurl']));?>" id="letterCount-response">私信消息</a></li>
                                                <li><a href="<?php echo U('User/index',array('user'=>$info['pageurl']));?>">我的主页</a></li>
                                                <li><a href="<?php echo U('User/about',array('user'=>$info['pageurl']));?>">我的档案</a></li>
                                                <li><a href="<?php echo U('User/finance',array('user'=>$info['pageurl']));?>">我的资产</a></li>
                                                <li><a href="<?php echo U('User/settings',array('user'=>$info['pageurl']));?>">个人设置</a></li>
                                                <li><a href="<?php echo U('User/logout');?>">退出</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="menu-footer"><a class="js__action--complain" href="javascript:void(0);"><span>用户申诉</span></a> · <a href="/g/1570000009280187"><span>建议反馈</span></a> · <a href="<?php echo U('User/index',array('user'=>$info['pageurl'],'type'=>'invitation'));?>"><span>邀请朋友</span></a></div>
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
<link href="/blog/Public/Style/Index/qa.css" rel="stylesheet" type="text/css">
<link href="/blog/Public/Style/Index/responsive.css" rel="stylesheet" type="text/css">
<link href="/blog/Public/Plugin/build/build.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/blog/Public/Js/jquery.min.js"></script>
<div class="wrap publish">
    <div class="container">
        <form id="question" method="POST" class="form">

            <div class="form-group">
                <label for="title" class="sr-only">标题</label>
                <input id="myTitle" type="text" name="title" required="" data-error="" autocomplete="off" class="form-control tagClose input-lg" placeholder="标题：一句话说清问题，用问号结尾" value="">
            </div>
            <div class="row" style="margin-left:0;margin-right:0">
                <div class="form-group ">
                    <label for="tags" class="sr-only">标签：至少1个，最多5个</label>
                    <input class="tagsInput form-control hidden" data-init="null" name="tags" type="text" placeholder="标签，如：php 可使用逗号,分号;分隔" data-role="tagsinput">
                    <div class="sf-typeHelper sf-typeHelper--fortags">
                        <input type="text" data-role="sf_typeHelper-input" class="sf-typeHelper-input" placeholder="标签，如：php 可使用逗号,分号;分隔" style="width: 20em;">
                        <ul class="sf-typeHelper-list dropdown-menu" style="display: none;"></ul>
                    </div>
                </div>
                <div role="tabpanel" class="techTags panel panel-default techTags-panel" data-tech="" style="display: nono;">
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
                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000166256&quot;,&quot;name&quot;:&quot;express&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                        express
                                    </a>
                                </li>
                                <li class="mb5">
                                    <a class="tag" data-tag="{&quot;id&quot;:&quot;1040000000125263&quot;,&quot;name&quot;:&quot;flask&quot;,&quot;iconUrl&quot;:&quot;&quot;}" href="javascript: void(0);">
                                        flask
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
            <div class="form-group">
                <div class="editor">
                    <textarea id="myEditor"></textarea>
                </div>
            </div>

            <div class=" publish-footer">
                <div class="container">
                    <div class="operations clearfix">
                        <div class="shareToWeibo checkbox pull-left mr10 mb0">
                            <label for="shareToWeibo"><input type="checkbox" id="shareToWeibo"> 同步到新浪微博</label>
                        </div>
                        <div class="pull-right">
                            <span class="text-muted hidden" id="editorStatus">已保存</span>
                            <a id="dropIt" href="javascript:void(0);" class="mr10 hidden">[舍弃]</a>
                            <button class="hide" type="button"></button>
                            <button data-toggle="tooltip" data-placement="top" title="" type="button" data-type="question" id="publishIt" class="btn btn-primary ml10" data-id="" data-do="" data-url="" data-text="发布问题" data-name="" data-original-title="">
                                发布问题
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- /.container -->
</div>
<script>

    d = function() {
        $(".opts__item--message").removeClass("hide"),
            $.get("/api/notifications", function(t) {
                var n, a, i, o;
                t.status || (t.data = null != (a = t.data) ? a : [],
                    i = {
                        data: t.data,
                        unread: {
                            general: _.filter(t.data.general, function(e) {
                                return 0 === parseInt(e.viewed)
                            }).length,
                            ranked: _.filter(t.data.ranked, function(e) {
                                return 0 === parseInt(e.viewed)
                            }).length,
                            followed: _.filter(t.data.followed, function(e) {
                                return 0 === parseInt(e.viewed)
                            }).length,
                            comment: _.filter(t.data.comment, function(e) {
                                return 0 === parseInt(e.viewed)
                            }).length
                        }
                    },
                    o = _.reduce(i.unread, function(e, t) {
                        return e + t
                    }, 0),
                o > 0 && $(".opts__item--message .message-ingore-all").removeClass("hide"),
                    $("#messageGeneral").html(_.template($("#messageGeneralTpl").html())(i.data)),
                    $("#messageComment").html(_.template($("#messageCommentTpl").html())(i.data)),
                    $("#messageRanked").html(_.template($("#messageRankedTpl").html())(i.data)),
                    $("#messageFollowed").html(_.template($("#messageFollowedTpl").html())(i.data)),
                    $(".opts__item--message-loading").remove(),
                    n = {},
                    $(".mCustomScrollbar-message").mCustomScrollbar({
                        scrollInertia: 0,
                        callbacks: {
                            onScroll: function() {
                                var t, a, i;
                                if (i = this.mcs.topPct,
                                        a = e(this).data("proto"),
                                        n[a] = n[a] || 2,
                                    i > 55 && n[a] !== -1) {
                                    if (console.log(a, i, "ajax page " + n[a]),
                                            t = "/api/notifications?type=" + a + "&page=" + n[a],
                                        window.__api === t)
                                        return;
                                    return window.__api = t,
                                        e.get(t, function(t) {
                                            var i, o;
                                            if (!t.status)
                                                return i = t.data[a],
                                                    i.length > 0 ? (o = _.template($("#item--" + a).html())(t.data),
                                                            $(".tab-pane.active .mCSB_container").append(o),
                                                            n[a]++) : n[a] = -1
                                        })
                                }
                            }
                        }
                    }))
            })
    }
    $(".dropdown-toggle-message").on("click", function(t) {
        var n;
        return t.preventDefault(),
            n = $(".opts__item--message"),
        "undefined" != typeof v && v.emit("read"),

            "none" !== n.css("display") ? n.addClass("hide") : (d(),
                    $.get("/api/notifications/viewed", function(t) {
                        var n;
                        if (n = null,
                                !t.status)
                            return _.each(t.data, function(t, a) {
                                if (t)
                                    return n ? (n = $(".notice-dot-" + a),
                                            n.removeClass("hide"),
                                            n.removeClass("notice-dot--special")) : (n = $(".notice-dot-" + a),
                                            n.addClass("notice-dot--special"),
                                            n.closest("a[role='tab']").trigger("click"))
                            })
                    }))
    })
    $("body").on("click", function(t) {
        "none" !== $(".opts__item--message").css("display") && 0 === $(t.target).parents(".message").length && $(".opts__item--message").addClass("hide")
    })
</script>
<script type="text/javascript" src="/blog/Public/Js/Index/ask.js"></script>
<script type="text/javascript" src="/blog/Public/Plugin/build/build.js"></script>
</body>
</html>