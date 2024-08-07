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
            <h1 class="page-header-title">Campaign tracker</h1>
          </div>
          <!-- End Col -->

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
        <div class="card-body">
          <div class="d-flex align-items-md-center">
            <div class="flex-grow-1 ms-2">
              <div class="d-md-flex d-sm-inline-block align-items-center">
                <div class="col p-0 ps-md-0">
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
                <div class="col p-0 ps-md-0">
                  <div class="mb-md-0 mb-3">
                    <div class="tom-select-custom me-3">
                      <select id="buSelect" class="js-select form-select" autocomplete="off"
                            data-hs-tom-select-options='{
                              "placeholder": "Select a person...",
                              "hideSearch": true
                            }'>
                            <option>Business Unit</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col p-0 ps-md-0">
                  <div class="mb-md-0 mb-3">
                    <div class="tom-select-custom me-3">
                      <select id="catSelect" class="js-select form-select" autocomplete="off"
                            data-hs-tom-select-options='{
                              "placeholder": "Select a person...",
                              "hideSearch": true
                            }'>
                            <option>Category</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col p-0 ps-md-0">
                  <div class="mb-md-0 mb-3">
                    <div class="tom-select-custom me-3">
                      <select id="subcatSelect" class="js-select form-select" autocomplete="off"
                            data-hs-tom-select-options='{
                              "placeholder": "Select a person...",
                              "hideSearch": true
                            }'>
                            <option>Sub-Category</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col p-0 ps-md-0">
                  <div class="mb-md-0 mb-3">
                    <div class="tom-select-custom">
                      <select id="monthSelect" class="js-select form-select" autocomplete="off"
                            data-hs-tom-select-options='{
                              "placeholder": "Select a person...",
                              "hideSearch": true
                            }'>
                            <option>Month</option>
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
       
       
      <!-- Card -->
      <div class="card mb-3 mb-lg-5 border-orange">
        <!-- Body -->
        <div class="card-body">
          <div class="d-flex align-items-md-center">

            <div class="flex-grow-1 ms-2">
              <div class="row mx-md-n3">
                <div class="col-md px-md-4">
                  <span class="card-header-title">Initiatives</span>
                  <p class="mb-0">Number of projects we are currently working on</p>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>


            <div class="flex-shrink-0">
              <span class="display-3 text-dark" id="totalInitiatives"></span>
            </div>

          </div>
        </div>
        <!-- End Body -->
      </div>
      <!-- End Card -->

      <div class="d-flex justify-content-center loading my-4">
          <div class="spinner-border text-warning" style="width: 3rem; height: 3rem;" role="status">
              <span class="sr-only"></span>
          </div>
      </div>

      <!-- Card -->
      <div class="card mb-3 mb-lg-5 h-500">
        <!-- Header -->
        <div class="card-header bg-gray">
          <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-md">
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-header-title">Campaigns</h4>
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
                      //"targets": [0, 1, 2, 3, 4, 5, 6, 7],
                      "targets": [0, 1, 2, 3, 4, 5, 6],
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
                    <!--<input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">-->
                    <label class="form-check-label" for="datatableCheckAll"></label>
                  </div>
                </th>
                <th class="table-column-ps-0">Campaign Tracker</th>
                <th>Business Unit</th>
                <th>Category</th>
                <th>Email?</th>
                <!-- <th>Social?</th> -->
                <th>Event?</th>
                <th>Status</th>
                <th>Goal</th>
              </tr>
            </thead>

            <tbody id="campaignTbody">
              
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
                  <p class="mb-0">Sends</p>
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
                <li class="list-group-item">
                  <h5 id="attendeesH5" class="card-title mb-0 fs-30"></h5>
                  <p class="mb-0">Attendees</p>
                </li>
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
                  <h5 id="tcvPipelineH5" class="card-title mb-0 fs-30"></h5>
                  <p class="mb-0">TCV Pipeline</p>
                </li>
                <li class="list-group-item border-0">
                  <h5 id="tcvH5" class="card-title mb-0 fs-30"></h5>
                  <p class="mb-0">TCV Won</p>
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
    var campaignList = [];
    
    
      $(document).ready(function(){
            getData();
        });


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
        $("#campaignTbody").find("tr").remove();
    $.ajax ({
                contentType: "application/json",
                dataType: "json",
                type: 'POST',
                //url power automate: https://make.powerautomate.com/environments/29ebd59c-c6bc-46b6-a678-4856a9b69eb9/flows/3a62c346-cd2a-43c7-8fcd-a9e24d1d5a26?v3=true
                url:"https://prod-64.westus.logic.azure.com:443/workflows/a67d8c3c2be8418d981b5395e9d983d5/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=TOA0nYEo4_3CAquG5dGoZlMjOOGq1dCcblIGwTsKv64",
                complete: function() {
                    console.log('complete');
                    $('.loading').remove();
                },
                statusCode: {
                    200: function(data) {
                        var rawCampaigns = data["campaignTracker"]["results"][0]['tables'][0]['rows'];
                        
                        //we add the keys to the array to match the existing code
                        rawCampaigns.forEach(function (someRow) { 
                            for (const [key, value] of Object.entries(someRow)) {
                                someRow[key.replace("REPORT - Campaign Tracker[","").replace("]","")] = someRow[key]
                            }
                        });
                        
                        
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
                        rawCampaigns.sort(compareByStatus);
                        */
                        rawCampaigns.sort(function (a, b) {
                            let criteria1 = 'Status';
                            let criteria2  ='TCV';
                            //..........criteria1..............
                            if (a[criteria1] < b[criteria1]) return -1;
                            if (a[criteria1] > b[criteria1]) return 1;
                            //..........criteria2..............
                            if (a[criteria2] < b[criteria2]) return 1;
                            if (a[criteria2] > b[criteria2]) return -1;

                        });
                        campaignList = JSON.parse(JSON.stringify(rawCampaigns));
                        $("#campaignTbody").find("tr").remove();
                        /*
                        campaignList = [
                            {Campaign: 'GUA_Event_TransformacionDigital_Ent_Ene', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Completed', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '7', Closed: '1', TCV: '$65,016.00', RSVPs: '9', ATTENDEES: '9', INVITED: '15', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'ES_Event_PowerAsAService_Ent_Mar', Audience: 'Enterprise', Email: 'Yes', Social: 'No', Event: 'Yes', Status: 'Completed', Goal: 'Cross Sell / Upsell', Sends: '116', Opens: '208', CTR: '0.14%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '17', ATTENDEES: '17', INVITED: '15', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'LN_Event_Educationsummit_ent_Mar', Audience: 'Regional', Email: 'Yes', Social: 'No', Event: 'Yes', Status: 'Completed', Goal: 'Lead Generation', Sends: '222', Opens: '1447', CTR: '0.06%', MQL: '9', Closed: '0', TCV: '$518,733.00', RSVPs: '30', ATTENDEES: '30', INVITED: '30', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'GUA_Event_VulnerabilityManagement_Mar', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Completed', Goal: 'Cross Sell / Upsell', Sends: '0', Opens: '0', CTR: '0%', MQL: '1', Closed: '0', TCV: '$60,000.00', RSVPs: '0', ATTENDEES: '1', INVITED: '15', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'COL_Info_PasarelaPagos_Ent_Mar', Audience: 'Enterprise', Email: 'Yes', Social: 'No', Event: 'No', Status: 'Completed', Goal: 'Operational', Sends: '2967', Opens: '1650', CTR: '0.08%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'ES_Event_Office365_Abr', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Cross Sell / Upsell', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '30', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'ES_Event_OneToOnesProductoSeguridad_Abr', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Cross Sell / Upsell', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '30', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'LN_Event_VIPLinks_apr', Audience: 'Regional', Email: 'Yes', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Cross Sell / Upsell', Sends: '36', Opens: '51', CTR: '0.12%', MQL: '2', Closed: '2', TCV: '$6,960.00', RSVPs: '25', ATTENDEES: '25', INVITED: '50', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'GUA_Event_OpenHouseNodoCentral_Abr', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Cross Sell / Upsell', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '20', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'GUA_Event_VisitaDataCenter_Abr', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Cross Sell / Upsell', Sends: '0', Opens: '0', CTR: '0%', MQL: '5', Closed: '3', TCV: '$286,705.00', RSVPs: '0', ATTENDEES: '5', INVITED: '4', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'NETWORKS_Event_VIPLinks_apr', Audience: 'Regional', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Cross Sell / Upsell', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '8', ATTENDEES: '8', INVITED: '50', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'COL_BOG_EVENT_EliteConnections_APR', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '10', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'COL_CAL_EVENT_VulnerabilityOTFCali_APR', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '25', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'LN_Info_Newsletter_Ent_Apr', Audience: 'Enterprise', Email: 'Yes', Social: 'No', Event: 'No', Status: 'In Progress', Goal: 'Brand Awareness', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'ES_Event_Security_May', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '25', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'GUA_Event_CoctelAntigua_May', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '30', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'GUA_Event_Office365_May', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '35', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'GUA_Event_ZTNA_May', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '40', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'HON_SPS_Event_AntiRansomware_May', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '35', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'HON_TGU_Event_AntiRansomware_May', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '35', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'HON_TGU_Event_Launch Vulnerability_May', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '15', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'DR_Empresarial_OnetoFew_Abril _Norte_', Audience: 'SMB', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'DR_Empresarial_OnetoFew_Abril _SD', Audience: 'SMB', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'DR_Enterprise_One to One_Marzo_SD', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '1', Closed: '1', TCV: '$45,000.00', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'DR_Enterprise_OnetoFew_Mar _Security', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '3', Closed: '0', TCV: '$552,000.00', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'ES_DesayunosTecnologicos_Ent', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '3', Closed: '0', TCV: '$504,148.00', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'GUA_OutboundInsideSales_ENT', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'No', Status: 'In Progress', Goal: 'Acquisition', Sends: '0', Opens: '0', CTR: '0%', MQL: '15', Closed: '1', TCV: '$648,954.00', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'GUA_Web_WebsiteLeads_Ent', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'No', Status: 'In Progress', Goal: 'Acquisition', Sends: '0', Opens: '0', CTR: '0%', MQL: '4', Closed: '0', TCV: '$71,400.00', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'HON_TGU_Giras Regionales Corp', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '3', Closed: '1', TCV: '$40,878.00', RSVPs: '0', ATTENDEES: '0', INVITED: '0', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'ES_Event_OnetoOne_Ent', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '1', Closed: '0', TCV: '$360,000.00', RSVPs: '0', ATTENDEES: '1', INVITED: '30', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'GUA_Event_OnetoOne_Ent', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '25', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'HON_SPS_Event_One-to-Ones Cloud IT', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '1', Closed: '0', TCV: '$7,685.00', RSVPs: '2', ATTENDEES: '2', INVITED: '20', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'HON_SPS_Event_One-to-Ones Seguridad', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '1', Closed: '0', TCV: '$7,200.00', RSVPs: '1', ATTENDEES: '1', INVITED: '25', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'HON_TGU_Event_Workshops One-to-One', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'In Progress', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '2', Closed: '2', TCV: '$3,600.00', RSVPs: '0', ATTENDEES: '4', INVITED: '8', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'ES_Event_Cloud_Jun', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '30', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'GUA_Event_Cisco_Jun', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '35', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'GUA_Event_DDOS_Jun', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '20', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'GUA_Event_SDWAN_Jun', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '35', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'HON_SPS_Event_Microsoft Defender_Jun', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '35', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'GUA_Event_Pyramid_Jul', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '15', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'COL_BAQ_EVENT_Catawhiskey_AUG', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '25', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'COL_BUC_EVENT_ZFMeet_AGO', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '20', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'COL__EVENT_CFXMeetings_MID', Audience: 'SMB', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '20', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'COL__EVENT_DatacenterMeet_MID', Audience: 'SMB', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '10', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'COL__EVENT_TomaEdificios_MID', Audience: 'SMB', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '70', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'COL_BAQ_EVENT_ProbarranquillaDonación ', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Brand Awareness', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '25', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'COL_BOG_EVENT_AssesmentMeet', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '30', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'COL_BOG_EVENT_BreakfastMeetings', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '20', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'COL_Costa_EVENT_BreakfastMeetings', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '20', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'COL_Costa_EVENT_CFXMeetings ', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '20', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'COL_CTG_EVENT_BreakfastMeetings', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '50', SHARES: '0', REACH: '0', LIKES: '0'},{Campaign: 'HON_TGU_Event_One-to-Ones Seguridad', Audience: 'Enterprise', Email: 'No', Social: 'No', Event: 'Yes', Status: 'Planned', Goal: 'Lead Generation', Sends: '0', Opens: '0', CTR: '0%', MQL: '0', Closed: '0', TCV: '$0.00', RSVPs: '0', ATTENDEES: '0', INVITED: '25', SHARES: '0', REACH: '0', LIKES: '0'}
                        ];
                        */
                        
                        
                        
                        let countryList=[];
                        let buList=[];
                        let catList=[];
                        let subcatList=[];
                        let monthList=[];
                        
                        
                        console.log(campaignList);
                        
                        var statusTd;
                        for (var i = 0, len = campaignList.length; i < len; i++) {//console.log(campaignList[i]['Campaign']);
                        
                            if($.inArray(campaignList[i]['Country'], countryList)==-1){
                                countryList.push(campaignList[i]['Country']);
                                $("#countrySelect").append('<option>' + campaignList[i]['Country'] + '</option>');
                            }
                            if($.inArray(campaignList[i]['Reporting Business Unit'], buList)==-1){
                                buList.push(campaignList[i]['Reporting Business Unit']);
                                $("#buSelect").append('<option>' + campaignList[i]['Reporting Business Unit'] + '</option>');
                            }
                            if($.inArray(campaignList[i]['Category'], catList)==-1){
                                catList.push(campaignList[i]['Category']);
                                $("#catSelect").append('<option>' + campaignList[i]['Category'] + '</option>');
                            }
                            if($.inArray(campaignList[i]['Sub-Category'], subcatList)==-1){
                                subcatList.push(campaignList[i]['Sub-Category']);
                                $("#subcatSelect").append('<option>' + campaignList[i]['Sub-Category'] + '</option>');
                            }
                            if($.inArray(campaignList[i]['_campaignMonthStr'], monthList)==-1){
                                monthList.push(campaignList[i]['_campaignMonthStr']);
                            }
                            
                            
                            if(campaignList[i]['Status'] == "Completed"){statusTd = '<div class="btn-status-table color-purple">Completed</div>';}
                            if(campaignList[i]['Status'] == "In Progress"){statusTd = '<div class="btn-status-table color-yellow">In Progress</div>';}
                            if(campaignList[i]['Status'] == "Planned"){statusTd = '<div class="btn-status-table color-orange">Planned</div>';}
                            
                            $("#campaignTbody").append('<tr><td class="table-column-pe-0"><div class="form-check"><input campaignListIndex="'+i+'" class="form-check-input" name="radios" type="radio" value="" id="usersDataCheck2">\
                            <label class="form-check-label" for="usersDataCheck2"></label></div></td><td class="ps-0">' + campaignList[i]['Campaign'] + '</td>\
                            <td>' + campaignList[i]['Reporting Business Unit'] + '</td>\
                            <td>' + campaignList[i]['Category'] + '</td>\
                            <td>' + ((campaignList[i]['Email'] == true) ? "<img src=./assets/img/icos/ico-check.svg>":"-") + '</td>\
                            <td>' + ((campaignList[i]['Event'] == true) ? "<img src=./assets/img/icos/ico-check.svg>":"-") + '</td>\
                            <td>' + statusTd + '</td>\
                            <td>' + campaignList[i]['Goal'] + '</td></tr>');
                        }
                        
                        monthList.sort((a, b) => {
                          const monthOrder = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                          return monthOrder.indexOf(a) - monthOrder.indexOf(b);
                        });
                        var uniqueMonths = [];
                        $.each(monthList, function(i, el){
                            if($.inArray(el, uniqueMonths) === -1) uniqueMonths.push(el);
                        });
                        for (var i = 0, len = uniqueMonths.length; i < len; i++) {
                            $("#monthSelect").append('<option>' + monthList[i] + '</option>');
                        }
                        
                        //================================================================================================
                        $("#datatablePagination").parent().after('<div id="nav1"></div>');
                        var rowsShown1 = 10;//console.log("otrl "+$('.opportunitiesTbody[status="Pipeline"] tr').length);
                        var rowsTotal1 = $('#campaignTbody tr').length;
                        var numPages1 = rowsTotal1/rowsShown1;
                        for(i = 0;i < numPages1;i++) {
                            var pageNum1 = i + 1;
                            $('#nav1').append('<a onclick="event.preventDefault();" href="#" rel="'+i+'"><span>'+pageNum1+'</span></a> ');
                        }
                        $('#campaignTbody tr').attr("visible","hidden").hide();
                        $('#campaignTbody tr').slice(0, rowsShown1).attr("visible","visible").show();
                        $('#nav1 a:first').addClass('active');
                        $('#nav1 a').bind('click', function(){

                            $('#nav1 a').removeClass('active');
                            $(this).addClass('active');
                            var currPage1 = $(this).attr('rel');
                            var startItem1 = currPage1 * rowsShown1;
                            var endItem1 = startItem1 + rowsShown1;
                            //console.log("start "+ startItem1 + " end "+ endItem1);
                            $('#campaignTbody tr').css('opacity','0.0').attr("visible","hidden").hide().slice(startItem1, endItem1).
                            css('display','table-row').attr("visible","visible").animate({opacity:1}, 300);
                        });
                      //================================================================================================
                      
                      
                        var initiativesInProgress = campaignList.filter(function(item){
                        return item.Status=="In Progress";
                        }).length;
                      
                      $("#totalInitiatives").html(initiativesInProgress+"/"+campaignList.length);
                      $(".form-check-input").eq(0).trigger("click");
                      
                        
                    }
                }
        });
    
}


