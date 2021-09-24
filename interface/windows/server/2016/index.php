
<?php $link_csv_file = "finding_list_cis_microsoft_windows_server_2016_1607_1.2.0_machine.csv"; ?>

<!-- All links -->
<?php include($_SERVER['DOCUMENT_ROOT']."/policies_hardening_interface/ressources/links.php");?>
<?php $link_style_interface="/policies_hardening_interface/interface/windows/style.css";?>
<?php $link_script_interface_filter="/policies_hardening_interface/interface/windows/scripts/filter.js";?>
<?php $link_script_interface_generator="/policies_hardening_interface/interface/windows/scripts/generate_csv_simple.js";?>


<!DOCTYPE html>
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
        <!-- |||||||||||||||| HEADER PART |||||||||||||||| -->


        <hr>
        <?php include($link_motor_buttons); ?>
        </div>
        <div class="row">
          <!--////////////////////////// Nav list ///////////////////////////-->
          <div class="col-3">
            <aside class="sticky-top" style="top:50px;">
              <nav id="nav-list" class="list-group" style="border-radius: 1em;height: 80vh;overflow-y: auto;">
                <?php include 'categories.php';?>
              </nav>
            </aside>
          </div>
          <!--///////////////////////// Tab content /////////////////////////-->
          <div class="col-9">
            <main>
              <!-- <div class="alert alert-success" style="width:200px">
                <h4>Tag Filter</h4>
                <div class="form-check">
                  <input class="form-check-input tag-check-input" type="checkbox" data-tag-name="Network" value="" id="Network-tag-check">
                  <label class="form-check-label" for="flexCheckDefault">
                    <span class="badge rounded-pill bg-dark m-1">Network</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input tag-check-input" type="checkbox" data-tag-name="SMB" value="" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">
                    <span class="badge rounded-pill bg-dark m-1">SMB</span>
                  </label>
                </div>
              </div> -->
              <!-- Table -->
              <table id="sortTable" class="table table-striped col-10" style="border-collapse:collapse;">
                <thead>
                  <tr class="sortable">
                    <th id="number" scope="col">#</th>
                    <th scope="col">Mode</th>
                    <th scope="col">Name</th>
                    <th scope="col">Severity</th>
                    <th scope="col">UIX impact</th>
                    <th scope="col">Default Value</th>
                    <th scope="col">Recommended Value</th>
                    <th scope="col">Apply</th>
                  </tr>
                </thead>
                <thead>
                  <tr class="sortable">
                    <th scope="col">Filter</th>
                    <th scope="col">
                      <select id="selected-mode" class="form-select form-select-sm" aria-label="Default select example">
                        <option value="0" selected>None</option>
                        <option value="1">Basic</option>
                        <option value="2">Enterprise</option>
                        <option value="3">StrongBox</option>
                      </select>
                    </th>
                    <th scope="col"></th>
                    <th scope="col">
                      <select id="selected-severity" class="form-select form-select-sm" aria-label="Default select example">
                        <option value="0" selected>None</option>
                        <option value="1">High</option>
                        <option value="2">Medium</option>
                        <option value="3">Low</option>
                      </select>
                    </th>
                    <th scope="col">
                      <select id="selected-uix" class="form-select form-select-sm" aria-label="Default select example">
                        <option value="0" selected>None</option>
                        <option value="1">Impact</option>
                        <option value="2">Potentially</option>
                        <option value="3">No impact</option>
                      </select>
                    </th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">
                      <input id="check-filter" class="form-check-input" type="checkbox" value="">
                    </th>
                  </tr>
                </thead>

                <tbody>
                  <?php include 'table.php';?>
                </tbody>
              </table>
            </main>
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
