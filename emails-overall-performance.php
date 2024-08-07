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
            <h1 class="page-header-title">Content Distribution</h1>
            <h1 class="page-header-title-black mb-0">Email Channel Engagement</h1>
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
                        <!--<option>Country</option>-->
                      </select>
                    </div>
                  </div>
                </div> 
                
                <div class="col-md-4 p-0 ps-md-0">
                  <div class="mb-md-0 mb-3">
                    <div class="tom-select-custom">
                      <select id="CampaignSelect" class="js-select form-select" autocomplete="off"
                            data-hs-tom-select-options='{
                              "placeholder": "Select a person...",
                              "hideSearch": true
                            }'>
                            <!--<option>Campaign</option>-->
                      </select>
                    </div>
                  </div>
                </div>
                
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
      
      
      
      
      

      <div class="d-flex justify-content-center loading my-5">
          <div class="spinner-border text-warning" style="width: 3rem; height: 3rem;" role="status">
              <span class="sr-only"></span>
          </div>
      </div>

      <div class="row">
        <!-- Delivered -->
        <div class="col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-85">
            <!-- Header -->
            <div class="card-header card-header-content-between bg-gray">
              <h4 class="card-header-title">Delivered</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body py-3">
              <ul class="list-group list-group-flush list-group-no-gutters">
                <li class="list-group-item p-0 text-start">
                  <h5 id="DeliveryRate1" class="card-title mb-0 fs-30 mb-2">000,000</h5>
                  <div class="d-flex">
                    <!-- <div class="d-flex">
                      <div class="me-2">
                        <img id="DeliveredIMG" src="./assets/img/icos/ico-arrow-down-circle-yellow.svg" alt="" class="mt--5">
                      </div>
                      <div class="me-2">
                        <p id="Delivered3" class="text-yellow mb-0">000%</p>
                      </div>
                    </div> -->
                    <p class="mb-0">Over <span id="DeliveryRate4">000,000</span> email messages.</p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>

        <!-- UNIQUE OPEN -->
        <div class="col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-85">
            <!-- Header -->
            <div class="card-header card-header-content-between bg-gray">
              <h4 class="card-header-title">Unique Open Rate</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body py-3">
              <ul class="list-group list-group-flush list-group-no-gutters">
                <li class="list-group-item p-0 text-start">
                  <h5 id="UniqueOpenRate1" class="card-title mb-0 fs-30 mb-2">000,000</h5>
                  <div class="d-flex">
                    <div class="d-flex">
                      <div class="me-2">
                        <img id="UniqueOpenRateIMG" src="./assets/img/icos/ico-arrow-down-circle-yellow.svg" alt="" class="mt--5">
                      </div>
                      <div class="me-2">
                        <p id="UniqueOpenRate3" class="text-yellow mb-0">000%</p>
                      </div>
                    </div>
                    <p class="mb-0">of industry BMK  (<span id="UniqueOpenRate4">000,000</span>)</p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>

        <!-- UNIQUE CLICK -->
        <div class="col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-85">
            <!-- Header -->
            <div class="card-header card-header-content-between bg-gray">
              <h4 class="card-header-title">Unique Click Rate</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body py-3">
              <ul class="list-group list-group-flush list-group-no-gutters">
                <li class="list-group-item p-0 text-start">
                  <h5 id="UniqueClickRate1" class="card-title mb-0 fs-30 mb-2">000,000</h5>
                  <div class="d-flex">
                    <div class="d-flex">
                      <div class="me-2">
                        <img id="UniqueClickRateIMG" src="./assets/img/icos/ico-arrow-down-circle-orange.svg" alt="" class="mt--5">
                      </div>
                      <div class="me-2">
                        <p id="UniqueClickRate3" class="text-orange mb-0">000%</p>
                      </div>
                    </div>
                    <p class="mb-0">of industry BMK (<span id="UniqueClickRate4">000,000</span>)</p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>

        <!-- SEND -->
        <div class="col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-85">
            <!-- Header -->
            <div class="card-header card-header-content-between bg-gray">
              <h4 class="card-header-title">Unsubscribe</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body py-3">
              <ul class="list-group list-group-flush list-group-no-gutters">
                <li class="list-group-item p-0 text-start">
                  <h5 id="Sends1" class="card-title mb-0 fs-30 mb-2">000,000</h5>
                  <div class="d-flex">
                    <div class="d-flex">
                      <div class="me-2">
                        <img id="SendsIMG" src="./assets/img/icos/ico-arrow-down-circle-orange.svg" alt="" class="mt--5">
                      </div>
                      <div class="me-2">
                        <p id="Sends3" class="text-orange mb-0">000%</p>
                      </div>
                    </div>
                    <p class="mb-0">of industry BMK (<span id="Sends4">000,000</span>)</p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>

      </div>

      <div class="row d-none">
        <!-- UNSUBCRIBE -->
        <div class="col-lg-4 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-85">
            <!-- Header -->
            <div class="card-header card-header-content-between bg-gray">
              <h4 class="card-header-title">Unsubscribe Rate</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body py-3">
              <ul class="list-group list-group-flush list-group-no-gutters">
                <li class="list-group-item p-0 text-start">
                  <h5 id="UnsubscribeRate1" class="card-title mb-0 fs-30 mb-2">000,000</h5>
                  <p class="mb-2"><span id="UnsubscribeRate2">0.000.000</span> Average Per Day</p>
                  <div class="d-flex">
                    <div class="d-flex">
                      <div class="me-2">
                        <img id="UnsubscribeRateIMG" src="./assets/img/icos/ico-arrow-down-circle-gray.svg" alt="" class="mt--5">
                      </div>
                      <div class="me-2">
                        <p id="UnsubscribeRate3" class="text-gray mb-0">000%</p>
                      </div>
                    </div>
                    <p class="mb-0">Compared to last period total: <span id="UnsubscribeRate4">000,000</span></p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>

        <!-- DELIVERY -->
        <div class="col-lg-4 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-85">
            <!-- Header -->
            <div class="card-header card-header-content-between bg-gray">
              <h4 class="card-header-title">Delivery Rate</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body py-3">
              <ul class="list-group list-group-flush list-group-no-gutters">
                <li class="list-group-item p-0 text-start">
                  <h5 id="DeliveryRate1_old" class="card-title mb-0 fs-30 mb-2">000,000</h5>
                  <p class="mb-2"><span id="DeliveryRate2_old">0.000.000</span> Average Per Day</p>
                  <div class="d-flex">
                    <div class="d-flex">
                      <div class="me-2">
                        <img id="DeliveryRateIMG" src="./assets/img/icos/ico-arrow-down-circle-orange.svg" alt="" class="mt--5">
                      </div>
                      <div class="me-2">
                        <p id="DeliveryRate3_old" class="text-orange mb-0">000%</p>
                      </div>
                    </div>
                    <p class="mb-0">Compared to last period total: <span id="DeliveryRate4_old">000,000</span></p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>

        <!-- BOUNCE -->
        <div class="col-lg-4 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-85">
            <!-- Header -->
            <div class="card-header card-header-content-between bg-gray">
              <h4 class="card-header-title">Bounce Rate</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body py-3">
              <ul class="list-group list-group-flush list-group-no-gutters">
                <li class="list-group-item p-0 text-start">
                  <h5 id="BounceRate1" class="card-title mb-0 fs-30 mb-2">000,000</h5>
                  <p class="mb-2"><span id="BounceRate2">0.000.000</span> Average Per Day</p>
                  <div class="d-flex">
                    <div class="d-flex">
                      <div class="me-2">
                        <img id="BounceRateIMG" src="./assets/img/icos/ico-arrow-down-circle-orange.svg" alt="" class="mt--5">
                      </div>
                      <div class="me-2">
                        <p id="BounceRate3" class="text-orange mb-0">000%</p>
                      </div>
                    </div>
                    <p class="mb-0">Compared to last period total: <span id="BounceRate4">000,000</span></p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>

        
      </div>
      <!-- End Row -->

      <!-- Card -->
      <div class="card mb-3 mb-lg-5">
        <!-- Header -->
        <div class="card-header bg-gray">
          <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-md">
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-header-title">Performance Over Time</h4>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Header -->

        <div class="d-flex align-items-center">

        
        <!-- Chartjs -->
        <div class="chart-container chart-size">
          <canvas id="line-chart-with-grid" class="js-chart"
                  data-hs-chartjs-options='{
                      "type": "line",
                      "data": {
                        "labels": ["Jun 9","Jun 11","Jun 13","Jun 15","Jun 17","Jun 19","Jun 21","Jun 23","Jun 25","Jun 27","Jun 29","Jil 1","Jul 3","Jul 5","Jul 7"],
                        "datasets": [{
                          "data": [],
                          "backgroundColor": "transparent",
                          "borderColor": "#FF8800",
                          "borderWidth": 2,
                          "pointRadius": 0,
                          "pointHoverRadius": 1,
                          "tension": 0
                        },
                        {
                          "data": [],
                          "backgroundColor": "transparent",
                          "borderColor": "#FFAF00",
                          "borderWidth": 2,
                          "pointRadius": 0,
                          "pointHoverRadius": 1,
                          "tension": 0
                        },
                        {
                          "data": [],
                          "backgroundColor": "transparent",
                          "borderColor": "#8C58FF",
                          "borderWidth": 2,
                          "pointRadius": 0,
                          "pointHoverRadius": 1,
                          "tension": 0
                        }]
                      },
                      "options": {
                        "scales": {
                          "y": {
                            "grid": {
                              "drawBorder": false,
                              "color": "#eeeef1"
                            },
                            "min": 0,
                            "max": 14,
                            "ticks": {
                              "stepSize": 1,
                              "color": "rgba(0, 0, 0, 0.4)",
                              "padding": 10
                            }
                          },
                          "x": {
                            "grid": {
                              "display": false,
                              "drawBorder": false
                            },
                            "ticks": {
                              "labelOffset": 20,
                              "maxTicksLimit": 15,
                              "padding": 20,
                              "maxRotation": 0,
                              "minRotation": 0,
                              "font": {
                                "size": 12
                              },
                              "color": "rgba(0, 0, 0, 0.4)"
                            }
                          }
                        },
                        "hover": {
                          "mode": "nearest",
                          "intersect": false
                        },
                        "plugins": {
                          "tooltip": {
                            "prefix": "k",
                            "intersect": false
                          }
                        }
                      }
                    }'>
          </canvas>
        </div>
        <!-- End Chartjs -->
        <div class="">
          <div class="d-flex align-items-center me-3">
            <span class="legend-indicator bg-orange d-flex"></span>
            <p class="mb-0 fs-12">Total opens</p>
          </div>
          <div class="d-flex align-items-center me-3">
            <span class="legend-indicator bg-yellow d-flex"></span>
            <p class="mb-0 fs-12">Deliveries</p>
          </div>
          <div class="d-flex align-items-center">
            <span class="legend-indicator bg-purple-light d-flex"></span>
            <p class="mb-0 fs-12">Unique clisks</p>
          </div>
        </div>
      </div>
      </div>
      <!-- End Card -->

    </div>
    <!-- End Content -->

  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
  <script src="./assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script> -->
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
                  "data": [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor,
                  "maxBarThickness": 10
                },
                {
                  "data": [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
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
                  "data": [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor,
                  "maxBarThickness": 10
                },
                {
                  "data": [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
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

<script type="text/javascript">

    $(document).ready(function(){
			getData();
		});

        
        
        
        
    var emailsListCountry = [];
	var emailsList = [];
    var uniqueDates = [];
    var _labels = [];
    
    var getData = function(){
        
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
                            //console.log(data);
                            //emailCards
                            
                            function compareBySendDate(a, b) {
                              if (a['REPORT - Email Barchart 2.0[Date_]'] > b['REPORT - Email Barchart 2.0[Date_]']) {
                                return 1;
                              }
                              if (a['REPORT - Email Barchart 2.0[Date_]'] < b['REPORT - Email Barchart 2.0[Date_]']) {
                                return -1;
                              }
                              return 0;
                            }
                            
                            
                            
                            
                            //console.log(JSON.parse(JSON.stringify(data["emailBarchart"]["results"][0]['tables'][0]['rows'])));
                            var barchartData = data["emailBarchart"]["results"][0]['tables'][0]['rows'];
                            const uniqueCampaign = [...new Set(barchartData.map(item => item["REPORT - Email Barchart 2.0[Campaign Name_]"]))];
                            uniqueDates = [...new Set(barchartData.map(item => item["REPORT - Email Barchart 2.0[Date_]"]))];
                            uniqueDates.sort();
                            uniqueDates.forEach(function(someDate) {  
                                //_labels.push(someDate.replace("T00:00:00","").replace("-","/"));
                                _labels.push(new Date(someDate).toLocaleDateString());
                            });
                            console.log(uniqueCampaign);
                            //console.log("********************************************************");
                            var arrBarchart = []
                            uniqueCampaign.forEach(function(campaign) {  
                                //console.log(campaign);
                                let emailsRelatedToCampaign = barchartData.filter(e => e["REPORT - Email Barchart 2.0[Campaign Name_]"]==campaign);
                                emailsRelatedToCampaign.sort(compareBySendDate);
                                //console.log(emailsRelatedToCampaign);
                                //Totalopens:[0,0,0,0,0,0,0,0,0,0,0,1788,0],Deliveries:[0,0,0,0,0,0,0,0,0,0,0,2967,0],Uniqueclicks:[0,0,0,0,0,0,0,0,0,0,0,138,0]
                                let arrOpens = emailsRelatedToCampaign.map(item2 => item2["REPORT - Email Barchart 2.0[Opens]"]);
                                let arrDeliveries = emailsRelatedToCampaign.map(item2 => item2["REPORT - Email Barchart 2.0[Deliveries]"]);
                                let arrUnqClicks = emailsRelatedToCampaign.map(item2 => item2["REPORT - Email Barchart 2.0[Unique Clicks]"]);
                                let objRes = {"Campaign Name":campaign,
                                "Totalopens":[...arrOpens],
                                "Deliveries":[...arrDeliveries],
                                "Uniqueclicks":[...arrUnqClicks]
                                };
                                arrBarchart.push(objRes);
                                //console.log(arrOpens);
                                
                                
                            
                            });
                            //console.log(arrBarchart);
                            //console.log("********************************************************");
                            var emailsData = data["emailCards"]["results"][0]['tables'][0]['rows'];
                            //console.log(emailsData);
                            
                            emailsData.forEach(function(fullCampaignData) {
                                campaignName = fullCampaignData["REPORT - Email Cards 1.0[Campaign Name]"]
                                
                                try {
                                    //console.log(campaignName);
                                    let bcd = arrBarchart.filter(e => e["Campaign Name"]==campaignName);
                                    //console.log(bcd);
                                    fullCampaignData.Totalopens = bcd[0].Totalopens;
                                    fullCampaignData.Deliveries = bcd[0].Deliveries;
                                    fullCampaignData.Uniqueclicks = bcd[0].Uniqueclicks;
                                    fullCampaignData.Campaign = fullCampaignData["REPORT - Email Cards 1.0[Campaign]"];
                                    fullCampaignData.UniqueClickRate1 = fullCampaignData["REPORT - Email Cards 1.0[UniqueClickRate1]"];
                                    fullCampaignData.UniqueClickRate3 = fullCampaignData["REPORT - Email Cards 1.0[UniqueClickRate3]"];
                                    fullCampaignData.UniqueClickRate4 = fullCampaignData["REPORT - Email Cards 1.0[UniqueClickRate4]"];
                                    fullCampaignData.UnsubscribeRate1 = fullCampaignData["REPORT - Email Cards 1.0[UnsubscribeRate1]"];
                                    fullCampaignData.UnsubscribeRate3 = fullCampaignData["REPORT - Email Cards 1.0[UnsubscribeRate3]"];
                                    fullCampaignData.UnsubscribeRate4 = fullCampaignData["REPORT - Email Cards 1.0[UnsubscribeRate4]"];
                                    fullCampaignData.UniqueOpenRate1 = fullCampaignData["REPORT - Email Cards 1.0[UniqueOpenRate1]"];
                                    fullCampaignData.UniqueOpenRate3 = fullCampaignData["REPORT - Email Cards 1.0[UniqueOpenRate3]"];
                                    fullCampaignData.UniqueOpenRate4 = fullCampaignData["REPORT - Email Cards 1.0[UniqueOpenRate4]"];
                                    fullCampaignData.DeliveryRate1 = fullCampaignData["REPORT - Email Cards 1.0[DeliveryRate1]"];
                                    fullCampaignData.DeliveryRate4 = fullCampaignData["REPORT - Email Cards 1.0[DeliveryRate4]"];
                                    //fullCampaignData.Country = fullCampaignData["REPORT - Email Cards 1.0[Country]"];
                                    //console.log("====================================================");
                                } catch(error){
                                    //do nothing at all
                                }
                            });
                            //console.log(emailsData);
                            emailsList = JSON.parse(JSON.stringify(emailsData));
                            //opportunitiesList = JSON.parse(JSON.stringify(data["emailBarchart"]["results"][0]['tables'][0]['rows']));
                            
                            $("#CampaignSelect").find("option").remove();
                            emailsData.reverse();
                            
                            let countryList=[];
                            emailsData.forEach(function(fullCampaignData) {
                                //console.log(fullCampaignData);
                                let cn = fullCampaignData["REPORT - Email Cards 1.0[Campaign Name]"];
                                let cid = fullCampaignData.Campaign;
                                $("#CampaignSelect").append('<option value="' + cid + '">' + cn + '</option>');
                            });
                            
                            //================================================COUNTRY RELATED===============================
                            function compareBySendDateCountry(a, b) {
                              if (a['REPORT - Email Barchart 2.0 (Country)[Date_]'] > b['REPORT - Email Barchart 2.0 (Country)[Date_]']) {
                                return 1;
                              }
                              if (a['REPORT - Email Barchart 2.0 (Country)[Date_]'] < b['REPORT - Email Barchart 2.0 (Country)[Date_]']) {
                                return -1;
                              }
                              return 0;
                            }
                            
                            
                            
                            
                            //console.log(JSON.parse(JSON.stringify(data["emailBarchart"]["results"][0]['tables'][0]['rows'])));
                            
                            var barchartDataCountry = data["emailBarchartCountry"]["results"][0]['tables'][0]['rows'];
                            const uniqueCountry = [...new Set(barchartDataCountry.map(item => item["REPORT - Email Barchart 2.0 (Country)[Country]"]))];
                            /*
                            uniqueDates = [...new Set(barchartDataCountry.map(item => item["REPORT - Email Barchart 2.0 (Country)[Date_]"]))];
                            uniqueDates.sort();
                            uniqueDates.forEach(function(someDate) {  
                                //_labels.push(someDate.replace("T00:00:00","").replace("-","/"));
                                _labels.push(new Date(someDate).toLocaleDateString());
                            });
                            console.log(uniqueCampaign);
                            */
                            //console.log("********************************************************");
                            var arrBarchartCountry = []
                            uniqueCountry.forEach(function(__country) {  
                                //console.log(__country);
                                let emailsRelatedToCountry = barchartDataCountry.filter(e => e["REPORT - Email Barchart 2.0 (Country)[Country]"]==__country);
                                emailsRelatedToCountry.sort(compareBySendDateCountry);
                                //console.log(emailsRelatedToCountry);
                                //Totalopens:[0,0,0,0,0,0,0,0,0,0,0,1788,0],Deliveries:[0,0,0,0,0,0,0,0,0,0,0,2967,0],Uniqueclicks:[0,0,0,0,0,0,0,0,0,0,0,138,0]
                                let arrOpens = emailsRelatedToCountry.map(item2 => item2["REPORT - Email Barchart 2.0 (Country)[Opens]"]);
                                let arrDeliveries = emailsRelatedToCountry.map(item2 => item2["REPORT - Email Barchart 2.0 (Country)[Deliveries]"]);
                                let arrUnqClicks = emailsRelatedToCountry.map(item2 => item2["REPORT - Email Barchart 2.0 (Country)[Unique Clicks]"]);
                                let objRes = {"Country":__country,
                                "Totalopens":[...arrOpens],
                                "Deliveries":[...arrDeliveries],
                                "Uniqueclicks":[...arrUnqClicks]
                                };
                                arrBarchartCountry.push(objRes);
                                //console.log(arrOpens);
                                
                                
                            
                            });
                            
                            
                            var emailsDataCountry = data["emailCardsCountry"]["results"][0]['tables'][0]['rows'];
                            //console.log(data);
                            emailsDataCountry.forEach(function(fullCountryData) {
                                //if($.inArray(fullCountryData['Country'], countryList)==-1){
                                countryList.push(fullCountryData["REPORT - Email Cards 1.0 (Country)[Country]"]);
                                //}
                            });
                            countryList.sort();
                            countryList.splice(countryList.indexOf("Select a Country"), 1);
                            countryList.unshift("Select a Country");
                            
                            countryList.forEach(function(countryName) {
                                $("#countrySelect").append('<option value="'+ countryName +'">' + countryName + '</option>');
                                
                                
                                /*
                                let arrC = countryList.filter(function(c) {
                                  return countryName == c;
                                });
                                let countryObj = {
                                    "asdasdasdas":traveler.map(function(item){ return item['propiedad con nombre loco']; }).reduce(function (prev, next){ return prev + next;}),
                                };
                                    
                                
                                emailsListCountry.push({
                                    "xxx":1
                                });
                                */
                            });
                            emailsDataCountry.forEach(function(fullCountryData) {
                                let _countryName = fullCountryData["REPORT - Email Cards 1.0 (Country)[Country]"]
                                
                                try {
                                    //console.log(campaignName);
                                    
                                    let bcd = arrBarchartCountry.filter(e => e["Country"]==_countryName);
                                    
                                    //console.log(bcd);
                                    
                                    fullCountryData.Totalopens = bcd[0].Totalopens;
                                    fullCountryData.Deliveries = bcd[0].Deliveries;
                                    fullCountryData.Uniqueclicks = bcd[0].Uniqueclicks;
                                    fullCountryData.Country = fullCountryData["REPORT - Email Cards 1.0 (Country)[Country]"];
                                    fullCountryData.UniqueClickRate1 = fullCountryData["REPORT - Email Cards 1.0 (Country)[UniqueClickRate1]"];
                                    fullCountryData.UniqueClickRate3 = fullCountryData["REPORT - Email Cards 1.0 (Country)[UniqueClickRate3]"];
                                    fullCountryData.UniqueClickRate4 = fullCountryData["REPORT - Email Cards 1.0 (Country)[UniqueClickRate4]"];
                                    fullCountryData.UnsubscribeRate1 = fullCountryData["REPORT - Email Cards 1.0 (Country)[UnsubscribeRate1]"];
                                    fullCountryData.UnsubscribeRate3 = fullCountryData["REPORT - Email Cards 1.0 (Country)[UnsubscribeRate3]"];
                                    fullCountryData.UnsubscribeRate4 = fullCountryData["REPORT - Email Cards 1.0 (Country)[UnsubscribeRate4]"];
                                    fullCountryData.UniqueOpenRate1 = fullCountryData["REPORT - Email Cards 1.0 (Country)[UniqueOpenRate1]"];
                                    fullCountryData.UniqueOpenRate3 = fullCountryData["REPORT - Email Cards 1.0 (Country)[UniqueOpenRate3]"];
                                    fullCountryData.UniqueOpenRate4 = fullCountryData["REPORT - Email Cards 1.0 (Country)[UniqueOpenRate4]"];
                                    fullCountryData.DeliveryRate1 = fullCountryData["REPORT - Email Cards 1.0 (Country)[DeliveryRate1]"];
                                    fullCountryData.DeliveryRate4 = fullCountryData["REPORT - Email Cards 1.0 (Country)[DeliveryRate4]"];
                                    //fullCountryData.Country = fullCountryData["REPORT - Email Cards 1.0 (Country)[Country]"];
                                    //console.log("====================================================");
                                } catch(error){
                                    //do nothing at all
                                }
                            });
                            
                            emailsListCountry = JSON.parse(JSON.stringify(emailsDataCountry));
                            console.log(emailsListCountry);
                            //==============================================================================================
                            
                            $("#CampaignSelect").val($("#CampaignSelect").find("option").eq(0).val()).trigger("change");
                    }
                }
        });
    
    }
    
    
	$(document).ready(function() {

		emailsList50 = [
    {	Campaign: 'campaign1', 
        Sends1: '', Sends2: '', Sends3: '', Sends4: '',
				DeliveryRate1: '', DeliveryRate2: '', DeliveryRate3: '', DeliveryRate4: '',BounceRate1: '', BounceRate2: '', BounceRate3: '', BounceRate4: '',
				UniqueOpenRate1: '0.351870576339737', UniqueOpenRate2: '', UniqueOpenRate3: '1.34580384226491', UniqueOpenRate4: '0.15',
				UnsubscribeRate1: '0.00269632625547691', UnsubscribeRate2: '', UnsubscribeRate3: '0.12346927311538', UnsubscribeRate4: '0.0024',
				UniqueClickRate1: '0.0465116279069767', UniqueClickRate2: '', UniqueClickRate3: '3.65116279069767', UniqueClickRate4: '0.01',Totalopens:[0,0,0,0,0,0,0,0,0,0,0,1788,0],Deliveries:[0,0,0,0,0,0,0,0,0,0,0,2967,0],Uniqueclicks:[0,0,0,0,0,0,0,0,0,0,0,138,0]			},
{	Campaign: 'campaign2', 
        Sends1: '', Sends2: '', Sends3: '', Sends4: '',
				DeliveryRate1: '', DeliveryRate2: '', DeliveryRate3: '', DeliveryRate4: '',BounceRate1: '', BounceRate2: '', BounceRate3: '', BounceRate4: '',
				UniqueOpenRate1: '0.491379310344828', UniqueOpenRate2: '', UniqueOpenRate3: '3.02586206896552', UniqueOpenRate4: '0.15',
				UnsubscribeRate1: '0', UnsubscribeRate2: '', UnsubscribeRate3: '0', UnsubscribeRate4: '0.0024',
				UniqueClickRate1: '0.181034482758621', UniqueClickRate2: '', UniqueClickRate3: '4.27586206896552', UniqueClickRate4: '0.01',Totalopens:[0,0,0,0,0,10,152,27,23,0,0,0,0],Deliveries:[0,0,0,0,0,17,63,23,13,0,0,0,0,],Uniqueclicks:[0,0,0,0,0,2,16,3,0,0,0,0,0]			},
{	Campaign: 'campaign3', 
        Sends1: '', Sends2: '', Sends3: '', Sends4: '',
				DeliveryRate1: '', DeliveryRate2: '', DeliveryRate3: '', DeliveryRate4: '',BounceRate1: '', BounceRate2: '', BounceRate3: '', BounceRate4: '',
				UniqueOpenRate1: '0.779279279279279', UniqueOpenRate2: '', UniqueOpenRate3: '5.14974064974065', UniqueOpenRate4: '0.15',
				UnsubscribeRate1: '0', UnsubscribeRate2: '', UnsubscribeRate3: '0', UnsubscribeRate4: '0.0024',
				UniqueClickRate1: '0.211711711711712', UniqueClickRate2: '', UniqueClickRate3: '0.916871416871416', UniqueClickRate4: '0.01',Totalopens:[741,382,62,164,87,0,0,0,0,0,19,0,0],Deliveries:[56,50,5,47,42,0,0,0,0,0,22,0,0,],Uniqueclicks:[5,8,0,17,10,0,0,0,0,0,7,0,0]			},
{	Campaign: 'campaign4', 
        Sends1: '', Sends2: '', Sends3: '', Sends4: '',
				DeliveryRate1: '', DeliveryRate2: '', DeliveryRate3: '', DeliveryRate4: '',BounceRate1: '', BounceRate2: '', BounceRate3: '', BounceRate4: '',
				UniqueOpenRate1: '0.694444444444444', UniqueOpenRate2: '', UniqueOpenRate3: '4.37962962962963', UniqueOpenRate4: '0.15',
				UnsubscribeRate1: '0', UnsubscribeRate2: '', UnsubscribeRate3: '0', UnsubscribeRate4: '0.0024',
				UniqueClickRate1: '0.111111111111111', UniqueClickRate2: '', UniqueClickRate3: '2.52777777777778', UniqueClickRate4: '0.01',Totalopens:[0,0,0,0,0,0,0,0,0,53,0,0,0],Deliveries:[0,0,0,0,0,0,0,0,0,36,0,0,0],Uniqueclicks:[0,0,0,0,0,0,0,0,0,4,0,0,0]			},
{	Campaign: 'campaign5', 
        Sends1: '', Sends2: '', Sends3: '', Sends4: '',
				DeliveryRate1: '', DeliveryRate2: '', DeliveryRate3: '', DeliveryRate4: '',BounceRate1: '', BounceRate2: '', BounceRate3: '', BounceRate4: '',
				UniqueOpenRate1: '0.301600129303378', UniqueOpenRate2: '', UniqueOpenRate3: '1.51066752868919', UniqueOpenRate4: '0.15',
				UnsubscribeRate1: '0.00161629222563439', UnsubscribeRate2: '', UnsubscribeRate3: '0.168363773503583', UnsubscribeRate4: '0.0024',
				UniqueClickRate1: '0.102472927105221', UniqueClickRate2: '', UniqueClickRate3: '4.62364635526103', UniqueClickRate4: '0.01',Totalopens:[0,0,0,0,0,0,0,0,0,0,0,0,2598],Deliveries:[0,0,0,0,0,0,0,0,0,0,0,0,6187],Uniqueclicks:[0,0,0,0,0,0,0,0,0,0,0,0,634]			}
		];
		//console.log(emailsList50);
		//console.log($("#CampaignSelect").find("option").eq(1).val());
		//$("#CampaignSelect").val($("#CampaignSelect").find("option").eq(3).val()).trigger("change");
		
	});	
