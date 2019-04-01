    <footer>
      <div id="footer-content">
        <div class="">
          <p>&#169; Copyright TampaBaytogs <?php echo date("Y"); ?></p>
        </div>
        <!-- <div class="">
          <p>
            Join us on <a href="#"><i class="fab fa-facebook-square"></i></a>
          </p>
        </div> -->
        <div class="">
          <nav class="group">
            <?php wp_nav_menu(array(
              'theme_location' => 'footerMenu'
            )) ?>
          </nav>
        </div>
      </div>
    </footer>
  <?php wp_footer(); ?>
  </body>
</html>
