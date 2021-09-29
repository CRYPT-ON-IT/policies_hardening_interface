
<!--file that will be read in interface (ux list)-->
<?php $link_csv_file = "data/finding_list_machine_UIX.csv"; ?>
<!--file that will be read in to generate csv file (original list)-->
<?php $link_csv_original_file = "data/finding_list_0x6d69636b_machine.csv"; ?>

<?php
$reference_name = "0x6d69636b"; //* necessary value
$reference_date = "date";       // optional
$reference_version = "version"; // optional
$reference_type = "machine";    // optional
 ?>

<!-- All links -->
<?php include($_SERVER['DOCUMENT_ROOT']."/policies_hardening_interface/ressources/links.php");?>

<!DOCTYPE html>
<?php include($link_motor_csv_reader);?>
