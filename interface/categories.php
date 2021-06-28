<?php

/* Global variable is used for keep the last category */
$global_categ = "init";

function write_category($data)
{
  global $global_categ;
  list($id, $category, $name, $method,
  $method_argument, $registry_path, $registry_item, $classname, $namespace,
  $property, $default_value, $recommended_value, $operator, $severity,
  $UIX_impact, $use, $use_mode, $intro, $link_for_more_infos,
  $consequences, $advice, $notes, $possible_values, $operting_system) = $data;


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
if (($handle = fopen("data/finding_list_machine_UIX.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
        $num = count($data);
        //echo "<p> ==========> $num champs à la ligne $row: <br /></p>\n";
        /*for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";

        }*/
        if ($row>1) {
          write_category($data);
        }

        $row++;
    }
    fclose($handle);
}

 ?>
