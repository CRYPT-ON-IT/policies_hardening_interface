<?php
$link_windows_hard_interface = "interface/windows";
$link_macos_hard_interface = "interface/macos";
$link_style_master = "style/master.css";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- No index meta -->
    <meta name="robots" content="noindex">
    <title>HardeningKitty Interface</title>
    <!-- Bootstrap requirements -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo $link_style_master; ?>">
    <style media="screen">
    h1, h2, h3{
      font-weight: bold;
      background: linear-gradient(to right, #005d07, rgb(137, 178, 136) 23.53%, rgb(44, 94, 34) 49.58%, rgb(168, 200, 160) 71.85%, rgb(112, 255, 73));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    </style>
  </head>
  <body>
    <section class="container">
      <div class="container mt-5" style="max-width:940px;">
        <h1>Welcome to the HardeningKitty Interface</h1>
        <hr>
        <div class="d-flex justify-content-end m-2">
          <a class="btn btn-success mx-1" role="button" href="<?php echo $link_windows_hard_interface; ?>">
            Go to the Windows Hardening interface
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
              <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg>
          </a>
        </div>
        <div class="d-flex justify-content-end m-2">
          <a class="btn btn-success mx-1" role="button" href="<?php echo $link_macos_hard_interface; ?>">
            Go to the macOS Hardening interface
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
              <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg>
          </a>
        </div>
        <!-- Intro -->
        <h2>Introduction</h2>
        <hr>
          <p style="font-weight:bold;">
            To use <a href="https://github.com/0x6d69636b/windows_hardening">HardeningKitty</a> service more easily, we have created an interface which permits better understanding Windows security policies.
            Also, this interface allows you to generate a CSV file for the purpose of auditing or applying a configuration.
          </p>
        <!-- Tuto -->
        <h2>How can i use it ?</h2>
        <hr>
        <h4>How can i use HardeningKitty ?</h4>
        <ol>
          <li>Download the HardeningKitty script <a href="https://github.com/0x6d69636b/windows_hardening">here</a></li>
          <li>Import the ps1 script :
            <br>
            <pre><span class="code-command">Import-Module </span><span class="code-argument">.\Invoke-HardeningKitty.ps1</span></pre>
          </li>
        </ol>
        <h4>How can i run HardeningKitty audit mode ?</h4>
        <ol>
          <li>Download your CSV file configuration</li>
          <li>Run this command :
            <br>
            <pre><span class="code-command">Invoke-HardeningKitty </span><span class="code-option">-Mode </span><span class="code-argument">Audit </span><span class="code-option">-FileFindingList </span><span class="code-argument">&lt;file.csv&gt; </span></pre>
          </li>
        </ol>
        <h4>How can i keep my previous configuration ?</h4>
        <ol>
          <li>Download your CSV file configuration</li>
          <li>Run this command :
            <br>
            <pre><span class="code-command">Invoke-HardeningKitty </span><span class="code-option">-Mode </span><span class="code-argument">Config </span><span class="code-option">-FileFindingList </span><span class="code-argument">&lt;file.csv&gt; </span><span class="code-option">-Backup</span></pre>
          </li>
          <li>This command will save your configuration in the "RecommendedValue" Column in order to apply this file if you want to backup your previous configuration after having applied the HailMary mode.</li>
        </ol>
        <h4>How can i apply a configuration ?</h4>
        <ol>
          <li>Download your CSV file configuration</li>
          <li>Run this command :
            <br>
            <pre><span class="code-command">Invoke-HardeningKitty </span><span class="code-option">-Mode</span> <span class="code-argument">HailMary </span><span class="code-option">-FileFindingList </span><span class="code-argument">&lt;file.csv&gt; </span></pre>
          </li>
        </ol>
      </div>
      <footer class="pt-5 my-5 text-muted border-top container" style="max-width:940px;">
        Powered by | <a href="https://github.com/0x6d69636b/windows_hardening">HardeningKitty</a> | <a href="https://getbootstrap.com">Bootstrap</a> | <a href="https://cryptonit.fr">Crypt.on it</a>
      </footer>
    </section>

  </body>
</html>
