
<!--file that will be read in interface (ux list)-->
<?php $link_csv_file = "finding_list_msft_security_baseline_windows_server_2004_member_machine.csv"; ?>
<!--file that will be read in to generate csv file (original list)-->
<?php $link_csv_original_file = "finding_list_msft_security_baseline_windows_server_2004_member_machine.csv"; ?>

<!-- All links -->
<?php include($_SERVER['DOCUMENT_ROOT']."/policies_hardening_interface/ressources/links.php");?>

<!DOCTYPE html>
<?php include($link_motor_csv_reader);?>
