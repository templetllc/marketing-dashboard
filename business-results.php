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

    <style type="text/css">
        .js-chart {
            margin: auto !important;
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

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl business-results">

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
            <h1 class="page-header-title">Business results</h1>
            <!-- <h1 class="page-header-title-black mb-0"></h1> -->
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
                </div> <!---->
                <div class="col-md-4 p-0 ps-md-0">
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

      <div class="d-flex justify-content-center loading my-4">
          <div class="spinner-border text-warning" style="width: 3rem; height: 3rem;" role="status">
              <span class="sr-only"></span>
          </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="row">
            <div class="col-lg-6">
              <!-- Card -->
              <div class="card mb-4 mb-md-0">
                <!-- Header -->
                <div class="card-header card-header-content-between bg-gray">
                  <h4 class="card-header-title">TCV Pipeline by Country</h4>
                </div>
                <!-- End Header -->
                <!-- Body -->
                <div class="card-body">
                  <!-- Chart Half -->
                  <div class="chartjs-doughnut-custom" style="height: 12rem;">
                    <canvas id="doughnut-chart-1" class="js-chart"
                        data-hs-chartjs-options='{
                          "type": "doughnut",
                          "data": {
                            "labels": ["", ""],
                            "datasets": [{
                              "data": [47, 53],
                              "backgroundColor": ["#DDDDDD", "#FF6000"],
                              "borderWidth": 0,
                              "hoverBorderColor": "#fff"
                            }]
                          },
                          "options": {
                            "cutout": "75%",
                            "plugins": {
                              "tooltip": {
                                "postfix": "%",
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false
                              }
                            },
                            "hover": {
                              "mode": "nearest",
                              "intersect": true
                            }
                          }
                        }'>
                    </canvas>
                    <div class="chartjs-doughnut-custom-stat">
                      <!-- <small class="text-cap">Project balance</small> -->
                      <span class="h1 tcvPipeline"><span class="targetCount">0</span>/<span id="target1">0</span></span>
                    </div>
                  </div>
                  <!-- <div class="align-items-center mb-3">
                    <div class="me-2"><p class="mb-1 fw-bold">Pipeline</p></div>
                    <div class="me-2"><p class="mb-2 targetPipeline">0</p></div>
                    <div class="progress flex-grow-1">
                      <div class="progress-bar targetMQLsPipeline" role="progressbar" style="width: 100%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div> -->
                  <!-- <div class="align-items-center">
                    <div class="me-2"><p class="mb-1 fw-bold">Won</p></div>
                    <div class="me-2"><p class="mb-2 targetWon">0</p></div>
                    <div class="progress flex-grow-1">
                      <div class="progress-bar bg-yellow targetMQLsWon" role="progressbar" style="width: 100%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div> -->
                  <!-- End Chart Half -->
                </div>
                <!-- End Body -->
              </div>
              <!-- End Card -->
            </div>
            <div class="col-lg-6">
              <!-- Card -->
              <div class="card">
                <!-- Header -->
                <div class="card-header card-header-content-between bg-gray">
                  <h4 class="card-header-title">TCV Won by Country</h4>
                </div>
                <!-- End Header -->
                <!-- Body -->
                <div class="card-body">
                  <!-- Chart Half -->
                  <div class="chartjs-doughnut-custom" style="height: 12rem;">
                    <canvas id="doughnut-chart-2" class="js-chart"
                        data-hs-chartjs-options='{
                          "type": "doughnut",
                          "data": {
                            "labels": ["", ""],
                            "datasets": [{
                              "data": [71, 29],
                              "backgroundColor": ["#DDDDDD", "#FF6000"],
                              "borderWidth": 0,
                              "hoverBorderColor": "#fff"
                            }]
                          },
                          "options": {
                            "cutout": "75%",
                            "plugins": {
                              "tooltip": {
                                "postfix": "%",
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false
                              }
                            },
                            "hover": {
                              "mode": "nearest",
                              "intersect": true
                            }
                          }
                        }'>
                    </canvas>
                    <div class="chartjs-doughnut-custom-stat">
                      <!-- <small class="text-cap">Project balance</small> -->
                      <span class="h1 tcvWon"></span>
                    </div>
                  </div>
                  <!-- <div class="align-items-center mb-3">
                    <div class="me-2"><p class="mb-1 fw-bold">Pipeline</p></div>
                    <div class="me-2"><p class="mb-2">$44.28</p></div>
                    <div class="progress flex-grow-1">
                      <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div> -->
                  <!-- <div class="align-items-center mb-3">
                    <div class="me-2"><p class="mb-1 fw-bold">Pipeline</p></div>
                    <div class="me-2"><p id="newCustomerPipeline" class="mb-2">0</p></div>
                    <div class="progress flex-grow-1">
                      <div class="progress-bar newCustomerBarPipeline" role="progressbar" style="width: 33%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div> -->
                  <!-- <div class="align-items-center">
                    <div class="me-2"><p class="mb-1 fw-bold">Won</p></div>
                    <div class="me-2"><p id="newCustomerWon" class="mb-2">0</p></div>
                    <div class="progress flex-grow-1">
                      <div class="progress-bar bg-yellow newCustomerBarWon" role="progressbar" style="width: 60%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div> -->
                  <!-- End Chart Half -->
                </div>
                <!-- End Body -->
              </div>
              <!-- End Card -->
            </div>
          </div>
          <div class="col-12 col-lg-12">
            <div class="card mt-3 mb-4 mb-md-0">
              <div class="d-md-flex d-sm-inline-block align-items-center p-4 flex-wrap">
                <div class="fs-14 me-5">Legend </div>
                <div class="d-flex align-items-center me-3 mb-3 mb-md-0">
                  <div class="square me-2 color-CO"></div>
                  <p class="fs-14 mb-0">CO</p>
                </div>
                <div class="d-flex align-items-center me-3 mb-3 mb-md-0">
                  <div class="square me-2 color-HON"></div>
                  <span class="fs-14 mb-0">HON</span>
                </div>
                <div class="d-flex align-items-center me-3 mb-3 mb-md-0">
                  <div class="square me-2 color-GUA"></div>
                  <span class="fs-14 mb-0">GUA​</span>
                </div>
                <div class="d-flex align-items-center me-3 mb-3 mb-md-0">
                  <div class="square me-2 color-ES"></div>
                  <span class="fs-14 mb-0">ES</span>
                </div>
                <div class="d-flex align-items-center me-3 mb-3 mb-md-0">
                  <div class="square me-2 color-EC"></div>
                  <span class="fs-14 mb-0">EC</span>
                </div>
                <div class="d-flex align-items-center me-3 mb-3 mb-md-0">
                  <div class="square me-2 color-RD"></div>
                  <span class="fs-14 mb-0">RD</span>
                </div>
                <div class="d-flex align-items-center me-3 mb-3 mb-md-0">
                  <div class="square me-2 color-PAN"></div>
                  <span class="fs-14 mb-0">PAN</span>
                </div>
                <div class="d-flex align-items-center">
                  <div class="square me-2 color-GLOBAL"></div>
                  <span class="fs-14 mb-0">WS</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="row">
            <div class="col-lg-6">
              <!-- Card -->
              <div class="card">
                <!-- Header -->
                <div class="card-header card-header-content-between bg-gray">
                  <h4 class="card-header-title">TCV Won by Strategy</h4>
                </div>
                <!-- End Header -->
                <!-- Body -->
                <div class="card-body">
                  <!-- Chart Half -->
                  <div class="chartjs-doughnut-custom" style="height: 12rem;">
                    <canvas id="doughnut-chart-3" class="js-chart"
                        data-hs-chartjs-options='{
                          "type": "doughnut",
                          "data": {
                            "labels": ["", ""],
                            "datasets": [{
                              "data": [92, 8],
                              "backgroundColor": ["#DDDDDD", "#FF6000"],
                              "borderWidth": 0,
                              "hoverBorderColor": "#fff"
                            }]
                          },
                          "options": {
                            "cutout": "75%",
                            "plugins": {
                              "tooltip": {
                                "postfix": "%",
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false
                              }
                            },
                            "hover": {
                              "mode": "nearest",
                              "intersect": true
                            }
                          }
                        }'>
                    </canvas>
                    <div class="chartjs-doughnut-custom-stat">
                      <!-- <small class="text-cap">Project balance</small> -->
                      <span class="h1 byStrategy"></span>
                    </div>
                  </div>
                  <!-- <div class="align-items-center mb-3">
                    <div class="me-2"><p class="mb-1 fw-bold">Pipeline</p></div>
                    <div class="me-2"><p class="mb-2">$44.28</p></div>
                    <div class="progress flex-grow-1">
                      <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div> -->
                  <!-- <div class="align-items-center mb-3">
                    <div class="me-2"><p class="mb-1 fw-bold">Pipeline</p></div>
                    <div class="me-2"><p id="crossSellPipeline" class="mb-2">0</p></div>
                    <div class="progress flex-grow-1">
                      <div class="progress-bar crossSellBarPipeline" role="progressbar" style="width: 67%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div> -->
                  <!-- <div class="align-items-center">
                    <div class="me-2"><p class="mb-1 fw-bold">Won</p></div>
                    <div class="me-2"><p id="crossSellWon" class="mb-2">0</p></div>
                    <div class="progress flex-grow-1">
                      <div class="progress-bar bg-yellow crossSellBarWon" role="progressbar" style="width: 40%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div> -->
                  <!-- End Chart Half -->
                </div>
                <!-- End Body -->
              </div>
              <!-- End Card -->
              <div class="card mt-3 mb-4 mb-md-0">
                <div class="d-md-flex d-sm-inline-block align-items-center p-4">
                  <div class="d-flex align-items-center me-4 mb-3 mb-md-0">
                    <div class="square me-2 color-Acquisition"></div>
                    <p class="fs-14 mb-0">Acquisition</p>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="square me-2 Cross-Sell-Upsell"></div>
                    <span class="fs-14 mb-0">Cross Sell Upsell​</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- Card -->
              <div class="card">
                <!-- Header -->
                <div class="card-header card-header-content-between bg-gray">
                  <h4 class="card-header-title">Won by Format</h4>
                </div>
                <!-- End Header -->
                <!-- Body -->
                <div class="card-body">
                  <!-- Chart Half -->
                  <div class="chartjs-doughnut-custom" style="height: 12rem;">
                    <canvas id="doughnut-chart-3" class="js-chart"
                        data-hs-chartjs-options='{
                          "type": "doughnut",
                          "data": {
                            "labels": ["", ""],
                            "datasets": [{
                              "data": [92, 8],
                              "backgroundColor": ["#DDDDDD", "#FF6000"],
                              "borderWidth": 0,
                              "hoverBorderColor": "#fff"
                            }]
                          },
                          "options": {
                            "cutout": "75%",
                            "plugins": {
                              "tooltip": {
                                "postfix": "%",
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false
                              }
                            },
                            "hover": {
                              "mode": "nearest",
                              "intersect": true
                            }
                          }
                        }'>
                    </canvas>
                    <div class="chartjs-doughnut-custom-stat">
                      <!-- <small class="text-cap">Project balance</small> -->
                      <span class="h1 byStrategy"></span>
                    </div>
                  </div>
                  <!-- <div class="align-items-center mb-3">
                    <div class="me-2"><p class="mb-1 fw-bold">Pipeline</p></div>
                    <div class="me-2"><p class="mb-2">$44.28</p></div>
                    <div class="progress flex-grow-1">
                      <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div> -->
                  <!-- <div class="align-items-center mb-3">
                    <div class="me-2"><p class="mb-1 fw-bold">Pipeline</p></div>
                    <div class="me-2"><p id="crossSellPipeline" class="mb-2">0</p></div>
                    <div class="progress flex-grow-1">
                      <div class="progress-bar crossSellBarPipeline" role="progressbar" style="width: 67%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div> -->
                  <!-- <div class="align-items-center">
                    <div class="me-2"><p class="mb-1 fw-bold">Won</p></div>
                    <div class="me-2"><p id="crossSellWon" class="mb-2">0</p></div>
                    <div class="progress flex-grow-1">
                      <div class="progress-bar bg-yellow crossSellBarWon" role="progressbar" style="width: 40%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div> -->
                  <!-- End Chart Half -->
                </div>
                <!-- End Body -->
              </div>
              <!-- End Card -->
              <div class="card mt-3 mb-4 mb-md-0">
                <div class="d-md-flex d-sm-inline-block align-items-center p-4">
                  <div class="d-flex align-items-center me-4 mb-3 mb-md-0">
                    <div class="square me-2 color-Acquisition"></div>
                    <p class="fs-14 mb-0">Acquisition</p>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="square me-2 Cross-Sell-Upsell"></div>
                    <span class="fs-14 mb-0">Cross Sell Upsell​</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-lg-12 mt-3">
        <div class="row">
          <div class="col-md mb-3">
            <div class="card border-orange">
              <div class="card-body py-2">
                <div class="col-md">
                  <div class="d-flex align-items-center">
                    <div>
                      <h1 class="mb-0 fs-30 targetPipeline">0</h1>
                    </div>
                  </div>
                  <span class="card-header-title fs-sm-14">TCV Pipeline</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md mb-3">
            <div class="card border-orange">
              <div class="card-body py-2">
                <div class="col-md">
                  <div class="d-flex align-items-center">
                    <div>
                      <h1 class="mb-0 fs-30 targetWon">0</h1>
                    </div>
                  </div>
                  <span class="card-header-title fs-sm-14">TCV Won</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md mb-3">
            <div class="card border-orange">
              <div class="card-body py-2">
                <div class="col-md">
                  <div class="d-flex align-items-center">
                    <div>
                      <h1 class="mb-0 fs-30 mrrPipeline">0</h1>
                    </div>
                  </div>
                  <span class="card-header-title fs-sm-14">MRR Pipeline</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card border-orange">
              <div class="card-body py-2">
                <div class="col-md">
                  <div class="d-flex align-items-center">
                    <div>
                      <h1 class="mb-0 fs-30 mrrWon">0</h1>
                    </div>
                  </div>
                  <span class="card-header-title fs-sm-14">MRR Won</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Row -->

      <div class="col-12 col-lg-12">
        <div class="row mt-4">
          <div class="col-lg-6">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header bg-gray">
                <div class="row justify-content-between align-items-center flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center">
                      <h4 class="card-header-title">Opportunities (Pipeline)</h4>
                    </div>
                </div>
              </div>
              <!-- End Header -->

              <!-- Table -->
              <div class="table-responsive datatable-custom">
                <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table noSorting" data-hs-datatables-options='{
                        "columnDefs": [{
                            "targets": [],
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
                      <th>Account</th>
                      <th>Name</th>
                      <th>Campaign</th>
                      <th>Country</th>
                      <th>MRR</th>
                      <th>TCV</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody class="opportunitiesTbody" status="Pipeline">
                  
                  </tbody>
                  <!-- <thead class="thead-light">
                    <tr class="border-bottom">
                      <th class="fw-bold">Total</th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th class="fw-bold">45</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead> -->
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
          </div>
          <div class="col-lg-6">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header bg-gray">
                <div class="row justify-content-between align-items-center flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center">
                      <h4 class="card-header-title">Opportunities (Won)</h4>
                    </div>
                </div>
              </div>
              <!-- End Header -->
              <!-- Table -->
              <div class="table-responsive datatable-custom">
                <table id="datatable2" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table noSorting" data-hs-datatables-options='{
                        "columnDefs": [{
                            "targets": [],
                            "orderable": false
                          }],
                        "order": [],
                        "info": {
                          "totalQty": "#datatableWithPaginationInfoTotalQty2"
                        },
                        "search": "#datatableSearch2",
                        "entries": "#datatableEntries2",
                        "pageLength": 8,
                        "isResponsive": false,
                        "isShowPaging": false,
                        "pagination": "datatablePagination2"
                      }'>
                    <thead class="thead-light">
                      <tr class="border-bottom">
                        <th>Account</th>
                        <th>Name</th>
                        <th>Campaign</th>
                        <th>Country</th>
                        <th>MRR</th>
                        <th>TCV</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody class="opportunitiesTbody" status="Won">
                    
                    </tbody>
                    <!-- <thead class="thead-light">
                      <tr class="border-bottom">
                        <th class="fw-bold">Total</th>
                        <th></th>
                        <th class="fw-bold">$</th>
                        <th></th>
                      </tr>
                    </thead> -->
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
                        <select id="datatableEntries2" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
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
                      <span id="datatableWithPaginationInfoTotalQty2"></span>
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
        </div>
      </div>
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
  
    <script type="text/javascript">
    var opportunitiesList = [];var campaignList = [];var countryList = [];var targetList = [];
    var pipeline = 0;var won = 0;var newCustomerPipeline = 0;var newCustomerWon = 0;var newCustomerCount = 0;var crossSellCount = 0;var crossSellPipeline = 0;var crossSellWon = 0;
    var mrrPipeline = 0;var mrrWon = 0;var target1 = 0;var target2 = 0;var target3  = 0;var targetCount = 0;
 
       var USDollar = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0,
        });
		
        $(document).ready(function(){
			getData();
		});
    
    const plugin = {
      id: 'emptyDoughnut',
      afterDraw(chart, args, options) {
        const {datasets} = chart.data;
        const {color, width, radiusDecrease} = options;
        let hasData = false;

        for (let i = 0; i < datasets.length; i += 1) {
          const dataset = datasets[i];
          hasData |= dataset.data.length > 0;
        }

        if (!hasData) {
          const {chartArea: {left, top, right, bottom}, ctx} = chart;
          const centerX = (left + right) / 2;
          const centerY = (top + bottom) / 2;
          const r = Math.min(right - left, bottom - top) / 2;

          ctx.beginPath();
          ctx.lineWidth = width || 2;
          ctx.strokeStyle = color || 'rgba(255, 128, 0, 0.5)';
          ctx.arc(centerX, centerY, (r - radiusDecrease || 0), 0, 2 * Math.PI);
          ctx.stroke();
        }
      }
    };
    
    function buildChartData(colombia,dominicanR,ecuador ,elSalvador,guatemala,honduras,latamRegion,panama){
        labels1 = [];
        data1 = [];
        colors1 = [];
        let allValues = [colombia,dominicanR,ecuador ,elSalvador,guatemala,honduras,latamRegion,panama];
        let sumRes = allValues.reduce((partialSum, a) => partialSum + a, 0);
        if(sumRes==0){
            labels1 = [""];
            data1 = [0];
            colors1 = ["#DDDDDD"];
            labels1 = [];
            data1 = [];
            colors1 = [];
        } else {
            if(colombia>0){
                labels1.push("Colombia");
                data1.push(colombia);
                colors1.push("#BC58FF");
            }
            if(dominicanR>0){
                labels1.push("Dominican Republic");
                data1.push(dominicanR);
                colors1.push("#1A1A1A");
            }
            if(ecuador>0){
                labels1.push("Ecuador");
                data1.push(ecuador);
                colors1.push("#30A6EF");
            }
            if(elSalvador>0){
                labels1.push("El Salvador");
                data1.push(elSalvador);
                colors1.push("#38BA75");
            }
            if(guatemala>0){
                labels1.push("Guatemala");
                data1.push(guatemala);
                colors1.push("#FFB000");
            }
            if(honduras>0){
                labels1.push("Honduras");
                data1.push(honduras);
                colors1.push("#CF4800");
            }
            if(latamRegion>0){
            //labels1.push("Latam Region");
                labels1.push("Wholesale");
                data1.push(latamRegion);
                colors1.push("#603085");
            }
            if(panama>0){
                labels1.push("Panama");
                data1.push(panama);
                colors1.push("#FF731F");
            }
        }
        console.log({"labels":labels1, "values":data1, "colors":colors1});
        return {"labels":labels1, "values":data1, "colors":colors1};
    }
    //var dataGlobal;
    var getData = function getData(){
        $(".opportunitiesTbody").find("tr").remove();
        
        
        
        $.ajax ({
				contentType: "application/json",
				dataType: "json",
				type: 'POST',
				//url power automate: https://make.powerautomate.com/environments/29ebd59c-c6bc-46b6-a678-4856a9b69eb9/flows/3a62c346-cd2a-43c7-8fcd-a9e24d1d5a26?v3=true
                url:"https://prod-64.westus.logic.azure.com:443/workflows/a67d8c3c2be8418d981b5395e9d983d5/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=TOA0nYEo4_3CAquG5dGoZlMjOOGq1dCcblIGwTsKv64",
				complete: function() {
					$('.loading').remove();
				},
				statusCode: {
					200: function(data) {
                            
                            opportunitiesList = JSON.parse(JSON.stringify(data["businessResults"]["results"][0]['tables'][0]['rows']));
                            
                            function compareByTCV(a, b) {
                              if (a['REPORT - Business Results[TCV]'] > b['REPORT - Business Results[TCV]']) {
                                return -1;
                              }
                              if (a['REPORT - Business Results[TCV]'] < b['REPORT - Business Results[TCV]']) {
                                return 1;
                              }
                              return 0;
                            }
                            opportunitiesList.sort(compareByTCV);
                            
                            
                            console.log(opportunitiesList);
                             /*
                                opportunitiesList = [{Campaign: 'COL_Costa_EVENT_DatacenterMeet',Account: 'MEDISINU IPS S.A.S.',Name: 'Medisinu IaaS Monteria',MRR: '2024.74690663667',TCV: '72890.8886389201',Status: 'Pipeline',Country: 'Colombia',Type: 'Upsale/Crossale' },                        {Campaign: 'DR_Enterprise_One to One_Marzo_SD',Account: 'BOLSA DE VALORES DE LA REP DOMINICANA',Name: 'Bolsa de Valores,Incremento,Kio-Nap',MRR: '1250',TCV: '45000',Status: 'Won',Country: 'Dominican Republic',Type: 'Upsale' },                        {Campaign: 'DR_Enterprise_OnetoFew_Mar _Security',Account: 'HIRE HORATIO RD SRL',Name: 'Hire Horatio/ Forti NAC - Forti SIEM',MRR: '2000',TCV: '72000',Status: 'Pipeline',Country: 'Dominican Republic',Type: 'Upsale/Crossale' },                        {Campaign: 'DR_Enterprise_OnetoFew_Mar _Security',Account: 'Grupo de Inversiones Lunar (Hotel Royalton)',Name: 'Hotel ROyalton PC - Wifi',MRR: '10000',TCV: '360000.00000132',Status: 'Pipeline',Country: 'Dominican Republic',Type: 'Upsale/Crossale' },                        {Campaign: 'DR_Enterprise_OnetoFew_Mar _Security',Account: 'VARALLO COMERCIALS.A. (Hotel Secrets Royal Beach)',Name: 'Hotel Secrets Royal - Wifi + Forti',MRR: '5000',TCV: '120000',Status: 'Pipeline',Country: 'Dominican Republic',Type: 'Upsale/Crossale' },                        {Campaign: 'ES_DesayunosTecnologicos_Ent',Account: 'Productos de Belleza - PROBE - VIDAL´s',Name: 'Probe sucursales  conectividad , routers,  ap´s y firewalls administrado',MRR: '2880',TCV: '103680',Status: 'Pipeline',Country: 'El Salvador',Type: 'Upsale/Crossale' },                        {Campaign: 'ES_DesayunosTecnologicos_Ent',Account: 'BANCO DE AMERICA CENTRAL S.A.',Name: 'Banco de America Central servicio de power para su ambiente de desarrollo y QA',MRR: '2523.95',TCV: '90868.05',Status: 'Pipeline',Country: 'El Salvador',Type: 'Upsale/Crossale' },                        {Campaign: 'ES_DesayunosTecnologicos_Ent',Account: 'AUTOMAX, S.A. DE C.V.',Name: 'EXCEL Colocation NAP 2024',MRR: '8600',TCV: '309600',Status: 'Pipeline',Country: 'El Salvador',Type: 'Upsale/Crossale' },                        {Campaign: 'ES_Event_OnetoOne_Ent',Account: 'LABORATORIOS VIJOSA S.A. DE C.V.',Name: 'Datacenter Lab Vijosa IAAS / Sap Hana',MRR: '28000',TCV: '672000',Status: 'Pipeline',Country: 'El Salvador',Type: 'Upsale/Crossale' },                        {Campaign: 'GUA_Event_TransformacionDigital_Ent_Ene',Account: 'OMARSA',Name: 'OMARSA/LICENCIAMIENTO',MRR: '0',TCV: '300',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_Event_TransformacionDigital_Ent_Ene',Account: 'Agrocentro, Sociedad Anónima',Name: 'Agrocentro - Vulnerabilidad',MRR: '200',TCV: '2400',Status: 'Pipeline',Country: 'Guatemala',Type: 'Upsale/Crossale' },                        {Campaign: 'GUA_Event_TransformacionDigital_Ent_Ene',Account: 'Agrocentro, Sociedad Anónima',Name: 'Conectividad - Agrocentro - Oficinas Centrales Z9d',MRR: '1084',TCV: '26016',Status: 'Pipeline',Country: 'Guatemala',Type: 'Upsale/Crossale' },                        {Campaign: 'GUA_Event_TransformacionDigital_Ent_Ene',Account: 'DISTRIBUIDORA EL PACÍFICO, SOCIEDAD ANÓNIMA',Name: 'Distribuidora El Pacifico/Renovacion+firewall',MRR: '600',TCV: '7200',Status: 'Won',Country: 'Guatemala',Type: 'Upsale' },                        {Campaign: 'GUA_Event_TransformacionDigital_Ent_Ene',Account: 'CENTRO AGUSTINIANO PARA LA FORMACION SOCIEDAD ANONIMA',Name: 'Colegio Agustiniano - Renovacion 2024',MRR: '0',TCV: '0',Status: 'Pipeline',Country: 'Guatemala',Type: 'Upsale/Crossale' },                        {Campaign: 'GUA_Event_TransformacionDigital_Ent_Ene',Account: 'ECU WORLDWIDE GUATEMALA, SOCIEDAD ANONIMA',Name: 'ECU GEMINIS 10 - INTERNET',MRR: '150',TCV: '1800',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_Event_TransformacionDigital_Ent_Ene',Account: 'COOPERATIVA INTEGRAL DE AHORRO Y CREDITO UNION Y PROGRESO PACHALUNENSE, RESPONSABILIDAD LIMITADA',Name: 'Coopach Servidores en la Nube y Ciberseguridad',MRR: '1000',TCV: '24000',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_Event_TransformacionDigital_Ent_Ene',Account: 'Capeli, S.A.',Name: 'Capeli Licencias Office 365',MRR: '275',TCV: '3300',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_Event_TransformacionDigital_Ent_Ene',Account: 'Capeli, S.A.',Name: 'Capeli VozIP',MRR: '0',TCV: '0',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_Event_VisitaDataCenter_Abr',Account: 'ASOCIACION PARA EL DESARROLLO ECONOMICO Y SOCIAL DE AEROPUERTOS Y PUERTOS COMBEX -IM',Name: 'Combex - REnovacion de IaaS 2024',MRR: '1075',TCV: '38700',Status: 'Won',Country: 'Guatemala',Type: 'Upsale' },                        {Campaign: 'GUA_Event_VisitaDataCenter_Abr',Account: 'COLEGIO DE INGENIEROS DE GUATEMALA',Name: 'Colegio de Ingenieros - Iaas',MRR: '1500',TCV: '54000',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_Event_VisitaDataCenter_Abr',Account: 'COLEGIO DE INGENIEROS DE GUATEMALA',Name: 'Colegio de ingenieros - Internet + Firewall 80f quetzales',MRR: '650.192307692308',TCV: '15604.6153846154',Status: 'Won',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_Event_VisitaDataCenter_Abr',Account: 'Distribuciones Globales, S.A.',Name: 'Distribuciones Globales - IaaS SAP B1oHana Pricing',MRR: '3200',TCV: '115200',Status: 'Won',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_Event_VisitaDataCenter_Abr',Account: 'Distribuciones Globales, S.A.',Name: 'Distribuciones Globales - Wifi en Planta Producción',MRR: '300',TCV: '3600',Status: 'Pipeline',Country: 'Guatemala',Type: 'Upsale/Crossale' },                        {Campaign: 'GUA_Event_VisitaDataCenter_Abr',Account: 'Mumuso, S.A.',Name: 'Mumuso- Conectividad',MRR: '1092',TCV: '27708',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_Event_VulnerabilityManagement_Mar',Account: 'ADMINISTRADORA DE RECURSOS PERSONALES, SOCIEDAD ANONIMA',Name: 'ARP LICENCIAMIENTO MS 365',MRR: '5000',TCV: '60000',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_OutboundInsideSales_ENT',Account: 'GRUPO ALBAVISION GT',Name: 'Searsmartwifi',MRR: '0',TCV: '0',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_OutboundInsideSales_ENT',Account: 'LAX TRAVEL TOPACIO, SOCIEDAD ANONIMA',Name: 'Lax Topacio Upgrade y Proyecto Diseño de Red',MRR: '170',TCV: '4080',Status: 'Pipeline',Country: 'Guatemala',Type: 'Upsale/Crossale' },                        {Campaign: 'GUA_OutboundInsideSales_ENT',Account: 'COOPERATIVA INTEGRAL DE AHORRO Y CRÉDITO ITZÁ, RESPONSABILIDAD LIMITADA',Name: 'Coitza - Proyecto Global',MRR: '12230',TCV: '440280',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_OutboundInsideSales_ENT',Account: 'COOPERATIVA INTEGRAL DE AHORRO Y CRÉDITO ITZÁ, RESPONSABILIDAD LIMITADA',Name: 'Coitza San Gregorio Conectividad + Seguridad',MRR: '0',TCV: '0',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_OutboundInsideSales_ENT',Account: 'Inversiones Moka S.A',Name: 'Proyecto Pantallas/MOka',MRR: '0',TCV: '0',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_OutboundInsideSales_ENT',Account: 'Hotel Tikal Futura',Name: 'Hotel Grand Tikal Futura Conectividad 1',MRR: '1334',TCV: '32016',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_OutboundInsideSales_ENT',Account: 'Marubeni Corporation',Name: 'Marubeni Conectividad oficinas Reforma 10',MRR: '200',TCV: '7200',Status: 'Won',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_OutboundInsideSales_ENT',Account: 'Ajemaya, Sociedad Anónima',Name: 'AJEG Conectividad  Carr. El Atlántico',MRR: '240',TCV: '4320',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_OutboundInsideSales_ENT',Account: 'Ajemaya, Sociedad Anónima',Name: 'AJEG Conectividad Barberena',MRR: '240',TCV: '4320',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_OutboundInsideSales_ENT',Account: 'Ajemaya, Sociedad Anónima',Name: 'AJEG Conectividad Mixco',MRR: '240',TCV: '4320',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_OutboundInsideSales_ENT',Account: 'Ajemaya, Sociedad Anónima',Name: 'AJEG Conectividad San Andrés Iztapa',MRR: '240',TCV: '4320',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_OutboundInsideSales_ENT',Account: 'Asociación Cultural y Socio-Benéfica de los Hermanos Maristas de Guatemala',Name: 'ASOMAR - CONECTIVIDAD - CENTRO MARISTA DE FORMACION  Z.11',MRR: '1500',TCV: '36000',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_OutboundInsideSales_ENT',Account: 'Asociación Cultural y Socio-Benéfica de los Hermanos Maristas de Guatemala',Name: 'ASOMAR - CONECTIVIDAD - LICEO COATEPEQUE',MRR: '1125',TCV: '27000',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_OutboundInsideSales_ENT',Account: 'Asociación Cultural y Socio-Benéfica de los Hermanos Maristas de Guatemala',Name: 'ASOMAR - CONECTIVIDAD - LICEO GUATEMALA ZONA 5',MRR: '1500',TCV: '36000',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_OutboundInsideSales_ENT',Account: 'Asociación Cultural y Socio-Benéfica de los Hermanos Maristas de Guatemala',Name: 'ASOMAR - CONECTIVIDAD-ITECK Chichicastenango',MRR: '750',TCV: '18000',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_OutboundInsideSales_ENT',Account: 'Asociación Cultural y Socio-Benéfica de los Hermanos Maristas de Guatemala',Name: 'ASOMAR - MOISES CISNEROS SPA',MRR: '750',TCV: '18000',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_Web_WebsiteLeads_Ent',Account: 'Distribuciones y servicios Regionales',Name: 'DISRESA - CONECTIVIDAD 200MB',MRR: '1200',TCV: '28800',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_Web_WebsiteLeads_Ent',Account: 'HFT SEEDSERVICES, SOCIEDAD ANONIMA',Name: 'HFT CONECTIVIDAD',MRR: '1000',TCV: '24000',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'GUA_Web_WebsiteLeads_Ent',Account: 'INGETELCA, SOCIEDAD ANONIMA',Name: 'INGETELCA CONECTIVIDAD',MRR: '150',TCV: '3600',Status: 'Pipeline',Country: 'Guatemala',Type: 'New Customer' },                        {Campaign: 'HON_SPS_Event_One-to-Ones Cloud IT',Account: 'HN NAUFFAR GERMANY DOORS AND WINDOWS',Name: 'Nauffar_10 Mbps de Internet Guaimaca',MRR: '295',TCV: '7685',Status: 'Pipeline',Country: 'Honduras',Type: 'Upsale/Crossale' },                        {Campaign: 'HON_SPS_Event_One-to-Ones Cloud IT',Account: 'PLASTICOS INDUSTRIALES HONDUREÑOS SA DE CV',Name: 'PLIHSA -Re/Implementacion VM Presentacion SAP + Licencias.',MRR: '908',TCV: '-4768',Status: 'Won',Country: 'Honduras',Type: 'Upsale' },                        {Campaign: 'HON_TGU_Event_Workshops One-to-One',Account: 'EMISORAS UNIDAS S.A DE C.F',Name: 'Emisoras M365',MRR: '0',TCV: '0',Status: 'Pipeline',Country: 'Honduras',Type: 'Upsale/Crossale' },                        {Campaign: 'HON_TGU_Event_Workshops One-to-One',Account: 'CORPORACION MCC S.A DE C.V.',Name: 'CMCC Nuevo MPLS para Camaras',MRR: '75',TCV: '1800',Status: 'Won',Country: 'Honduras',Type: 'Upsale' },                        {Campaign: 'HON_TGU_Event_Workshops One-to-One',Account: 'CORPORACION MCC S.A DE C.V.',Name: 'Corporación MCC Nuevo Enlace para Cámaras de Seguridad',MRR: '75',TCV: '1800',Status: 'Won',Country: 'Honduras',Type: 'Upsale' },                        {Campaign: 'HON_TGU_Event_Workshops One-to-One',Account: 'COMPANIA TELEVISORA S.A.',Name: 'TVC Office M365',MRR: '0',TCV: '0',Status: 'Pipeline',Country: 'Honduras',Type: 'Upsale/Crossale' },                        {Campaign: 'HON_TGU_Giras Regionales Corp',Account: 'JOSE LITO FONSECA MONDRAGON',Name: 'Conectividad comercial ALFA',MRR: '220',TCV: '5280',Status: 'Won',Country: 'Honduras',Type: 'New Customer' },                        {Campaign: 'HON_TGU_Giras Regionales Corp',Account: 'ESTACIÓN EL PUENTE SOCIEDAD DE RESPONSABILIDAD LIMITADA',Name: 'Conectividad Estacion el puente',MRR: '415',TCV: '9960',Status: 'Pipeline',Country: 'Honduras',Type: 'New Customer' },                        {Campaign: 'HON_TGU_Giras Regionales Corp',Account: 'ESTACIÓN EL PUENTE SOCIEDAD DE RESPONSABILIDAD LIMITADA',Name: 'Exclusividad Plaza Viscaya',MRR: '1032',TCV: '24768',Status: 'Pipeline',Country: 'Honduras',Type: 'New Customer' },                        {Campaign: 'LN_Event_Educationsummit_ent_Mar',Account: 'PONTIFICIA UNIVERSIDAD JAVERIANA',Name: 'U JAVERIANA - ENLACE ORACLE',MRR: '2699.66254218223',TCV: '32395.9505061867',Status: 'Pipeline',Country: 'Colombia',Type: 'New Customer' },                        {Campaign: 'LN_Event_Educationsummit_ent_Mar',Account: 'PONTIFICIA UNIVERSIDAD JAVERIANA',Name: 'U Javeriana - Ethernet',MRR: '337.457817772778',TCV: '4049.49381327334',Status: 'Pipeline',Country: 'Colombia',Type: 'New Customer' },                        {Campaign: 'LN_Event_Educationsummit_ent_Mar',Account: 'PONTIFICIA UNIVERSIDAD JAVERIANA',Name: 'U JAVERIANA CONEXION AZURE',MRR: '1698',TCV: '20376',Status: 'Pipeline',Country: 'Colombia',Type: 'New Customer' },                        {Campaign: 'LN_Event_Educationsummit_ent_Mar',Account: 'UNIVERSIDAD EAN',Name: 'EAN-CONECTIVIDAD U MILITAR',MRR: '7052',TCV: '253872',Status: 'Pipeline',Country: 'Colombia',Type: 'Upsale/Crossale' },                        {Campaign: 'LN_Event_Educationsummit_ent_Mar',Account: 'ESCUELA COLOMBIANA DE INGENIERIA JULIO GARAVITO',Name: 'ESCUELA DE INGENIERÍA - Dimensionamiento infraestructura OCI',MRR: '3104.61192350956',TCV: '74510.6861642295',Status: 'Pipeline',Country: 'Colombia',Type: 'Upsale/Crossale' },                        {Campaign: 'LN_Event_Educationsummit_ent_Mar',Account: 'UNIVERSIDAD EL BOSQUE',Name: 'U BOSQUE - CANAL BK RUTA ALTERNA',MRR: '3329.58380202475',TCV: '119865.016872891',Status: 'Pipeline',Country: 'Colombia',Type: 'Upsale/Crossale' },                        {Campaign: 'LN_Event_Educationsummit_ent_Mar',Account: 'UNIVERSIDAD CATOLICA DE COLOMBIA',Name: 'U CATOLICA DATACENTER DE CONTINGENCIA',MRR: '0',TCV: '13829.7872340426',Status: 'Pipeline',Country: 'Colombia',Type: 'Upsale/Crossale' },                        {Campaign: 'LN_Event_Educationsummit_ent_Mar',Account: 'UNIVERSIDAD DE LA SABANA',Name: 'U SABANA - ENLACE CASA CHIA U SABANA',MRR: '224.74690663667',TCV: '4045.44431946007',Status: 'Pipeline',Country: 'Colombia',Type: 'Upsale/Crossale' },                        {Campaign: 'LN_Event_Educationsummit_ent_Mar',Account: 'UNIVERSIDAD DE LA SABANA',Name: 'U SABANA SERVICIOS EN AZURE',MRR: '9000',TCV: '324000',Status: 'Pipeline',Country: 'Colombia',Type: 'Upsale/Crossale' },                        {Campaign: 'LN_Event_Educationsummit_ent_Mar',Account: 'UNIVERSIDAD DE CARTAGENA',Name: 'UDC WAF',MRR: '674.915635545557',TCV: '8098.98762654668',Status: 'Pipeline',Country: 'Colombia',Type: 'Upsale/Crossale' },                        {Campaign: 'LN_Event_Educationsummit_ent_Mar',Account: 'CORPORACION UNIVERSITARIA REMINGTON',Name: 'UNIREMINGTON - RENOVACION 2023',MRR: '0',TCV: '0',Status: 'Pipeline',Country: 'Colombia',Type: 'Upsale/Crossale' },                        {Campaign: 'LN_Event_Educationsummit_ent_Mar',Account: 'CORPORACION UNIVERSITARIA REMINGTON',Name: 'Uniremington Internet Torre 1 y Torre 2 Centro Medellín- Marzo2023',MRR: '672.103487064117',TCV: '8065.2418447694',Status: 'Pipeline',Country: 'Colombia',Type: 'Upsale/Crossale' },                        {Campaign: 'LN_Event_Educationsummit_ent_Mar',Account: 'CORPORACION UNIVERSITARIA REMINGTON',Name: 'Uniremington Manizales Internet 100 Mbps Julio2023',MRR: '0',TCV: '0',Status: 'Pipeline',Country: 'Colombia',Type: 'Upsale/Crossale' },                        {Campaign: 'LN_Event_Educationsummit_ent_Mar',Account: 'UNIVERSIDAD DE SONSONATE',Name: 'USO RENOVACION 2024 INTERNET-WIFI-SW',MRR: '0',TCV: '0',Status: 'Pipeline',Country: 'El Salvador',Type: 'Upsale/Crossale' },                        {Campaign: 'LN_Event_Educationsummit_ent_Mar',Account: 'UNIVERSIDAD DE SONSONATE',Name: 'USO RENOVACION WIFI-SW 2024',MRR: '0',TCV: '0',Status: 'Pipeline',Country: 'El Salvador',Type: 'Upsale/Crossale' },                        {Campaign: 'LN_Event_Educationsummit_ent_Mar',Account: 'Universidad Mariano Galvez de Guatemala',Name: 'UMG - REDUNDANCIA 4 SEDES 2024',MRR: '6200',TCV: '74400',Status: 'Pipeline',Country: 'Guatemala',Type: 'Upsale/Crossale' },                        {Campaign: 'LN_Event_VIPLinks_apr',Account: 'CORPORACION DE SALUD VALENCIANA S. A. DE C. V.',Name: 'COSAVAL enlace Bodegas COALSA',MRR: '105',TCV: '2520',Status: 'Won',Country: 'Honduras',Type: 'Upsale' },                        {Campaign: 'LN_Event_VIPLinks_apr',Account: 'CORPORACION DE SALUD VALENCIANA S. A. DE C. V.',Name: 'Farma Facil Zamorano estacion texaco',MRR: '165',TCV: '4440',Status: 'Won',Country: 'Honduras',Type: 'Upsale' },                        {Campaign: 'DR_Web_WebsiteLeads_Ent',Account: 'SIGNOS FRAMEWORK SRL',Name: 'Signos Framework - Internet 100/100',MRR: '1500',TCV: '36000',Status: 'Pipeline',Country: 'Dominican Republic',Type: 'New Customer' },                        {Campaign: 'DR_Web_WebsiteLeads_Ent',Account: 'REMIX',Name: 'Consorc. Remix INTERNET 80MB + UTM',MRR: '875',TCV: '31500',Status: 'Pipeline',Country: 'Dominican Republic',Type: 'New Customer' },                        {Campaign: 'DR_Web_WebsiteLeads_Ent',Account: 'REMIX',Name: 'Remix, Internet 50MB',MRR: '673',TCV: '25002',Status: 'Pipeline',Country: 'Dominican Republic',Type: 'New Customer' }                                ];
                                */
                                
                                targetList = [
                                    {Country: 'Mexico', Target1: '574', Target2: '136', Target3: '438'},
                                ];
                                
                                for (var i = 0, len = targetList.length; i < len; i++) {
                                    target1 += parseFloat(targetList[i]['Target1']);
                                    target2 += parseFloat(targetList[i]['Target2']);
                                    target3 += parseFloat(targetList[i]['Target3']);
                                }
                                
                                $("#target1").html(target1);
                                $("#target2").html(target2);
                                $("#target3").html(target3);

                                
                                console.log("LEN:" + opportunitiesList.length);
                                
                                
                                let colombiaPipeline=0;
                                let dominicanRPipeline=0;
                                let ecuadorPipeline = 0;
                                let elSalvadorPipeline=0;
                                let guatemalaPipeline=0;
                                let hondurasPipeline=0;
                                let latamRegionPipeline=0;
                                let panamaPipeline=0;
                                let colombiaWon=0;
                                let dominicanRWon=0;
                                let ecuadorWon = 0;
                                let elSalvadorWon=0;
                                let guatemalaWon=0;
                                let hondurasWon=0;
                                let latamRegionWon=0;
                                let panamaWon=0;
                                
                                for (var i = 0, len = opportunitiesList.length; i < len; i++) {
                                    
                                    let country = opportunitiesList[i]['REPORT - Business Results[Country_B]'];
                                    let _tcv = opportunitiesList[i]['REPORT - Business Results[TCV]'];
                                    if(_tcv>=0){
                                        //console.log(country);
                                        if(opportunitiesList[i]['REPORT - Business Results[Status]'] == "Pipeline"){
                                                
                                            switch (country) {
                                                case 'Colombia':
                                                    colombiaPipeline+=_tcv;
                                                    break;
                                                case 'Dominican Republic':
                                                    dominicanRPipeline+=_tcv;
                                                    break;
                                                case 'Ecuador':
                                                    ecuadorPipeline+=_tcv;
                                                    break;
                                                case 'El Salvador':
                                                    elSalvadorPipeline+=_tcv;
                                                    break;
                                                case 'Guatemala':
                                                    guatemalaPipeline+=_tcv;
                                                    break;
                                                case 'Honduras':
                                                    hondurasPipeline+=_tcv;
                                                    break;
                                                //case 'Latam Region':
                                                case 'Wholesale':
                                                    latamRegionPipeline+=_tcv;
                                                    break;
                                                case 'Panama':
                                                    panamaPipeline+=_tcv;
                                                    break;
                                            }
                                            

                                        } else if (opportunitiesList[i]['REPORT - Business Results[Status]'] == "Won"){
                                                
                                            switch (country) {
                                                case 'Colombia':
                                                    colombiaWon+=_tcv;
                                                    break;
                                                case 'Dominican Republic':
                                                    dominicanRWon+=_tcv;
                                                    break;
                                                case 'Ecuador':
                                                    ecuadorWon+=_tcv;
                                                    break;
                                                case 'El Salvador':
                                                    elSalvadorWon+=_tcv;
                                                    break;
                                                case 'Guatemala':
                                                    guatemalaWon+=_tcv;
                                                    break;
                                                case 'Honduras':
                                                    hondurasWon+=_tcv;
                                                    break;
                                                //case 'Latam Region':
                                                case 'Wholesale':
                                                    latamRegionWon+=_tcv;
                                                    break;
                                                case 'Panama':
                                                    panamaWon+=_tcv;
                                                    break;
                                                default:
                                                    break;
                                            }
                                        }
                                    }
                                    
                                targetCount++;
                                
                                    if(opportunitiesList[i]['REPORT - Business Results[Status]'] == "Pipeline"){       
                                        
                                        if(opportunitiesList[i]['REPORT - Business Results[Type]'] == "New Customer"){
                                            newCustomerCount++;
                                        }
                                        if(opportunitiesList[i]['REPORT - Business Results[Type]'] != "New Customer"){
                                            crossSellCount++;
                                        }
                                    }//console.log("type "+opportunitiesList[i]['REPORT - Business Results[Type]']);
                                    if(opportunitiesList[i]['REPORT - Business Results[Status]'] == "Won"){
                                        
                                        if(opportunitiesList[i]['REPORT - Business Results[Type]'] == "New Customer"){
                                            newCustomerCount++;
                                        }
                                        if(opportunitiesList[i]['REPORT - Business Results[Type]'] != "New Customer"){
                                            crossSellCount++;
                                        }
                                    }

                                    
                                 if(parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]'])>=0 && parseFloat(opportunitiesList[i]['REPORT - Business Results[MRR]'])>=0){
                                    //console.log(opportunitiesList[i]['REPORT - Business Results[Campaign]']);
                                    //console.log(opportunitiesList[i]['REPORT - Business Results[Status]']);
                                    
                                    $(".opportunitiesTbody[status='" + opportunitiesList[i]['REPORT - Business Results[Status]'] + "']").append('<tr campaign="' + opportunitiesList[i]['REPORT - Business Results[Campaign]'] + '" status="' + opportunitiesList[i]['REPORT - Business Results[Status]'] + '" country="'+opportunitiesList[i]['REPORT - Business Results[Country_B]']+'" role="row" class="odd opportunityRows"><td class="sorting_1">' + opportunitiesList[i]['REPORT - Business Results[Account]'] + '</td>\
                                    <td>' + opportunitiesList[i]['REPORT - Business Results[Name]'] + '</td><td>' + opportunitiesList[i]['REPORT - Business Results[Campaign]'] + '</td>\
                                    <td>' + opportunitiesList[i]['REPORT - Business Results[Country_B]'] + '</td>\
                                    <td>' + USDollar.format(Math.round(opportunitiesList[i]['REPORT - Business Results[MRR]'])) + '</td>\
                                    <td>' + USDollar.format(Math.round(opportunitiesList[i]['REPORT - Business Results[TCV]'])) + '</td><td>' + opportunitiesList[i]['REPORT - Business Results[Status]'] + ' </td></tr>');
                                    
                                    if($.inArray(opportunitiesList[i]['REPORT - Business Results[Campaign]'], campaignList)==-1){
                                        campaignList.push(opportunitiesList[i]['REPORT - Business Results[Campaign]']);
                                        $("#campaignSelect").append('<option>' + opportunitiesList[i]['REPORT - Business Results[Campaign]'] + '</option>');
                                    }
                                    if($.inArray(opportunitiesList[i]['REPORT - Business Results[Country_B]'], countryList)==-1){
                                        countryList.push(opportunitiesList[i]['REPORT - Business Results[Country_B]']);
                                        $("#countrySelect").append('<option>' + opportunitiesList[i]['REPORT - Business Results[Country_B]'] + '</option>');
                                    }
                                    
                                    if(opportunitiesList[i]['REPORT - Business Results[Status]'] == "Pipeline"){       
                                        pipeline += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                                        mrrPipeline += parseFloat(opportunitiesList[i]['REPORT - Business Results[MRR]']);
                                        
                                        if(opportunitiesList[i]['REPORT - Business Results[Type]'] == "New Customer"){
                                            newCustomerPipeline += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                                            //newCustomerCount++;
                                        }
                                        if(opportunitiesList[i]['REPORT - Business Results[Type]'] == "Upsale/Crossale"){
                                            crossSellPipeline += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                                            //crossSellCount++;
                                        }
                                    }//console.log("type "+opportunitiesList[i]['REPORT - Business Results[Type]']);
                                    if(opportunitiesList[i]['REPORT - Business Results[Status]'] == "Won"){
                                        won += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                                        mrrWon += parseFloat(opportunitiesList[i]['REPORT - Business Results[MRR]']);
                                        
                                        if(opportunitiesList[i]['REPORT - Business Results[Type]'] == "New Customer"){
                                            newCustomerWon += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                                            //newCustomerCount++;
                                        }
                                        if(opportunitiesList[i]['REPORT - Business Results[Type]'] != "New Customer"){
                                            crossSellWon += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                                            //crossSellCount++;
                                        }
                                    }
                                }//else{console.log(opportunitiesList[i]['REPORT - Business Results[TCV]']);}

                                }
                                /*
                                console.log("colombiaPipeline "+colombiaPipeline.toString());
                                console.log("dominicanRPipeline "+dominicanRPipeline.toString());
                                console.log("ecuadorPipeline "+ecuadorPipeline.toString());
                                console.log("elSalvadorPipeline "+elSalvadorPipeline.toString());
                                console.log("guatemalaPipeline "+guatemalaPipeline.toString());
                                console.log("hondurasPipeline "+hondurasPipeline.toString());
                                console.log("latamRegionPipeline "+latamRegionPipeline.toString());
                                console.log("panamaPipeline "+panamaPipeline.toString());
                                console.log("colombiaWon "+colombiaWon.toString());
                                console.log("dominicanRWon "+dominicanRWon.toString());
                                console.log("ecuadorWon "+ecuadorWon.toString());
                                console.log("elSalvadorWon "+elSalvadorWon.toString());
                                console.log("guatemalaWon "+guatemalaWon.toString());
                                console.log("hondurasWon "+hondurasWon.toString());
                                console.log("latamRegionWon "+latamRegionWon.toString());
                                console.log("panamaWon "+panamaWon.toString());
                                */
                                //targetCount = opportunitiesList.length;
                                $(".tcvPipeline").html(USDollar.format(Math.round(pipeline)));
                                var pipelinePCT = ~~Math.round((pipeline/(pipeline+won)) * 100) + "%";
                                var wonPCT = ~~Math.round((won/(pipeline+won)) * 100)+ "%";
                                $(".targetMQLsPipeline").css("width",pipelinePCT);
                                $(".targetMQLsWon").css("width",wonPCT);
                                
                                $(".tcvWon").html(USDollar.format(Math.round(won)));
                                $("#newCustomerPipeline").html(USDollar.format(Math.round(newCustomerPipeline)));
                                $("#newCustomerWon").html(USDollar.format(Math.round(newCustomerWon)));
                                var newCustomerpipelinePCT = ~~Math.round((newCustomerPipeline/(newCustomerPipeline+newCustomerWon)) * 100) + "%";
                                var newCustomerwonPCT = ~~Math.round((newCustomerWon/(newCustomerPipeline+newCustomerWon)) * 100)+ "%";
                                $(".newCustomerBarPipeline").css("width",newCustomerpipelinePCT);
                                $(".newCustomerBarWon").css("width",newCustomerwonPCT);

                                $("#crossSellCount").html(crossSellCount);//console.log("csc "+ crossSellCount);
                                $(".byStrategy").html(USDollar.format(Math.round(newCustomerWon + crossSellWon)))
                                $("#crossSellPipeline").html(USDollar.format(Math.round(crossSellPipeline)));
                                $("#crossSellWon").html(USDollar.format(Math.round(crossSellWon)));
                                var crossSellpipelinePCT = ~~Math.round((crossSellPipeline/(crossSellPipeline+crossSellWon)) * 100) + "%";
                                var crossSellwonPCT = ~~Math.round((crossSellWon/(crossSellPipeline+crossSellWon)) * 100)+ "%";
                                $(".crossSellBarPipeline").css("width",crossSellpipelinePCT);
                                $(".crossSellBarWon").css("width",crossSellwonPCT);
                                
                                //RIGHT-SIDE CARDS
                                $(".mrrPipeline").html(USDollar.format(Math.round(mrrPipeline)));
                                $(".mrrWon").html(USDollar.format(Math.round(mrrWon)));
                                $(".targetPipeline").html(USDollar.format(Math.round(pipeline)));
                                $(".targetWon").html(USDollar.format(Math.round(won)));
                                
                                //$(".form-check-input").eq(1).trigger("click");
                                

                            //Calculate
                            //targetCount * 100 / target1

                            //console.log('opportunitiesList.length', opportunitiesList.length);
                            //console.log('target1', target1);

                            //newCustomerCount * 100 / target2

                            //crossSellCount * 100 / target3 
                            //Chart UPDATE 
                            var ctx1 = document.getElementById("doughnut-chart-1");
                            var ctx2 = document.getElementById("doughnut-chart-2");
                            var ctx3 = document.getElementById("doughnut-chart-3");

                            var chartStatus_1 = Chart.getChart("doughnut-chart-1");
                            if (chartStatus_1 != undefined) {
                                chartStatus_1.destroy();
                            }

                            var chartStatus_2 = Chart.getChart("doughnut-chart-2");
                            if (chartStatus_2 != undefined) {
                                chartStatus_2.destroy();
                            }

                            var chartStatus_3 = Chart.getChart("doughnut-chart-3");
                            if (chartStatus_3 != undefined) {
                                chartStatus_3.destroy();
                            }

                            var _options = {
                                cutout: "75%",
                                hover: {
                                    mode: "nearest",
                                    intersect: false
                                },
                                plugins: {
                                    legend: {
                                        display: false
                                    },
                                    tooltip: {
                                        postfix: "%",
                                        intersect: false,
                                        hasIndicator: true,
                                        mode: 'index'
                                    }
                                }
                            };

                            
                            
                            
                            
                            chartdata1 = buildChartData(colombiaPipeline,dominicanRPipeline,ecuadorPipeline ,elSalvadorPipeline,guatemalaPipeline,hondurasPipeline,latamRegionPipeline,panamaPipeline);
                            var newChart_1 = new Chart(ctx1, {
                                type: 'doughnut',
                                data: {
                                    //labels: ["", ""],
                                    labels: chartdata1.labels,
                                    datasets: [{
                                        "backgroundColor": chartdata1.colors,
                                        "data": chartdata1.values,
                                        //"data": [100 - (targetCount * 100 / target1), (targetCount * 100 / target1)],
                                        //"backgroundColor": ["#DDDDDD", "#FF6000"],
                                        "borderWidth": 0,
                                        "hoverBorderColor": "#fff"
                                    }]
                                },
                                options: _options
                            });
                            chartdata2 = buildChartData(colombiaWon,dominicanRWon,ecuadorWon ,elSalvadorWon,guatemalaWon,hondurasWon,latamRegionWon,panamaWon);
                            var newChart_2 = new Chart(ctx2, {
                                type: 'doughnut',
                                data: {
                                    //labels: ["", ""],
                                    labels: chartdata2.labels,
                                    datasets: [{
                                        "backgroundColor": chartdata2.colors,
                                        "data": chartdata2.values,
                                        "borderWidth": 0,
                                        "hoverBorderColor": "#fff"
                                    }]
                                },
                                options: _options
                            });

                            var newChart_3 = new Chart(ctx3, {
                                type: 'doughnut',
                                data: {
                                    labels: ["New Customer","Cross Sell / Upsale"],
                                    datasets: [{
                                        "data": [Math.round(newCustomerWon),Math.round(crossSellWon)],
                                        "backgroundColor": ["#FF6000", "#7030FF"],
                                        "borderWidth": 0,
                                        "hoverBorderColor": "#fff"
                                    }]
                                },
                                options: _options
                            });

                            newChart_1.update();
                            newChart_2.update();
                            newChart_3.update();
                            
                            
                            //*********************************************************************
                            //$("tr").hide();
                            //$('.opportunitiesTbody[status="Pipeline"]').after('<div id="nav1"></div>');
                            $countryValue = "Guatemala";
                            $("#datatablePagination").parent().after('<div id="nav1"></div>');

                            var rowsShown1 = 10;//console.log("otrl "+$('.opportunitiesTbody[status="Pipeline"] tr').length);
                            var rowsTotal1 = $('.opportunitiesTbody[status="Pipeline"] tr').length;
                            //var rowsTotal1 = $('.opportunitiesTbody[status="Pipeline"] tr[country="Guatemala"]').length;
                            console.log("rowsTotal1:"+rowsTotal1);
                            var numPages1 = rowsTotal1/rowsShown1;
                            for(i = 0;i < numPages1;i++) {
                                var pageNum1 = i + 1;
                                $('#nav1').append('<a onclick="event.preventDefault();" href="#" rel="'+i+'"><span>'+pageNum1+'</span></a> ');
                            }
                            //----------------------------
                            $('.opportunitiesTbody[status="Pipeline"] tr').attr("visible","hidden").hide();
                            $('.opportunitiesTbody[status="Pipeline"] tr').slice(0, rowsShown1).attr("visible","visible").show();
                            //----------------------------
                            //----------------------------
                            //$('.opportunitiesTbody[status="Pipeline"] tr[country="Guatemala"]').attr("visible","hidden").hide();
                            //$('.opportunitiesTbody[status="Pipeline"] tr[country="Guatemala"]').slice(0, rowsShown1).attr("visible","visible").show();
                            //----------------------------
                            $('#nav1 a:first').addClass('active');
                            $('#nav1 a').bind('click', function(){

                                $('#nav1 a').removeClass('active');
                                $(this).addClass('active');
                                var currPage1 = $(this).attr('rel');
                                var startItem1 = currPage1 * rowsShown1;
                                var endItem1 = startItem1 + rowsShown1;
                                //console.log("start "+ startItem1 + " end "+ endItem1);
                                $('.opportunitiesTbody[status="Pipeline"] tr').css('opacity','0.0').attr("visible","hidden").hide().slice(startItem1, endItem1).
                                css('display','table-row').attr("visible","visible").animate({opacity:1}, 300);
                                //----------------------------
                                //----------------------------
                                //$('.opportunitiesTbody[status="Pipeline"] tr[country="Guatemala"]').css('opacity','0.0').attr("visible","hidden").hide().slice(startItem1, endItem1).
                                //css('display','table-row').attr("visible","visible").animate({opacity:1}, 300);
                            });
                            
                            //$('.opportunitiesTbody[status="Won"]').after('<div id="nav2"></div>');
                            $("#datatablePagination2").parent().after('<div id="nav2"></div>');
                            var rowsShown2 = 10;//console.log("otrl "+$('.opportunitiesTbody[status="Won"] tr').length);
                            var rowsTotal2 = $('.opportunitiesTbody[status="Won"] tr').length;
                            var numPages2 = rowsTotal2/rowsShown2;
                            for(j = 0;j < numPages2;j++) {
                                var pageNum2 = j + 1;
                                $('#nav2').append('<a onclick="event.preventDefault();" href="#" rel="'+j+'"><span>'+pageNum2+'</span></a> ');
                            }
                            $('.opportunitiesTbody[status="Won"] tr').attr("visible","hidden").hide();
                            $('.opportunitiesTbody[status="Won"] tr').slice(0, rowsShown2).attr("visible","visible").show();
                            $('#nav2 a:first').addClass('active');
                            $('#nav2 a').bind('click', function(){

                                $('#nav2 a').removeClass('active');
                                $(this).addClass('active');
                                var currPage2 = $(this).attr('rel');
                                var startItem2 = currPage2 * rowsShown2;
                                var endItem2 = startItem2 + rowsShown2;
                                $('.opportunitiesTbody[status="Won"] tr').css('opacity','0.0').attr("visible","hidden").hide().slice(startItem2, endItem2).
                                css('display','table-row').attr("visible","visible").animate({opacity:1}, 300);
                            });	
                        

                            //*******************************************
                        }
                }
            });
        
       
	
};         




