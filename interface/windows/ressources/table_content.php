<?php
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!//
// Do not forget to define $link_motor_table_parser before include this file.
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!//
 ?>

  <main>
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
    <!-- Table -->
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
          <th scope="col">
            <div class="input-group input-group-sm">
              <span class="input-group-text" id="inputGroup-sizing-default">Search</span>
              <input id="input-search-name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
          </th>
          <th scope="col">
            <select id="selected-severity" class="form-select form-select-sm" aria-label="Default select example">
              <option value="0" selected>None</option>
              <option value="1">High</option>
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
        <?php include $link_motor_table_parser;?>
      </tbody>
    </table>
  </main>
