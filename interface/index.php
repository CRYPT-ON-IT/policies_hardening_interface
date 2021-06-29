<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- No index meta -->
    <meta name="robots" content="noindex">
    <title>Hardening Interface</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <style media="screen">

    body{
      position: relative;
      overflow: auto;
    }

    table{
      border-collapse: collapse;
      border-radius: 1em;
      overflow: hidden;
      background-color: white;
    }

    .hiddenRow {
        padding: 0 !important;
        border: transparent;
    }

    .alert{
      border-radius: 1em;
      border: none;
    }

    .alert-danger{
      background: linear-gradient(to top right, #f5c2c7, #f5e2e4);
    }

    .alert-success{
      background: linear-gradient(to top right, #badbcc, #e5fcf2);
    }

    .alert-primary{
      background: linear-gradient(to top right, #cfe2ff, #f1f6ff);
    }

    .alert-secondary{
      background: linear-gradient(to top right, #e2e3e5, #f8f9fa);
    }

    .table-orange{
      --bs-table-bg: #f9ebd7;
      --bs-table-striped-bg: #ecdbcc;
      --bs-table-striped-color: #000;
      --bs-table-active-bg: #dfd4c2;
      --bs-table-active-color: #000;
      --bs-table-hover-bg: #e6d8c8;
      --bs-table-hover-color: #000;
      color: #000;
      border-color: #dfd4c2;
    }

    .title-tr {
      box-shadow: none !important;
    }

    .blur-backg {
      -webkit-backdrop-filter: saturate(180%) blur(20px);
      backdrop-filter: saturate(180%) blur(20px);
    }

    .toast {
      background-color: rgba(255,255,255,.5);
      border: none;
      border-radius: 1em;
    }

    .toast-header {
      border-radius: 1em;
    }

    pre code{
      display: inline;
      max-width: auto;
      padding: 0;
      margin: 0;
      overflow: visible;
      line-height: inherit;
      word-wrap: normal;
      background-color: transparent;
      border: 0;
      font-size: small;
    }


    </style>
    <link rel="stylesheet" href="../style/master.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body data-spy="scroll">
    <section class="m-5">
      <div class="container mt-5" style="max-width:940px;">
        <h1>Welcome to the HardeningKitty Interface</h1>
        <hr>
          <div class="d-flex justify-content-end m-2">
            <!-- <a id="csv-generate" class="btn btn-success mx-1" role="button">
              <span id="csv-generate-loader" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display:none;"></span>
              Generate CSV File
            </a> -->
            <a id="csv-generate" class="btn btn-success mx-1" role="button">
              <span id="csv-generate-loader" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display:none;"></span>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
              </svg>
              Generate CSV File
            </a>
            <a id="csv-download" class="btn btn-success mx-1" role="button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16">
                <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
              </svg>
              Download CSV file
            </a>
            <!--download="hardening-kitty.csv" href="data:application/csv;charset=utf-8,Error"-->
          </div>

          <div class="position-fixed top-0 end-0 p-3 " style="z-index: 5">
            <div id="liveToast" class="toast fade hide blur-backg" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header">
                <strong class="me-auto">Your file has been genrerated !</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
              <div class="toast-body">
                You can download it by clicking on 'Download CSV file'
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-3">
            <nav id="nav-list" class="sticky-top list-group" style="top:50px;border-radius: 1em;">
              <?php include 'categories.php';?>
            </nav>
          </div>


          <div class="col-9">

            <!-- <div class="alert alert-success" style="width:200px">
              <h4>Tag Filter</h4>
              <div class="form-check">
                <input class="form-check-input tag-check-input" type="checkbox" data-tag-name="Network" value="" id="Network-tag-check">
                <label class="form-check-label" for="flexCheckDefault">
                  <span class="badge rounded-pill bg-dark m-1">Network</span>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input tag-check-input" type="checkbox" data-tag-name="SMB" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  <span class="badge rounded-pill bg-dark m-1">SMB</span>
                </label>
              </div>
            </div> -->

            <table id="sortTable" class="table table-striped col-10" style="border-collapse:collapse;">
              <thead>
                <tr class="sortable">
                  <th id="number" scope="col">#</th>
                  <th scope="col">Mode</th>
                  <th scope="col">Name</th>
                  <th scope="col">Severity</th>
                  <th scope="col">UIX impact</th>
                  <th scope="col">Default Value</th>
                  <th scope="col">Recommended Value</th>
                  <th scope="col">Apply</th>
                </tr>
              </thead>
              <thead>
                <tr class="sortable">
                  <th scope="col">Filter</th>
                  <th scope="col">
                    <select id="selected-mode" class="form-select form-select-sm" aria-label="Default select example">
                      <option value="0" selected>None</option>
                      <option value="1">Basic</option>
                      <option value="2">Enterprise</option>
                      <option value="3">StrongBox</option>
                    </select>
                  </th>
                  <th scope="col"></th>
                  <th scope="col">
                    <select id="selected-severity" class="form-select form-select-sm" aria-label="Default select example">
                      <option value="0" selected>None</option>
                      <option value="1">Hight</option>
                      <option value="2">Medium</option>
                      <option value="3">Low</option>
                    </select>
                  </th>
                  <th scope="col">
                    <select id="selected-uix" class="form-select form-select-sm" aria-label="Default select example">
                      <option value="0" selected>None</option>
                      <option value="1">Impact</option>
                      <option value="2">Potentially</option>
                      <option value="3">No impact</option>
                    </select>
                  </th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col">
                    <input id="check-filter" class="form-check-input" type="checkbox" value="">
                  </th>
                </tr>
              </thead>

              <tbody>
                <?php include 'table.php';?>
              </tbody>
            </table>
          </div>

        </div>






      <footer class="pt-5 my-5 text-muted border-top">
        Powered by | <a href="https://github.com/0x6d69636b/windows_hardening">HardeningKitty</a> | <a href="https://getbootstrap.com">Bootstrap</a> | <a href="https://cryptonit.fr">Crypt.on it</a>
      </footer>
    </section>

  </body>
  <script type="text/javascript">
  /************ Gloabl value *************/
  var global_link = "/windows_hardening_interface/interface"
  /************ End Global Value ****************/

  /************ To update position scroll-spy when refresh ******************/
 // var scrollSpy = new bootstrap.ScrollSpy(document.body, {
 //    target: "#nav-list",
 //    offset: 0
 //  })

  $("#liveToast :button").click(function() {
    $("#liveToast").removeClass("show").addClass("hide")
  })

  // $("[data-bs-toggle='collapse']").click(function() {
  //   setTimeout(
  //     function()
  //     {
  //       var dataSpyList = [].slice.call(document.querySelectorAll('[data-bs-spy="scroll"]'))
  //         dataSpyList.forEach(function (dataSpyEl) {
  //           bootstrap.ScrollSpy.getInstance(dataSpyEl)
  //             .refresh()
  //         })
  //         alert('ok')
  //     }, 5000);
  //
  // }
  //
  // )

  /**************************************************************************/


  </script>
  <script type="text/javascript" src="scripts/filter.js"></script>
  <script type="text/javascript" src="scripts/generate_csv.js"></script>
  <script type="text/javascript">
  </script>
</html>
