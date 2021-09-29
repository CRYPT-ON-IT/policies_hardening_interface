
<!--file that will be read in interface (ux list)-->
<?php $link_csv_file = "finding_list_cis_microsoft_windows_server_2019_1809_1.1.0_machine.csv"; ?>
<!--file that will be read in to generate csv file (original list)-->
<?php $link_csv_original_file = "finding_list_cis_microsoft_windows_server_2019_1809_1.1.0_machine.csv"; ?>

<?php
$reference_name = "CIS"; //* necessary value
$reference_date = "01/14/2020";       // optional
$reference_version = "1.1.0"; // optional
$reference_type = "machine";    // optional
 ?>

<!-- All links -->
<?php include($_SERVER['DOCUMENT_ROOT']."/policies_hardening_interface/ressources/links.php");?>

<!DOCTYPE html>
<?php include($link_motor_csv_reader);?>
