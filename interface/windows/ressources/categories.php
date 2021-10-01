<aside class="sticky-top" style="top:50px;">
  <nav id="nav-list" class="list-group" style="border-radius: 1em;height: 80vh;overflow-y: auto;">
<?php

//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!//
// Do not forget to define $link_csv_file before include this file.
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!//

//
// This code will load all categories to write them in the left nav bar
//

/* Global variable is used for keep the last category */
$global_categ = "init";

function write_category($data)
{
  global $global_categ;
  // If we have all columns in CSV
  if (count($data)>14) {
    list($id, $category, $name, $method,
    $method_argument, $registry_path, $registry_item, $classname, $namespace,
    $property, $default_value, $recommended_value, $operator, $severity,
    $UIX_impact, $use, $use_mode, $intro, $link_for_more_infos,
    $consequences, $advice, $notes, $possible_values, $operting_system) = $data;
  }else {
    list($id, $category, $name, $method,
    $method_argument, $registry_path, $registry_item, $classname, $namespace,
    $property, $default_value, $recommended_value, $operator, $severity) = $data;
  }


  /* clean id string */
  // to replace '.' with '-'
  $id_cleaned = str_replace(".", "-", $id);


  /* to print category title */
  if ($global_categ!=$category) {
    $categoty_content = preg_replace("/[^a-zA-Z0-9]+/", "", $category);
    echo "
    <a class=\"list-group-item list-group-item-action\" href=\"#$categoty_content-$id_cleaned\"><b>$id - </b>$category</a>
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
</nav>
</aside>
