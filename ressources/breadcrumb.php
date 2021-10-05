
<?php
//get name domain
$domain_link = "http://$_SERVER[HTTP_HOST]";
// get path directory
$actual_link = "$_SERVER[REQUEST_URI]";

// clean path (remove potential '#')
$actual_link_parsed = parse_url($actual_link, PHP_URL_PATH);

// convert string to array
$dirs=explode("/",$actual_link_parsed);
$original_dirs=$dirs;

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
      //replace %20 by space
      $val_cleaned = str_replace("%20", " ", $val);
      echo "<li class=\"breadcrumb-item\"><a href=\"$domain_link$accum\">$val_cleaned</a></li>";
    }
    //replace %20 by space
    $actual_page_cleaned = str_replace("%20", " ", $actual_page);
    echo "<li class=\"breadcrumb-item active\" aria-current=\"page\">$actual_page_cleaned</li>";
     ?>
  </ol>
</nav>


<div class="d-flex justify-content-end m-2">
  <a href="<?php echo $link_page_search ?>" class="btn btn-primary mx-1" role="button">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
    </svg>
    Search a list
  </a>
</div>
