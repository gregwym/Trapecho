<?php

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);
    $weiboShow = 
      new Typecho_Widget_Helper_Form_Element_Textarea(
        'weiboShow', NULL, NULL, _t('微博秀'), 
        _t('将从新浪<a href="http://weibo.com/tool/weiboshow" target="_blank">微博秀小工具</a>获取的代码填在这里, 即可显示微博秀. (也可填入其他微博的代码)'));
    $form->addInput($weiboShow);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array(
    'ShowRecentPosts' => _t('显示最新文章'),
    'ShowRelatedPosts' => _t('显示相关文章'), 
    'ShowRecentComments' => _t('显示最近回复'), 
    'ShowTags' => _t('显示标签'), 
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowLinks' => _t('显示友情链接(需要友情链接插件)'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRelatedPosts', 'ShowRecentComments', 'ShowTags', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
    
    $codePrettify = new Typecho_Widget_Helper_Form_Element_Checkbox('codePrettify', 
    array(
    'EnablePrettify' => _t('启用')), 
    array('EnablePrettify'), _t('Google Code Prettify'));
    
    $form->addInput($codePrettify->multiMode());
}
