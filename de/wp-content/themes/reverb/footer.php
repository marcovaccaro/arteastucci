</div>
<div class="footbg">
  <div class="container box">
    <div class="row footer">
      <?php get_sidebar('footer');?>
    </div>
    <footer class="foot">
      <div class="row"> </div>
    </footer>
  </div>
  <!-- /container --> 
</div>
<div class="copyright">
  <h5><small><?php echo get_option("reverb_copyright_text"); ?></small></h5>
</div>
</div>

<?php if( get_option('reverb_google_analytics','true')): { ?>
<?php echo '<script type="text/javascript">'.stripslashes(get_option('ad_analytics','')).'</script>'; ?>
<?php }  endif;?>
<?php wp_footer(); ?>
</body></html>