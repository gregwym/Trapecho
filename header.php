<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="<?php $this->options->charset(); ?>" />
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- 使用url函数转换相关路径 -->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/bootstrap-responsive.min.css'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/prettify.css'); ?>" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
</head>

<body onload="prettyPrint()">

<div class="container">

<header class="jumbotron" id="overview">
    <?php if ($this->options->logoUrl): ?>
    <img height="60" src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
    <?php endif; ?>
    <h1><?php $this->options->title() ?> </h1>
    <p class="lead"><?php $this->options->description() ?></p>

    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                
                <a class="brand" href="<?php $this->options->siteUrl(); ?>">
                    Trapecho
                </a>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li<?php if($this->is('index')): ?> class="active"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
                        <li class="divider-vertical"></li>
                        <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
                        <?php while($categorys->next()): ?>
                        <li<?php if($this->is('category', $categorys->slug)): ?> class="active"<?php endif; ?>><a href="<?php $categorys->permalink(); ?>" title="<?php $categorys->name(); ?>"><?php $categorys->name(); ?></a></li>
                        <?php endwhile; ?>
                        <li class="divider-vertical"></li>
                        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                        <?php while($pages->next()): ?>
                        <li<?php if($this->is('page', $pages->slug)): ?> class="active"<?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</header>

<div class="content">

