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
            <h1 class="page-header-title-black mb-0">Social media</h1>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <div class="d-flex justify-content-center loading my-5">
          <div class="spinner-border text-warning" style="width: 3rem; height: 3rem;" role="status">
              <span class="sr-only"></span>
          </div>
      </div>

      <div class="row">
        <div class="col-md-3 mb-3 mb-lg-5">
          <!-- Card -->
          <div class='card border-orange'>
            <div class='card-body'>
              <div class='d-flex align-items-md-center'>
                <div class='flex-shrink-0'>
                  <img src='./assets/img/icos/ico-social-media-in.svg' alt='' srcset=''>
                </div>
                <div class='flex-grow-1 ms-2'>
                  <div class='row mx-md-n3'>
                    <div class='col-md px-md-4'>
                      <span class='card-header-title'>Followers</span>
                      <div class='d-flex align-items-center'>
                        <div class='me-2'>
                          <h1 id="cardTop1_1" class='mb-0 fs-30'>000,000</h1>
                        </div>
                        <div class='d-flex mt-2'>
                          <div class='me-2'>
                            <img src='./assets/img/icos/ico-arrow-down-circle-orange.svg' alt='' class='mt--5'>
                          </div>
                          <div class=''>
                            <p id="cardTop1_2" class='text-orange mb-0'>00%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->
        </div>
        <div class="col-md-3 mb-3 mb-lg-5">
          <!-- Card -->
          <div class='card border-orange'>
            <div class='card-body'>
              <div class='d-flex align-items-md-center'>
                <div class='flex-shrink-0'>
                  <img src='./assets/img/icos/ico-social-media-ig.svg' alt='' srcset=''>
                </div>
                <div class='flex-grow-1 ms-2'>
                  <div class='row mx-md-n3'>
                    <div class='col-md px-md-4'>
                      <span class='card-header-title'>Followers</span>
                      <div class='d-flex align-items-center'>
                        <div class='me-2'>
                          <h1 id="cardTop2_1" class='mb-0 fs-30'>000,000</h1>
                        </div>
                        <div class='d-flex mt-2'>
                          <div class='me-2'>
                            <img src='./assets/img/icos/ico-arrow-down-circle-orange.svg' alt='' class='mt--5'>
                          </div>
                          <div class=''>
                            <p id="cardTop2_2" class='text-orange mb-0'>00%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->
        </div>
        <div class="col-md-3 mb-3 mb-lg-5">
          <!-- Card -->
          <div class='card border-orange'>
            <div class='card-body'>
              <div class='d-flex align-items-md-center'>
                <div class='flex-shrink-0'>
                  <img src='./assets/img/icos/ico-social-media-fb.svg' alt='' srcset=''>
                </div>
                <div class='flex-grow-1 ms-2'>
                  <div class='row mx-md-n3'>
                    <div class='col-md px-md-4'>
                      <span class='card-header-title'>Followers</span>
                      <div class='d-flex align-items-center'>
                        <div class='me-2'>
                          <h1 id="cardTop3_1" class='mb-0 fs-30'>000,000</h1>
                        </div>
                        <div class='d-flex mt-2'>
                          <div class='me-2'>
                            <img src='./assets/img/icos/ico-arrow-down-circle-orange.svg' alt='' class='mt--5'>
                          </div>
                          <div class=''>
                            <p id="cardTop3_2" class='text-orange mb-0'>00%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->
        </div>
        <div class="col-md-3 mb-3 mb-lg-5">
          <!-- Card -->
          <div class='card border-orange'>
            <div class='card-body'>
              <div class='d-flex align-items-md-center'>
                <div class='flex-shrink-0'>
                  <img src='./assets/img/icos/ico-social-media-x.svg' alt='' srcset=''>
                </div>
                <div class='flex-grow-1 ms-2'>
                  <div class='row mx-md-n3'>
                    <div class='col-md px-md-4'>
                      <span class='card-header-title'>Followers</span>
                      <div class='d-flex align-items-center'>
                        <div class='me-2'>
                          <h1 id="cardTop4_1" class='mb-0 fs-30'>000,000</h1>
                        </div>
                        <div class='d-flex mt-2'>
                          <div class='me-2'>
                            <img src='./assets/img/icos/ico-arrow-down-circle-orange.svg' alt='' class='mt--5'>
                          </div>
                          <div class=''>
                            <p id="cardTop4_2" class='text-orange mb-0'>00%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->
        </div>
      </div>

      

      <div class="row">
        <div class="col-md-7">
          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header bg-gray">
              <div class="row justify-content-between align-items-center flex-grow-1">
                <div class="col-md">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-header-title">Linkedin</h4>
                  </div>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Header -->
            <!-- Chartjs -->
            <div class="d-flex align-items-center p-4">
              <span class="h1 mb-0">2024</span>
            </div>
            <!-- Bar Chart -->
            <!-- Likes
            Views
            Followers -->
            <div class="bq-white"></div>
            <div class="chart-container">
              <canvas id="updatingBarChart" style="height: 18rem;"
                      data-hs-chartjs-options='{
                              "type": "bar",
                              "data": {
                                "labels": ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DIC"],
                                "datasets": [{
                                  "data":[0,0,0,0,0,0,0,0,0,0,0,0],
                                  "barThickness": 15,
                                  "backgroundColor": "#FFAF00",
                                  "borderColor": "#FFAF00",
                                  "maxBarThickness": "15",
                                  "order": 2
                                },
                                {
                                  "data":[0,0,0,0,0,0,0,0,0,0,0,0],
                                  "backgroundColor": "#FF6000",
                                  "borderColor": "#FF6000",
                                  "maxBarThickness": "15",
                                  "order": 2
                                },
                                {
                                  "type": "line",
                                  "data":[],
                                  "backgroundColor": "#8C58FF",
                                  "borderColor": "#8C58FF",
                                  "borderWidth": 2,
                                  "pointHoverBackgroundColor": "#8C58FF",
                                  "pointBorderColor": "transparent",
                                  "pointHoverBorderColor": "#8C58FF",
                                  "pointRadius": 0,
                                  "pointHoverRadius": 2,
                                  "tension": 0
                                }]
                              },
                              "options": {
                                "scales": {
                                  "y": {
                                    "grid": {
                                      "color": "#e7eaf3",
                                      "drawBorder": false,
                                      "zeroLineColor": "#e7eaf3"
                                    },
                                    "ticks": {
                                      "beginAtZero": true,
                                      "stepSize": 100,
                                      "fontSize": 12,
                                      "fontColor": "#97a4af",
                                      "fontFamily": "Open Sans, sans-serif",
                                      "padding": 10,
                                      "postfix": ""
                                    }
                                  },
                                  "x": {
                                    "grid": {
                                      "display": false,
                                      "drawBorder": false
                                    },
                                    "ticks": {
                                      "font": {
                                        "size": 12,
                                        "family": "Open Sans, sans-serif"
                                      },
                                      "color": "#97a4af",
                                      "padding": 5
                                    },
                                    "categoryPercentage": 0.5
                                  }
                                },
                                "cornerRadius": 2,
                                "plugins": {
                                  "tooltip": {
                                    "prefix": "",
                                    "hasIndicator": true,
                                    "mode": "index",
                                    "intersect": false
                                  }
                                }
                              }
                            }'>
                </canvas>
            </div>
            <!-- End Bar Chart -->
            <div class="d-flex justify-content-center mb-3">
              <div class="d-flex align-items-center me-3">
                <span class="legend-indicator bg-orange d-flex"></span>
                <p class="mb-0 fs-12">Views</p>
              </div>
              <div class="d-flex align-items-center me-3">
                <span class="legend-indicator bg-yellow d-flex"></span>
                <p class="mb-0 fs-12">Likes</p>
              </div>
              <div class="d-flex align-items-center">
                <span class="legend-indicator bg-purple-light d-flex"></span>
                <p class="mb-0 fs-12">Followers</p>
              </div>
            </div>
            <!-- End Chartjs -->
          </div>
          <!-- End Card -->
        </div>


        <div class="col-md-5">
          <!-- Card -->
          <div class='card mb-3 mb-lg-5'>
            <!-- Header -->
            <div class='card-header card-header-content-between bg-gray'>
              <h4 class='card-header-title'>Linkedin</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class='card-body py-3'>
              <div class='d-md-flex d-sm-inline-block justify-content-around'>
                <div class='text-center mb-md-0 mb-3'>
                  <h5 id="cardSide1_1" class='card-title mb-0 fs-30 mb-0'>000</h5>
                  <p class='mb-0'>Reach</p>
                </div>
                <hr class='border-upright'>
                <div class='text-center mb-md-0 mb-3'>
                  <h5 id="cardSide1_2" class='card-title mb-0 fs-30 mb-0'>000</h5>
                  <p class='mb-0'>Likes</p>
                </div>
                <hr class='border-upright'>
                <div class='text-center mb-md-0 mb-3'>
                  <h5 id="cardSide1_3" class='card-title mb-0 fs-30 mb-0'>000</h5>
                  <p class='mb-0'>Shares</p>
                </div>
                <hr class='border-upright'>
                <div class='text-center mb-md-0 mb-3'>
                  <h5 id="cardSide1_4" class='card-title mb-0 fs-30 mb-0'>00%</h5>
                  <p class='mb-0'>Engagement</p>
                </div>
              </div>
            </div>
            <!-- End Body -->
            </div>
            <!-- End Card -->

          <!-- Card -->
          <div class='card mb-3 mb-lg-5'>
            <!-- Header -->
            <div class='card-header card-header-content-between bg-gray'>
              <h4 class='card-header-title'>Facebook</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class='card-body py-3'>
              <div class='d-md-flex d-sm-inline-block justify-content-around'>
                <div class='text-center mb-md-0 mb-3'>
                  <h5 id="cardSide2_1" class='card-title mb-0 fs-30 mb-0'>000</h5>
                  <p class='mb-0'>Reach</p>
                </div>
                <hr class='border-upright'>
                <div class='text-center mb-md-0 mb-3'>
                  <h5 id="cardSide2_2" class='card-title mb-0 fs-30 mb-0'>000</h5>
                  <p class='mb-0'>Reactions</p>
                </div>
                <hr class='border-upright'>
                <div class='text-center mb-md-0 mb-3'>
                  <h5 id="cardSide2_3" class='card-title mb-0 fs-30 mb-0'>000</h5>
                  <p class='mb-0'>Shares</p>
                </div>
                <hr class='border-upright'>
                <div class='text-center mb-md-0 mb-3'>
                  <h5 id="cardSide2_4" class='card-title mb-0 fs-30 mb-0'>00%</h5>
                  <p class='mb-0'>Engagement</p>
                </div>
              </div>
            </div>
            <!-- End Body -->
            </div>
            <!-- End Card -->

          <!-- Card -->
          <div class='card mb-3 mb-lg-5'>
            <!-- Header -->
            <div class='card-header card-header-content-between bg-gray'>
              <h4 class='card-header-title'>Instagram</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class='card-body py-3'>
              <div class='d-md-flex d-sm-inline-block justify-content-around'>
                <div class='text-center mb-md-0 mb-3'>
                  <h5 id="cardSide3_1" class='card-title mb-0 fs-30 mb-0'>000</h5>
                  <p class='mb-0'>Reach</p>
                </div>
                <hr class='border-upright'>
                <div class='text-center mb-md-0 mb-3'>
                  <h5 id="cardSide3_2" class='card-title mb-0 fs-30 mb-0'>000</h5>
                  <p class='mb-0'>Saved</p>
                </div>
                <hr class='border-upright'>
                <div class='text-center mb-md-0 mb-3'>
                  <h5 id="cardSide3_3" class='card-title mb-0 fs-30 mb-0'>000</h5>
                  <p class='mb-0'>Shares</p>
                </div>
                <hr class='border-upright'>
                <div class='text-center mb-md-0 mb-3'>
                  <h5 id="cardSide3_4" class='card-title mb-0 fs-30 mb-0'>00%</h5>
                  <p class='mb-0'>Engagement</p>
                </div>
              </div>
            </div>
            <!-- End Body -->
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
  var HSCore;
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

  <script>
    (function() {
      // INITIALIZATION OF CHARTJS
      // =======================================================
      document.querySelectorAll('.js-chart').forEach(item => {
        HSCore.components.HSChartJS.init(item)
      })
    })();
  </script>

  <script>
    (function () {
      HSCore.components.HSChartJS.init(document.querySelector('#updatingBarChart'));

      const updatingBarChart = HSCore.components.HSChartJS.getItem('updatingBarChart')

      // Agrega las opciones para hacer el gráfico responsive
      updatingBarChart.options = {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      };

      // Call when tab is clicked
      document.querySelectorAll('[data-toggle="chart-bar"]').forEach(item => {
        item.addEventListener('click', e => {
          let keyDataset = e.currentTarget.getAttribute('data-datasets')

          if (keyDataset === 'lastWeek') {
            updatingBarChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
            updatingBarChart.data.datasets = [
              {
                "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
                "backgroundColor": "#377dff",
                "hoverBackgroundColor": "#377dff",
                "borderColor": "#377dff",
                "maxBarThickness": 10
              },
              {
                "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
                "backgroundColor": "#e7eaf3",
                "borderColor": "#e7eaf3",
                "maxBarThickness": 10
              }
            ];
            updatingBarChart.update();
          } else {
            updatingBarChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
            updatingBarChart.data.datasets = [
              {
                "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                "backgroundColor": "#377dff",
                "hoverBackgroundColor": "#377dff",
                "borderColor": "#377dff",
                "maxBarThickness": 10
              },
              {
                "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                "backgroundColor": "#e7eaf3",
                "borderColor": "#e7eaf3",
                "maxBarThickness": 10
              }
            ]
            updatingBarChart.update();
          }
        })
      })
    })()

  </script>
  <script type="text/javascript">
      $(document).ready(function(){
			getData();
		});
        var getData = function(){
        $("#eventTbody").find("tr").remove();
        $.ajax ({
				contentType: "application/json",
				dataType: "json",
				type: 'POST',
				//url power automate: https://make.powerautomate.com/environments/29ebd59c-c6bc-46b6-a678-4856a9b69eb9/flows/3a62c346-cd2a-43c7-8fcd-a9e24d1d5a26?v3=true
                url:"https://prod-64.westus.logic.azure.com:443/workflows/a67d8c3c2be8418d981b5395e9d983d5/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=TOA0nYEo4_3CAquG5dGoZlMjOOGq1dCcblIGwTsKv64",
				complete: function() {
					
				},
				statusCode: {
					200: function(data) {
                        var rawSocial = data["socialData"]["results"][0]['tables'][0]['rows'];
                        //we add the keys to the array to match the existing code
                        rawSocial.forEach(function (someRow) { 
                            for (const [key, value] of Object.entries(someRow)) {
                                someRow[key.replace("REPORT - Social Media Channel Engagement[","").replace("]","")] = someRow[key];
                            }
                        });
                        var rawChart = data["socialDataBarchart"]["results"][0]['tables'][0]['rows'];
                        rawChart.forEach(function (someRow) { 
                            for (const [key, value] of Object.entries(someRow)) {
                                someRow[key.replace("REPORT - Social Media Channel Engagement Barchart[","").replace("]","")] = someRow[key];
                            }
                        });
                        //console.log(rawChart);
                        //
                        $("#cardTop1_1").html(rawSocial[0]["LINKEDIN FOLLOWERS"].toLocaleString('en-US'));
                        $("#cardTop1_2").html((rawSocial[0]["vsPreviousLinkedin"] * 100).toFixed(2)+'%');
                        $("#cardTop2_1").html(rawSocial[0]["INSTAGRAM FOLLOWERS"].toLocaleString('en-US'));
                        $("#cardTop2_2").html((rawSocial[0]["vsPreviousInstagram"] * 100).toFixed(2)+'%');
                        $("#cardTop3_1").html(rawSocial[0]["FACEBOOK FOLLOWERS"].toLocaleString('en-US'));
                        $("#cardTop3_2").html((rawSocial[0]["vsPreviousFacebook"] * 100).toFixed(2)+'%');
                        $("#cardTop4_1").html(rawSocial[0]["TWITTER/X FOLLOWERS"].toLocaleString('en-US'));
                        $("#cardTop4_2").html((rawSocial[0]["vsPreviousTwitter"] * 100).toFixed(2)+'%');
                        
                        $("#cardSide1_1").html(rawSocial[0]["LINKEDIN REACH"].toLocaleString('en-US'));
                        $("#cardSide1_2").html(rawSocial[0]["LINKEDIN LIKES"].toLocaleString('en-US'));
                        $("#cardSide1_3").html(rawSocial[0]["LINKEDIN SHARES"].toLocaleString('en-US'));
                        $("#cardSide1_4").html((rawSocial[0]["LINKEDIN ENGAGEMENT"] * 100).toFixed(2)+'%');
                        $("#cardSide2_1").html(rawSocial[0]["FACEBOOK REACH"].toLocaleString('en-US'));
                        //$("#cardSide2_2").html(rawSocial[0]["FACEBOOK LIKES"].toLocaleString('en-US'));
                        $("#cardSide2_3").html(rawSocial[0]["FACEBOOK SHARES"].toLocaleString('en-US'));
                        $("#cardSide2_4").html((rawSocial[0]["FACEBOOK ENGAGEMENT"] * 100).toFixed(2)+'%');
                        $("#cardSide3_1").html(rawSocial[0]["INSTAGRAM REACH"].toLocaleString('en-US'));
                        //$("#cardSide3_2").html(rawSocial[0]["INSTAGRAM LIKES"].toLocaleString('en-US'));
                        $("#cardSide3_3").html(rawSocial[0]["INSTAGRAM SHARES"].toLocaleString('en-US'));
                        $("#cardSide3_4").html((rawSocial[0]["INSTAGRAM ENGAGEMENT"] * 100).toFixed(2)+'%');
                        /*
                        $("#cardSide4_1").html(rawSocial[0]["TWITTER/X REACH"].toLocaleString('en-US'));
                        $("#cardSide4_2").html(rawSocial[0]["TWITTER/X LIKES"].toLocaleString('en-US'));
                        $("#cardSide4_3").html(rawSocial[0]["TWITTER/X SHARES"].toLocaleString('en-US'));
                        $("#cardSide4_4").html((rawSocial[0]["TWITTER/X ENGAGEMENT"] * 100).toFixed(2)+'%');
                        */
                        
                        //HSCore.components.HSChartJS.init(document.querySelector('#updatingBarChart'));
                        //const updatingBarChart = HSCore.components.HSChartJS.getItem('updatingBarChart');
                        //updatingBarChart.destroy();
                        //canvas.width = 800;
                        //canvas.height = 500;
                        var ctx1 = document.getElementById("updatingBarChart");
                        let w = ctx1.getAttribute("width");
                        let h = ctx1.getAttribute("height");
                        var chartStatus_1 = Chart.getChart("updatingBarChart");
                        //console.log(1);
                        if (chartStatus_1 != undefined) {
                            chartStatus_1.destroy();
                            //console.log(2);
                        }
                        
                        let arrLabels = rawChart.map(a => a.month);
                        let arrViews = rawChart.map(a => a.Views);
                        let arrLikes = rawChart.map(a => a.Likes);
                        let arrFollowers = rawChart.map(a => a.Followers);

                        console.log(arrLabels);
                        console.log(arrViews);
                        console.log(arrLikes);
                        console.log(arrFollowers);
                        //console.log(3);
                        var newChart_1 = new Chart(ctx1, {
                              "type": "bar",
                              "data": {
                                "labels": arrLabels, //["JANx", "FEBx", "MARx", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DIC"],
                                "datasets": [{
                                  "data":arrLikes, //[411,2326,1600,647,403,0,0,0,0,0,0,0],
                                  "barThickness": 15,
                                  "backgroundColor": "#FFAF00",
                                  "borderColor": "#FFAF00",
                                  "maxBarThickness": "15",
                                  "order": 2
                                },
                                {
                                  "data":arrViews, //[33880,27779,66144,27251,15113,0,0,0,0,0,0,0],
                                  "backgroundColor": "#FF6000",
                                  "borderColor": "#FF6000",
                                  "maxBarThickness": "15",
                                  "order": 2
                                },
                                {
                                  "type": "line",
                                  "data": arrFollowers, //[14392,14740,15100,15641,15836],
                                  "backgroundColor": "#8C58FF",
                                  "borderColor": "#8C58FF",
                                  "borderWidth": 2,
                                  "pointHoverBackgroundColor": "#8C58FF",
                                  "pointBorderColor": "transparent",
                                  "pointHoverBorderColor": "#8C58FF",
                                  "pointRadius": 0,
                                  "pointHoverRadius": 2,
                                  "tension": 0
                                }]
                              },
                              "options": {
                                "responsive": true,
                                "maintainAspectRatio": false,
                                "scales": {
                                  "y": {
                                    "grid": {
                                      "color": "#e7eaf3",
                                      "drawBorder": false,
                                      "zeroLineColor": "#e7eaf3"
                                    },
                                    "ticks": {
                                      "beginAtZero": true,
                                      "stepSize": 100,
                                      "fontSize": 12,
                                      "fontColor": "#97a4af",
                                      "fontFamily": "Open Sans, sans-serif",
                                      "padding": 10,
                                      "postfix": ""
                                    }
                                  },
                                  "x": {
                                    "grid": {
                                      "display": false,
                                      "drawBorder": false
                                    },
                                    "ticks": {
                                      "font": {
                                        "size": 12,
                                        "family": "Open Sans, sans-serif"
                                      },
                                      "color": "#97a4af",
                                      "padding": 5
                                    },
                                    "categoryPercentage": 0.5
                                  }
                                },
                                "cornerRadius": 2,
                                "plugins": {
                                  "tooltip": {
                                    "prefix": "",
                                    "hasIndicator": true,
                                    "mode": "index",
                                    "intersect": false
                                  }
                                }
                              }
                            }
                        );
                        newChart_1.update();
                        
                        $('.loading').remove();
                        console.log('Complete');
                        
                        /*
                        updatingBarChart.data.labels = ["JANx", "FEBx", "MARx", "APRx", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DIC"];
                        updatingBarChart.data.datasets = [
                          {
                                  "data":[411,2326,1600,647,403,0,0,0,0,0,0,0],
                                  "barThickness": 15,
                                  "backgroundColor": "#FFAF00",
                                  "borderColor": "#FFAF00",
                                  "maxBarThickness": "15",
                                  "order": 2
                                },
                                {
                                  "data":[33880,27779,66144,27251,15113,0,0,0,0,0,0,0],
                                  "backgroundColor": "#FF6000",
                                  "borderColor": "#FF6000",
                                  "maxBarThickness": "15",
                                  "order": 2
                                },
                                {
                                  "type": "line",
                                  "data":[14392,14740,15100,15641,15836],
                                  "backgroundColor": "#8C58FF",
                                  "borderColor": "#8C58FF",
                                  "borderWidth": 2,
                                  "pointHoverBackgroundColor": "#8C58FF",
                                  "pointBorderColor": "transparent",
                                  "pointHoverBorderColor": "#8C58FF",
                                  "pointRadius": 0,
                                  "pointHoverRadius": 2,
                                  "tension": 0
                                }
                        ];
                        */
                        updatingBarChart.update();
                    }
                }
            });
        };
    </script>
</body>
</html>