$( "#content" ).on( "change", "#campaignSelect", function() {//console.log("aaa"+$(this).val());
    
     $("#countrySelect").val("Country");
    
    //$(".opportunityRows").hide();
    $(".opportunityRows[status='Pipeline']").not($(".opportunityRows[status='Pipeline'][campaign='" + $(this).val() + "']")).attr("visible","hidden").hide();
	//console.log($(this).val());
	$(".opportunityRows[status='Pipeline'][campaign='" + $(this).val() + "']").attr("visible","visible").animate({opacity:1}, 300).show();
	
	if($(this).val()=="Campaign"){$(".opportunityRows[status='Pipeline']").attr("visible","visible").animate({opacity:1}, 300).show();}
	
	$("#nav1").remove();
	//$("tr").hide();
    //$('.opportunitiesTbody[status="Pipeline"]').after('<div id="nav1"></div>');
	$("#datatablePagination").parent().after('<div id="nav1"></div>');
    var rowsShown1 = 10;
	//console.log("rowL "+$('.opportunitiesTbody[status="Pipeline"] tr[visible="visible"]').length);
    var rowsTotal1 = $('.opportunitiesTbody[status="Pipeline"] tr[visible="visible"]').length;
    var numPages1 = rowsTotal1/rowsShown1;
    for(i = 0;i < numPages1;i++) {
        var pageNum1 = i + 1;
        $('#nav1').append('<a onclick="event.preventDefault();" href="#" rel="'+i+'"><span>'+pageNum1+'</span></a> ');
    }
    $('.opportunitiesTbody[status="Pipeline"] tr').hide();
    //$('#datatable tbody tr').slice(0, rowsShown1).show();
	$('.opportunitiesTbody[status="Pipeline"] tr[visible="visible"]').slice(0, rowsShown1).show();
    $('#nav1 a:first').addClass('active');
    $('#nav1 a').bind('click', function(){

        $('#nav1 a').removeClass('active');
        $(this).addClass('active');
        var currPage1 = $(this).attr('rel');
        var startItem1 = currPage1 * rowsShown1;
        var endItem1 = startItem1 + rowsShown1;
        //console.log("start "+ startItem1 + " end "+ endItem1);
        $('.opportunitiesTbody[status="Pipeline"] tr[visible="visible"]').css('opacity','0.0').hide().slice(startItem1, endItem1).
        css('display','table-row').animate({opacity:1}, 300).show();
    });
    
    $(".opportunityRows[status='Won']").not($(".opportunityRows[status='Won'][campaign='" + $(this).val() + "']")).attr("visible","hidden").hide();
	//console.log($(this).val());
	$(".opportunityRows[status='Won'][campaign='" + $(this).val() + "']").attr("visible","visible").animate({opacity:1}, 300).show();
	
	if($(this).val()=="Campaign"){$(".opportunityRows[status='Won']").attr("visible","visible").animate({opacity:1}, 300).show();}
	
	$("#nav2").remove();
	//$("tr").hide();
    //$('.opportunitiesTbody[status="Won"]').after('<div id="nav2"></div>');
	$("#datatablePagination2").parent().after('<div id="nav2"></div>');
    var rowsShown2 = 10;
	//console.log("rowL "+$('.opportunitiesTbody[status="Won"] tr[visible="visible"]').length);
    var rowsTotal2 = $('.opportunitiesTbody[status="Won"] tr[visible="visible"]').length;
    var numPages2 = rowsTotal2/rowsShown2;
    for(j = 0;j < numPages2;j++) {
        var pageNum2 = j + 1;
        $('#nav2').append('<a onclick="event.preventDefault();" href="#" rel="'+j+'"><span>'+pageNum2+'</span></a> ');
    }
    $('.opportunitiesTbody[status="Won"] tr').hide();
    //$('#datatable tbody tr').slice(0, rowsShown2).show();
	$('.opportunitiesTbody[status="Won"] tr[visible="visible"]').slice(0, rowsShown2).show();
    $('#nav2 a:first').addClass('active');
    $('#nav2 a').bind('click', function(){

        $('#nav2 a').removeClass('active');
        $(this).addClass('active');
        var currPage2 = $(this).attr('rel');
        var startItem2 = currPage2 * rowsShown2;
        var endItem2 = startItem2 + rowsShown2;
        $('.opportunitiesTbody[status="Won"] tr[visible="visible"]').css('opacity','0.0').hide().slice(startItem2, endItem2).
        css('display','table-row').animate({opacity:1}, 300).show();
    });
	
    pipeline = 0;won = 0;newCustomerPipeline = 0;newCustomerWon = 0;newCustomerCount = 0;crossSellCount = 0;crossSellPipeline = 0;crossSellWon = 0;
    mrrPipeline = 0;mrrWon = 0;target1 = 0;target2 = 0;target3 = 0;targetCount = 0;
    
    let colombiaPipeline=0;
    let dominicanRPipeline=0;
    let ecuadorPipeline = 0;
    let elSalvadorPipeline=0;
    let guatemalaPipeline=0;
    let hondurasPipeline=0;
    let latamRegionPipeline=0;
    let panamaPipeline=0;
    let colombiaWon=0;
    let dominicanRWon=0;
    let ecuadorWon = 0;
    let elSalvadorWon=0;
    let guatemalaWon=0;
    let hondurasWon=0;
    let latamRegionWon=0;
    let panamaWon=0;
    for (var i = 0, len = opportunitiesList.length; i < len; i++) {

        if((opportunitiesList[i]['REPORT - Business Results[Campaign]'] == $(this).val() || $(this).val() == "Campaign")){
            let country = opportunitiesList[i]['REPORT - Business Results[Country_B]'];
            let _tcv = opportunitiesList[i]['REPORT - Business Results[TCV]'];
            if(_tcv>=0){
                //console.log(country);
                if(opportunitiesList[i]['REPORT - Business Results[Status]'] == "Pipeline"){
                        
                    switch (country) {
                        case 'Colombia':
                            colombiaPipeline+=_tcv;
                            break;
                        case 'Dominican Republic':
                            dominicanRPipeline+=_tcv;
                            break;
                        case 'Ecuador':
                            ecuadorPipeline+=_tcv;
                            break;
                        case 'El Salvador':
                            elSalvadorPipeline+=_tcv;
                            break;
                        case 'Guatemala':
                            guatemalaPipeline+=_tcv;
                            break;
                        case 'Honduras':
                            hondurasPipeline+=_tcv;
                            break;
                        //case 'Latam Region':
                        case 'Wholesale':
                            latamRegionPipeline+=_tcv;
                            break;
                        case 'Panama':
                            panamaPipeline+=_tcv;
                            break;
                    }
                    

                } else if (opportunitiesList[i]['REPORT - Business Results[Status]'] == "Won"){
                        
                    switch (country) {
                        case 'Colombia':
                            colombiaWon+=_tcv;
                            break;
                        case 'Dominican Republic':
                            dominicanRWon+=_tcv;
                            break;
                        case 'Ecuador':
                            ecuadorWon+=_tcv;
                            break;
                        case 'El Salvador':
                            elSalvadorWon+=_tcv;
                            break;
                        case 'Guatemala':
                            guatemalaWon+=_tcv;
                            break;
                        case 'Honduras':
                            hondurasWon+=_tcv;
                            break;
                        //case 'Latam Region':
                        case 'Wholesale':
                            latamRegionWon+=_tcv;
                            break;
                        case 'Panama':
                            panamaWon+=_tcv;
                            break;
                        default:
                            break;
                    }
                }
            }
            targetCount++;
            
                if(opportunitiesList[i]['REPORT - Business Results[Status]'] == "Pipeline"){   
                    if(parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']) >=0 ){
                        pipeline += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                        mrrPipeline += parseFloat(opportunitiesList[i]['REPORT - Business Results[MRR]']);
                    }
                    
                    if(opportunitiesList[i]['REPORT - Business Results[Type]'] == "New Customer"){
                        if(parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']) >=0 ){
                            newCustomerPipeline += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                        }
                        newCustomerCount++;
                    }
                    if(opportunitiesList[i]['REPORT - Business Results[Type]'] != "New Customer"){
                        if(parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']) >=0 ){
                            crossSellPipeline += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                        }
                        crossSellCount++;
                    }
                }
                if(opportunitiesList[i]['REPORT - Business Results[Status]'] == "Won"){
                    if(parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']) >=0 ){
                        won += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                        mrrWon += parseFloat(opportunitiesList[i]['REPORT - Business Results[MRR]']);
                    }
                    
                    if(opportunitiesList[i]['REPORT - Business Results[Type]'] == "New Customer"){
                        if(parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']) >=0 ){
                            newCustomerWon += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                        }
                        newCustomerCount++;
                    }
                    if(opportunitiesList[i]['REPORT - Business Results[Type]'] != "New Customer"){
                        if(parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']) >=0 ){
                            crossSellWon += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                        }
                        crossSellCount++;
                    }
                }
            
        }
    }

    $(".tcvPipeline").html(USDollar.format(Math.round(pipeline)));
    var pipelinePCT = ~~Math.round((pipeline/(pipeline+won)) * 100) + "%";
    var wonPCT = ~~Math.round((won/(pipeline+won)) * 100)+ "%";
    $(".targetMQLsPipeline").css("width",pipelinePCT);
    $(".targetMQLsWon").css("width",wonPCT);
    
    $(".tcvWon").html(USDollar.format(Math.round(won)));
    $("#newCustomerPipeline").html(USDollar.format(Math.round(newCustomerPipeline)));
    $("#newCustomerWon").html(USDollar.format(Math.round(newCustomerWon)));
    var newCustomerpipelinePCT = ~~Math.round((newCustomerPipeline/(newCustomerPipeline+newCustomerWon)) * 100) + "%";
    var newCustomerwonPCT = ~~Math.round((newCustomerWon/(newCustomerPipeline+newCustomerWon)) * 100)+ "%";
    $(".newCustomerBarPipeline").css("width",newCustomerpipelinePCT);
    $(".newCustomerBarWon").css("width",newCustomerwonPCT);

    $("#crossSellCount").html(crossSellCount);//console.log("csc "+ crossSellCount);
    $(".byStrategy").html(USDollar.format(Math.round(newCustomerWon + crossSellWon)))
    $("#crossSellPipeline").html(USDollar.format(Math.round(crossSellPipeline)));
    $("#crossSellWon").html(USDollar.format(Math.round(crossSellWon)));
    var crossSellpipelinePCT = ~~Math.round((crossSellPipeline/(crossSellPipeline+crossSellWon)) * 100) + "%";
    var crossSellwonPCT = ~~Math.round((crossSellWon/(crossSellPipeline+crossSellWon)) * 100)+ "%";
    $(".crossSellBarPipeline").css("width",crossSellpipelinePCT);
    $(".crossSellBarWon").css("width",crossSellwonPCT);
    
    //RIGHT-SIDE CARDS
    $(".mrrPipeline").html(USDollar.format(Math.round(mrrPipeline)));
    $(".mrrWon").html(USDollar.format(Math.round(mrrWon)));
    $(".targetPipeline").html(USDollar.format(Math.round(pipeline)));
    $(".targetWon").html(USDollar.format(Math.round(won)));
    
    //$(".form-check-input").eq(1).trigger("click");
    
    for (var i = 0, len = targetList.length; i < len; i++) {
        target1 += parseFloat(targetList[i]['Target1']);
        target2 += parseFloat(targetList[i]['Target2']);
        target3 += parseFloat(targetList[i]['Target3']);
    }

    //DONUT CHARTS, FRACTION DENOMINATORS
    //$("#target1").html(target1);
    //$("#target2").html(target2);
    //$("#target3").html(target3);

    //console.log('targetCount',targetCount,'target1',target1);
    //console.log('newCustomerCount',newCustomerCount,'target2',target2);
    //console.log('crossSellCount',crossSellCount,'target3',target3);

    //Chart UPDATE 
    var ctx1 = document.getElementById("doughnut-chart-1");
    var ctx2 = document.getElementById("doughnut-chart-2");
    var ctx3 = document.getElementById("doughnut-chart-3");

    var chartStatus_1 = Chart.getChart("doughnut-chart-1");
    if (chartStatus_1 != undefined) {
        chartStatus_1.destroy();
    }

    var chartStatus_2 = Chart.getChart("doughnut-chart-2");
    if (chartStatus_2 != undefined) {
        chartStatus_2.destroy();
    }

    var chartStatus_3 = Chart.getChart("doughnut-chart-3");
    if (chartStatus_3 != undefined) {
        chartStatus_3.destroy();
    }

    var _options = {
        cutout: "75%",
        hover: {
            mode: "nearest",
            intersect: false
        },
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                postfix: "%",
                intersect: false,
                hasIndicator: true,
                mode: 'index'
            },
            emptyDoughnut: {
                color: 'rgba(255, 128, 0, 0.5)',
                width: 8,
                radiusDecrease: 20
            }
            //,plugins: [plugin]
        }
    };

	//console.log("aaa "+targetCount * 100 / target1);
    chartdata1 = buildChartData(colombiaPipeline,dominicanRPipeline,ecuadorPipeline ,elSalvadorPipeline,guatemalaPipeline,hondurasPipeline,latamRegionPipeline,panamaPipeline);
    var newChart_1 = new Chart(ctx1, {
        type: 'doughnut',
        data: {
            labels: chartdata1.labels,
            datasets: [{
                "backgroundColor": chartdata1.colors,
                "data": chartdata1.values,
                "borderWidth": 0,
                "hoverBorderColor": "#fff"
            }]
        },
        options: _options
        ,plugins: [plugin]
    });
    
    chartdata2 = buildChartData(colombiaWon,dominicanRWon,ecuadorWon ,elSalvadorWon,guatemalaWon,hondurasWon,latamRegionWon,panamaWon);
    var newChart_2 = new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: chartdata2.labels,
            datasets: [{
                "backgroundColor": chartdata2.colors,
                "data": chartdata2.values,
                "borderWidth": 0,
                "hoverBorderColor": "#fff"
            }]
        },
        options: _options
        ,plugins: [plugin]
    });

    var newChart_3 = new Chart(ctx3, {
        type: 'doughnut',
        data: {
            labels: ["New Customer","Cross Sell / Upsale"],
            datasets: [{
                "data": [Math.round(newCustomerWon),Math.round(crossSellWon)],
                "backgroundColor": ["#FF6000", "#7030FF"],
                "borderWidth": 0,
                "hoverBorderColor": "#fff"
            }]
        },
        options: _options
        ,plugins: [plugin]
    });

    newChart_1.update();
    newChart_2.update();
    newChart_3.update();
                
});



