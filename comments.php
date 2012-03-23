<div id="comments">
            <?php $this->comments()->to($comments); ?>
            <?php if ($comments->have()): ?>
            <h3><?php $this->commentsNum(_t('当前暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?> &raquo;</h3>
            
            <?php $comments->listComments(); ?>
            
            <div class="pagination">
                <?php $comments->pageNav(); ?>
            </div>
            
            <?php endif; ?>
            
            <?php if($this->allow('comment')): ?>
            <div id="<?php $this->respondId(); ?>" class="respond">
            
            <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
            </div>
            
            <form class="form-horizontal" method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
                <fieldset>
                    <legend><?php _e('添加新评论'); ?> &raquo;</legend>
                    <?php if($this->user->hasLogin()): ?>
                    <div class="control-group">
                        Logged in as <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. 
                        <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a>
                    </div>
                    <?php else: ?>
                    <div class="control-group">
                        <label class="control-label" for="author"><?php _e('称呼'); ?></label>
                        <div class="controls">
                            <input type="text" name="author" id="author" class="input-large" value="<?php $this->remember('author'); ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="mail"><?php _e('电子邮件'); ?><?php if ($this->options->commentsRequireMail): ?><span class="required">*</span><?php endif; ?></label>
                        <div class="controls">
                            <input type="text" name="mail" id="mail" class="input-large" value="<?php $this->remember('mail'); ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="url"><?php _e('网站'); ?><?php if ($this->options->commentsRequireURL): ?><span class="required">*</span><?php endif; ?></label>
                        <div class="controls">
                            <input type="text" name="url" id="url" class="input-large" value="<?php $this->remember('url'); ?>" />
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="control-group">
                        <label class="control-label" for="url">评论</label>
                        <div class="controls">
                            <textarea class="input-xlarge" name="text" rows="3"></textarea>
                            <p class="help-block">在这里输入你的评论...</p>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary"><?php _e('提交评论'); ?></button>
                    </div>
                </fieldset>
            </form>
            </div>
            <?php else: ?>
            <h4><?php _e('评论已关闭'); ?></h4>
            <?php endif; ?>


        </div>