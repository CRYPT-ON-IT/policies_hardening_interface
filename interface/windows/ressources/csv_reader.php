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
            <table class="table" style="border: solid 1px rgb(227, 227, 227);">
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
        <hr>
        <!-- |||||||||||||||| SEARCH PART ||||||||||||||||||| -->
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Search a policy</span>
          <input id="input-search-policy" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <!-- |||||||||||||||| SEARCH PART ||||||||||||||||||| -->

        <?php include($link_motor_buttons); ?>
      </div>
        <div class="row">
          <!--////////////////////////// Nav list ///////////////////////////-->
          <div class="col-3 col-xxl-3">
              <?php include($link_motor_categories);?>
          </div>
          <!--///////////////////////// Tab content /////////////////////////-->
          <div class="col-9 col-xxl-9">
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
  // Code to open cotent policy when its hash is in url

    var current_id = window.location.hash;

    if (current_id!="") {
      // split content
      var current_id_array = current_id.split('-');
      var new_current_id = current_id_array[0]+"-content-"+current_id_array[1]
      // remove first char (#)
      new_current_id = new_current_id.substring(1);
      var myCollapse = document.getElementById(new_current_id)
      var bsCollapse = new bootstrap.Collapse(myCollapse, {
        toggle: true
      })
    }

  </script>
  <script type="text/javascript">

  $(document).ready(function(){
    $("#input-search-policy").on("keyup", function(event) {
      // Number 13 is the "Enter" key on the keyboard
      if (event.keyCode === 13) {
          var value = $(this).val().toLowerCase();
          $("table tr.row-content").filter(function() {
            //$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
      }
    });
  });




  //// Code to find text in policy name

  /// on key up method
  // $(document).ready(function(){
  // $("#input-search-name").on("keyup", function() {
  //   var value = $(this).val().toLowerCase();
  //   $("table tr.row-content td.policy-name").filter(function() {
  //     //$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  //     $(this).parent().toggle($(this).text().toLowerCase().indexOf(value) > -1)
  //   });
  // });
  // });

  /// on key "enter" method
  $(document).ready(function(){
    $("#input-search-name").on("keyup", function(event) {
      // Number 13 is the "Enter" key on the keyboard
      if (event.keyCode === 13) {
          var value = $(this).val().toLowerCase();
          $("table tr.row-content td.policy-name").filter(function() {
            //$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            $(this).parent().toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
      }
    });
  });
  </script>
</html>
