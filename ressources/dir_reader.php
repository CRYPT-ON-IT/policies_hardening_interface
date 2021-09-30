<div class="list-group">
  <?php
    $dir_enumerate = scandir(".");
    foreach ($dir_enumerate as $dir_item) {
      if (is_dir($dir_item) and $dir_item!="." and $dir_item!="..") {
        //replace %20 by space
        $dir_item_cleaned = str_replace("%20", " ", $dir_item);
        echo "<a href=\"$actual_link$dir_item\" class=\"list-group-item list-group-item-action\">$dir_item_cleaned</a>";
       }
    }
   ?>
</div>