$( "#campaignTbody" ).on( "click", ".form-check-input", function() {
    //console.log($(this).parent().parent().next().html());
    //console.log($(this).parent().parent().parent().index());
    //console.log(campaignList[$(this).parent().parent().parent().index()]['Sends']);
    let campaignListIndex =  $(this).attr("campaignListIndex");
    $("#sendsH5").html(numberWithCommas(campaignList[campaignListIndex]['Sends']));
    $("#opensH5").html(numberWithCommas(campaignList[campaignListIndex]['Opens']));
    $("#ctrH5").html((campaignList[campaignListIndex]['CTR']* 100).toFixed(2)+'%');
    $("#mqlH5").html(numberWithCommas(campaignList[campaignListIndex]['MQL']));
    $("#tcvPipelineH5").html(USDollar.format(campaignList[campaignListIndex]['TCV Pipeline']));
    $("#tcvH5").html(USDollar.format(campaignList[campaignListIndex]['TCV']));
    $("#rsvpsH5").html(numberWithCommas(campaignList[campaignListIndex]['RSVPs']));
    $("#attendeesH5").html(numberWithCommas(campaignList[campaignListIndex]['ATTENDEES']));
    $("#invitedH5").html(numberWithCommas(campaignList[campaignListIndex]['INVITED']));
    $("#sharesH5").html(numberWithCommas(campaignList[campaignListIndex]['SHARES']));
    $("#reachH5").html(numberWithCommas(campaignList[campaignListIndex]['REACH']));
    $("#likesH5").html(numberWithCommas(campaignList[campaignListIndex]['LIKES']));
});

