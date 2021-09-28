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
          <div class="col">
            <!-- Choice OS part -->
            <div class="col">
              <?php include($link_motor_main_list);?>
            </div>
          </div>
        </div>
        <!-- |||||||||||||||| HEADER PART |||||||||||||||| -->


        <hr>
        <?php include($link_motor_buttons); ?>
        </div>
        <div class="row">
          <!--////////////////////////// Nav list ///////////////////////////-->
          <div class="col-3">
              <?php include($link_motor_categories);?>
          </div>
          <!--///////////////////////// Tab content /////////////////////////-->
          <div class="col-9">
              <?php include($link_motor_table_content); ?>
          </div>
        </div>
    </section>
    <!--///////////////////////////// Footer //////////////////////////////-->
    <footer>
      <?php include($link_motor_footer); ?>
    </footer>
  </body>
  <script type="text/javascript">
  /************ Gloabl value *************/
  var global_link = "/policies_hardening_interface/interface"
  /************ End Global Value ****************/

  /************ To update position scroll-spy when refresh ******************/
 // var scrollSpy = new bootstrap.ScrollSpy(document.body, {
 //    target: "#nav-list",
 //    offset: 0
 //  })

  $("#liveToast :button").click(function() {
    $("#liveToast").removeClass("show").addClass("hide")
  })

  // $("[data-bs-toggle='collapse']").click(function() {
  //   setTimeout(
  //     function()
  //     {
  //       var dataSpyList = [].slice.call(document.querySelectorAll('[data-bs-spy="scroll"]'))
  //         dataSpyList.forEach(function (dataSpyEl) {
  //           bootstrap.ScrollSpy.getInstance(dataSpyEl)
  //             .refresh()
  //         })
  //         alert('ok')
  //     }, 5000);
  //
  // }
  //
  // )
  /*Test*/
  /**************************************************************************/


  </script>
  <script type="text/javascript" src="<?php echo $link_script_interface_filter ?>"></script>
  <script type="text/javascript" src="<?php echo $link_script_interface_generator ?>"></script>
  <script type="text/javascript">
  </script>
</html>
