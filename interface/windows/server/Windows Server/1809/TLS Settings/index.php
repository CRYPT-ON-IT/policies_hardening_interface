
<!--file that will be read in interface (ux list)-->
<?php $link_csv_file = "finding_list_microsoft_windows_tls.csv"; ?>
<!--file that will be read in to generate csv file (original list)-->
<?php $link_csv_original_file = "finding_list_microsoft_windows_tls.csv"; ?>

<?php
$reference_name = "ND"; //* necessary value
$reference_date = ""; // optional
$reference_version = ""; // optional
$reference_type = "machine";    // optional
$reference_source_url = ""; // optional
 ?>

<!-- All links -->
<?php include($_SERVER['DOCUMENT_ROOT']."/policies_hardening_interface/ressources/links.php");?>

<!DOCTYPE html>
<?php include($link_motor_csv_reader);?>