/**/    

    $( "#content" ).on( "change", "#CampaignSelect", function() {//console.log("aaa"+$(this).val());
    //$("#CampaignSelect").change(function(){
        $("#countrySelect").val("Select a Country");
        console.log($(this).val());

    	for (var i = 0, len = emailsList.length; i < len; i++) {
    		if(emailsList[i]['Campaign'] == $(this).val()){
    			$("#Sends1").html(emailsList[i]['UnsubscribeRate1']);
    			$("#Sends2").html(Math.round(emailsList[i]['UnsubscribeRate2']));
    			$("#Sends3").html(~~(emailsList[i]['UnsubscribeRate3'] * 100).toFixed(2)+'%');
    			$("#Sends4").html((emailsList[i]['UnsubscribeRate4'] * 100).toFixed(2)+'%');
				//if(parseFloat(emailsList[i]['UnsubscribeRate1'])>parseFloat(emailsList[i]['UnsubscribeRate4'])){$("#SendsIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-orange.svg');}
				//if(parseFloat(emailsList[i]['UnsubscribeRate1'])==parseFloat(emailsList[i]['UnsubscribeRate4'])){$("#SendsIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-gray.svg');}
				//if(parseFloat(emailsList[i]['UnsubscribeRate1'])<parseFloat(emailsList[i]['UnsubscribeRate4'])){$("#SendsIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-yellow.svg');}
                if(parseFloat(emailsList[i]['UnsubscribeRate3'])>1){$("#SendsIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-orange.svg');}
				if(parseFloat(emailsList[i]['UnsubscribeRate3'])==1){$("#SendsIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-gray.svg');}
				if(parseFloat(emailsList[i]['UnsubscribeRate3'])<1){$("#SendsIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-yellow.svg');}
    			
				$("#DeliveryRate1").html(emailsList[i]['DeliveryRate1'].toLocaleString('en-US'));
    			$("#DeliveryRate2").html(Math.round(emailsList[i]['DeliveryRate2']));
    			$("#DeliveryRate3").html(~~Math.round(emailsList[i]['DeliveryRate3'] * 100)+'%');
    			$("#DeliveryRate4").html(emailsList[i]['DeliveryRate4']);
				if(parseFloat(emailsList[i]['DeliveryRate3'])>0){$("#DeliveryRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-orange.svg');}
				if(parseFloat(emailsList[i]['DeliveryRate3'])==0){$("#DeliveryRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-gray.svg');}
				if(parseFloat(emailsList[i]['DeliveryRate3'])<0){$("#DeliveryRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-yellow.svg');}
				/*
				$("#BounceRate1").html(Math.round(emailsList[i]['BounceRate1'] * 100)+'%');
    			$("#BounceRate2").html(Math.round(emailsList[i]['BounceRate2']));
    			$("#BounceRate3").html(Math.round(emailsList[i]['BounceRate3'] * 100)+'%');
    			$("#BounceRate4").html(emailsList[i]['BounceRate4']);
				if(parseFloat(emailsList[i]['BounceRate3'])>0){$("#BounceRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-orange.svg');}
				if(parseFloat(emailsList[i]['BounceRate3'])==0){$("#BounceRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-gray.svg');}
				if(parseFloat(emailsList[i]['BounceRate3'])<0){$("#BounceRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-yellow.svg');}
				*/
				$("#UniqueOpenRate1").html(Math.round(emailsList[i]['UniqueOpenRate1'] * 100)+'%');
    			$("#UniqueOpenRate2").html(Math.round(emailsList[i]['UniqueOpenRate2']));
    			$("#UniqueOpenRate3").html(~~Math.round(emailsList[i]['UniqueOpenRate3'] * 100)+'%');
    			$("#UniqueOpenRate4").html(Math.round(emailsList[i]['UniqueOpenRate4'] * 100)+'%');
				//if(parseFloat(emailsList[i]['UniqueOpenRate1'])>parseFloat(emailsList[i]['UniqueOpenRate4'])){$("#UniqueOpenRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-orange.svg');}
				//if(parseFloat(emailsList[i]['UniqueOpenRate1'])==parseFloat(emailsList[i]['UniqueOpenRate4'])){$("#UniqueOpenRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-gray.svg');}
				//if(parseFloat(emailsList[i]['UniqueOpenRate1'])<parseFloat(emailsList[i]['UniqueOpenRate4'])){$("#UniqueOpenRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-yellow.svg');
                if(parseFloat(emailsList[i]['UniqueOpenRate3'])>1){$("#UniqueOpenRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-orange.svg');}
				if(parseFloat(emailsList[i]['UniqueOpenRate3'])==1){$("#UniqueOpenRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-gray.svg');}
				if(parseFloat(emailsList[i]['UniqueOpenRate3'])<1){$("#UniqueOpenRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-yellow.svg');}
				/*
				$("#UnsubscribeRate1").html(emailsList[i]['UnsubscribeRate1']);
    			$("#UnsubscribeRate2").html(Math.round(emailsList[i]['UnsubscribeRate2']));
    			$("#UnsubscribeRate3").html(~~Math.round(emailsList[i]['UnsubscribeRate3'] * 100)+'%');
    			$("#UnsubscribeRate4").html(emailsList[i]['UnsubscribeRate4']);
				if(parseFloat(emailsList[i]['UnsubscribeRate3'])>0){$("#UnsubscribeRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-orange.svg');}
				if(parseFloat(emailsList[i]['UnsubscribeRate3'])==0){$("#UnsubscribeRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-gray.svg');}
				if(parseFloat(emailsList[i]['UnsubscribeRate3'])<0){$("#UnsubscribeRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-yellow.svg');}
				*/
				$("#UniqueClickRate1").html(Math.round(emailsList[i]['UniqueClickRate1'] * 100)+'%');
    			$("#UniqueClickRate2").html(Math.round(emailsList[i]['UniqueClickRate2']));
    			$("#UniqueClickRate3").html(~~Math.round(emailsList[i]['UniqueClickRate3'] * 100)+'%');
    			$("#UniqueClickRate4").html(Math.round(emailsList[i]['UniqueClickRate4'] * 100)+'%');
				if(parseFloat(emailsList[i]['UniqueClickRate1'])>parseFloat(emailsList[i]['UniqueClickRate4'])){$("#UniqueClickRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-orange.svg');}
				if(parseFloat(emailsList[i]['UniqueClickRate1'])==parseFloat(emailsList[i]['UniqueClickRate4'])){$("#UniqueClickRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-gray.svg');}
				if(parseFloat(emailsList[i]['UniqueClickRate1'])<parseFloat(emailsList[i]['UniqueClickRate4'])){$("#UniqueClickRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-yellow.svg');}
    			
                //Chart UPDATE 
                var ctx = document.getElementById("line-chart-with-grid").getContext("2d");
                //var _labels =["Feb 06","Feb 12","Feb 16","Feb 20","Mar 06","Mar 14","Mar 15","Mar 19","Mar 21","Mar 22","Mar 28","Apr 01","Apr 10"];

                let chartStatus = Chart.getChart("line-chart-with-grid");
                if (chartStatus != undefined) {
                    chartStatus.destroy();
                }

                var _totalOpens = emailsList[i]['Totalopens'];
                var _deliveries = emailsList[i]['Deliveries'];
                var _uniqueClicks = emailsList[i]['Uniqueclicks'];

                var _dataSets = [{
                    "data": _totalOpens,
                    "backgroundColor": "transparent",
                    "borderColor": "#FF8800",
                    "borderWidth": 2,
                    "pointRadius": 0,
                    "pointHoverRadius": 1,
                    "tension": 0
                },
                {
                    "data": _deliveries,
                    "backgroundColor": "transparent",
                    "borderColor": "#FFAF00",
                    "borderWidth": 2,
                    "pointRadius": 0,
                    "pointHoverRadius": 1,
                    "tension": 0
                },
                {
                    "data": _uniqueClicks,
                    "backgroundColor": "transparent",
                    "borderColor": "#8C58FF",
                    "borderWidth": 2,
                    "pointRadius": 0,
                    "pointHoverRadius": 1,
                    "tension": 0
                }];

                var newChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: _labels,
                        datasets: _dataSets
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                grid: {
                                    drawBorder: false,
                                    color: "#eeeef1"
                                },
                                ticks: {
                                    stepSize: 1,
                                    color: "rgba(0, 0, 0, 0.4)",
                                    padding: 10
                                }
                            },
                            x: {
                                grid: {
                                    display: false,
                                    drawBorder: false
                                },
                                ticks: {
                                    labelOffset: 20,
                                    maxTicksLimit: 15,
                                    padding: 20,
                                    maxRotation: 0,
                                    minRotation: 0,
                                    font: {
                                        size: 12
                                    },
                                    color: "rgba(0, 0, 0, 0.4)"
                                }
                            }
                        },
                        hover: {
                            mode: "nearest",
                            intersect: false
                        },
                        plugins: {
                            legend: {
                                display: false
                            },
                            tooltip: {
                                prefix: "k",
                                intersect: false
                            }
                        }
                    }
                });

                newChart.update();
    		}
    	}

    });

$( "#content" ).on( "change", "#countrySelect", function() {//console.log("aaa"+$(this).val());
    //$("#CampaignSelect").change(function(){
        $("#CampaignSelect").val("campaign000000001");
        console.log($(this).val());

    	for (var i = 0, len = emailsListCountry.length; i < len; i++) {
    		if(emailsListCountry[i]['Country'] == $(this).val()){
    			$("#Sends1").html(emailsListCountry[i]['UnsubscribeRate1']);
    			$("#Sends2").html(Math.round(emailsListCountry[i]['UnsubscribeRate2']));
    			$("#Sends3").html(~~(emailsListCountry[i]['UnsubscribeRate3'] * 100).toFixed(2)+'%');
    			$("#Sends4").html((emailsListCountry[i]['UnsubscribeRate4'] * 100).toFixed(2)+'%');
				//if(parseFloat(emailsListCountry[i]['UnsubscribeRate1'])>parseFloat(emailsListCountry[i]['UnsubscribeRate4'])){$("#SendsIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-orange.svg');}
				//if(parseFloat(emailsListCountry[i]['UnsubscribeRate1'])==parseFloat(emailsListCountry[i]['UnsubscribeRate4'])){$("#SendsIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-gray.svg');}
				//if(parseFloat(emailsListCountry[i]['UnsubscribeRate1'])<parseFloat(emailsListCountry[i]['UnsubscribeRate4'])){$("#SendsIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-yellow.svg');}
                if(parseFloat(emailsListCountry[i]['UnsubscribeRate3'])>1){$("#SendsIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-orange.svg');}
				if(parseFloat(emailsListCountry[i]['UnsubscribeRate3'])==1){$("#SendsIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-gray.svg');}
				if(parseFloat(emailsListCountry[i]['UnsubscribeRate3'])<1){$("#SendsIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-yellow.svg');}
    			
				$("#DeliveryRate1").html(emailsListCountry[i]['DeliveryRate1'].toLocaleString('en-US'));
    			$("#DeliveryRate2").html(Math.round(emailsListCountry[i]['DeliveryRate2']));
    			$("#DeliveryRate3").html(~~Math.round(emailsListCountry[i]['DeliveryRate3'] * 100)+'%');
    			$("#DeliveryRate4").html(emailsListCountry[i]['DeliveryRate4']);
				if(parseFloat(emailsListCountry[i]['DeliveryRate3'])>0){$("#DeliveryRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-orange.svg');}
				if(parseFloat(emailsListCountry[i]['DeliveryRate3'])==0){$("#DeliveryRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-gray.svg');}
				if(parseFloat(emailsListCountry[i]['DeliveryRate3'])<0){$("#DeliveryRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-yellow.svg');}
				/*
				$("#BounceRate1").html(Math.round(emailsListCountry[i]['BounceRate1'] * 100)+'%');
    			$("#BounceRate2").html(Math.round(emailsListCountry[i]['BounceRate2']));
    			$("#BounceRate3").html(Math.round(emailsListCountry[i]['BounceRate3'] * 100)+'%');
    			$("#BounceRate4").html(emailsListCountry[i]['BounceRate4']);
				if(parseFloat(emailsListCountry[i]['BounceRate3'])>0){$("#BounceRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-orange.svg');}
				if(parseFloat(emailsListCountry[i]['BounceRate3'])==0){$("#BounceRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-gray.svg');}
				if(parseFloat(emailsListCountry[i]['BounceRate3'])<0){$("#BounceRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-yellow.svg');}
				*/
				$("#UniqueOpenRate1").html(Math.round(emailsListCountry[i]['UniqueOpenRate1'] * 100)+'%');
    			$("#UniqueOpenRate2").html(Math.round(emailsListCountry[i]['UniqueOpenRate2']));
    			$("#UniqueOpenRate3").html(~~Math.round(emailsListCountry[i]['UniqueOpenRate3'] * 100)+'%');
    			$("#UniqueOpenRate4").html(Math.round(emailsListCountry[i]['UniqueOpenRate4'] * 100)+'%');
				//if(parseFloat(emailsListCountry[i]['UniqueOpenRate1'])>parseFloat(emailsListCountry[i]['UniqueOpenRate4'])){$("#UniqueOpenRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-orange.svg');}
				//if(parseFloat(emailsListCountry[i]['UniqueOpenRate1'])==parseFloat(emailsListCountry[i]['UniqueOpenRate4'])){$("#UniqueOpenRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-gray.svg');}
				//if(parseFloat(emailsListCountry[i]['UniqueOpenRate1'])<parseFloat(emailsListCountry[i]['UniqueOpenRate4'])){$("#UniqueOpenRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-yellow.svg');
                if(parseFloat(emailsListCountry[i]['UniqueOpenRate3'])>1){$("#UniqueOpenRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-orange.svg');}
				if(parseFloat(emailsListCountry[i]['UniqueOpenRate3'])==1){$("#UniqueOpenRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-gray.svg');}
				if(parseFloat(emailsListCountry[i]['UniqueOpenRate3'])<1){$("#UniqueOpenRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-yellow.svg');}
				/*
				$("#UnsubscribeRate1").html(emailsListCountry[i]['UnsubscribeRate1']);
    			$("#UnsubscribeRate2").html(Math.round(emailsListCountry[i]['UnsubscribeRate2']));
    			$("#UnsubscribeRate3").html(~~Math.round(emailsListCountry[i]['UnsubscribeRate3'] * 100)+'%');
    			$("#UnsubscribeRate4").html(emailsListCountry[i]['UnsubscribeRate4']);
				if(parseFloat(emailsListCountry[i]['UnsubscribeRate3'])>0){$("#UnsubscribeRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-orange.svg');}
				if(parseFloat(emailsListCountry[i]['UnsubscribeRate3'])==0){$("#UnsubscribeRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-gray.svg');}
				if(parseFloat(emailsListCountry[i]['UnsubscribeRate3'])<0){$("#UnsubscribeRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-yellow.svg');}
				*/
				$("#UniqueClickRate1").html(Math.round(emailsListCountry[i]['UniqueClickRate1'] * 100)+'%');
    			$("#UniqueClickRate2").html(Math.round(emailsListCountry[i]['UniqueClickRate2']));
    			$("#UniqueClickRate3").html(~~Math.round(emailsListCountry[i]['UniqueClickRate3'] * 100)+'%');
    			$("#UniqueClickRate4").html(Math.round(emailsListCountry[i]['UniqueClickRate4'] * 100)+'%');
				if(parseFloat(emailsListCountry[i]['UniqueClickRate1'])>parseFloat(emailsListCountry[i]['UniqueClickRate4'])){$("#UniqueClickRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-orange.svg');}
				if(parseFloat(emailsListCountry[i]['UniqueClickRate1'])==parseFloat(emailsListCountry[i]['UniqueClickRate4'])){$("#UniqueClickRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-gray.svg');}
				if(parseFloat(emailsListCountry[i]['UniqueClickRate1'])<parseFloat(emailsListCountry[i]['UniqueClickRate4'])){$("#UniqueClickRateIMG").attr('src','./assets/img/icos/ico-arrow-down-circle-yellow.svg');}
    			
                //Chart UPDATE 
                var ctx = document.getElementById("line-chart-with-grid").getContext("2d");
                //var _labels =["Feb 06","Feb 12","Feb 16","Feb 20","Mar 06","Mar 14","Mar 15","Mar 19","Mar 21","Mar 22","Mar 28","Apr 01","Apr 10"];

                let chartStatus = Chart.getChart("line-chart-with-grid");
                if (chartStatus != undefined) {
                    chartStatus.destroy();
                }

                var _totalOpens = emailsListCountry[i]['Totalopens'];
                var _deliveries = emailsListCountry[i]['Deliveries'];
                var _uniqueClicks = emailsListCountry[i]['Uniqueclicks'];

                var _dataSets = [{
                    "data": _totalOpens,
                    "backgroundColor": "transparent",
                    "borderColor": "#FF8800",
                    "borderWidth": 2,
                    "pointRadius": 0,
                    "pointHoverRadius": 1,
                    "tension": 0
                },
                {
                    "data": _deliveries,
                    "backgroundColor": "transparent",
                    "borderColor": "#FFAF00",
                    "borderWidth": 2,
                    "pointRadius": 0,
                    "pointHoverRadius": 1,
                    "tension": 0
                },
                {
                    "data": _uniqueClicks,
                    "backgroundColor": "transparent",
                    "borderColor": "#8C58FF",
                    "borderWidth": 2,
                    "pointRadius": 0,
                    "pointHoverRadius": 1,
                    "tension": 0
                }];

                var newChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: _labels,
                        datasets: _dataSets
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                grid: {
                                    drawBorder: false,
                                    color: "#eeeef1"
                                },
                                ticks: {
                                    stepSize: 1,
                                    color: "rgba(0, 0, 0, 0.4)",
                                    padding: 10
                                }
                            },
                            x: {
                                grid: {
                                    display: false,
                                    drawBorder: false
                                },
                                ticks: {
                                    labelOffset: 20,
                                    maxTicksLimit: 15,
                                    padding: 20,
                                    maxRotation: 0,
                                    minRotation: 0,
                                    font: {
                                        size: 12
                                    },
                                    color: "rgba(0, 0, 0, 0.4)"
                                }
                            }
                        },
                        hover: {
                            mode: "nearest",
                            intersect: false
                        },
                        plugins: {
                            legend: {
                                display: false
                            },
                            tooltip: {
                                prefix: "k",
                                intersect: false
                            }
                        }
                    }
                });

                newChart.update();
    		}
    	}

    });
    
    
</script>
  <!-- End Style Switcher JS -->
</body>
</html>