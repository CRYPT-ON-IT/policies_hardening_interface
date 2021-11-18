<?php
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!//
// Do not forget to define $csv_parser before include this file.
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!//
 ?>



<!-- Buttons part -->

<div class="buttons-gen-wrapper position-sticky blur-backg white-theme rounded m-3 p-3" style="z-index: 10;">
  <div class="row">
    <div class="col-6">
      <div class="">
        <span class="badge bg-secondary">checked :
          <span id="dynamic-checked-value"><?php echo $checked_policies_nbr ?></span>
        </span>
      </div>
    </div>
    <div class="col-6">
      <div class="d-flex justify-content-end">
        <div class="">
          <!-- Generate button -->
          <a id="csv-generate" class="btn btn-success mx-1" role="button">
            <span id="csv-generate-loaders" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display:none;"></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
              <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
            </svg>
            Generate CSV File
          </a>
          <!-- Download button -->
          <a id="csv-download" class="btn btn-success mx-1" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16">
              <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
              <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
            </svg>
            Download CSV file
          </a>
          <!--download="hardening-kitty.csv" href="data:application/csv;charset=utf-8,Error"-->
        </div>
      </div>
    </div>
  </div>

  <!-- Alert part -->
  <div class="position-fixed top-0 end-0 p-3 " style="z-index: 5">
    <!-- Downloaded alert -->
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
