
<!--file that will be read in interface (ux list)-->
<?php $link_csv_file = "finding_list_msft_security_baseline_edge_88_machine.csv"; ?>
<!--file that will be read in to generate csv file (original list)-->
<?php $link_csv_original_file = "finding_list_msft_security_baseline_edge_88_machine.csv"; ?>

<?php
$reference_name = "Microsoft Security Baseline"; //* necessary value
$reference_date = "03/04/2021";       // optional
$reference_version = "Final"; // optional
$reference_type = "machine";    // optional
 ?>

<!-- All links -->
<?php include($_SERVER['DOCUMENT_ROOT']."/policies_hardening_interface/ressources/links.php");?>

<!DOCTYPE html>
<?php include($link_motor_csv_reader);?>