$( "#content" ).on( "change", "#countrySelect", function() {//console.log("aaa"+$(this).val());
      
     $("#campaignSelect").val("Campaign");
    
    //$(".opportunityRows").hide();
    $(".opportunityRows[status='Pipeline']").not($(".opportunityRows[status='Pipeline'][country='" + $(this).val() + "']")).attr("visible","hidden").hide();
	//console.log($(this).val());
	$(".opportunityRows[status='Pipeline'][country='" + $(this).val() + "']").attr("visible","visible").animate({opacity:1}, 300).show();
	
	if($(this).val()=="Country"){$(".opportunityRows[status='Pipeline']").attr("visible","visible").animate({opacity:1}, 300).show();}
	
	$("#nav1").remove();
	//$("tr").hide();
    //$('.opportunitiesTbody[status="Pipeline"]').after('<div id="nav1"></div>');
	$("#datatablePagination").parent().after('<div id="nav1"></div>');
    var rowsShown1 = 10;
	//console.log("rowL "+$('.opportunitiesTbody[status="Pipeline"] tr[visible="visible"]').length);
    var rowsTotal1 = $('.opportunitiesTbody[status="Pipeline"] tr[visible="visible"]').length;
    var numPages1 = rowsTotal1/rowsShown1;
    for(i = 0;i < numPages1;i++) {
        var pageNum1 = i + 1;
        $('#nav1').append('<a onclick="event.preventDefault();" href="#" rel="'+i+'"><span>'+pageNum1+'</span></a> ');
    }
    $('.opportunitiesTbody[status="Pipeline"] tr').hide();
    //$('#datatable tbody tr').slice(0, rowsShown1).show();
	$('.opportunitiesTbody[status="Pipeline"] tr[visible="visible"]').slice(0, rowsShown1).show();
    $('#nav1 a:first').addClass('active');
    $('#nav1 a').bind('click', function(){

        $('#nav1 a').removeClass('active');
        $(this).addClass('active');
        var currPage1 = $(this).attr('rel');
        var startItem1 = currPage1 * rowsShown1;
        var endItem1 = startItem1 + rowsShown1;
        //console.log("start "+ startItem1 + " end "+ endItem1);
        $('.opportunitiesTbody[status="Pipeline"] tr[visible="visible"]').css('opacity','0.0').hide().slice(startItem1, endItem1).
        css('display','table-row').animate({opacity:1}, 300).show();
    });
    
    $(".opportunityRows[status='Won']").not($(".opportunityRows[status='Won'][country='" + $(this).val() + "']")).attr("visible","hidden").hide();
	//console.log($(this).val());
	$(".opportunityRows[status='Won'][country='" + $(this).val() + "']").attr("visible","visible").animate({opacity:1}, 300).show();
	
	if($(this).val()=="Country"){$(".opportunityRows[status='Won']").attr("visible","visible").animate({opacity:1}, 300).show();}
	
	$("#nav2").remove();
	//$("tr").hide();
    //$('.opportunitiesTbody[status="Won"]').after('<div id="nav2"></div>');
	$("#datatablePagination2").parent().after('<div id="nav2"></div>');
    var rowsShown2 = 10;
	//console.log("rowL "+$('.opportunitiesTbody[status="Won"] tr[visible="visible"]').length);
    var rowsTotal2 = $('.opportunitiesTbody[status="Won"] tr[visible="visible"]').length;
    var numPages2 = rowsTotal2/rowsShown2;
    for(j = 0;j < numPages2;j++) {
        var pageNum2 = j + 1;
        $('#nav2').append('<a onclick="event.preventDefault();" href="#" rel="'+j+'"><span>'+pageNum2+'</span></a> ');
    }
    $('.opportunitiesTbody[status="Won"] tr').hide();
    //$('#datatable tbody tr').slice(0, rowsShown2).show();
	$('.opportunitiesTbody[status="Won"] tr[visible="visible"]').slice(0, rowsShown2).show();
    $('#nav2 a:first').addClass('active');
    $('#nav2 a').bind('click', function(){

        $('#nav2 a').removeClass('active');
        $(this).addClass('active');
        var currPage2 = $(this).attr('rel');
        var startItem2 = currPage2 * rowsShown2;
        var endItem2 = startItem2 + rowsShown2;
        $('.opportunitiesTbody[status="Won"] tr[visible="visible"]').css('opacity','0.0').hide().slice(startItem2, endItem2).
        css('display','table-row').animate({opacity:1}, 300).show();
    });
	
    pipeline = 0;won = 0;newCustomerPipeline = 0;newCustomerWon = 0;newCustomerCount = 0;crossSellCount = 0;crossSellPipeline = 0;crossSellWon = 0;
    mrrPipeline = 0;mrrWon = 0;target1 = 0;target2 = 0;target3 = 0;targetCount = 0;
    let colombiaPipeline=0;
    let dominicanRPipeline=0;
    let ecuadorPipeline = 0;
    let elSalvadorPipeline=0;
    let guatemalaPipeline=0;
    let hondurasPipeline=0;
    let latamRegionPipeline=0;
    let panamaPipeline=0;
    let colombiaWon=0;
    let dominicanRWon=0;
    let ecuadorWon = 0;
    let elSalvadorWon=0;
    let guatemalaWon=0;
    let hondurasWon=0;
    let latamRegionWon=0;
    let panamaWon=0;
    for (var i = 0, len = opportunitiesList.length; i < len; i++) {

        if((opportunitiesList[i]['REPORT - Business Results[Country_B]'] == $(this).val() || $(this).val() == "Country")){
            let country = opportunitiesList[i]['REPORT - Business Results[Country_B]'];
            let _tcv = opportunitiesList[i]['REPORT - Business Results[TCV]'];
            if(_tcv>=0){
                //console.log(country);
                if(opportunitiesList[i]['REPORT - Business Results[Status]'] == "Pipeline"){
                        
                    switch (country) {
                        case 'Colombia':
                            colombiaPipeline+=_tcv;
                            break;
                        case 'Dominican Republic':
                            dominicanRPipeline+=_tcv;
                            break;
                        case 'Ecuador':
                            ecuadorPipeline+=_tcv;
                            break;
                        case 'El Salvador':
                            elSalvadorPipeline+=_tcv;
                            break;
                        case 'Guatemala':
                            guatemalaPipeline+=_tcv;
                            break;
                        case 'Honduras':
                            hondurasPipeline+=_tcv;
                            break;
                        //case 'Latam Region':
                        case 'Wholesale':
                            latamRegionPipeline+=_tcv;
                            break;
                        case 'Panama':
                            panamaPipeline+=_tcv;
                            break;
                    }
                    

                } else if (opportunitiesList[i]['REPORT - Business Results[Status]'] == "Won"){
                        
                    switch (country) {
                        case 'Colombia':
                            colombiaWon+=_tcv;
                            break;
                        case 'Dominican Republic':
                            dominicanRWon+=_tcv;
                            break;
                        case 'Ecuador':
                            ecuadorWon+=_tcv;
                            break;
                        case 'El Salvador':
                            elSalvadorWon+=_tcv;
                            break;
                        case 'Guatemala':
                            guatemalaWon+=_tcv;
                            break;
                        case 'Honduras':
                            hondurasWon+=_tcv;
                            break;
                        //case 'Latam Region':
                        case 'Wholesale':
                            latamRegionWon+=_tcv;
                            break;
                        case 'Panama':
                            panamaWon+=_tcv;
                            break;
                        default:
                            break;
                    }
                }
            }
            targetCount++;
            
                if(opportunitiesList[i]['REPORT - Business Results[Status]'] == "Pipeline"){   
                    if(parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']) >=0 ){
                        pipeline += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                        mrrPipeline += parseFloat(opportunitiesList[i]['REPORT - Business Results[MRR]']);
                    }
                    
                    if(opportunitiesList[i]['REPORT - Business Results[Type]'] == "New Customer"){
                        if(parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']) >=0 ){
                            newCustomerPipeline += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                        }
                        newCustomerCount++;
                    }
                    if(opportunitiesList[i]['REPORT - Business Results[Type]'] != "New Customer"){
                        if(parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']) >=0 ){
                            crossSellPipeline += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                        }
                        crossSellCount++;
                    }
                }
                if(opportunitiesList[i]['REPORT - Business Results[Status]'] == "Won"){
                    if(parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']) >=0 ){
                        won += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                        mrrWon += parseFloat(opportunitiesList[i]['REPORT - Business Results[MRR]']);
                    }
                    
                    if(opportunitiesList[i]['REPORT - Business Results[Type]'] == "New Customer"){
                        if(parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']) >=0 ){
                            newCustomerWon += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                        }
                        newCustomerCount++;
                    }
                    if(opportunitiesList[i]['REPORT - Business Results[Type]'] != "New Customer"){
                        if(parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']) >=0 ){
                            crossSellWon += parseFloat(opportunitiesList[i]['REPORT - Business Results[TCV]']);
                        }
                        crossSellCount++;
                    }
                }
            
        }
    }

    $(".tcvPipeline").html(USDollar.format(Math.round(pipeline)));
    var pipelinePCT = ~~Math.round((pipeline/(pipeline+won)) * 100) + "%";
    var wonPCT = ~~Math.round((won/(pipeline+won)) * 100)+ "%";
    $(".targetMQLsPipeline").css("width",pipelinePCT);
    $(".targetMQLsWon").css("width",wonPCT);
    
    $(".tcvWon").html(USDollar.format(Math.round(won)));
    $("#newCustomerPipeline").html(USDollar.format(Math.round(newCustomerPipeline)));
    $("#newCustomerWon").html(USDollar.format(Math.round(newCustomerWon)));
    var newCustomerpipelinePCT = ~~Math.round((newCustomerPipeline/(newCustomerPipeline+newCustomerWon)) * 100) + "%";
    var newCustomerwonPCT = ~~Math.round((newCustomerWon/(newCustomerPipeline+newCustomerWon)) * 100)+ "%";
    $(".newCustomerBarPipeline").css("width",newCustomerpipelinePCT);
    $(".newCustomerBarWon").css("width",newCustomerwonPCT);

    $("#crossSellCount").html(crossSellCount);//console.log("csc "+ crossSellCount);
    $(".byStrategy").html(USDollar.format(Math.round(newCustomerWon + crossSellWon)))
    $("#crossSellPipeline").html(USDollar.format(Math.round(crossSellPipeline)));
    $("#crossSellWon").html(USDollar.format(Math.round(crossSellWon)));
    var crossSellpipelinePCT = ~~Math.round((crossSellPipeline/(crossSellPipeline+crossSellWon)) * 100) + "%";
    var crossSellwonPCT = ~~Math.round((crossSellWon/(crossSellPipeline+crossSellWon)) * 100)+ "%";
    $(".crossSellBarPipeline").css("width",crossSellpipelinePCT);
    $(".crossSellBarWon").css("width",crossSellwonPCT);
    
    //RIGHT-SIDE CARDS
    $(".mrrPipeline").html(USDollar.format(Math.round(mrrPipeline)));
    $(".mrrWon").html(USDollar.format(Math.round(mrrWon)));
    $(".targetPipeline").html(USDollar.format(Math.round(pipeline)));
    $(".targetWon").html(USDollar.format(Math.round(won)));
    
    for (var i = 0, len = targetList.length; i < len; i++) {
        target1 += parseFloat(targetList[i]['Target1']);
        target2 += parseFloat(targetList[i]['Target2']);
        target3 += parseFloat(targetList[i]['Target3']);
    }

    //DONUT CHARTS, FRACTION DENOMINATORS
    //$("#target1").html(target1);
    //$("#target2").html(target2);
    //$("#target3").html(target3);

    //console.log('targetCount',targetCount,'target1',target1);
    //console.log('newCustomerCount',newCustomerCount,'target2',target2);
    //console.log('crossSellCount',crossSellCount,'target3',target3);

    //Chart UPDATE 
    var ctx1 = document.getElementById("doughnut-chart-1");
    var ctx2 = document.getElementById("doughnut-chart-2");
    var ctx3 = document.getElementById("doughnut-chart-3");

    var chartStatus_1 = Chart.getChart("doughnut-chart-1");
    if (chartStatus_1 != undefined) {
        chartStatus_1.destroy();
    }

    var chartStatus_2 = Chart.getChart("doughnut-chart-2");
    if (chartStatus_2 != undefined) {
        chartStatus_2.destroy();
    }

    var chartStatus_3 = Chart.getChart("doughnut-chart-3");
    if (chartStatus_3 != undefined) {
        chartStatus_3.destroy();
    }

    var _options = {
        cutout: "75%",
        hover: {
            mode: "nearest",
            intersect: false
        },
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                postfix: "%",
                intersect: false,
                hasIndicator: true,
                mode: 'index'
            },
            emptyDoughnut: {
                color: 'rgba(255, 128, 0, 0.5)',
                width: 8,
                radiusDecrease: 20
            }
        }
    };

	//console.log("aaa "+targetCount * 100 / target1);
    chartdata1 = buildChartData(colombiaPipeline,dominicanRPipeline,ecuadorPipeline ,elSalvadorPipeline,guatemalaPipeline,hondurasPipeline,latamRegionPipeline,panamaPipeline);
    var newChart_1 = new Chart(ctx1, {
        type: 'doughnut',
        data: {
            labels: chartdata1.labels,
            datasets: [{
                "backgroundColor": chartdata1.colors,
                "data": chartdata1.values,
                "borderWidth": 0,
                "hoverBorderColor": "#fff"
            }]
        },
        options: _options
        ,plugins: [plugin]
    });

    chartdata2 = buildChartData(colombiaWon,dominicanRWon,ecuadorWon ,elSalvadorWon,guatemalaWon,hondurasWon,latamRegionWon,panamaWon);
    var newChart_2 = new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: chartdata2.labels,
            datasets: [{
                "backgroundColor": chartdata2.colors,
                "data": chartdata2.values,
                "borderWidth": 0,
                "hoverBorderColor": "#fff"
            }]
        },
        options: _options
        ,plugins: [plugin]
    });

    var newChart_3 = new Chart(ctx3, {
        type: 'doughnut',
        data: {
            labels: ["New Customer","Cross Sell / Upsale"],
            datasets: [{
                "data": [Math.round(newCustomerWon),Math.round(crossSellWon)],
                "backgroundColor": ["#FF6000", "#7030FF"],
                "borderWidth": 0,
                "hoverBorderColor": "#fff"
            }]
        },
        options: _options
        ,plugins: [plugin]
    });

    newChart_1.update();
    newChart_2.update();
    newChart_3.update();
});

</script>

</body>
</html>