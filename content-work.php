<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Marketing Dashboard | Liberty Networks</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

  <link rel="stylesheet" href="./assets/vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="./assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">

  <!-- CSS Front Template -->
  <link rel="preload" href="./assets/css/theme.min.css" data-hs-appearance="default" as="style">
  <link rel="preload" href="./assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style">

  <!-- CSS Style -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <style data-hs-appearance-onload-styles>
    *
    {
      transition: unset !important;
    }

    body
    {
      opacity: 0;
    }
  </style>

  <script>
            window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/index.html","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/theme-dark.css","assets/css/docs.css","assets/vendor/icon-set/style.css","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
            window.hs_config.gulpRGBA = (p1) => {
  const options = p1.split(',')
  const hex = options[0].toString()
  const transparent = options[1].toString()

  var c;
  if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
    c= hex.substring(1).split('');
    if(c.length== 3){
      c= [c[0], c[0], c[1], c[1], c[2], c[2]];
    }
    c= '0x'+c.join('');
    return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',' + transparent + ')';
  }
  throw new Error('Bad Hex');
}
            window.hs_config.gulpDarken = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = -parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            window.hs_config.gulpLighten = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            </script>
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl">

  <script src="./assets/js/hs.theme-appearance.js"></script>

  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>

  <!-- ========== HEADER ========== -->

    <?php include('partials/top.php'); ?>

    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->
    <?php include('partials/navbar.php'); ?>
    <!-- End Navbar Vertical -->

  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col">
            <h1 class="page-header-title">Content Creation</h1>
          </div>
          <!-- End Col -->

          <div class="d-flex justify-content-center loading mb-4">
              <div class="spinner-border text-warning" style="width: 3rem; height: 3rem;" role="status">
                  <span class="sr-only"></span>
              </div>
          </div>

          <!-- <div class="col-auto">
            <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#inviteUserModal">
              <i class="bi-person-plus-fill me-1"></i> Invite users
            </a>
          </div> -->
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <!-- Card -->
      <div class="card mb-3 mb-lg-5">
        <!-- Header -->
        <div class="card-header bg-gray">
          <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-md">
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-header-title">Project Status</h4>

                <!-- Datatable Info -->
                <!-- <div id="datatableCounterInfo" style="display: none;">
                  <div class="d-flex align-items-center">
                    <span class="fs-6 me-3">
                      <span id="datatableCounter">0</span>
                      Selected
                    </span>
                    <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                      <i class="tio-delete-outlined"></i> Delete
                    </a>
                  </div>
                </div> -->
                <!-- End Datatable Info -->
              </div>
            </div>
            <!-- End Col -->

          </div>
          <!-- End Row -->
        </div>
        <!-- End Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 10,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
            <thead class="thead-light">
              <tr class="border-bottom">
                <th class="form-check">Project name</th>
                <th>Progress (%)</th>
                <th>Delivered</th>
                <th>In scope</th>
              </tr>
            </thead>

            <tbody id="projectStatusTbody">
              <!-- <tr role='row' class='odd'>
                <td class='form-check'>LN_Social_AlwaysOn_Q1  </td><td><div class='d-flex align-items-center'><div class='me-2'>79%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 79%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>48</td>
                <td>61</td>
                </tr>
                <tr role='row' class='even'>
                <td class='form-check'>LN_Event_Educationsummit_ent_Mar</td><td><div class='d-flex align-items-center'><div class='me-2'>93%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 93%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>42</td>
                <td>45</td>
                </tr>
                <tr role='row' class='odd'>
                <td class='form-check'>LN_Event_VIPLinks_apr </td><td><div class='d-flex align-items-center'><div class='me-2'>34%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 34%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>12</td>
                <td>35</td>
                </tr>
                <tr role='row' class='even'>
                <td class='form-check'>LN_Event_PoPFactory</td><td><div class='d-flex align-items-center'><div class='me-2'>100%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>24</td>
                <td>24</td>
                </tr>
                <tr role='row' class='odd'>
                <td class='form-check'>LN_Email_EducationCampaign </td><td><div class='d-flex align-items-center'><div class='me-2'>100%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>16</td>
                <td>16</td>
                </tr>
                <tr role='row' class='even'>
                <td class='form-check'>COL_Emails_ThreeStrikesAcquisition</td><td><div class='d-flex align-items-center'><div class='me-2'>53%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 53%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>8</td>
                <td>15</td>
                </tr>
                <tr role='row' class='odd'>
                <td class='form-check'>LN_Other_AdHoc </td><td><div class='d-flex align-items-center'><div class='me-2'>36%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 36%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>5</td>
                <td>14</td>
                </tr>
                <tr role='row' class='even'>
                <td class='form-check'>LN_Tools_MarketingDashboards</td><td><div class='d-flex align-items-center'><div class='me-2'>0%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 0%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>0</td>
                <td>10</td>
                </tr>
                <tr role='row' class='odd'>
                <td class='form-check'>LN_Email_CrossSellSecurity</td><td><div class='d-flex align-items-center'><div class='me-2'>100%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>7</td>
                <td>7</td>
                </tr>
                <tr role='row' class='even'>
                <td class='form-check'>LN_Social_AlwaysOn_Q1 </td><td><div class='d-flex align-items-center'><div class='me-2'>83%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 83%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>5</td>
                <td>6</td>
                </tr>
                <tr role='row' class='odd'>
                <td class='form-check'>LN_Email_Unbreakable</td><td><div class='d-flex align-items-center'><div class='me-2'>0%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 0%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>0</td>
                <td>5</td>
                </tr>
                <tr role='row' class='even'>
                <td class='form-check'>LN_Email_CrossSellCloud</td><td><div class='d-flex align-items-center'><div class='me-2'>0%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 0%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>0</td>
                <td>3</td>
                </tr>
                <tr role='row' class='odd'>
                <td class='form-check'>LN_Event_VIPLinks_apr   </td><td><div class='d-flex align-items-center'><div class='me-2'>33%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 33%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>1</td>
                <td>3</td>
                </tr>
                <tr role='row' class='even'>
                <td class='form-check'>LN_Social_AlwaysOn_Q1   </td><td><div class='d-flex align-items-center'><div class='me-2'>100%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>3</td>
                <td>3</td>
                </tr>
                <tr role='row' class='odd'>
                <td class='form-check'>LN_Newsletters  </td><td><div class='d-flex align-items-center'><div class='me-2'>100%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>3</td>
                <td>3</td>
                </tr>
                <tr role='row' class='even'>
                <td class='form-check'>LN_Other_AdHoc  </td><td><div class='d-flex align-items-center'><div class='me-2'>100%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>1</td>
                <td>1</td>
                </tr>
                <tr role='row' class='odd'>
                <td class='form-check'>LN_Training_SalesEnablementProgram  </td><td><div class='d-flex align-items-center'><div class='me-2'>0%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 0%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>0</td>
                <td>1</td>
                </tr>
                <tr role='row' class='even'>
                <td class='form-check'>LN_Email_EducationCampaign  </td><td><div class='d-flex align-items-center'><div class='me-2'>100%</div>
                <div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width: 100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>
                </div>
                </div>
                </div>
                </td><td>1</td>
                <td>1</td>
                </tr> -->
            </tbody>
          </table>
        </div>
        <!-- End Table -->

        <!-- Footer -->
        <div class="card-footer">
          <!-- Pagination -->
          <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
            <div class="col-sm mb-2 mb-sm-0">
              <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                <!-- <span class="me-2">Showing:</span> -->

                <!-- Select -->
                <!-- <div class="tom-select-custom">
                  <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                    <option value="5">5</option>
                    <option value="10" selected>10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                  </select>
                </div> -->
                <!-- End Select -->

                <!-- <span class="text-secondary me-2">of</span> -->

                <!-- Pagination Quantity -->
                <!-- <span id="datatableWithPaginationInfoTotalQty"></span> -->
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm-auto">
              <div class="d-flex justify-content-center justify-content-sm-end">
                <!-- Pagination -->
                <nav id="datatablePagination" aria-label="Activity pagination"></nav>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Pagination -->
        </div>
        <!-- End Footer -->

      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="card mb-3 mb-lg-5">
        <!-- Header -->
        <div class="card-header bg-gray">
          <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-md">
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-header-title">2024</h4>
              </div>
            </div>
          </div>
        </div>
        <!-- End Header -->

        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr class="">
                <th class="sub-title-table text-center"></th>
                <th class="fw-bold text-center">Q1</th>
                <th class="fw-bold text-center">Q2</th>
                <th class="fw-bold text-center">Q3</th>
                <th class="fw-bold text-center">Q4</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-top border-bottom">
                <td class=""><p class="ms-3">Initiative</p></td>
                <td class="">
                  <div class="d-flex justify-content-around">
                    <p class="mg-b-0 text-data-table me-2 me-md-0">JAN</p>
                    <p class="mg-b-0 text-data-table me-2 me-md-0">FEB</p>
                    <p class="mg-b-0 text-data-table me-2 me-md-0">MAR</p>
                  </div>
                </td>
                <td class="">
                  <div class="d-flex justify-content-around">
                    <p class="mg-b-0 text-data-table me-2 me-md-0">APR</p>
                    <p class="mg-b-0 text-data-table me-2 me-md-0">MAY</p>
                    <p class="mg-b-0 text-data-table me-2 me-md-0">JUN</p>
                  </div>
                </td>
                <td class="">
                  <div class="d-flex justify-content-around">
                    <p class="mg-b-0 text-data-table me-2 me-md-0">JUL</p>
                    <p class="mg-b-0 text-data-table me-2 me-md-0">AUG</p>
                    <p class="mg-b-0 text-data-table me-2 me-md-0">SEP</p>
                  </div>
                </td>
                <td class="">
                  <div class="d-flex justify-content-around">
                    <p class="mg-b-0 text-data-table me-2 me-md-0">OCT</p>
                    <p class="mg-b-0 text-data-table me-2 me-md-0">NOV</p>
                    <p class="mg-b-0 text-data-table me-2 me-md-0">DEC</p>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="5" class="pt-0">
                  <!-- Accordion -->
                  <div class="accordion" id="accordionExample">
        <!--             <div class='accordion-item'><div class='accordion-header' id='heading11'>
                      <a class='accordion-button' role='button' data-bs-toggle='collapse' data-bs-target='#collapse11' aria-expanded='true' aria-controls='collapse11'>COL_Emails_ThreeStrikesAcquisition</a>
                  </div><div id='collapse11' class='accordion-collapse collapse show' aria-labelledby='heading11' data-bs-parent='#accordionExample'><div class='accordion-body'><div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Creation</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 2%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 22%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 76%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Follow Up</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 21%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 24%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 55%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Preparation</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 14%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 17%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 70%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Review</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 16%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 32%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 53%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Sección sin nombre</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 2%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 31%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 67%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Set Up</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 21%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 24%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 55%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div></div></div></div>
              <div class='accordion-item'><div class='accordion-header' id='heading17'>
                      <a class='accordion-button collapsed' role='button' data-bs-toggle='collapse' data-bs-target='#collapse17' aria-expanded='true' aria-controls='collapse17'>LN_Email_Unbreakable</a>
                  </div><div id='collapse17' class='accordion-collapse collapse' aria-labelledby='heading17' data-bs-parent='#accordionExample'><div class='accordion-body'><div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Creation</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 3%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 20%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 77%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Follow Up</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 18%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 20%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 62%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Preparation</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 17%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 19%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 64%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Review</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 19%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 30%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 51%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Set Up</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 21%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 24%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 55%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div></div></div></div>
              <div class='accordion-item'><div class='accordion-header' id='heading22'>
                      <a class='accordion-button collapsed' role='button' data-bs-toggle='collapse' data-bs-target='#collapse22' aria-expanded='true' aria-controls='collapse22'>LN_Event_PoPFactory</a>
                  </div><div id='collapse22' class='accordion-collapse collapse' aria-labelledby='heading22' data-bs-parent='#accordionExample'><div class='accordion-body'><div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Creation</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 14%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 31%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 56%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Preparation</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 17%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 18%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 65%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Review</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 21%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 31%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 48%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Sección sin nombre</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 19%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 31%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 51%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div></div></div></div>
              <div class='accordion-item'><div class='accordion-header' id='heading26'>
                      <a class='accordion-button collapsed' role='button' data-bs-toggle='collapse' data-bs-target='#collapse26' aria-expanded='true' aria-controls='collapse26'>LN_Email_CrossSellSecurity</a>
                  </div><div id='collapse26' class='accordion-collapse collapse' aria-labelledby='heading26' data-bs-parent='#accordionExample'><div class='accordion-body'><div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Creation</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 16%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 20%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 64%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Follow Up</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 17%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 22%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 61%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Preparation</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 14%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 19%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 68%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Review</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 17%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 26%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 57%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Sección sin nombre</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 22%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 24%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 54%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Set Up</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 19%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 24%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 57%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div></div></div></div>
              <div class='accordion-item'><div class='accordion-header' id='heading32'>
                      <a class='accordion-button collapsed' role='button' data-bs-toggle='collapse' data-bs-target='#collapse32' aria-expanded='true' aria-controls='collapse32'>LN_Event_Educationsummit_ent_Mar</a>
                  </div><div id='collapse32' class='accordion-collapse collapse' aria-labelledby='heading32' data-bs-parent='#accordionExample'><div class='accordion-body'><div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Creation</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 5%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 24%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 71%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Follow Up</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 7%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 9%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 84%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Preparation</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 6%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 7%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 87%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Review</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 7%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 26%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 67%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Sección sin nombre</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 9%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 24%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 67%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div></div></div></div>
              <div class='accordion-item'><div class='accordion-header' id='heading37'>
                      <a class='accordion-button collapsed' role='button' data-bs-toggle='collapse' data-bs-target='#collapse37' aria-expanded='true' aria-controls='collapse37'>LN_Tools_MarketingDashboards</a>
                  </div><div id='collapse37' class='accordion-collapse collapse' aria-labelledby='heading37' data-bs-parent='#accordionExample'><div class='accordion-body'><div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Creation</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 20%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 26%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 55%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Preparation</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 19%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 20%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 61%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Review</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 20%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 24%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 57%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div>
              <div class='d-flex align-items-center'>
              <div class='col-2'>
              <p>
              Untitled section</p>
              </div>
              <div class='progress col-10'>
              <div class='progress-bar bg-gray' role='progressbar' style='width: 22%' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-orange' role='progressbar' style='width: 24%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100'>
              </div><div class='progress-bar bg-gray' role='progressbar' style='width: 54%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
              </div>
              </div>
              </div></div></div></div>
 -->

                  </div>
                  <!-- End Accordion -->
                </td>
              </tr>
            </tbody>
          </table>
          
        </div>

      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="card mb-3 mb-lg-5">
        <!-- Header -->
        <div class="card-header bg-gray">
          <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-md">
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-header-title">Collateral</h4>
              </div>
            </div>
          </div>
        </div>
        <!-- End Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <table id="datatable2" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty2"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries2",
                   "pageLength": 10,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination2"
                 }'>
            <thead class="thead-light">
              <tr class="border-bottom">
                <th class="form-check">Collateral name</th>
                <th>Project</th>
                <th style="width: 300px!important;">Progress</th>
                <th>Status</th>
                <th>Due Date</th>
              </tr>
            </thead>

            <tbody id="WIPTbody">
              <!-- <tr><td class='form-check'>Slide Decks - Edits - Text Edits Rays Deck Update</td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/19/2024</td></tr>
                <tr><td class='form-check'>Videos - Audio Enhancement Sizzle video</td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/22/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Key Visual Initial KV</td>
                <td>LN_Email_Unbreakable</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>01/15/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Collateral References Collateral Sheet</td>
                <td>LN_Email_CrossSellCloud</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>01/19/2024</td></tr>
                <tr><td class='form-check'>Emails - Edits - Tweak Links printing files edits</td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/19/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Social Media Static Posts collaterals for event coverage</td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/19/2024</td></tr>
                <tr><td class='form-check'>Emails - Training Program Sales Enablement Emails Config.</td>
                <td>LN_Training_SalesEnablementProgram </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>02/23/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Edits - Text Edits 4-fold Edits</td>
                <td>LN_Other_AdHoc </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>02/19/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Edits - Text Edits KV Update and Email Banners</td>
                <td>LN_Event_VIPLinks_apr </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>02/08/2024</td></tr>
                <tr><td class='form-check'>Slide Decks - Edits - Tweak Ray Collins Deck</td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/12/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Large Format Refresh Valla HN</td>
                <td>LN_Other_AdHoc </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/12/2024</td></tr>
                <tr><td class='form-check'>Videos - Edits - Tweak CSC Videos credit edits</td>
                <td>LN_Social_AlwaysOn_Q1 </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/05/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Edits - Tweak 4-fold Flyer Translation to Spanish</td>
                <td>LN_Other_AdHoc </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>03/11/2024</td></tr>
                <tr><td class='form-check'>Websites - Edits - Redesign Diagrama de Gannt Edit</td>
                <td>LN_Tools_MarketingDashboards</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/03/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Edits - Text Edits New map on Folders</td>
                <td>LN_Other_AdHoc </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>03/29/2024</td></tr>
                <tr><td class='form-check'>Websites - Dashboard Extra Page for Dashboards</td>
                <td>LN_Tools_MarketingDashboards</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>03/29/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Social Media Static Posts Links press release post</td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/19/2024</td></tr>
                <tr><td class='form-check'>Videos - Edits - Tweak CSC Video edits</td>
                <td>LN_Social_AlwaysOn_Q1 </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/19/2024</td></tr>
                <tr><td class='form-check'>Videos - Clip-based Video LINKS 2024 Sizzle Video</td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/19/2024</td></tr>
                <tr><td class='form-check'>Videos - Teaser Links videos visual</td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/23/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Retractable Banner 4-fold Networks Flyer</td>
                <td>LN_Other_AdHoc </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>02/02/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Key Visual ey Visual options;</td>
                <td>LN_Email_CrossSellCloud</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>01/09/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Key Visual Key Visual options</td>
                <td>LN_Email_CrossSellCloud</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>01/10/2024</td></tr>
                <tr><td class='form-check'>Videos - Clip-based Video Paid media wholesale video post</td>
                <td>LN_Social_AlwaysOn_Q1  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/19/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Edits - Text Edits Rolll Up Banner Export</td>
                <td>LN_Other_AdHoc </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>03/29/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Social Media Carousel Quetzaltenango post</td>
                <td>LN_Event_PoPFactory</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/22/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Social Media Static Posts Patricia Manzano post Liberty</td>
                <td>LN_Social_AlwaysOn_Q1  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/22/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Social Media Static Posts Links social media coverage</td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/23/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Edits - Tweak Andinalink Booth Edits</td>
                <td>LN_Event_VIPLinks_apr </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>02/08/2024</td></tr>
                <tr><td class='form-check'>Sheets - Brochure POP brochure format</td>
                <td>LN_Event_PoPFactory</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/19/2024</td></tr>
                <tr><td class='form-check'>Sheets - Edits - Text Edits Agenda Edits</td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/05/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Edits - Text Edits General Brochure New size + Export</td>
                <td>LN_Other_AdHoc </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/05/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Retractable Banner Generic folder</td>
                <td>LN_Other_AdHoc </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>02/09/2024</td></tr>
                <tr><td class='form-check'>Sheets - Edits - Tweak ISPs (traduction) whitepaper</td>
                <td>COL_Emails_ThreeStrikesAcquisition</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/18/2024</td></tr>
                <tr><td class='form-check'>Videos - Rebrand </td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/23/2024</td></tr>
                <tr><td class='form-check'>Slide Decks - Rebrand </td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/11/2024</td></tr>
                <tr><td class='form-check'>Slide Decks - Rebrand </td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/16/2024</td></tr>
                <tr><td class='form-check'>Slide Decks - Rebrand </td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/15/2024</td></tr>
                <tr><td class='form-check'>Sheets - Rebrand Sheet </td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/23/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Social Media Static Posts </td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/23/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Edits - Tweak </td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>03/29/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Edits - Tweak </td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>03/28/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Website Banner </td>
                <td>LN_Event_PoPFactory</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>03/08/2024</td></tr>
                <tr><td class='form-check'>Videos - Edits - Text Edits </td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/08/2024</td></tr>
                <tr><td class='form-check'>Sheets - Edits - Tweak </td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>04/19/2024</td></tr>
                <tr><td class='form-check'>Videos - Interview Video </td>
                <td>LN_Event_Educationsummit_ent_Mar</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>100%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:100%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-purple'>COMPLETED</div></td>
                <td>03/29/2024</td></tr>
                <tr><td class='form-check'>Websites - Dashboard </td>
                <td>LN_Tools_MarketingDashboards</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>86%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:86%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-orange'>IN PROGRESS</div></td>
                <td>04/26/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Static Posts Campaign Generic Static x5</td>
                <td>LN_Social_AlwaysOn_Q1  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>75%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:75%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-orange'>IN PROGRESS</div></td>
                <td>04/22/2024</td></tr>
                <tr><td class='form-check'>Websites - Dashboard </td>
                <td>LN_Tools_MarketingDashboards</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>75%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:75%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-orange'>IN PROGRESS</div></td>
                <td>04/26/2024</td></tr>
                <tr><td class='form-check'>Videos - Clip-based Video </td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>67%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:67%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-orange'>IN PROGRESS</div></td>
                <td>04/23/2024</td></tr>
                <tr><td class='form-check'>Sheets - Whitepapers ISPs (español) whitepaper</td>
                <td>COL_Emails_ThreeStrikesAcquisition</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>57%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:57%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-orange'>IN PROGRESS</div></td>
                <td>04/22/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Static Posts Campaign Inside Look Static x3</td>
                <td>LN_Social_AlwaysOn_Q1  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>50%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:50%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-orange'>IN PROGRESS</div></td>
                <td>04/22/2024</td></tr>
                <tr><td class='form-check'>Videos - Edits - Tweak Sizzle subtitles</td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>50%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:50%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-orange'>IN PROGRESS</div></td>
                <td>04/22/2024</td></tr>
                <tr><td class='form-check'>Sheets - Whitepapers Hyperscalers (ingles) whitepaper</td>
                <td>COL_Emails_ThreeStrikesAcquisition</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>50%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:50%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-orange'>IN PROGRESS</div></td>
                <td>04/23/2024</td></tr>
                <tr><td class='form-check'>Sheets - Edits - Tweak Hyperscalers (traduction) whitepaper</td>
                <td>COL_Emails_ThreeStrikesAcquisition</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>50%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:50%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-orange'>IN PROGRESS</div></td>
                <td>04/23/2024</td></tr>
                <tr><td class='form-check'>Sheets - Whitepapers Security (español) whitepaper</td>
                <td>COL_Emails_ThreeStrikesAcquisition</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>50%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:50%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-orange'>IN PROGRESS</div></td>
                <td>04/22/2024</td></tr>
                <tr><td class='form-check'>Websites - Backend </td>
                <td>LN_Tools_MarketingDashboards</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>43%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:43%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-orange'>IN PROGRESS</div></td>
                <td>04/26/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Social Media Static Posts </td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>33%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:33%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-orange'>IN PROGRESS</div></td>
                <td>04/23/2024</td></tr>
                <tr><td class='form-check'>Emails - Content Download Emails x8 Three strikes</td>
                <td>COL_Emails_ThreeStrikesAcquisition</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>33%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:33%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-orange'>IN PROGRESS</div></td>
                <td>04/26/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Animated Posts Campaign </td>
                <td>LN_Social_AlwaysOn_Q1  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>25%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:25%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-orange'>IN PROGRESS</div></td>
                <td>04/22/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Static Posts Campaign Unbreakable Static x4</td>
                <td>LN_Social_AlwaysOn_Q1  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>20%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:20%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-orange'>IN PROGRESS</div></td>
                <td>04/22/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Animated Posts Campaign </td>
                <td>LN_Social_AlwaysOn_Q1  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>20%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:20%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-orange'>IN PROGRESS</div></td>
                <td>04/22/2024</td></tr>
                <tr><td class='form-check'>Videos - Rebrand </td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>0%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:0%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-yellow'>PENDING</div></td>
                <td>04/25/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Social Media Static Posts </td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>0%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:0%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-yellow'>PENDING</div></td>
                <td>04/23/2024</td></tr>
                <tr><td class='form-check'>Videos - Edits - Text Edits </td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>0%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:0%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-yellow'>PENDING</div></td>
                <td>04/25/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Social Media Carousel </td>
                <td>LN_Social_AlwaysOn_Q1  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>0%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:0%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-yellow'>PENDING</div></td>
                <td>04/12/2024</td></tr>
                <tr><td class='form-check'>Videos - Clip-based Video </td>
                <td>LN_Email_Unbreakable</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>0%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:0%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-yellow'>PENDING</div></td>
                <td>05/03/2024</td></tr>
                <tr><td class='form-check'>Websites - Edits - Text Edits Website Agenda and Speakers</td>
                <td>LN_Event_VIPLinks_apr  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>0%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:0%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-yellow'>PENDING</div></td>
                <td>04/22/2024</td></tr>
                <tr><td class='form-check'>Sheets - Edits - Tweak Security (traduction) whitepaper</td>
                <td>COL_Emails_ThreeStrikesAcquisition</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>0%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:0%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-yellow'>PENDING</div></td>
                <td>04/22/2024</td></tr>
                <tr><td class='form-check'>Sheets - Flyer </td>
                <td>LN_Email_Unbreakable</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>0%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:0%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-yellow'>PENDING</div></td>
                <td>05/03/2024</td></tr>
                <tr><td class='form-check'>Sheets - Whitepapers </td>
                <td>LN_Email_Unbreakable</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>0%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:0%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-yellow'>PENDING</div></td>
                <td>04/24/2024</td></tr>
                <tr><td class='form-check'>Design Pieces - Animated Posts Campaign </td>
                <td>LN_Social_AlwaysOn_Q1  </td>
                <td><div class='d-flex align-items-center'><div class='me-2'>0%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:0%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-yellow'>PENDING</div></td>
                <td>04/12/2024</td></tr>
                <tr><td class='form-check'>Emails - Content Download </td>
                <td>LN_Email_Unbreakable</td>
                <td><div class='d-flex align-items-center'><div class='me-2'>0%</div><div class='progress flex-grow-1'><div class='progress-bar' role='progressbar' style='width:0%;' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div></td>
                <td><div class='btn-status-table color-yellow'>PENDING</div></td>
                <td>05/03/2024</td></tr> -->
            </tbody>
          </table>
        </div>
        <!-- End Table -->

        <!-- Footer -->
        <div class="card-footer">
          <!-- Pagination -->
          <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
            <div class="col-sm mb-2 mb-sm-0">
              <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                <!-- <span class="me-2">Showing:</span> -->

                <!-- Select -->
                <!-- <div class="tom-select-custom">
                  <select id="datatableEntries2" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                    <option value="5">5</option>
                    <option value="10" selected>10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                  </select>
                </div> -->
                <!-- End Select -->

                <!-- <span class="text-secondary me-2">of</span> -->

                <!-- Pagination Quantity -->
                <!-- <span id="datatableWithPaginationInfoTotalQty2"></span> -->
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm-auto">
              <div class="d-flex justify-content-center justify-content-sm-end">
                <!-- Pagination -->
                <nav id="datatablePagination2" aria-label="Activity pagination"></nav>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Pagination -->
        </div>
        <!-- End Footer -->

      </div>
      <!-- End Card -->

    </div>
    <!-- End Content -->

  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->

  <!-- Keyboard Shortcuts -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKeyboardShortcuts" aria-labelledby="offcanvasKeyboardShortcutsLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasKeyboardShortcutsLabel" class="mb-0">Keyboard shortcuts</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Formatting</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="fw-semibold">Bold</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">b</kbd>
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <em>italic</em>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">i</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <u>Underline</u>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">u</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <s>Strikethrough</s>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="small">Small text</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <mark>Highlight</mark>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">e</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Insert</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Mention person <a href="#">(@Brian)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">@</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Link to doc <a href="#">(+Meeting notes)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">+</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <a href="#">#hashtag</a>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">#hashtag</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Date</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/date</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Time</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/time</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Note box</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/note</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Editing</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find and replace</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">r</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find next</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find previous</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Un-indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line up</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-up-short"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line down</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-down-short fs-5"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Add a comment</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">m</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Undo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">z</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Redo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">y</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
        <div class="list-group-item">
          <h5 class="mb-1">Application</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Create new doc</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Present</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Share</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Search docs</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">o</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Keyboard shortcuts</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">/</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>
    </div>
  </div>
  <!-- End Keyboard Shortcuts -->


  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
  <script src="./assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/chartjs-chart-matrix/dist/chartjs-chart-matrix.min.js"></script>
  <script src="./assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js"></script>
  <script src="./assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="./assets/vendor/daterangepicker/daterangepicker.js"></script>
  <script src="./assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
  <script src="./assets/vendor/clipboard/dist/clipboard.min.js"></script>
  <script src="./assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="./assets/vendor/datatables.net.extensions/select/select.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>
  <script src="./assets/js/hs.theme-appearance-charts.js"></script>

  <!-- JS Custom -->
  <script src="./assets/js/navbar-vertical.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATERANGEPICKER
      // =======================================================
      $('.js-daterangepicker').daterangepicker();

      $('.js-daterangepicker-times').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });

      var start = moment();
      var end = moment();

      function cb(start, end) {
        $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
      }

      $('#js-daterangepicker-predefined').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);

      cb(start, end);
    });


    // INITIALIZATION OF DATATABLES
    // =======================================================
    HSCore.components.HSDatatables.init($('#datatable'), {
      select: {
        style: 'multi',
        selector: 'td:first-child input[type="checkbox"]',
        classMap: {
          checkAll: '#datatableCheckAll',
          counter: '#datatableCounter',
          counterInfo: '#datatableCounterInfo'
        }
      },
      language: {
        zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
      }
    });

    const datatable = HSCore.components.HSDatatables.getItem(0)

    document.querySelectorAll('.js-datatable-filter').forEach(function (item) {
      item.addEventListener('change',function(e) {
        const elVal = e.target.value,
    targetColumnIndex = e.target.getAttribute('data-target-column-index'),
    targetTable = e.target.getAttribute('data-target-table');

    HSCore.components.HSDatatables.getItem(targetTable).column(targetColumnIndex).search(elVal !== 'null' ? elVal : '').draw()
      })
    })
  </script>

  <script>
    

    // INITIALIZATION OF DATATABLES
    // =======================================================
    HSCore.components.HSDatatables.init($('#datatable2'), {
      select: {
        style: 'multi',
        selector: 'td:first-child input[type="checkbox"]',
        classMap: {
          checkAll: '#datatableCheckAll',
          counter: '#datatableCounter',
          counterInfo: '#datatableCounterInfo'
        }
      },
      language: {
        zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
      }
    });

    const datatable2 = HSCore.components.HSDatatables.getItem(0)

    document.querySelectorAll('.js-datatable-filter').forEach(function (item) {
      item.addEventListener('change',function(e) {
        const elVal = e.target.value,
    targetColumnIndex = e.target.getAttribute('data-target-column-index'),
    targetTable = e.target.getAttribute('data-target-table');

    HSCore.components.HSDatatables.getItem(targetTable).column(targetColumnIndex).search(elVal !== 'null' ? elVal : '').draw()
      })
    })
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      localStorage.removeItem('hs_theme')

      window.onload = function () {
        

        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        const HSFormSearchInstance = new HSFormSearch('.js-form-search')

        if (HSFormSearchInstance.collection.length) {
          HSFormSearchInstance.getItem(1).on('close', function (el) {
            el.classList.remove('top-0')
          })

          document.querySelector('.js-form-search-mobile-toggle').addEventListener('click', e => {
            let dataOptions = JSON.parse(e.currentTarget.getAttribute('data-hs-form-search-options')),
              $menu = document.querySelector(dataOptions.dropMenuElement)

            $menu.classList.add('top-0')
            $menu.style.left = 0
          })
        }


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart')


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('#updatingBarChart')
        const updatingBarChart = HSCore.components.HSChartJS.getItem('updatingBarChart')

        // Call when tab is clicked
        document.querySelectorAll('[data-bs-toggle="chart-bar"]').forEach(item => {
          item.addEventListener('click', e => {
            let keyDataset = e.currentTarget.getAttribute('data-datasets')

            const styles = HSCore.components.HSChartJS.getTheme('updatingBarChart', HSThemeAppearance.getAppearance())

            if (keyDataset === 'lastWeek') {
              updatingBarChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
              updatingBarChart.data.datasets = [
                {
                  "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor,
                  "maxBarThickness": 10
                },
                {
                  "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
                  "backgroundColor": styles.data.datasets[1].backgroundColor,
                  "borderColor": styles.data.datasets[1].borderColor,
                  "maxBarThickness": 10
                }
              ];
              updatingBarChart.update();
            } else {
              updatingBarChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
              updatingBarChart.data.datasets = [
                {
                  "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor,
                  "maxBarThickness": 10
                },
                {
                  "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                  "backgroundColor": styles.data.datasets[1].backgroundColor,
                  "borderColor": styles.data.datasets[1].borderColor,
                  "maxBarThickness": 10
                }
              ]
              updatingBarChart.update();
            }
          })
        })


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart-datalabels', {
          plugins: [ChartDataLabels],
          options: {
            plugins: {
              datalabels: {
                anchor: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? 'end' : 'center';
                },
                align: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? 'end' : 'center';
                },
                color: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
                },
                font: function (context) {
                  var value = context.dataset.data[context.dataIndex],
                    fontSize = 25;

                  if (value.r > 50) {
                    fontSize = 35;
                  }

                  if (value.r > 70) {
                    fontSize = 55;
                  }

                  return {
                    weight: 'lighter',
                    size: fontSize
                  };
                },
                formatter: function (value) {
                  return value.r
                },
                offset: 2,
                padding: 0
              }
            },
          }
        })

        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        HSCore.components.HSClipboard.init('.js-clipboard')
      }
    })()
  </script>
  <!-- Style Switcher JS -->

  <script>
      (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
          $variants.forEach($item => {
            if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
              $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
              return $item.classList.add('active')
            }

            $item.classList.remove('active')
          })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
          $item.addEventListener('click', function () {
            HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
          })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
          setActiveStyle()
        })
      })()
  </script>
  <!-- End Style Switcher JS -->
  
    <script type="text/javascript">
        $(document).ready(function(){
                getData();
            });

        var projectStatusList = [];
        var workInProgressList = [];
        var scheduleList = [];
        var getData = function(){
            $("#projectStatusTbody").find("tr").remove();
            $("#WIPTbody").find("tr").remove();
            
            //console.log("$('#projectStatusTbody tr').length:"+ $('#projectStatusTbody tr').length);
            $.ajax ({
                    contentType: "application/json",
                    dataType: "json",
                    type: 'POST',
                    //url power automate: https://make.powerautomate.com/environments/29ebd59c-c6bc-46b6-a678-4856a9b69eb9/flows/3a62c346-cd2a-43c7-8fcd-a9e24d1d5a26?v3=true
                    url:"https://prod-64.westus.logic.azure.com:443/workflows/a67d8c3c2be8418d981b5395e9d983d5/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=TOA0nYEo4_3CAquG5dGoZlMjOOGq1dCcblIGwTsKv64",
                    complete: function() {
                        $('.loading').remove();
                        //console.log(data);
                    },
                    statusCode: {
                        200: function(data) {
                            var rawProjectStatus = data["projectStatus"]["results"][0]['tables'][0]['rows'];
                            //we add the keys to the array to match the existing code
                            rawProjectStatus.forEach(function (someRow) { 
                                for (const [key, value] of Object.entries(someRow)) {
                                    someRow[key.replace("REPORT - Project Status[","").replace("]","")] = someRow[key]
                                }
                            });
                            rawProjectStatus.sort(function (a, b) {
                                let criteria1 = 'In-Scope';
                                let criteria2  ='Delivered';
                                //..........criteria1..............
                                if (a[criteria1] > b[criteria1]) return -1;
                                if (a[criteria1] < b[criteria1]) return 1;
                                //..........criteria2..............
                                if (a[criteria2] < b[criteria2]) return 1;
                                if (a[criteria2] > b[criteria2]) return -1;

                            });
                            
                            
                            
                            var rawSchedule = data["schedule"]["results"][0]['tables'][0]['rows'];
                            //we add the keys to the array to match the existing code
                            rawSchedule.forEach(function (someRow) { 
                                for (const [key, value] of Object.entries(someRow)) {
                                    someRow[key.replace("REPORT - Schedule[","").replace("]","")] = someRow[key]
                                }
                            });
                            console.log(rawSchedule);
                            rawSchedule.sort(function(a, b) {
                              if (a['Liberty Campaign'] > b['Liberty Campaign']) {
                                return 1;
                              }
                              if (a['Liberty Campaign'] < b['Liberty Campaign']) {
                                return -1;
                              }
                              return 0;
                            });
                            
                            
                            var rawWIP = data["workInProgress"]["results"][0]['tables'][0]['rows'];
                            //we add the keys to the array to match the existing code
                            rawWIP.forEach(function (someRow) { 
                                for (const [key, value] of Object.entries(someRow)) {
                                    someRow[key.replace("REPORT - Work In Progress[","").replace("]","")] = someRow[key]
                                }
                            });
                            function compareByStatus(a, b) {
                              if (a['Status (computed according to Progress)'] > b['Status (computed according to Progress)']) {
                                return 1;
                              }
                              if (a['Status (computed according to Progress)'] < b['Status (computed according to Progress)']) {
                                return -1;
                              }
                              return 0;
                            }
                            rawWIP.sort(compareByStatus);
                            
                            
                            //---- PROJECT STATUS -------------------------------------------------------------------------------------------
                            projectStatusList = JSON.parse(JSON.stringify(rawProjectStatus));
                            //console.log(projectStatusList.length);
                            for (var i = 0, len = projectStatusList.length; i < len; i++) {//console.log(campaignList[i]['Campaign']);
                                let isEven = (((i+1) % 2)==0);
                                let rowClass = ((isEven==true) ? "even" : "odd");
                                let progressPct = Math.round(projectStatusList[i]["Progress Pct"]*100)+"%";
                                let relatedTasksCount = projectStatusList[i]["In-Scope"];
                                let completeTasksCount = projectStatusList[i]["Delivered"];
                                let projectName  = ((projectStatusList[i]["Alias Liberty"]==null) ? projectStatusList[i]["Project Name"] : projectStatusList[i]["Alias Liberty"]);
                                //console.log(i);
                                $("#projectStatusTbody").append('<tr role="row" class="'+rowClass+'">\
                                <td class="form-check">'+projectName+'</td><td><div class="d-flex align-items-center"><div class="me-2">'+progressPct+'</div>\
                                <div class="progress flex-grow-1"><div class="progress-bar" role="progressbar" style="width: '+progressPct+';" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">\
                                </div>\
                                </div>\
                                </div>\
                                </td><td>'+completeTasksCount+'</td>\
                                <td>'+relatedTasksCount+'</td>\
                                </tr>');
                            }
                            
                            //================================================================================================
                            
                            $("#datatablePagination").empty();
                            $("#datatablePagination").parent().after('<div id="nav1"></div>');
                            
                            var rowsShown1 = 10;//console.log("otrl "+$('.opportunitiesTbody[status="Pipeline"] tr').length);
                            var rowsTotal1 = $('#projectStatusTbody tr').length;
                            //console.log("rowsTotal1:"+rowsTotal1);
                            var numPages1 = rowsTotal1/rowsShown1;
                            //console.log("numPages1:"+numPages1);
                            for(var i = 0;i < numPages1;i++) {
                                var pageNum1 = i + 1;
                                $('#nav1').append('<a onclick="event.preventDefault();" href="#" rel="'+i+'"><span>'+pageNum1+'</span></a> ');
                            }
                            $('#projectStatusTbody tr').attr("visible","hidden").hide();
                            $('#projectStatusTbody tr').slice(0, rowsShown1).attr("visible","visible").show();
                            $('#nav1 a:first').addClass('active');
                            $('#nav1 a').bind('click', function(){

                                $('#nav1 a').removeClass('active');
                                $(this).addClass('active');
                                var currPage1 = $(this).attr('rel');
                                var startItem1 = currPage1 * rowsShown1;
                                var endItem1 = startItem1 + rowsShown1;
                                //console.log("start "+ startItem1 + " end "+ endItem1);
                                $('#projectStatusTbody tr').css('opacity','0.0').attr("visible","hidden").hide().slice(startItem1, endItem1).
                                css('display','table-row').attr("visible","visible").animate({opacity:1}, 300);
                            });
                            
                          //================================================================================================
                          
                          
                        //---- ACCORDION -------------------------------------------------------------------------------------------

                        let cmpgnName;
                        let sw=0;
                        let strAccordionItems = "";
                        scheduleListList = JSON.parse(JSON.stringify(rawSchedule));
                        for (var i = 0, len = scheduleListList.length; i < len; i++){
                        
                            
                            let cName = scheduleListList[i]['Liberty Campaign'];
                            if(cName!=cmpgnName){
                                let anchorClass = (i==0) ? " " : " collapsed";
                                let divClass = (i==0) ? " collapse show" : " collapse";
                                if(sw==1){
                                    //cierra div
                                    //append to variable strAccordionItems
                                    strAccordionItems+="</div></div></div>";
                                }
                                sw = 1;
                                cmpgnName = cName;
                                strAccordionItems += '<div class="accordion-item">\
                            <div class="accordion-header" id="heading'+i+'">\
                                <a class="accordion-button '+anchorClass+'" role="button" data-bs-toggle="collapse" data-bs-target="#collapse'+i+'" aria-expanded="true" aria-controls="collapse'+i+'">'+cName+'</a>\
                            </div>\
                            <div id="collapse'+i+'" class="accordion-collapse '+divClass+'" aria-labelledby="heading'+i+'" data-bs-parent="#accordionExample">\
                                <div class="accordion-body">';
                            }
                            //we add new section
                            let dueOn = Math.round(scheduleListList[i]['Pct DueOn (new)']*100);
                            let startOn = Math.round(scheduleListList[i]['Pct StartOn (new)']*100);
                            let remaining = Math.round((1 - (startOn+dueOn))*100);
                            //we fix any issues caused from the rounding
                            if(dueOn+startOn+remaining!=100){
                                remaining += (100-(dueOn+startOn+remaining));
                            }
                            let strDueOn = dueOn+"%";
                            let strStartOn = startOn+"%";
                            let strRemaining = remaining+"%";
                            let sectionName = scheduleListList[i]['Section'];
                            console.log(cName+" : "+sectionName);
                            console.log("strDueOn:"+strDueOn+";   strStartOn:"+strStartOn+";   strRemaining:"+strRemaining);
                            console.log("===============================================");
                            strAccordionItems += '<div class="d-flex align-items-center">\
                                <div class="col-2">\
                                    <p>'+sectionName+'</p>\
                                </div>\
                                <div class="progress col-10">\
                                    <div class="progress-bar bg-gray" role="progressbar" style="width: '+strStartOn+'" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">\
                                    </div>\
                                    <div class="progress-bar bg-orange" role="progressbar" style="width: '+strDueOn+'" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">\
                                    </div>\
                                    <div class="progress-bar bg-gray" role="progressbar" style="width: '+strRemaining+'" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">\
                                    </div>\
                                </div>\
                            </div>';
                            
                            
                            
                        }
                        $("#accordionExample").append(strAccordionItems);
                            
                          //---- WORK IN PROGRESS -------------------------------------------------------------------------------------------
                           workInProgressList = JSON.parse(JSON.stringify(rawWIP));
                           //Collateral name| Project	|Progress	|Status	|Due Date
                            //console.log("workInProgressList.length: "+workInProgressList.length);
                            //console.log(workInProgressList);
                            
                            for (var i = 0, len = workInProgressList.length; i < len; i++) {//console.log(campaignList[i]['Campaign']);
                                let isEven = (((i+1) % 2)==0);
                                let rowClass = ((isEven==true) ? "even" : "odd");
                                let progressPct = Math.round(workInProgressList[i]["Progress Pct"]*100)+"%";
                                let statusValue;
                                let labelColor;
                                switch(workInProgressList[i]["Status (computed according to Progress)"]){
                                    case "Completed":
                                        labelColor = "color-purple";
                                        statusValue = "COMPLETED";
                                        break;
                                    case "Pending":
                                        labelColor = "color-yellow";
                                        statusValue = "PENDING";
                                        break;
                                    default:
                                        labelColor = "color-orange";
                                        statusValue = "IN PROGRESS";
                                        break;
                                }
                                let dueDate_ = workInProgressList[i]["Due On"].replace("T00:00:00","");
                                let projectName  = ((workInProgressList[i]["Alias Liberty"]==null) ? workInProgressList[i]["Project Name"] : workInProgressList[i]["Alias Liberty"]);
                                let collateralName = workInProgressList[i]["Collateral"];
                                //console.log(i);
                                $("#WIPTbody").append('<tr role="row" class="'+rowClass+'"><td class="form-check">'+collateralName+'</td>\
                <td>'+projectName+'</td>\
                <td><div class="d-flex align-items-center"><div class="me-2">'+progressPct+'</div><div class="progress flex-grow-1"><div class="progress-bar" role="progressbar" style="width:'+progressPct+';" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div></div></div></td>\
                <td><div class="btn-status-table '+labelColor+'">'+statusValue+'</div></td>\
                <td>'+dueDate_+'</td></tr>');
                            }
                            //================================================================================================
                            
                            $("#datatablePagination2").empty();
                            $("#datatablePagination2").parent().after('<div id="nav2"></div>');
                            
                            var rowsShown1 = 10;//console.log("otrl "+$('.opportunitiesTbody[status="Pipeline"] tr').length);
                            var rowsTotal1 = $('#WIPTbody tr').length;
                            //console.log("rowsTotal1:"+rowsTotal1);
                            var numPages1 = rowsTotal1/rowsShown1;
                            //console.log("numPages1:"+numPages1);
                            for(var i = 0;i < numPages1;i++) {
                                var pageNum1 = i + 1;
                                $('#nav2').append('<a onclick="event.preventDefault();" href="#" rel="'+i+'"><span>'+pageNum1+'</span></a> ');
                            }
                            $('#WIPTbody tr').attr("visible","hidden").hide();
                            $('#WIPTbody tr').slice(0, rowsShown1).attr("visible","visible").show();
                            $('#nav2 a:first').addClass('active');
                            $('#nav2 a').bind('click', function(){

                                $('#nav2 a').removeClass('active');
                                $(this).addClass('active');
                                var currPage1 = $(this).attr('rel');
                                var startItem1 = currPage1 * rowsShown1;
                                var endItem1 = startItem1 + rowsShown1;
                                //console.log("start "+ startItem1 + " end "+ endItem1);
                                $('#WIPTbody tr').css('opacity','0.0').attr("visible","hidden").hide().slice(startItem1, endItem1).
                                css('display','table-row').attr("visible","visible").animate({opacity:1}, 300);
                            });
                            
                          //================================================================================================
                            
                        }
                    }
                });
            }
    </script>
</body>
</html>