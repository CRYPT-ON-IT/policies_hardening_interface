<html lang="en" dir="ltr">
  <head>
    <?php include($link_motor_head);?>
  </head>
  <body data-spy="scroll">
    <section class="m-5 m-xl-4 m-lg-3 m-md-2 m-sm-1">
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
        </div>
        <!-- |||||||||||||||| HEADER PART |||||||||||||||| -->
        <hr>

        <!-- |||||||||||||||| REFERENCE PART |||||||||||||||| -->
        <div class="row">
          <div class="col-6">
            <table class="table" style="border: solid 1px gray;">
              <tbody>
                <?php
                echo "<tr><th>Reference</th><td>$reference_name</td></tr>";
                if ($reference_date!="") {
                  echo "<tr><th>Date</th><td>$reference_date</td></tr>";
                }
                if ($reference_version!="") {
                  echo "<tr><th>Version</th><td>$reference_version</td></tr>";
                }
                if ($reference_type!="") {
                  echo "<tr><th>Type</th><td>$reference_type</td></tr>";
                }
                if ($reference_source_url!="") {
                  $reference_source_url_host = parse_url($reference_source_url)["host"];
                  echo "<tr>
                    <th>Source</th>
                    <td>
                      <a target=\"_blank\" href=\"$reference_source_url\">$reference_source_url_host</a>
                    </td>
                  </tr>";
                }
                 ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- |||||||||||||||| REFERENCE PART |||||||||||||||| -->



        <?php include($link_motor_buttons); ?>
      </div>
        <div class="row">
          <!--////////////////////////// Nav list ///////////////////////////-->
          <div class="col-3 col-xxl-2">
              <?php include($link_motor_categories);?>
          </div>
          <!--///////////////////////// Tab content /////////////////////////-->
          <div class="col-9 col-xxl-10">
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
  var global_link = ""
  var link_original_list="<?php echo $link_csv_original_file ?>"
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
