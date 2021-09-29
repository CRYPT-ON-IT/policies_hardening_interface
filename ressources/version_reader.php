<html lang="en" dir="ltr">
  <head>
    <?php include($link_motor_head);?>
  </head>
  <body data-spy="scroll">
    <section class="m-5">
      <div class="container mt-5" style="max-width:940px;">
        <!-- |||||||||||||||| HEADER PART |||||||||||||||| -->
        <h1>Welcome to the Windows Hardening Interface</h1>
        <!-- Breadcrumb part -->
        <?php include($link_motor_breadcrumb);?>
        <hr>
        <div class="row">
          <!-- Choice OS part -->
          <div class="col-6">
            <?php include($link_motor_main_list);?>
          </div>
          <div class="col-6">
            <?php include($link_motor_dir_reader);?>
          </div>
        </div>
        <!-- |||||||||||||||| HEADER PART |||||||||||||||| -->
      </div>
    </section>
    <!--///////////////////////////// Footer //////////////////////////////-->
    <footer>
      <?php include($link_motor_footer); ?>
    </footer>
  </body>
</html>
