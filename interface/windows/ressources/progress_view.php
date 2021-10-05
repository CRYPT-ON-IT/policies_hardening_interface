<?php

////////////////////////////////////////////////////////////////////////////////
//////////////////////////////  Progress view //////////////////////////////////
////////////////////////////////////////////////////////////////////////////////

$policies_nbr = $row-1;
$done_policies_nbr = $policies_nbr-$done_policies_nbr;
$calc_global = intval($done_policies_nbr*100/$policies_nbr);
$calc_goal = intval($checked_policies_nbr*100/50);
echo "
<!---- Progress view ---->
<div class=\"alert alert-primary\" role=\"alert\" style=\"max-width:400px;\">
  <h4>Global progress - $done_policies_nbr/$policies_nbr</h4>
  <div class=\"progress\">
    <div class=\"progress-bar progress-bar-striped bg-success\" role=\"progressbar\" style=\"width: $calc_global%;\" aria-valuenow=\"$calc_global\" aria-valuemin=\"0\" aria-valuemax=\"100\">$calc_global%</div>
  </div>
  <h4>Goal progress - $checked_policies_nbr/50</h4>
  <div class=\"progress\">
    <div class=\"progress-bar progress-bar-striped bg-success\" role=\"progressbar\" style=\"width: $calc_goal%;\" aria-valuenow=\"$calc_goal\" aria-valuemin=\"0\" aria-valuemax=\"100\">$calc_goal%</div>
  </div>
</div>
<!---- End progress view ---->
";

echo "
<!---- Numbers view ---->
<div class=\"alert alert-primary position-absolute\" role=\"alert\" style=\"max-width:400px;\">
  <table class=\"table\" style=\"border: solid 1px rgb(227, 227, 227);\">
            <tbody>
              <tr>
                <th>Reference</th>
                <td>0x6d69636b</td>
              </tr>
              <tr>
                <th>Date</th>
                <td>date</td>
              </tr>
              <tr>
                <th>Version</th>
                <td>version</td>
              </tr>
              <tr>
                <th>Type</th>
                <td>machine</td>
              </tr>
            </tbody>
    </table>
</div>
<!---- End Numbers view ---->
";

 ?>
