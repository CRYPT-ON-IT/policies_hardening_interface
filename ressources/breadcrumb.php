
<?php
//get name domain
$domain_link = "http://$_SERVER[HTTP_HOST]";
// get path directory
$actual_link = "$_SERVER[REQUEST_URI]";

// clean path (remove potential '#')
$actual_link_parsed = parse_url($actual_link, PHP_URL_PATH);

// convert string to array
$dirs=explode("/",$actual_link_parsed);

// remove last element
$actual_page = array_pop($dirs);
$actual_page = array_pop($dirs);

// remove first element
array_shift($dirs);
$accum = "";
//echo "actual=$actual_page, dirs=$dirs[0]";


 ?>


<!-- Breadcrumb part -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <?php
    foreach ($dirs as $key=>$val) {
      $accum=$accum.'/'.$val;
      echo "<li class=\"breadcrumb-item\"><a href=\"$domain_link$accum\">$val</a></li>";
    }
    echo "<li class=\"breadcrumb-item active\" aria-current=\"page\">$actual_page</li>";
     ?>
  </ol>
</nav>
