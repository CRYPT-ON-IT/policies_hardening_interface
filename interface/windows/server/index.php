
<!-- All links -->
<?php include($_SERVER['DOCUMENT_ROOT']."/policies_hardening_interface/ressources/links.php");?>
<?php $link_style_interface="/policies_hardening_interface/interface/windows/style.css";?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- No index meta -->
    <meta name="robots" content="noindex">
    <title>Hardening Interface</title>
    <!-- CSS only -->
    <link href="<?php echo $link_style_bootstrap ?>" rel="stylesheet" integrity="<?php echo $style_bootstrap_intregrity ?>" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="<?php echo $link_script_bootstrap ?>" integrity="<?php echo $script_bootstrap_intregrity ?>" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo $link_style_interface ?>">
    <link rel="stylesheet" href="<?php echo $link_style_master ?>">
    <script src="<?php echo $link_script_ajax ?>"></script>
  </head>
  <body>
    <section class="m-5">
      <div class="container mt-5" style="max-width:940px;">
        <div class="row">
          <div class="col">
            <div class="list-group">
              <a href="/policies_hardening_interface/interface/windows/endpoint" class="list-group-item list-group-item-action">
                Endpoint
              </a>
              <a href="/policies_hardening_interface/interface/windows/server" class="list-group-item list-group-item-action active" aria-current="true">
                Server
              </a>
            </div>
          </div>
          <div class="col">
            <div class="list-group">
              <a href="/policies_hardening_interface/interface/windows/server/2012" class="list-group-item list-group-item-action">
                2012
              </a>
              <a href="/policies_hardening_interface/interface/windows/server/2016" class="list-group-item list-group-item-action">
                2016
              </a>
            </div>
          </div>
        </div>

      </div>
    </section>
  </body>
</html>
