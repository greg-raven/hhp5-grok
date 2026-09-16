<footer class="container-fluid footer">
  <div class="row">
    <div class="col-md-12">
      <p class="text-center"> Send all questions and comments to the <a href="mailto:&#119;&#x65;&#x62;&#109;&#97;&#x73;t&#x65;&#114;&#64;&#x68;&#105;&#x73;&#116;&#111;&#x72;&#105;&#111;&#103;&#114;&#97;&#112;h&#121;&#45;&#x70;&#x72;&#x6F;&#x6A;&#x65;&#x63;&#x74;&#46;com">Webmaster</a>. </p>
    </div><!-- /.col-md-12 -->
  </div><!-- /.row -->
</footer>
<?php wp_footer(); ?>
<!-- begin back-to-top -->
<!-- child of the body tag -->
<span id="top-link-block" class="hidden"> <a href="#top" id ="backToTopBtn" class="well well-sm"> <i class="glyphicon glyphicon-chevron-up"></i> Back to Top </a> </span>
<!-- /top-link-block -->
<script>
// Only enable if the document has a long scroll bar
// Note the window height + offset
if ((jQuery(window).height() + 100) < jQuery(document).height()) {
    jQuery( "#top-link-block" ).removeClass( "hidden" ).affix({
        // how far to scroll down before link "slides" into view
        offset: {top: 100}
    });
}
jQuery( "#backToTopBtn" ).click(function () {
    jQuery( "html,body" ).animate({scrollTop: 0}, "slow" );
	return false;
});
</script>
<!-- thanks: http://stackoverflow.com/questions/22413203/bootstrap-affix-back-to-top-link -->
<!-- end back-to-top -->
