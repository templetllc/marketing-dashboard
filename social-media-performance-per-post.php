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
                        <h1 class="page-header-title">Content Distribution / Social media</h1>
                        <h1 class="page-header-title-black mb-0">Content analysis</h1>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->


            <div class="row">
                <div class="col-md-9">
                    <!-- BEGIN ANALYSIS TOP -->
                    <div class="card mb-3 mb-lg-5">
                        <div class="card-body">
                            <div class="d-flex align-items-md-center">
                                <div class="flex-grow-1 ms-2">
                                    <div class="d-md-flex d-sm-inline-block align-items-center">

                                        <div class="mb-2 mb-md-0">
                                            <p class="mb-0 me-3 fw-bold">Analyze</p>
                                        </div>

                                        <div class="p-0 ps-md-0 me-3">
                                            <div class="mb-md-0 mb-3">
                                                <div class="d-md-flex d-sm-inline-block" role="group" aria-label="Basic radio toggle button group">
                                                    <div class="mb-3 mb-md-0">
                                                        <input type="radio" class="btn-check btnAnalysis" data-type="byContenttype" name="btnradio" id="btnContent" autocomplete="off">
                                                        <label class="btn btn-outline-primary btn-outline-check me-3" for="btnContent">By platform</label>
                                                    </div>
                                                
                                                    <div>
                                                        <input type="radio" class="btn-check btnAnalysis" data-type="byPerformance" name="btnradio" id="btnPerformance" autocomplete="off">
                                                        <label class="btn btn-outline-primary btn-outline-check" for="btnPerformance">By performance</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="border-end h-100 me-3 d-none d-sm-block"><p>&nbsp;</p></div>

                                        <div class="type-analysis type-content d-none" id="byContenttype">
                                            
                                        </div>

                                        <div class="type-analysis d-none" id="byPerformance">
                                            <div>
                                                <div class="d-inline-flex align-items-center">
                                                    <div class="me-2">
                                                        <img src="./assets/img/icos/ico-up-circle-green.svg" alt="">
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 me-3 fw-bold">Overperformed</p>
                                                    </div>
                                                </div>
    
                                                <div class="d-inline-flex align-items-center">
                                                    <div class="me-2">
                                                        <img src="./assets/img/icos/ico-equal-circle-yellow.svg" alt="">
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 me-3 fw-bold">Average performance</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-inline-flex align-items-center">
                                                    <div class="me-2">
                                                        <img src="./assets/img/icos/ico-down-circle-red.svg" alt="">
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 me-3 fw-bold">Underperformed</p>
                                                    </div>
                                                </div>
  
                                                <div class="d-inline-flex align-items-center">
                                                    <div class="me-2">
                                                        <img src="./assets/img/icos/ico-pending-circle-gray.svg" alt="">
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 me-3 fw-bold">Pending</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END ANALYSIS TOP -->

                    <!-- BEGIN POST -->
                    <div class="row mb-3 mb-md-4 posts-container">
                        <div class="d-flex justify-content-center">
                            <div class="spinner-border text-warning" style="width: 3rem; height: 3rem;" role="status">
                                <span class="sr-only"></span>
                            </div>
                        </div>
                    </div>
                    <!-- END POST -->
                </div>

                <!-- BEGIN FILTER BAR -->
                <div class="col-md-3">
                    <div class='card mb-3 mb-lg-5 sticky-bar-stats'>
                        <div class='card-header card-header-content-between bg-gray'>
                            <h4 class='card-header-title'>Sends</h4>
                        </div>

                        <!-- Body -->
                        <div class='card-body py-3'>
                            <div>
                                <p class="mb-3 fw-bold">Filter</p>
                            </div>
                            <div class="mb-3">
                                <select id="dropPlatform" class="form-select" aria-label="Default select example">
                                    <option selected>By platform</option>
                                </select>
                            </div>
                            <div class="mb-3 d-none">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>By campaign</option>
                                    <option value="1">-</option>
                                    <option value="2">-</option>
                                    <option value="3">-</option>
                                </select>
                            </div>
              
                            <div class="mb-3">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item" id="send-combined">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" disabled>
                                                Combined
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="d-flex justify-content-center combined-loading">
                                                    <div class="spinner-border" role="status">
                                                        <span class="sr-only"></span>
                                                    </div>
                                                </div>
                                                <ul id="combined-stats" class="list-group list-group-flush list-group-no-gutters">
                                                    <li class="list-group-item pt-0">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <div class="col-6 me-3">
                                                                <h5 class="card-title mb-0 fs-15 text-end">Reach</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5 id="reach" class="card-title mb-0 fs-20 text-start"></h5>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item border-0 pt-2">
                                                        <div class="d-flex justify-content-center align-items-end">
                                                            <div class="col-6 me-3">
                                                                <h5 class="card-title mb-0 fs-15 text-end fw-normal">Vs benchmark</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="d-flex align-items-end">
                                                                    <div class="me-2">
                                                                        <h5 id="reach_b" class="card-title mb-0 fs-20 text-start fw-bold"></h5>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-1">
                                                                            <img id="reach_b_icon" src="./assets/img/icos/ico-up-circle-green.svg" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <h5 id="reach_b_rate" class="card-title mb-0 fs-15 text-start fw-normal text-green">%</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item pt-0">
                                                        <div class="d-flex justify-content-center align-items-end">
                                                            <div class="col-6 me-3">
                                                                <h5 class="card-title mb-0 fs-15 text-end fw-normal">Vs history</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="d-flex align-items-end">
                                                                    <div class="me-2">
                                                                        <h5 id="reach_h" class="card-title mb-0 fs-20 text-start fw-bold"></h5>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-1">
                                                                            <img id="reach_h_icon" src="./assets/img/icos/ico-down-circle-red.svg" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <h5 id="reach_h_rate" class="card-title mb-0 fs-15 text-start fw-normal text-red">%</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item pb-2">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <div class="col-6 me-3">
                                                                <h5 class="card-title mb-0 fs-15 text-end">Likes</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5 id="like" class="card-title mb-0 fs-20 text-start"></h5>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item border-0 pt-2">
                                                        <div class="d-flex justify-content-center align-items-end">
                                                            <div class="col-6 me-3">
                                                                <h5 class="card-title mb-0 fs-15 text-end fw-normal">Vs benchmark</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="d-flex align-items-end">
                                                                    <div class="me-2">
                                                                        <h5 id="like_b" class="card-title mb-0 fs-20 text-start fw-bold"></h5>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-1">
                                                                            <img id="like_b_icon" src="./assets/img/icos/ico-up-circle-green.svg" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <h5 id="like_b_rate" class="card-title mb-0 fs-15 text-start fw-normal text-green">%</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item pt-0">
                                                        <div class="d-flex justify-content-center align-items-end">
                                                            <div class="col-6 me-3">
                                                                <h5 class="card-title mb-0 fs-15 text-end fw-normal">Vs history</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="d-flex align-items-end">
                                                                    <div class="me-2">
                                                                        <h5 id="like_h" class="card-title mb-0 fs-20 text-start fw-bold"></h5>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-1">
                                                                            <img id="like_h_icon" src="./assets/img/icos/ico-down-circle-red.svg" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <h5 id="like_h_rate" class="card-title mb-0 fs-15 text-start fw-normal text-red">%</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- 
                                                    <li class="list-group-item pb-2">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <div class="col-6 me-3">
                                                                <h5 class="card-title mb-0 fs-15 text-end">Comments</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5 id="comments" class="card-title mb-0 fs-20 text-start"></h5>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item border-0 pt-2">
                                                        <div class="d-flex justify-content-center align-items-end">
                                                            <div class="col-6 me-3">
                                                                <h5 class="card-title mb-0 fs-15 text-end fw-normal">Vs benchmark</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="d-flex align-items-end">
                                                                    <div class="me-2">
                                                                        <h5 id="comments_b" class="card-title mb-0 fs-20 text-start fw-bold"></h5>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-1">
                                                                            <img id="comments_b_icon" src="./assets/img/icos/ico-up-circle-green.svg" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <h5 id="comments_b_rate" class="card-title mb-0 fs-15 text-start fw-normal text-green">%</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item pt-0">
                                                        <div class="d-flex justify-content-center align-items-end">
                                                            <div class="col-6 me-3">
                                                                <h5 class="card-title mb-0 fs-15 text-end fw-normal">Vs history</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="d-flex align-items-end">
                                                                    <div class="me-2">
                                                                        <h5 id="comments_h" class="card-title mb-0 fs-20 text-start fw-bold"></h5>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-1">
                                                                            <img id="comments_h_icon" src="./assets/img/icos/ico-down-circle-red.svg" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <h5 id="comments_h_rate" class="card-title mb-0 fs-15 text-start fw-normal text-red">%</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li> 
                                                    -->
                                                    <li class="list-group-item pb-2">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <div class="col-6 me-3">
                                                                <h5 class="card-title mb-0 fs-15 text-end">Shares</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5 id="shares" class="card-title mb-0 fs-20 text-start"></h5>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item border-0 pt-2">
                                                        <div class="d-flex justify-content-center align-items-end">
                                                            <div class="col-6 me-3">
                                                                <h5 class="card-title mb-0 fs-15 text-end fw-normal">Vs benchmark</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="d-flex align-items-end">
                                                                    <div class="me-2">
                                                                        <h5 id="shares_b" class="card-title mb-0 fs-20 text-start fw-bold"></h5>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-1">
                                                                            <img id="shares_b_icon" src="./assets/img/icos/ico-up-circle-green.svg" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <h5 id="shares_b_rate" class="card-title mb-0 fs-15 text-start fw-normal text-green">%</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item pt-0">
                                                        <div class="d-flex justify-content-center align-items-end">
                                                            <div class="col-6 me-3">
                                                                <h5 class="card-title mb-0 fs-15 text-end fw-normal">Vs history</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="d-flex align-items-end">
                                                                    <div class="me-2">
                                                                        <h5 id="shares_h" class="card-title mb-0 fs-20 text-start fw-bold"></h5>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-1">
                                                                            <img id="shares_h_icon" src="./assets/img/icos/ico-down-circle-red.svg" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <h5 id="shares_h_rate" class="card-title mb-0 fs-15 text-start fw-normal text-red">%</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item d-none">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Compared
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div>
                                                    <p class="mb-0 fw-bold">Post comparison (top 5)</p>
                                                </div>
                                                <!-- Bar Chart -->
                                                <div class="chartjs-custom">
                                                    <canvas id="emailComparison" class="js-chart" style="height: 500px !important;"
                                                        data-hs-chartjs-options='{
                                                      "type": "bar",
                                                      "data": {
                                                        "labels": ["Post 5", "Post 4", "Post 3", "Post 2", "Post 1"],
                                                        "datasets": [{
                                                          "data": [1200, 1200, 1200, 1200, 1200],
                                                          "backgroundColor": "#FFAF00",
                                                          "hoverBackgroundColor": "#FFAF00",
                                                          "borderColor": "#FFAF00",
                                                          "barThickness": 20
                                                        },
                                                        {
                                                          "data": [1600, 1600, 1600, 1600, 1600],
                                                          "backgroundColor": "#FF6000",
                                                          "hoverBackgroundColor": "#FF6000",
                                                          "borderColor": "#FF6000",
                                                          "barThickness": 20
                                                        },
                                                        {
                                                          "data": [700, 700, 700, 700, 700],
                                                          "backgroundColor": "#8C58FF",
                                                          "hoverBackgroundColor": "#8C58FF",
                                                          "borderColor": "#8C58FF",
                                                          "barThickness": 20
                                                        }]
                                                      },
                                                      "options": {
                                                        "indexAxis": "y",
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
                                                              "postfix": "k"
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
                                                              "padding": 10
                                                            },
                                                            "categoryPercentage": 0.6
                                                          }
                                                        },
                                                        "cornerRadius": 2,
                                                        "plugins": {
                                                          "tooltip": {
                                                          "prefix": "k",
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
                                                    }'></canvas>
                                                </div>
                                                <!-- End Bar Chart -->
                                                <div class="d-flex justify-content-center">
                                                    <div class="d-flex align-items-center me-3">
                                                        <span class="legend-indicator bg-orange d-flex"></span>
                                                        <p class="mb-0 fs-12">Likes</p>
                                                    </div>
                                                    <div class="d-flex align-items-center me-3">
                                                        <span class="legend-indicator bg-yellow d-flex"></span>
                                                        <p class="mb-0 fs-12">Views</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="legend-indicator bg-purple d-flex"></span>
                                                        <p class="mb-0 fs-12">Reach</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary mt-4 btn-calculate" disabled>Calculate</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End FILTER BAR -->
            </div>
        </div>
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
  <script src="./assets/js/content-posts-analysis.js"></script>

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

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var btnRadio1 = document.getElementById("btnradio1");
      var btnRadio2 = document.getElementById("btnradio2");
      var byContenttype = document.getElementById("byContenttype");
      var byPerformance = document.getElementById("byPerformance");
      var imgNoneList = document.querySelectorAll(".img-none");

      var savedBorders = [];
      var elements = document.querySelectorAll('.border-img-purple-light, .border-img-purple, .border-img-red-dark, .border-img-purple-dark');
      elements.forEach(function(element) {
          savedBorders.push(element.style.border);
          element.style.border = 'none';
      });

      byContenttype.style.setProperty("display", "none", "important");
      byPerformance.style.setProperty("display", "none", "important");

      imgNoneList.forEach(function(img) {
        img.style.setProperty("display", "none", "important");
      });

      btnRadio1.addEventListener("click", function() {
        byContenttype.style.setProperty("display", "block");
        byPerformance.style.setProperty("display", "none", "important");
        imgNoneList.forEach(function(img) {
            img.style.setProperty("display", "none", "important");
        });
        elements.forEach(function(element, index) {
            element.style.border = savedBorders[index];
        });
      });

      btnRadio2.addEventListener("click", function() {
        byContenttype.style.setProperty("display", "none", "important");
        byPerformance.style.setProperty("display", "block");
        imgNoneList.forEach(function(img) {
            img.style.setProperty("display", "block", "important");
        });
        elements.forEach(function(element) {
          savedBorders.push(element.style.border);
          element.style.border = 'none';
        });
      });

      const botones = document.querySelectorAll('.btn-img');
      botones.forEach(boton => {
          boton.addEventListener('click', function () {
              botones.forEach(boton => {
                  boton.classList.remove('btn-activo');
                  boton.classList.add('btn-inactivo');
              });
              
              this.classList.remove('btn-inactivo');
              this.classList.add('btn-activo');
          });
      });

    });
  </script>

</body>
</html>