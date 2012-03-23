<footer>
    <p>
        Powered by <a href="http://typecho.org/">Typecho</a>. 
        <a href="http://dolast.com/pages/trapecho">Trapecho</a> theme by <a href="http://blog.gregwym.info">咳嗽di小鱼</a>. 
        Hosting on <a href="http://secure.quickweb.co.nz/system/aff.php?aff=165">QuickWeb VPS Server</a>
    </p>
</footer><!-- end #footer -->

</div>
</div>

<script src="<?php $this->options->themeUrl('js/jquery-1.7.1.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/prettify.js'); ?>"></script>
<script type="text/javascript">
    // fix navbar on scroll
    var $win = $(window)
      , $nav = $('.navbar')
      , navTop = $('.navbar').length && $('.navbar').offset().top - 10
      , isFixed = 0

    processScroll()

    $win.on('scroll', processScroll)

    function processScroll() {
      var i, scrollTop = $win.scrollTop()
      if (scrollTop >= navTop && !isFixed) {
        isFixed = 1
        $nav.addClass('navbar-fixed-top')
      } else if (scrollTop <= navTop && isFixed) {
        isFixed = 0
        $nav.removeClass('navbar-fixed-top')
      }
    }
    
    $('.page-navigator li:not(:has(a))').html('<a>...</a>');
    $('.page-navigator .current').addClass('active');
    
    $('pre').addClass('prettyprint linenums');
    $('.entry-content a').attr('target','_blank');
</script>
<?php $this->footer(); ?>
</body>
</html>