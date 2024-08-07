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
            <h1 class="page-header-title">Market activations / Hosted events</h1>
            <h1 class="page-header-title-black mb-0">Event performance	</h1>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->
        
         <!-- Card -->
      <div class="card mb-3 mb-lg-5">
        <div class="card-body">
          <div class="d-flex align-items-md-center">
            <div class="flex-grow-1 ms-2">
              <div class="d-md-flex d-sm-inline-block align-items-center">
                 <div class="col-md-4 p-0">
                  <div class="mb-md-0 mb-3">
                    <div class="tom-select-custom me-3">
                      <select id="countrySelect" class="js-select form-select" autocomplete="off"
                            data-hs-tom-select-options='{
                              "placeholder": "Select a person...",
                              "hideSearch": true
                            }'>
                        <option>Country</option>
                      </select>
                    </div>
                  </div>
                </div> 
                <!--<div class="col-md-4 p-0 ps-md-0">
                  <div class="mb-md-0 mb-3">
                    <div class="tom-select-custom">
                      <select id="campaignSelect" class="js-select form-select" autocomplete="off"
                            data-hs-tom-select-options='{
                              "placeholder": "Select a person...",
                              "hideSearch": true
                            }'>
                            <option>Campaign</option>
                      </select>
                    </div>
                  </div>
                </div>-->
                <!--<div class="col-md-2 p-0 ps-md-3">
                  <div class="mb-md-0 mb-3">
                    <div class="tom-select-custom">
                      <select class="js-select form-select" autocomplete="off"
                            data-hs-tom-select-options='{
                              "placeholder": "Select a person...",
                              "hideSearch": true
                            }'>
                            <option value="">Quarter</option>
                            <option value="">-</option>
                            <option value="">-</option>
                            <option value="">-</option>
                            <option value="">-</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 p-0 ps-md-3">
                  <div class="mb-md-0 mb-3">
                    <div class="tom-select-custom">
                      <select class="js-select form-select" autocomplete="off"
                            data-hs-tom-select-options='{
                              "placeholder": "Select a person...",
                              "hideSearch": true
                            }'>
                            <option value="">Month</option>
                            <option value="">-</option>
                            <option value="">-</option>
                            <option value="">-</option>
                            <option value="">-</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 ps-md-3">
                  <p class="mb-0">Clear Filters</p>
                </div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card --> 
        
      <div class="d-flex justify-content-center loading my-4">
          <div class="spinner-border text-warning" style="width: 3rem; height: 3rem;" role="status">
              <span class="sr-only"></span>
          </div>
      </div>

      <div class="row">
        <div class="col-md mb-3 mb-lg-5">
          <div class="card border-orange">
            <div class="card-body">
              <div class="col-md">
                <div class="d-flex align-items-center">
                  <div>
                    <h1 class="mb-0 fs-30" id="event-count">000</h1>
                  </div>
                </div>
                <span class="card-header-title">Events</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md mb-3 mb-lg-5">
          <div class="card border-orange">
            <div class="card-body">
              <div class="col-md">
                <div class="d-flex align-items-center">
                  <div>
                    <h1 class="mb-0 fs-30" id="invited-count">000</h1>
                  </div>
                </div>
                <span class="card-header-title">Invited</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md mb-3 mb-lg-5">
          <div class="card border-orange">
            <div class="card-body">
              <div class="col-md">
                <div class="d-flex align-items-center">
                  <div>
                    <h1 class="mb-0 fs-30" id="rsvps-count">000</h1>
                  </div>
                </div>
                <span class="card-header-title">RSVPs</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md mb-3 mb-lg-5">
          <div class="card border-orange">
            <div class="card-body">
              <div class="col-md">
                <div class="d-flex align-items-center">
                  <div>
                    <h1 class="mb-0 fs-30" id="rsvps-pct">000%</h1>
                  </div>
                </div>
                <span class="card-header-title">RSVPs (%)</span>
              </div>
            </div>
          </div>
        </div>
        <!--<div class="col-md mb-3 mb-lg-5">
          <div class="card border-orange">
            <div class="card-body">
              <div class="col-md">
                <div class="d-flex align-items-center">
                  <div>
                    <h1 class="mb-0 fs-30" id="attended-count">000</h1>
                  </div>
                </div>
                <span class="card-header-title">Attended</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md mb-3 mb-lg-5">
          <div class="card border-orange">
            <div class="card-body">
              <div class="col-md">
                <div class="d-flex align-items-center">
                  <div>
                    <h1 class="mb-0 fs-30" id="attended-pct">000%</h1>
                  </div>
                </div>
                <span class="card-header-title">Attended (%)</span>
              </div>
            </div>
          </div>
        </div>
      </div>-->

      <!-- Card -->
      <div class="card mb-3 mb-lg-5">
        <!-- Header -->
        <div class="card-header bg-gray">
          <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-md">
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-header-title">Hosted Events</h4>
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
                      "targets": [0, 1],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 8,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
            <thead class="thead-light">
              <tr class="border-bottom">
                <th scope="col" class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                    <label class="form-check-label" for="datatableCheckAll"></label>
                  </div>
                </th>
                <th class="table-column-ps-0">Campaign</th>
                <th>Audience</th>
                <th>Status</th>
                <th>When</th>
                <!--<th>Where</th>-->
              </tr>
            </thead>

            <tbody id="eventTbody">
              
              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck2">
                    <label class="form-check-label" for="usersDataCheck2"></label>
                  </div>
                </td>
                <td class="ps-0">-</td>
                <td>
                  <div class="btn-status-table color-orange">Running</div>
                </td>
                <td>00/00/0000</td>
              </tr>


            </tbody>
          </table>
        </div>
        <!-- End Table -->

        <!-- Footer -->
        <div class="card-footer">
          <!-- Pagination -->
          <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
            <div class="col-sm mb-2 mb-sm-0">
              <div style="display:none!important" class="d-flex justify-content-center justify-content-sm-start align-items-center">
                <span class="me-2">Showing:</span>

                <!-- Select -->
                <div class="tom-select-custom">
                  <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                    <option value="5">5</option>
                    <option value="10" selected>10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                  </select>
                </div>
                <!-- End Select -->

                <span class="text-secondary me-2">of</span>

                <!-- Pagination Quantity -->
                <span id="datatableWithPaginationInfoTotalQty"></span>
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

      
      
      
      
      
      
      <!--==============================================================================================-->
    <div class="row">
        <div class="col-lg-4 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-85">
            <!-- Header -->
            <div class="card-header card-header-content-between bg-gray">
              <h4 class="card-header-title">Email</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <ul class="list-group list-group-flush list-group-no-gutters">
                <li class="list-group-item pt-0">
                  <h5 id="sendsH5" class="card-title mb-0 fs-30"></h5>
                  <p class="mb-0">Deliveries</p>
                </li>
                <li class="list-group-item">
                  <h5 id="opensH5" class="card-title mb-0 fs-30"></h5>
                  <p class="mb-0">Opens</p>
                </li>
                <li class="list-group-item border-0">
                  <h5 id="ctrH5" class="card-title mb-0 fs-30"></h5>
                  <p class="mb-0">CTR</p>
                </li>

                <!-- <li class="list-group-item pt-0">
                  <div>
                    <a class="btn btn-primary w-100" href="./content-distribution-emails.html">
                      EXPLORE
                    </a>
                  </div>
                </li> -->
              </ul>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
        <!-- <div class="col-lg-3 mb-3 mb-lg-5"> -->
          <!-- Card -->
          <!-- <div class="card h-100"> -->
            <!-- Header -->
            <!-- <div class="card-header card-header-content-between bg-gray">
              <h4 class="card-header-title">Social</h4>
            </div> -->
            <!-- End Header -->

            <!-- Body -->
            <!-- <div class="card-body">
              <ul class="list-group list-group-flush list-group-no-gutters">
                <li class="list-group-item pt-0">
                  <h5 id="sharesH5" class="card-title mb-0 fs-30"></h5>
                  <p class="mb-0">SHARES</p>
                </li>
                <li class="list-group-item">
                  <h5 id="reachH5" class="card-title mb-0 fs-30"></h5>
                  <p class="mb-0">REACH</p>
                </li>
                <li class="list-group-item border-0">
                  <h5 id="likesH5" class="card-title mb-0 fs-30"></h5>
                  <p class="mb-0">LIKES</p>
                </li> -->

                <!-- <li class="list-group-item pt-0">
                  <div>
                    <a class="btn btn-primary w-100" href="./content-distribution-social-media.html">
                      EXPLORE
                    </a>
                  </div>
                </li> -->
              <!-- </ul> -->
            <!-- </div> -->
            <!-- End Body -->
          <!-- </div> -->
          <!-- End Card -->
        <!-- </div> -->
        <div class="col-lg-4 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-100">
            <!-- Header -->
            <div class="card-header card-header-content-between bg-gray">
              <h4 class="card-header-title">Event</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body d-flex flex-column justify-content-center">
              <ul class="list-group list-group-flush list-group-no-gutters">
                <li class="list-group-item pt-0">
                  <h5 id="rsvpsH5" class="card-title mb-0 fs-30"></h5>
                  <p class="mb-0">RSVPs</p>
                </li>
                <!--<li class="list-group-item">
                  <h5 id="attendeesH5" class="card-title mb-0 fs-30"></h5>
                  <p class="mb-0">ATTENDEES</p>
                </li>-->
                <li class="list-group-item border-0">
                  <h5 id="invitedH5" class="card-title mb-0 fs-30"></h5>
                  <p class="mb-0">Invited</p>
                </li>

                <!-- <li class="list-group-item pt-0">
                  <div>
                    <a class="btn btn-primary w-100" href="./market-activations-hosted-events-event-performance.html">
                      EXPLORE
                    </a>
                  </div>
                </li> -->
              </ul>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
        <div class="col-lg-4 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card">
            <!-- Header -->
            <div class="card-header card-header-content-between bg-gray">
              <h4 class="card-header-title">Impact</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <ul class="list-group list-group-flush list-group-no-gutters">
                <li class="list-group-item pt-0">
                  <h5 id="mqlH5" class="card-title mb-0 fs-30"></h5>
                  <p class="mb-0">MQL</p>
                </li>
                <li class="list-group-item">
                  <h5 id="closedH5" class="card-title mb-0 fs-30"></h5>
                  <p class="mb-0">Closed/Won</p>
                </li>
                <li class="list-group-item border-0">
                  <h5 id="tcvH5" class="card-title mb-0 fs-30"></h5>
                  <p class="mb-0">TCV</p>
                </li>

                <!-- <li class="list-group-item pt-0">
                  <div>
                    <a class="btn btn-primary w-100" href="./business-results.html">
                      EXPLORE
                    </a>
                  </div>
                </li> -->
              </ul>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
        
      </div>
      <!--==============================================================================================-->
      
      
      
      
      
      
      
      
      
      
      
      
      <!-- End Row -->

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

  <!-- Activity -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivityStream" aria-labelledby="offcanvasActivityStreamLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasActivityStreamLabel" class="mb-0">Activity stream</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <!-- Step -->
      <ul class="step step-icon-sm step-avatar-sm">
        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar" src="./assets/img/160x160/img9.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Iana Robinson</h5>

              <p class="fs-5 mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fd-7</a></p>

              <ul class="list-group list-group-sm">
                <!-- List Item -->
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">12kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="./assets/svg/brands/word-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">4kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </li>
                <!-- End List Item -->
              </ul>

              <span class="small text-muted text-uppercase">Now</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-dark">B</span>

            <div class="step-content">
              <h5 class="mb-1">Bob Dean</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-6</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Today</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="h5 mb-1">Crane</h5>

              <p class="fs-5 mb-1">Added 5 card to <a href="#">Payments</a></p>

              <ul class="list-group list-group-sm">
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-1.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-2.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-3.svg" alt="Image Description">
                    </div>
                    <div class="col-auto align-self-center">
                      <div class="text-center">
                        <a href="#">+2</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

              <span class="small text-muted text-uppercase">May 12</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-info">D</span>

            <div class="step-content">
              <h5 class="mb-1">David Lidell</h5>

              <p class="fs-5 mb-1">Added a new member to Front Dashboard</p>

              <span class="small text-muted text-uppercase">May 15</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Rachel King</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Apr 29</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Finch Hoot</h5>

              <p class="fs-5 mb-1">Earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>

              <span class="small text-muted text-uppercase">Apr 06</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="bi-person-fill"></i>
            </span>

            <div class="step-content">
              <h5 class="mb-1">Project status updated</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span class="badge bg-soft-primary text-primary rounded-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

              <span class="small text-muted text-uppercase">Feb 10</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->
      </ul>
      <!-- End Step -->

      <div class="d-grid">
        <a class="btn btn-white" href="javascript:;">View all <i class="bi-chevron-right"></i></a>
      </div>
    </div>
  </div>
  <!-- End Activity -->

  <!-- Welcome Message Modal -->
  <div class="modal fade" id="welcomeMessageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi-x-lg"></i>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <div class="text-center">
            <div class="w-75 w-sm-50 mx-auto mb-4">
              <img class="img-fluid" src="./assets/svg/illustrations/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid" src="./assets/svg/illustrations-light/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <h4 class="h1">Welcome to Front</h4>

            <p>We're happy to see you in our community.</p>
          </div>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap text-muted">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/gitlab-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/fitbit-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/layar-gray.svg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Welcome Message Modal -->

  <!-- Create a new user Modal -->
  <div class="modal fade" id="inviteUserModal" tabindex="-1" aria-labelledby="inviteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="inviteUserModalLabel">Invite users</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Body -->
        <div class="modal-body">
          <!-- Form -->
          <div class="mb-4">
            <div class="input-group mb-2 mb-sm-0">
              <input type="text" class="form-control" name="fullName" placeholder="Search name or emails" aria-label="Search name or emails">

              <div class="input-group-append input-group-append-last-sm-down-none">
                <!-- Select -->
                <div class="tom-select-custom tom-select-custom-end">
                  <select class="js-select form-select" autocomplete="off" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true,
                            "dropdownWidth": "11rem"
                          }'>
                    <option value="guest" selected>Guest</option>
                    <option value="can edit">Can edit</option>
                    <option value="can comment">Can comment</option>
                    <option value="full access">Full access</option>
                  </select>
                </div>
                <!-- End Select -->

                <a class="btn btn-primary d-none d-sm-inline-block" href="javascript:;">Invite</a>
              </div>
            </div>

            <a class="btn btn-primary w-100 d-sm-none" href="javascript:;">Invite</a>
          </div>
          <!-- End Form -->

          <div class="row">
            <h5 class="col modal-title">Invite users</h5>

            <div class="col-auto">
              <a class="d-flex align-items-center small text-body" href="#">
                <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/gmail-icon.svg" alt="Image Description">
                Import contacts
              </a>
            </div>
          </div>

          <hr class="mt-2">

          <ul class="list-unstyled list-py-2 mb-0">
            <!-- List Group Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h5>
                      <span class="d-block small">amanda@site.com</span>
                    </div>

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest" selected>Guest</option>
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End List Group Item -->

            <!-- List Group Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="mb-0">David Harrison</h5>
                      <span class="d-block small">david@site.com</span>
                    </div>

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest" selected>Guest</option>
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End List Group Item -->

            <!-- List Group Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="mb-0">Ella Lauda <i class="bi-patch-check-fill text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h5>
                      <span class="d-block small">Markvt@site.com</span>
                    </div>

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest" selected>Guest</option>
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End List Group Item -->

            <!-- List Group Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                    <span class="avatar-initials">B</span>
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="mb-0">Bob Dean</h5>
                      <span class="d-block small">bob@site.com</span>
                    </div>

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest" selected>Guest</option>
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End List Group Item -->
          </ul>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer">
          <div class="row align-items-center flex-grow-1 mx-n2">
            <div class="col-sm-9 mb-2 mb-sm-0">
              <input type="hidden" id="inviteUserPublicClipboard" value="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/">

              <p class="modal-footer-text">The public share <a href="#">link settings</a>
                <i class="bi-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="The public share link allows people to view the project without giving access to full collaboration features."></i>
              </p>
            </div>

            <div class="col-sm-3 text-sm-end">
              <a class="js-clipboard btn btn-white btn-sm text-nowrap" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard!" data-hs-clipboard-options='{
                  "type": "tooltip",
                  "successText": "Copied!",
                  "contentTarget": "#inviteUserPublicClipboard",
                  "container": "#inviteUserModal"
                 }'>
                <i class="bi-link-45deg me-1"></i> Copy link</a>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <!-- End Create a new user Modal -->
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

        
        
        
        
        
  var eventList = [];	
  var USDollar = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0,
        });
  
     function numberWithCommas(x) {
        return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
    }
    var getData = function(){
        $("#eventTbody").find("tr").remove();
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
                        var rawEvents = data["hostedEvents"]["results"][0]['tables'][0]['rows'];
                        //we add the keys to the array to match the existing code
                        rawEvents.forEach(function (someRow) { 
                            for (const [key, value] of Object.entries(someRow)) {
                                someRow[key.replace("REPORT - Hosted Events[","").replace("]","")] = someRow[key]
                            }
                        });
                        
                            
                            
                        //
                        //delete data["hostedEvents"]["results"][0]['tables'][0]['rows'].assign(o, {[newKey]: o[oldKey] })[oldKey];

                        //console.log(data["hostedEvents"]["results"][0]['tables'][0]['rows']);
                        /*
                         function compareByStatus(a, b) {
                          if (a['Status'] > b['Status']) {
                            return 1;
                          }
                          if (a['Status'] < b['Status']) {
                            return -1;
                          }
                          return 0;
                        }
                        */
                        //rawEvents.sort(compareByStatus);
                        rawEvents.sort(function (a, b) {
                            let criteria1 = 'Status';
                            let criteria2  ='Date';
                            //..........criteria1..............
                            if (a[criteria1] < b[criteria1]) return -1;
                            if (a[criteria1] > b[criteria1]) return 1;
                            //..........criteria2..............
                            /*
                            console.log(a[criteria2]);
                            if (a[criteria2] < b[criteria2]) return 1;
                            if (a[criteria2] > b[criteria2]) return -1;
                            */
                            let aDate = new Date(a[criteria2].toString());
                            let bDate = new Date(b[criteria2].toString());
                            return bDate.getTime()-aDate.getTime();
                            

                        });
                        eventList = JSON.parse(JSON.stringify(rawEvents));
                        /*
                         eventList = [
			{Country: 'Colombia', Month: '4', Campaign: 'COL_BAQ_EVENT_VulnerabilityOTF_Apr', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'FALSE', Status: 'Completed', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0',Date: '04/17/2024'},{Country: 'Colombia', Month: '4', Campaign: 'COL_CAL_EVENT_VulnerabilityOTF_Apr', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'FALSE', Status: 'Completed', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '1', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0',Date: '04/18/2024'},{Country: 'Colombia', Month: '4', Campaign: 'COL_MED_EVENT_VulnerabilityOTF_Apr', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'FALSE', Status: 'Completed', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0',Date: '04/19/2024'},{Country: 'El Salvador', Month: '3', Campaign: 'ES_Event_PowerAsAService_Ent_Mar', Audience: 'Enterprise', Email: 'TRUE', Social: 'FALSE', Event: 'TRUE', Status: 'Completed', Goal: 'Lead Generation', Sends: '0', Opens: '217', CTR: '16.42%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '17', ATTENDEES: '0', INVITED: '15', SHARES: '0', REACH: '0', LIKES: '0',Date: '03/20/2024'},{Country: 'Guatemala', Month: '2', Campaign: 'GUA_Event_TransformacionDigital_Ent_Ene', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'Completed', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '9', Closed: '1', TCV: '0', RSVPs: '9', ATTENDEES: '0', INVITED: '15', SHARES: '0', REACH: '0', LIKES: '0',Date: '02/07/2024'},{Country: 'Guatemala', Month: '3', Campaign: 'GUA_Event_VulnerabilityManagement_Mar', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'Completed', Goal: 'Brand Awareness', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '1', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '15', SHARES: '0', REACH: '0', LIKES: '0',Date: '03/19/2024'},{Country: 'Guatemala', Month: '4', Campaign: 'GUA_Event_VisitaDataCenter_Abr', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'Completed', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '7', Closed: '3', TCV: '169504.62', RSVPs: '0', ATTENDEES: '0', INVITED: '4', SHARES: '0', REACH: '0', LIKES: '0',Date: '04/03/2024'},{Country: 'Guatemala', Month: '4', Campaign: 'GUA_Event_LanzamientoXela_Ent_Abr', Audience: '(blank)', Email: 'FALSE', Social: 'FALSE', Event: 'FALSE', Status: 'Completed', Goal: 'Brand Awareness', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '1', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0',Date: '04/18/2024'},{Country: 'Latam Region', Month: '3', Campaign: 'LN_Event_Educationsummit_ent_Mar', Audience: 'Regional', Email: 'TRUE', Social: 'FALSE', Event: 'TRUE', Status: 'Completed', Goal: 'Lead Generation', Sends: '0', Opens: '1469', CTR: '36.89%', MQL: '16', Closed: '1', TCV: '4049.49', RSVPs: '14', ATTENDEES: '0', INVITED: '20', SHARES: '0', REACH: '0', LIKES: '0',Date: '03/13/2024'},{Country: 'Dominican Republic', Month: '4', Campaign: 'DR_Enterprise_OnetoFew_Abril _SD', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'FALSE', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '1', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0',Date: '04/17/2024'},{Country: 'El Salvador', Month: '1', Campaign: 'ES_Event_OnetoOne_Ent', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '1', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '30', SHARES: '0', REACH: '0', LIKES: '0',Date: '01/01/2024'},{Country: 'El Salvador', Month: '2', Campaign: 'ES_DesayunosTecnologicos_Ent', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'FALSE', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '3', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0',Date: '02/01/2024'},{Country: 'Guatemala', Month: '1', Campaign: 'GUA_Event_OnetoOne_Ent', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '25', SHARES: '0', REACH: '0', LIKES: '0',Date: '01/01/2024'},{Country: 'Honduras', Month: '2', Campaign: 'HON_SPS_Event_One-to-Ones Cloud IT', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '2', Closed: '1', TCV: '0', RSVPs: '2', ATTENDEES: '0', INVITED: '20', SHARES: '0', REACH: '0', LIKES: '0',Date: '02/21/2024'},{Country: 'Honduras', Month: '2', Campaign: 'HON_SPS_Event_One-to-Ones Seguridad', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '1', Closed: '0', TCV: '0', RSVPs: '1', ATTENDEES: '0', INVITED: '25', SHARES: '0', REACH: '0', LIKES: '0',Date: '02/21/2024'},{Country: 'Honduras', Month: '2', Campaign: 'HON_TGU_Event_Workshops One-to-One', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '4', Closed: '2', TCV: '3600', RSVPs: '0', ATTENDEES: '0', INVITED: '8', SHARES: '0', REACH: '0', LIKES: '0',Date: '02/19/2024'},{Country: 'Honduras', Month: '2', Campaign: 'HON_TGU_Giras Regionales Corp', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'FALSE', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '6', Closed: '0', TCV: '157200', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0',Date: '02/15/2024'},{Country: 'Honduras', Month: '4', Campaign: 'HON_TGU_Event_One-to-Ones Seguridad', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '25', SHARES: '0', REACH: '0', LIKES: '0',Date: '04/09/2024'},{Country: 'Latam Region', Month: '4', Campaign: 'LN_Event_VIPLinks_apr', Audience: 'Regional', Email: 'TRUE', Social: 'FALSE', Event: 'TRUE', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '57', CTR: '22.40%', MQL: '14', Closed: '13', TCV: '42505', RSVPs: '25', ATTENDEES: '0', INVITED: '50', SHARES: '0', REACH: '0', LIKES: '0',Date: '04/24/2024'},{Country: 'Colombia', Month: '2', Campaign: 'COL_EducationSummit_Feb', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'FALSE', Status: 'Planned', Goal: 'Sales Tracking', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0',Date: '02/07/2024'},{Country: 'El Salvador', Month: '4', Campaign: 'ES_Event_Office365_Abr', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '30', SHARES: '0', REACH: '0', LIKES: '0',Date: '04/18/2024'},{Country: 'El Salvador', Month: '4', Campaign: 'ES_Event_OneToOnesProductoSeguridad_Abr', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '30', SHARES: '0', REACH: '0', LIKES: '0',Date: '04/15/2024'},{Country: 'El Salvador', Month: '5', Campaign: 'ES_Event_Security_May', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '25', SHARES: '0', REACH: '0', LIKES: '0',Date: '05/16/2024'},{Country: 'El Salvador', Month: '6', Campaign: 'ES_Event_Cloud_Jun', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '30', SHARES: '0', REACH: '0', LIKES: '0',Date: '06/26/2024'},{Country: 'Guatemala', Month: '5', Campaign: 'GUA_Event_CoctelAntigua_May', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '30', SHARES: '0', REACH: '0', LIKES: '0',Date: '05/17/2024'},{Country: 'Guatemala', Month: '5', Campaign: 'GUA_Event_Office365_May', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '35', SHARES: '0', REACH: '0', LIKES: '0',Date: '05/07/2024'},{Country: 'Guatemala', Month: '5', Campaign: 'GUA_Event_ZTNA_May', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '40', SHARES: '0', REACH: '0', LIKES: '0',Date: '05/14/2024'},{Country: 'Guatemala', Month: '5', Campaign: 'GUA_Event_OpenHouseNodoCentral_May', Audience: '-', Email: 'FALSE', Social: 'FALSE', Event: 'FALSE', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0',Date: '05/23/2024'},{Country: 'Guatemala', Month: '6', Campaign: 'GUA_Event_Cisco_Jun', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '35', SHARES: '0', REACH: '0', LIKES: '0',Date: '06/04/2024'},{Country: 'Guatemala', Month: '6', Campaign: 'GUA_Event_DDOS_Jun', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '20', SHARES: '0', REACH: '0', LIKES: '0',Date: '06/11/2024'},{Country: 'Guatemala', Month: '6', Campaign: 'GUA_Event_SDWAN_Jun', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '35', SHARES: '0', REACH: '0', LIKES: '0',Date: '06/04/2024'},{Country: 'Guatemala', Month: '7', Campaign: 'GUA_Event_Pyramid_Jul', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '15', SHARES: '0', REACH: '0', LIKES: '0',Date: '07/09/2024'},{Country: 'Honduras', Month: '5', Campaign: 'HON_TGU_Event_Launch Vulnerability_May', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'TRUE', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '15', SHARES: '0', REACH: '0', LIKES: '0',Date: '05/28/2024'},{Country: 'Honduras', Month: '5', Campaign: 'HON_SPS_Event_Microsoft Defender_May', Audience: 'Enterprise', Email: 'FALSE', Social: 'FALSE', Event: 'FALSE', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0.00%', MQL: '0', Closed: '0', TCV: '0', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0',Date: '05/16/2024'},
		];
        */
        
                    var statusTd;
                    
                    var eventCount=0;
                    var invitedCount=0;
                    var rsvpsCount=0;
                    var rsvpsAvgPct=0;
                    var attendedCount=0;
                    var attendedAvgPct=0;
                    
                    let countryList=[];
                    
                    for (var i = 0, len = eventList.length; i < len; i++) {//console.log(collateralList[i]['Campaign']);
                    
                        if($.inArray(eventList[i]['Country'], countryList)==-1){
                                countryList.push(eventList[i]['Country']);
                                $("#countrySelect").append('<option>' + eventList[i]['Country'] + '</option>');
                            }
                        
                        statusTd="";
                        if(eventList[i]['Status'] == "Completed"){statusTd = '<div class="btn-status-table color-purple">Completed</div>';}
                        if(eventList[i]['Status'] == "In Progress"){statusTd = '<div class="btn-status-table color-yellow">Running</div>';}
                        if(eventList[i]['Status'] == "Planned"){statusTd = '<div class="btn-status-table color-orange">Planned</div>';}
                        
                        $("#eventTbody").append('<tr><td class="table-column-pe-0"><div class="form-check"><input class="form-check-input" name="radios" type="radio" value="" id="usersDataCheck2">\
                        <label class="form-check-label" for="usersDataCheck2"></label></div></td><td class="ps-0">' + eventList[i]['Campaign'] + '</td><td>' + eventList[i]['Audience'] + '</td>\
                        <td>' + statusTd + '</td>\
                        <td>' + eventList[i]['Date'] + '</td></tr>');
                        
                        eventCount++;
                        invitedCount += parseInt(eventList[i]['INVITED']);
                        rsvpsCount += parseInt(eventList[i]['RSVPs']);
                        //attendedCount += parseInt(eventList[i]['ATTENDEES']); //reports currently dont include Attendees. Liberty is working on this
                        
                        
                    }
                    $(".form-check-input").eq(1).trigger("click");
                    
                    
                    rsvpsAvgPct = Math.round((rsvpsCount/invitedCount)*100)+"%";
                    attendedAvgPct = Math.round((attendedCount/rsvpsCount)*100)+"%";
                    console.log(attendedAvgPct);
                    
                    $( "#event-count").html(eventCount);
                    $( "#invited-count").html(invitedCount);
                    $( "#rsvps-count").html(rsvpsCount);
                    //$( "#attended-count").html(attendedCount);
                    $( "#attended-count").html("-");
                    $( "#rsvps-pct").html(rsvpsAvgPct);
                    //$( "#attended-pct").html(attendedAvgPct);
                    $( "#attended-pct").html("-");
                    
                    
                    
                    //================================================================================================
                    $("#datatablePagination").parent().after('<div id="nav1"></div>');
                    var rowsShown1 = 10;//console.log("otrl "+$('.opportunitiesTbody[status="Pipeline"] tr').length);
                    var rowsTotal1 = $('#eventTbody tr').length;
                    var numPages1 = rowsTotal1/rowsShown1;
                    for(i = 0;i < numPages1;i++) {
                        var pageNum1 = i + 1;
                        $('#nav1').append('<a onclick="event.preventDefault();" href="#" rel="'+i+'"><span>'+pageNum1+'</span></a> ');
                    }
                    $('#eventTbody tr').attr("visible","hidden").hide();
                    $('#eventTbody tr').slice(0, rowsShown1).attr("visible","visible").show();
                    $('#nav1 a:first').addClass('active');
                    $('#nav1 a').bind('click', function(){

                        $('#nav1 a').removeClass('active');
                        $(this).addClass('active');
                        var currPage1 = $(this).attr('rel');
                        var startItem1 = currPage1 * rowsShown1;
                        var endItem1 = startItem1 + rowsShown1;
                        //console.log("start "+ startItem1 + " end "+ endItem1);
                        $('#eventTbody tr').css('opacity','0.0').attr("visible","hidden").hide().slice(startItem1, endItem1).
                        css('display','table-row').attr("visible","visible").animate({opacity:1}, 300);
                    });
                  //================================================================================================
                        
                    }
                }
        });
    }
	
  
 	
  
  
  
  
  console.log("success")
  $( "#eventTbody" ).on( "click", ".form-check-input", function() {
    
    console.log("click:" + eventList[$(this).parent().parent().parent().index()]['Campaign']);
    console.log(eventList[$(this).parent().parent().parent().index()]);
    console.log("*****************************************");
	//console.log($(this).parent().parent().next().html());
	//console.log($(this).parent().parent().parent().index());
    var sends = numberWithCommas(eventList[$(this).parent().parent().parent().index()]['Sends']);
    var opens = numberWithCommas(eventList[$(this).parent().parent().parent().index()]['Opens']);
	//$("#sendsH5").html((sends<opens) ? opens: sends);//Deliveries
    $("#sendsH5").html(sends);//Deliveries
	$("#opensH5").html(opens);
    $("#ctrH5").html((eventList[$(this).parent().parent().parent().index()]['CTR']* 100).toFixed(2)+'%');
    $("#mqlH5").html(numberWithCommas(eventList[$(this).parent().parent().parent().index()]['MQL']));
	$("#closedH5").html(numberWithCommas(eventList[$(this).parent().parent().parent().index()]['Closed']));
    var tcvDollar = USDollar.format(Math.round(eventList[$(this).parent().parent().parent().index()]['TCV']));
	$("#tcvH5").html(tcvDollar);
	$("#rsvpsH5").html(numberWithCommas(eventList[$(this).parent().parent().parent().index()]['RSVPs']));
	$("#attendeesH5").html(numberWithCommas(eventList[$(this).parent().parent().parent().index()]['ATTENDEES']));
	$("#invitedH5").html(numberWithCommas(eventList[$(this).parent().parent().parent().index()]['INVITED']));
	$("#sharesH5").html(eventList[$(this).parent().parent().parent().index()]['SHARES']);
	$("#reachH5").html(eventList[$(this).parent().parent().parent().index()]['REACH']);
	$("#likesH5").html(eventList[$(this).parent().parent().parent().index()]['LIKES']);
});



