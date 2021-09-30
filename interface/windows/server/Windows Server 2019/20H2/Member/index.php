
<!--file that will be read in interface (ux list)-->
<?php $link_csv_file = "finding_list_dod_microsoft_windows_server_2019_member_stig_v2r1_machine.csv"; ?>
<!--file that will be read in to generate csv file (original list)-->
<?php $link_csv_original_file = "finding_list_dod_microsoft_windows_server_2019_member_stig_v2r1_machine.csv"; ?>

<?php
$reference_name = "Department of Defence"; //* necessary value
//$reference_date = "01/14/2020";       // optional
$reference_version = "v2r1"; // optional
$reference_type = "machine";    // optional
 ?>

<!-- All links -->
<?php include($_SERVER['DOCUMENT_ROOT']."/policies_hardening_interface/ressources/links.php");?>

<!DOCTYPE html>
<?php include($link_motor_csv_reader);?>
