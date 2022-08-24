<footer>
  <section class="logoFooter">
    <div>
      <h2>MOPS</h2>
      <!-- ここにMOPSのロゴを挿入 -->
      <img src="" alt="">
    </div>
  </section>
  <nav class="navFooter">
    <ul class="navFooter__item">
      <li>
          <a href="#SERVICE">SERVICE</a>
      </li>
      <li>
          <a href="#NEWS">NEWS</a>
      </li>
      <li>
          <a href="#RECRUIT">RECRUIT</a>
      </li>
      <li>
          <a href="#COMPANY">COMPANY</a>
      </li>
      <li>
          <a href="#お問い合わせ">お問い合わせ</a>
      </li>
    </ul>
  </nav>
</footer>
<script defer src="<?php echo get_template_directory_uri(); ?>/dist/main.bundle.js"></script>
<!-- jquery & iScroll -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<!-- drawer.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>

<script>
    $(document).ready(function () {
        $('.drawer').drawer();  //drawerメソッドを使用
        $(".js-close").on('click', () => {
          $('.drawer').drawer('close');
        })
    });
</script>