$( "#content" ).on( "change", "#countrySelect", function() {//console.log("aaa"+$(this).val());
    $("#eventTbody tr").remove();
    
    $("#sendsH5").html(numberWithCommas(0));
    $("#opensH5").html(numberWithCommas(0));
    $("#ctrH5").html((0).toFixed(2)+'%');
    $("#mqlH5").html(numberWithCommas(0));
    $("#closedH5").html(numberWithCommas(0));
    $("#tcvH5").html(USDollar.format(0));
    $("#rsvpsH5").html(numberWithCommas(0));
    $("#attendeesH5").html(0);
    $("#invitedH5").html(numberWithCommas(0));
    $("#sharesH5").html(numberWithCommas(0));
    $("#reachH5").html(numberWithCommas(0));
    $("#likesH5").html(numberWithCommas(0));
    
    
    var statusTd;                    
    var eventCount=0;
    var invitedCount=0;
    var rsvpsCount=0;
    var rsvpsAvgPct=0;
    var attendedCount=0;
    var attendedAvgPct=0;
    for (var i = 0, len = eventList.length; i < len; i++) {//console.log(collateralList[i]['Campaign']);
                    
        if((eventList[i]['Country'] != $(this).val() && $(this).val() != "Country")){
            continue;
        }
        statusTd="";
        if(eventList[i]['Status'] == "Completed"){statusTd = '<div class="btn-status-table color-purple">Completed</div>';}
        if(eventList[i]['Status'] == "In Progress"){statusTd = '<div class="btn-status-table color-yellow">Running</div>';}
        if(eventList[i]['Status'] == "Planned"){statusTd = '<div class="btn-status-table color-orange">Planned</div>';}
        
        $("#eventTbody").append('<tr><td class="table-column-pe-0"><div class="form-check"><input class="form-check-input" name="radios" type="radio" value="" id="usersDataCheck2">\
        <label class="form-check-label" for="usersDataCheck2"></label></div></td><td class="ps-0">' + eventList[i]['Campaign'] + '</td><td>' + eventList[i]['Audience'] + '</td>\
        <td>' + statusTd + '</td>\
        <td>' + eventList[i]['Date'] + '</td></tr>');
        
        eventCount++;
        invitedCount += parseInt(eventList[i]['INVITED']);
        rsvpsCount += parseInt(eventList[i]['RSVPs']);
        //attendedCount += parseInt(eventList[i]['ATTENDEES']); //reports currently dont include Attendees. Liberty is working on this
                        
                        
    }
    $(".form-check-input").eq(1).trigger("click");
    //================================================================================================
    $("#nav1").remove();
    $("#datatablePagination").parent().after('<div id="nav1"></div>');
    var rowsShown1 = 10;//console.log("otrl "+$('.opportunitiesTbody[status="Pipeline"] tr').length);
    var rowsTotal1 = $('#eventTbody tr').length;
    var numPages1 = rowsTotal1/rowsShown1;
    for(i = 0;i < numPages1;i++) {
        var pageNum1 = i + 1;
        $('#nav1').append('<a onclick="event.preventDefault();" href="#" rel="'+i+'"><span>'+pageNum1+'</span></a> ');
    }
    $('#eventTbody tr').attr("visible","hidden").hide();
    $('#eventTbody tr').slice(0, rowsShown1).attr("visible","visible").show();
    $('#nav1 a:first').addClass('active');
    $('#nav1 a').bind('click', function(){

        $('#nav1 a').removeClass('active');
        $(this).addClass('active');
        var currPage1 = $(this).attr('rel');
        var startItem1 = currPage1 * rowsShown1;
        var endItem1 = startItem1 + rowsShown1;
        //console.log("start "+ startItem1 + " end "+ endItem1);
        $('#eventTbody tr').css('opacity','0.0').attr("visible","hidden").hide().slice(startItem1, endItem1).
        css('display','table-row').attr("visible","visible").animate({opacity:1}, 300);
    });
  //================================================================================================
    
});
  
  </script>
</body>
</html>