<div class="span3" id="sidebar">
    <div class="widget_search">
        <form method="post" id="searchform" class="form-search">
            <input type="text" class="span2" name="s" id="s" />
            <button type="submit" class="btn" id="searchsubmit">搜索</button>
        </form>
    </div>
    
    <?php if ($this->options->weiboShow): ?>
    <div class="widget">
        <?php $this->options->weiboShow() ?>
    </div>
    <?php endif; ?>
    
    <?php if ($this->is('post')): ?>
        <?php if (empty($this->options->sidebarBlock) || in_array('ShowRelatedPosts', $this->options->sidebarBlock)): ?>
        <div class="widget">
            <h3><?php _e('相关文章'); ?></h3>
            <?php $this->related(5)->to($relatedPosts); ?>
            <ul>
            <?php while ($relatedPosts->next()): ?>
                <li><a href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>"><?php $relatedPosts->title(); ?></a></li>
            <?php endwhile; ?>
            </ul>
        </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (empty($this->options->sidebarBlock) || in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <div class="widget">
        <h3><?php _e('最新文章'); ?></h3>
        <ul>
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if (empty($this->options->sidebarBlock) || in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
    <div class="widget">
        <h3><?php _e('最近回复'); ?></h3>
        <ul>
            <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true')->to($comments); ?>
            <?php while($comments->next()): ?>
            <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(50, '...'); ?></li>
            <?php endwhile; ?>
        </ul>
    </div>
    <?php endif; ?>
    
    <?php if (empty($this->options->sidebarBlock) || in_array('ShowTags', $this->options->sidebarBlock)): ?>
    <div class="widget">
    		<h3><?php _e('标签们'); ?></h3>
        <ul>
            <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=20')->to($tags); ?>
            <?php while($tags->next()): ?>
            <a href="<?php $tags->permalink(); ?>" class="size-<?php $tags->split(5, 10, 20, 30); ?>"><?php $tags->name(); ?></a>
            <?php endwhile; ?>
        </ul>
		</div>
    <?php endif; ?>

    <?php if (empty($this->options->sidebarBlock) || in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <div class="widget">
        <h3><?php _e('分类'); ?></h3>
        <ul>
            <?php $this->widget('Widget_Metas_Category_List')
            ->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if (empty($this->options->sidebarBlock) || in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <div class="widget">
        <h3><?php _e('归档'); ?></h3>
        <ul>
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if (empty($this->options->sidebarBlock) || in_array('ShowLinks', $this->options->sidebarBlock)): ?>
    <div class="widget">
        <h3><?php _e('友情链接'); ?></h3>
        <ul>
            <?php Links_Plugin::output("SHOW_TEXT", 5); ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if (empty($this->options->sidebarBlock) || in_array('ShowOther', $this->options->sidebarBlock)): ?>
    <div class="widget">
        <h3><?php _e('其它'); ?></h3>
        <ul>
            <?php if($this->user->hasLogin()): ?>
            <li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
            <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
            <?php else: ?>
            <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
            <?php endif; ?>
            <li><a href="http://validator.w3.org/check/referer">Valid XHTML</a></li>
        </ul>
    </div>
    <?php endif; ?>

    </div><!-- end #sidebar -->
    
