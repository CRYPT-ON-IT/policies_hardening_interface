
<!-- All links -->
<?php include($_SERVER['DOCUMENT_ROOT']."/policies_hardening_interface/ressources/links.php");?>

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
        <hr>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Search</span>
          <input id="input-search" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div id="result-search" class="list-group">
          <?php
          http://localhost:8888/policies_hardening_interface/interface/windows/endpoint/365%20Apps/


            $target = $_SERVER['DOCUMENT_ROOT'];
            $relative_target_endpoint = "/policies_hardening_interface/interface/windows/endpoint";
            $relative_target_server = "/policies_hardening_interface/interface/windows/server";

            function OwnScanDir($current_target,$current_relative_target,$preced_name)
            {
              $current_dir_enumerate = scandir($current_target.$current_relative_target);
              foreach ($current_dir_enumerate as $dir_item) {
                // $value_test_52 = is_dir($target."/".$dir_item);
                // echo "$dir_item, $value_test_52";
                if (is_dir($current_target.$current_relative_target."/".$dir_item) and $dir_item!="." and $dir_item!="..") {
                  //replace %20 by space
                  $dir_item_cleaned = str_replace("%20", " ", $dir_item);
                  echo "<a href=\"$current_relative_target/$dir_item\" class=\"list-group-item list-group-item-action\">$preced_name / $dir_item</a>";
                  OwnScanDir($current_target,$current_relative_target."/".$dir_item, $preced_name." / ".$dir_item);
                }
              }
            }

            OwnScanDir($target,$relative_target_endpoint, "");
            OwnScanDir($target,$relative_target_server, "");


           ?>
        </div>
        <!-- |||||||||||||||| HEADER PART |||||||||||||||| -->
      </div>
    </section>
    <!--///////////////////////////// Footer //////////////////////////////-->
    <footer>
      <?php include($link_motor_footer); ?>
    </footer>
    <script type="text/javascript">
    $(document).ready(function(){
    $("#input-search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#result-search a").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
    });
    </script>
  </body>
</html>