$( "#content" ).on( "change", "#countrySelect", function() {//console.log("aaa"+$(this).val());
    doFilter("#countrySelect");
});
$( "#content" ).on( "change", "#buSelect", function() {//console.log("aaa"+$(this).val());
    doFilter("#buSelect");
});
$( "#content" ).on( "change", "#catSelect", function() {//console.log("aaa"+$(this).val());
    doFilter("#catSelect");
});
$( "#content" ).on( "change", "#subcatSelect", function() {//console.log("aaa"+$(this).val());
    doFilter("#subcatSelect");
});
$( "#content" ).on( "change", "#monthSelect", function() {//console.log("aaa"+$(this).val());
    doFilter("#monthSelect");
});
function doFilter(selectName){
    var columnName = "";
    var selectDefaultValue = "";
    switch (selectName) {
        case '#countrySelect':
            $("#buSelect").val("Business Unit");
            $("#catSelect").val("Category");
            $("#subcatSelect").val("Sub-Category");
            $("#monthSelect").val("Month");
            columnName = "Country";
            selectDefaultValue = "Country";
            break;
        case '#buSelect':
            $("#countrySelect").val("Country");
            $("#catSelect").val("Category");
            $("#subcatSelect").val("Sub-Category");
            $("#monthSelect").val("Month");
            columnName = "Reporting Business Unit";
            selectDefaultValue = "Business Unit";
            break;
        case '#catSelect':
            $("#countrySelect").val("Country");
            $("#buSelect").val("Business Unit");
            $("#subcatSelect").val("Sub-Category");
            $("#monthSelect").val("Month");
            columnName = "Category";
            selectDefaultValue = "Category";
            break;
        case '#subcatSelect':
            $("#countrySelect").val("Country");
            $("#catSelect").val("Category");
            $("#buSelect").val("Business Unit");
            $("#monthSelect").val("Month");
            columnName = "Sub-Category";
            selectDefaultValue = "Sub-Category";
            break;
            //
        case '#monthSelect':
            $("#countrySelect").val("Country");
            $("#catSelect").val("Category");
            $("#subcatSelect").val("Sub-Category");
            $("#buSelect").val("Business Unit");
            columnName = "_campaignMonthStr";
            selectDefaultValue = "Month";
            break;
        default:
            break;
    }
    
    //console.log(columnName)
    //console.log(selectDefaultValue)
    
    $("#campaignTbody tr").remove();
    
    $("#sendsH5").html(numberWithCommas(0));
    $("#opensH5").html(numberWithCommas(0));
    $("#ctrH5").html((0).toFixed(2)+'%');
    $("#mqlH5").html(numberWithCommas(0));
    $("#tcvPipelineH5").html(numberWithCommas(0));
    $("#tcvH5").html(USDollar.format(0));
    $("#rsvpsH5").html(numberWithCommas(0));
    $("#attendeesH5").html(0);
    $("#invitedH5").html(numberWithCommas(0));
    $("#sharesH5").html(numberWithCommas(0));
    $("#reachH5").html(numberWithCommas(0));
    $("#likesH5").html(numberWithCommas(0));
    
    //return;
    
    initiativesInProgress = 0;
    
    for (var i = 0, len = campaignList.length; i < len; i++) {//console.log(campaignList[i]['Campaign']);
                        
        if((campaignList[i][columnName] != $(selectName).val() && $(selectName).val() != selectDefaultValue)){
            continue;
        }
        
        if(campaignList[i]['Status'] == "Completed"){statusTd = '<div class="btn-status-table color-purple">Completed</div>';}
        if(campaignList[i]['Status'] == "In Progress"){
            statusTd = '<div class="btn-status-table color-yellow">In Progress</div>';
            initiativesInProgress++;
        }
        if(campaignList[i]['Status'] == "Planned"){statusTd = '<div class="btn-status-table color-orange">Planned</div>';}
        
        $("#campaignTbody").append('<tr><td class="table-column-pe-0"><div class="form-check"><input campaignListIndex="'+i+'" class="form-check-input" name="radios" type="radio" value="" id="usersDataCheck2">\
        <label class="form-check-label" for="usersDataCheck2"></label></div></td><td class="ps-0">' + campaignList[i]['Campaign'] + '</td>\
        <td>' + campaignList[i]['Reporting Business Unit'] + '</td>\
        <td>' + campaignList[i]['Category'] + '</td>\
        <td>' + ((campaignList[i]['Email'] == true) ? "<img src=./assets/img/icos/ico-check.svg>":"-") + '</td>\
        <td>' + ((campaignList[i]['Event'] == true) ? "<img src=./assets/img/icos/ico-check.svg>":"-") + '</td>\
        <td>' + statusTd + '</td>\
        <td>' + campaignList[i]['Goal'] + '</td></tr>');
    }
    
    
    //================================================================================================
    $("#nav1").remove();
    $("#datatablePagination").parent().after('<div id="nav1"></div>');
    var rowsShown1 = 10;//console.log("otrl "+$('.opportunitiesTbody[status="Pipeline"] tr').length);
    var rowsTotal1 = $('#campaignTbody tr').length;
    //console.log("rowsTotal1:"+rowsTotal1);
    var numPages1 = rowsTotal1/rowsShown1;
    for(i = 0;i < numPages1;i++) {
        var pageNum1 = i + 1;
        $('#nav1').append('<a onclick="event.preventDefault();" href="#" rel="'+i+'"><span>'+pageNum1+'</span></a> ');
    }
    $('#campaignTbody tr').attr("visible","hidden").hide();
    $('#campaignTbody tr').slice(0, rowsShown1).attr("visible","visible").show();
    $('#nav1 a:first').addClass('active');
    $('#nav1 a').bind('click', function(){

        $('#nav1 a').removeClass('active');
        $(this).addClass('active');
        var currPage1 = $(this).attr('rel');
        //console.log("currPage1"+currPage1);
        var startItem1 = currPage1 * rowsShown1;
        var endItem1 = startItem1 + rowsShown1;
        //console.log("start "+ startItem1 + " end "+ endItem1);
        $('#campaignTbody tr').css('opacity','0.0').attr("visible","hidden").hide().slice(startItem1, endItem1).
        css('display','table-row').attr("visible","visible").animate({opacity:1}, 300);
    });
    
    //var initiativesInProgress = campaignList.filter(function(item){
    //return item.Status=="In Progress";
    //}).length;
  
    $("#totalInitiatives").html(initiativesInProgress+"/"+rowsTotal1);
    $(".form-check-input").eq(0).trigger("click");
}


</script>


</body>
</html>