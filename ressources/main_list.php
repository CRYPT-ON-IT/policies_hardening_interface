<?php


//we use '$dirs' from breadcrumb
$aria_current_state=array("","","","");

if (in_array("server", $original_dirs)) {
  $aria_current_state=array("false","true","","active");
}elseif (in_array("endpoint", $original_dirs)) {
  $aria_current_state=array("true","false","active","");
}



 ?>


<div class="list-group">
  <a href="/policies_hardening_interface/interface/windows/endpoint" class="list-group-item list-group-item-action <?php echo $aria_current_state[2] ?>" aria-current="<?php echo $aria_current_state[0] ?>">
    Endpoint
  </a>
  <a href="/policies_hardening_interface/interface/windows/server" class="list-group-item list-group-item-action <?php echo $aria_current_state[3] ?>" aria-current="<?php echo $aria_current_state[1] ?>">
    Server
  </a>
</div>
