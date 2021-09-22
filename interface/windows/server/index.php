
<!-- All links -->
<?php include($_SERVER['DOCUMENT_ROOT']."/policies_hardening_interface/ressources/links.php");?>
<?php $link_style_interface="/policies_hardening_interface/interface/windows/style.css";?>

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
        <div class="row">
          <!-- Choice OS part -->
          <div class="col">
            <?php include($link_motor_main_list);?>
          </div>
          <div class="col">
            <?php include($link_motor_dir_reader);?>
          </div>
        </div>
        <!-- |||||||||||||||| HEADER PART |||||||||||||||| -->

      </div>
    </section>
  </body>
</html>
