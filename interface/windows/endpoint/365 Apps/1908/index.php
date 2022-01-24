
<!--file that will be read in interface (ux list)-->
<?php $link_csv_file = "finding_list_msft_security_baseline_office_365_v1908_machine.csv"; ?>
<!--file that will be read in to generate csv file (original list)-->
<?php $link_csv_original_file = "finding_list_msft_security_baseline_office_365_v1908_machine.csv"; ?>

<?php
$reference_name = "Microsoft Security Baseline"; //* necessary value
$reference_date = "09/13/2021";       // optional
$reference_version = "Final"; // optional
$reference_type = "machine";    // optional
$reference_source_url = "https://techcommunity.microsoft.com/t5/microsoft-security-baselines/security-baseline-for-microsoft-edge-v93/ba-p/2744505";
 ?>

<!-- All links -->
<?php include($_SERVER['DOCUMENT_ROOT']."/policies_hardening_interface/ressources/links.php");?>

<!DOCTYPE html>
<?php include($link_motor_csv_reader);?>
