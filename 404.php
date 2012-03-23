<?php $this->need('header.php'); ?>

<div class="row">
    <div class="span9" id="content">
        <div class="post">
            <div class="page-header">
                <h1>
                    404 - <?php _e('页面没找到'); ?> 
                    <small></small>
                </h1>
            </div>
            <a href="<?php $this->options->siteUrl(); ?>"><?php _e('返回首页'); ?></a>
        </div>
        <hr class="soften" />
    </div><!-- end #content-->
    <?php $this->need('sidebar.php'); ?>
</div>
<?php $this->need('footer.php'); ?>