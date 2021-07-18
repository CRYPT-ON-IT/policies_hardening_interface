<?php

$link_csv_file = "data/finding_list_machine_UIX.csv";

//
// This code will load all categories to write them in the left nav bar
//

/* Global variable is used for keep the last category */
$global_categ = "init";

function write_category($data)
{
  global $global_categ;
  list($id, $category, $name, $assessment_status, $method,
  $method_option, $get_command, $set_command, $user,
  $registry_path, $registry_item, $default_value, $recommended_value, $type_value, $operator, $severity,
  $UIX_impact, $use, $use_mode, $intro, $link_for_more_infos, $tags
  $consequences, $advice, $notes, $comment, $possible_values, $operting_system) = $data;


  /* to print category title */
  if ($global_categ!=$category) {
    $categoty_content = preg_replace("/[^a-zA-Z0-9]+/", "", $category);
    echo "
    <a class=\"list-group-item list-group-item-action\" href=\"#$categoty_content-$id\"><b>$id - </b>$category</a>
    ";
    $global_categ = $category;
  }
}

$row = 1;
if (($handle = fopen($link_csv_file, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
        $num = count($data);
        if ($row>1) {
          write_category($data);
        }

        $row++;
    }
    fclose($handle);
}

 ?>
