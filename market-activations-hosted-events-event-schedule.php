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
  <link rel="stylesheet" href="./assets/vendor/fullcalendar/main.min.css">
  <link rel="stylesheet" href="./assets/vendor/flatpickr/dist/flatpickr.min.css">

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
            <h1 class="page-header-title-black mb-0">Event schedule</h1>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <div class="row align-items-sm-center mb-4">
        <div class="col-lg-5 mb-2 mb-lg-0">
          <div class="d-flex align-items-center">
            <button type="button" class="btn btn-white me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-fc-today>Today</button>

            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm btn-no-focus rounded-circle me-1" data-fc-prev-month data-bs-toggle="tooltip" data-bs-placement="top" title="Previous month">
              <i class="bi-chevron-left"></i>
            </button>

            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm btn-no-focus rounded-circle ms-1" data-fc-next-month data-bs-toggle="tooltip" data-bs-placement="top" title="Next month">
              <i class="bi-chevron-right"></i>
            </button>

            <div class="ms-3">
              <h4 class="h3 mb-0" data-fc-title></h4>
            </div>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-lg-7">
          <div class="d-sm-flex align-items-sm-center justify-content-end">
            <!-- Input Group -->
            <!-- <div class="input-group input-group-merge me-2 mb-2 mb-sm-0">
              <div class="input-group-prepend input-group-text">
                <i class="bi-search"></i>
              </div>
              <input type="text" id="filter-by-title" class="form-control" placeholder="Search by title">
            </div> -->
            <!-- End Input Group -->

            <div class="d-flex align-items-center">
              <!-- Dropdown -->
              <div class="dropdown me-2">
                <!-- <button type="button" class="btn btn-white dropdown-toggle" id="calendarFilterDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <i class="bi-filter me-1"></i> Filter
                </button> -->

                <div class="dropdown-menu dropdown-card" aria-labelledby="calendarFilterDropdown" style="min-width: 15rem;">
                  <!-- Card -->
                  <div class="card">
                    <div class="card-body">
                      <small class="card-subtitle">My calendars</small>

                      <!-- Form Check -->
                      <div class="form-check" data-filter>
                        <input class="form-check-input" type="checkbox" value="fullcalendar-custom-event-hs-team" id="calendarPersonalCheck" checked>
                        <label class="form-check-label" for="calendarPersonalCheck">HS Team</label>
                      </div>
                      <!-- End Form Check -->

                      <!-- Form Check -->
                      <div class="form-check form-check-danger" data-filter>
                        <input class="form-check-input" type="checkbox" value="fullcalendar-custom-event-reminders" id="calendarRemindersCheck" checked>
                        <label class="form-check-label" for="calendarRemindersCheck">Reminders</label>
                      </div>
                      <!-- End Form Check -->

                      <!-- Form Check -->
                      <div class="form-check form-check-warning" data-filter>
                        <input class="form-check-input" type="checkbox" value="fullcalendar-custom-event-tasks" id="calendarTasksCheck" checked>
                        <label class="form-check-label" for="calendarTasksCheck">Tasks</label>
                      </div>
                      <!-- End Form Check -->
                    </div>

                    <hr class="my-0">

                    <div class="card-body">
                      <small class="card-subtitle">Other calendars</small>

                      <!-- Form Check -->
                      <div class="form-check form-check-success" data-filter>
                        <input class="form-check-input" type="checkbox" value="fullcalendar-custom-event-holidays" id="calendarHolidaysCheck" checked>
                        <label class="form-check-label" for="calendarHolidaysCheck">Holidays</label>
                      </div>
                      <!-- End Form Check -->
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
              </div>
              <!-- End Dropdown -->

              <!-- Dropdown -->
              <div class="dropdown me-2">
                <!-- <button type="button" class="btn btn-white dropdown-toggle" id="calendarEventsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <i class="bi-calendar-event me-1"></i> Events
                </button> -->

                <div class="dropdown-menu dropdown-menu-sm-end dropdown-card" aria-labelledby="calendarFilterDropdown" style="width: 17rem;">
                  <!-- Card -->
                  <div class="card">
                    <div class="card-body card-body-height">
                      <small class="card-subtitle">Drag these onto the calendar:</small>

                      <!-- External Events -->
                      <div id="external-events" class="fullcalendar-custom">
                        <!-- Event -->
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-hs-team' style="background-color: #eaf1ff; border-color: #eaf1ff;" data-event='{
                             "title": "Open a new task on Jira",
                             "image": "./assets/svg/brands/jira-icon.svg",
                             "className": "",
                             "forceEvent": true
                           }'>
                          <div class='fc-event-title' style="max-width: 14rem;">
                            <div class='d-flex'>
                              <img class="avatar avatar-xss me-2" src="./assets/svg/brands/jira-icon.svg" alt="Image Description">
                              <span class="text-truncate">Open a new task on Jira</span>
                            </div>
                          </div>
                        </div>
                        <!-- End Event -->

                        <!-- Event -->
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-reminders' style="background-color: #fdeef2; border-color: #fdeef2;" data-event='{
                               "title": "Send weekly invoice to John",
                               "image": "./assets/svg/brands/excel-icon.svg",
                               "className": "fc-event-success",
                               "forceEvent": true
                             }'>
                          <div class='fc-event-title' style="max-width: 14rem;">
                            <div class='d-flex'>
                              <img class="avatar avatar-xss me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                              <span class="text-truncate">Send weekly invoice to John</span>
                            </div>
                          </div>
                        </div>
                        <!-- End Event -->

                        <!-- Event -->
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-hs-team' style="background-color: #eaf1ff; border-color: #eaf1ff;" data-event='{
                               "title": "Shoot a message to Christina on Slack",
                               "image": "./assets/svg/brands/slack-icon.svg",
                               "className": "",
                               "forceEvent": true
                             }'>
                          <div class='fc-event-title' style="max-width: 14rem;">
                            <div class='d-flex'>
                              <img class="avatar avatar-xss me-2" src="./assets/svg/brands/slack-icon.svg" alt="Image Description">
                              <span class="text-truncate">Shoot a message to Christina on Slack</span>
                            </div>
                          </div>
                        </div>
                        <!-- End Event -->

                        <!-- Event -->
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-tasks' style="background-color: #fdf3e8; border-color: #fdf3e8;" data-event='{
                               "title": "First team timeline",
                               "image": "",
                               "className": "fc-event-success",
                               "forceEvent": true
                             }'>
                          <div class='fc-event-title' style="max-width: 14rem;">
                            <div class='d-flex'>
                              <span class="avatar avatar-xss avatar-info avatar-circle me-2">
                                <span class="text-truncate" class="avatar-initials">F</span>
                              </span>
                              <span>First team timeline</span>
                            </div>
                          </div>
                        </div>
                        <!-- End Event -->

                        <!-- Event -->
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-reminders' style="background-color: #fdeef2; border-color: #fdeef2;" data-event='{
                               "title": "Download monthly data in DigitalOcean",
                               "image": "./assets/svg/brands/digitalocean-icon.svg",
                               "className": "",
                               "forceEvent": true
                             }'>
                          <div class='fc-event-title' style="max-width: 14rem;">
                            <div class='d-flex'>
                              <img class="avatar avatar-xss me-2" src="./assets/svg/brands/digitalocean-icon.svg" alt="Image Description">
                              <span class="text-truncate">Download monthly data in DigitalOcean</span>
                            </div>
                          </div>
                        </div>
                        <!-- End Event -->

                        <!-- Event -->
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-tasks' style="background-color: #fdf3e8; border-color: #fdf3e8;" data-event='{
                               "title": "Hire a Figma designer",
                               "image": "./assets/svg/brands/figma-icon.svg",
                               "className": "",
                               "forceEvent": true
                             }'>
                          <div class='fc-event-title' style="max-width: 14rem;">
                            <div class='d-flex'>
                              <img class="avatar avatar-xss me-2" src="./assets/svg/brands/figma-icon.svg" alt="Image Description">
                              <span class="text-truncate">Hire a Figma designer</span>
                            </div>
                          </div>
                        </div>
                        <!-- End Event -->

                        <!-- Event -->
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-hs-team' style="background-color: #eaf1ff; border-color: #eaf1ff;" data-event='{
                               "title": "Mobile App rework for (Pixeel)",
                               "image": "",
                               "className": "",
                               "forceEvent": true
                             }'>
                          <div class='fc-event-title' style="max-width: 14rem;">
                            <div class='d-flex'>
                              <span class="avatar avatar-xss avatar-primary avatar-circle me-2">
                                <span class="text-truncate" class="avatar-initials">M</span>
                              </span>
                              <span>Mobile App rework for (Pixeel)</span>
                            </div>
                          </div>
                        </div>
                        <!-- End Event -->
                      </div>
                      <!-- End External Events -->
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
              </div>
              <!-- End Dropdown -->

              <!-- Select -->
              <div class="tom-select-custom">
                <select class="js-select form-select" data-fc-grid-view data-hs-tom-select-options='{
                          "searchInDropdown": false,
                          "hideSearch": true
                        }'>
                  <option value="dayGridMonth">Month</option>
                  <option value="timeGridWeek">Week</option>
                  <option value="timeGridDay">Day</option>
                  <option value="listWeek">List</option>
                </select>
              </div>
              <!-- End Select -->
            </div>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <div class="d-flex justify-content-center loading my-4">
          <div class="spinner-border text-warning" style="width: 3rem; height: 3rem;" role="status">
              <span class="sr-only"></span>
          </div>
      </div>

      <!-- Fullcalendar -->
      <div id="js-fullcalendar" class="fullcalendar-custom"></div>
      <!-- End Fullcalendar -->

    </div>
    <!-- End Content -->

  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- Modal -->
  <div class="modal fade" id="addEventToCalendarModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <label for="eventTitleLabel" class="visually-hidden form-label">Title</label>
          <textarea id="eventTitleLabel" class="form-control form-control-title" placeholder="Add title"></textarea>

          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-list-ul nav-icon"></i>
                <div class="flex-grow-1">Event type</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <!-- Select -->
              <div class="tom-select-custom">
                <select class="js-select form-select w-auto" autocomplete="off" id="eventColorLabel" data-hs-tom-select-options='{
                          "searchInDropdown": false,
                          "placeholder": "Select event color"
                        }'>
                  <option value="" data-option-template='<span class="d-flex align-items-center">Select event color</span>'>Select event color</option>
                  <option value="fullcalendar-custom-event-hs-team" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-primary me-2"></span>HS Team</span>'>HS Team</option>
                  <option value="fullcalendar-custom-event-reminders" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-danger me-2"></span>Reminders</span>'>Reminders</option>
                  <option value="fullcalendar-custom-event-tasks" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-warning me-2"></span>Tasks</span>'>Tasks</option>
                  <option value="fullcalendar-custom-event-holidays" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-dark me-2"></span>Success</span>'>Success</option>
                </select>
              </div>
              <!-- End Select -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-calendar-event nav-icon"></i>
                <div class="flex-grow-1">Date</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <label for="eventDateRangeLabel" class="visually-hidden form-label">Date</label>

              <!-- Flatpickr -->
              <input type="text" id="eventDateRangeLabel" class="flatpickr-custom form-control mb-2" placeholder="Select dates" data-hs-flatpickr-options='{
                       "dateFormat": "m/d/Y",
                       "mode": "range",
                       "minDate": "12/01/2020"
                     }'>
              <!-- End Flatpickr -->

              <div class="d-flex align-items-center">
                <label for="eventRepeatLabel" class="text-body me-2 mb-0">Repeat:</label>

                <!-- Select -->
                <div class="tom-select-custom">
                  <select class="js-select form-select form-select-sm w-auto" id="eventRepeatLabel" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                    <option value="everyday" selected>Everyday</option>
                    <option value="weekdays">Weekdays</option>
                    <option value="never">Never</option>
                  </select>
                </div>
                <!-- End Select -->
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-people nav-icon"></i>
                <div class="flex-grow-1">Guests</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <label for="eventGuestsLabel" class="visually-hidden form-label">Add guests</label>
              <div class="tom-select-custom">
                <select class="form-select" id="eventGuestsLabel" placeholder="Add guests" aria-label="Add guests" multiple data-hs-tom-select-options='{
                          "placeholder": "Select a person...",
                          "hideSearch": true
                        }'>
                </select>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-camera-reels nav-icon"></i>
                <div class="flex-grow-1">Conference call</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <a class="btn btn-primary" href="#">
                <i class="bi-camera-video-fill me-1"></i> Add Zoom video conferencing
              </a>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-geo-alt nav-icon"></i>
                <div class="flex-grow-1">Location</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <label for="eventLocationLabel" class="visually-hidden form-label">Add location</label>

              <input type="text" class="form-control" id="eventLocationLabel" placeholder="Add location" aria-label="Add location">
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-text-left nav-icon"></i>
                <div class="flex-grow-1">Description</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <label for="eventDescriptionLabel" class="visually-hidden form-label">Add description</label>

              <textarea id="eventDescriptionLabel" class="form-control" placeholder="Add description"></textarea>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="row">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-person nav-icon"></i>
                <div class="flex-grow-1">Created by</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <!-- Media -->
              <a class="d-inline-flex align-items-center" href="./user-profile.html">
                <div class="avatar avatar-sm avatar-circle me-3">
                  <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                </div>
                <div class="flex-grow-1">
                  <h5 class="text-inherit mb-0">Mark Williams</h5>
                </div>
              </a>
              <!-- End Media -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer gap-3">
          <button type="button" id="discardFormt" class="btn btn-white" data-bs-dismiss="modal">Discard</button>
          <button type="button" id="processEvent" class="btn btn-primary">Create event</button>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

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
  <script src="./assets/vendor/clipboard/dist/clipboard.min.js"></script>
  <script src="./assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="./assets/vendor/datatables.net.extensions/select/select.min.js"></script>

  <script src="./assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
  <script src="./assets/vendor/fullcalendar/main.min.js"></script>
  <script src="./assets/vendor/hs-fullcalendar-filter/dist/hs-fullcalendar-filter.min.js"></script>
  <script src="./assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="./assets/vendor/flatpickr/dist/flatpickr.min.js"></script>

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

  <script>
    var fullcalendarEditable;
    var newEventList = [];
    (function() {
      window.onload = function () {
        
        
        var date = new Date();
        var firstDay = new Date(date.getFullYear(), date.getMonth(), 1).toISOString().split('T')[0];
        //console.log(firstDay);
        const zeroPad = (num, places) => String(num).padStart(places, '0')
        $.ajax ({
                    contentType: "application/json",
                    dataType: "json",
                    type: 'POST',
                    async: false,
                    //url power automate: https://make.powerautomate.com/environments/29ebd59c-c6bc-46b6-a678-4856a9b69eb9/flows/3a62c346-cd2a-43c7-8fcd-a9e24d1d5a26?v3=true
                    url:"https://prod-64.westus.logic.azure.com:443/workflows/a67d8c3c2be8418d981b5395e9d983d5/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=TOA0nYEo4_3CAquG5dGoZlMjOOGq1dCcblIGwTsKv64",
                    complete: function() {
                        $('.loading').remove();
                        //console.log(data);
                    },
                    statusCode: {
                        200: function(data) {
                            var rawEvents = data["hostedEvents"]["results"][0]['tables'][0]['rows'];
                            //console.log(rawEvents);
                            //we add the keys to the array to match the existing code
                            rawEvents.forEach(function (someRow) { 
                                for (const [key, value] of Object.entries(someRow)) {
                                    someRow[key.replace("REPORT - Hosted Events[","").replace("]","")] = someRow[key]
                                }
                            });
                             rawEvents.sort(function(a, b) {
                              if (a['Date'] > b['Date']) {
                                return 1;
                              }
                              if (a['Date'] < b['Date']) {
                                return -1;
                              }
                              return 0;
                            });
                           
                            
                            for(var i=0, len=rawEvents.length;i < len; i++) {
                                
                                //console.log(rawEvents[i]["Date"]);
                                let arrMyDate = rawEvents[i]["Date"].split("/");
                                const dateObject = new Date(arrMyDate[2],arrMyDate[0],arrMyDate[1]);
                                let yyyy = dateObject.getFullYear()+100; //js assumes dates are xxth century
                                let mm = zeroPad(dateObject.getMonth() + 1,2); // month is zero-based
                                let dd = zeroPad(dateObject.getDate(),2);
                                let dateFormatted = yyyy + "-" + mm + "-" + dd;
                                newEventList.push(
                                    {
                                        id:parseInt(i+1),
                                        title:rawEvents[i]["Campaign"],
                                        start:dateFormatted,
                                        end:dateFormatted,
                                        eventDescriptionLabel:rawEvents[i]["Country"]
                                        ,eventLocationLabel:rawEvents[i]["Product of Interest"]
                                        //,image:'./assets/img/calendar/img-avatar-caledar-01.png'
                                    }
                                );
                        }
                        
                        }}});
        
        
        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select', {
          hideSearch: true
        })


        // INITIALIZATION OF FULLCALENDAR
        // =======================================================
        let $popover,
          filterSearchExample,
          editableEvent = {}

        const popoverContent = function (data) {
            return `
  					<h3 class="mb-4">${data.event.title}</h3>

  					<div class="d-flex mb-4">
  						<i class="bi bi-clock nav-icon"></i>
  						<div class="flex-grow-1">
  							<span class="d-block text-dark mb-2">${moment(data.event.start).format('dddd, MMMM DD')}</span>
  						</div>
  					</div>


  					<div class="d-flex mb-4">
  						<i class="bi bi-people nav-icon"></i>
  						<div class="flex-grow-1">
  							<span class="d-block text-dark">${data.event.extendedProps.eventLocationLabel || 'Empty'}</span>
  						</div>
  					</div>

  					<div class="d-flex mb-4">
  						<i class="bi bi-text-left nav-icon"></i>
  						<div class="flex-grow-1">
  							<span class="d-block text-dark">${data.event.extendedProps.eventDescriptionLabel || 'Empty'}</span>
  						</div>
  					</div>


  					<div class="d-flex justify-content-end">
  						<a id="closePopover" href="javascript:;" class="btn btn-sm btn-white me-2">Close</a>
  					</div>
  			  `;
          },
          eventContent = function (data) {
            return `
  					<div>
  						<div class="fc-event-time">${$gridViewSelect.value === 'timeGridWeek' && !data.allDay ? moment(data.start).format('HH:mm') + '-' + moment(data.end).format('HH:mm') : ''}</div>
  						<div class="d-flex">
  							${
              data.extendedProps.image
                ? `<img class="avatar avatar-xs me-2" src="${data.extendedProps.image}" alt="Image Description">`
                : ''
            }
  							<span class="fc-event-title fc-sticky">${data.title}</span>
  						</div>
  					</div>
  				`;
          }

        // Fullcalendar controls
        const $prevMonthBtn = document.querySelector('[data-fc-prev-month]'),
          $nextMonthBtn = document.querySelector('[data-fc-next-month]'),
          $todayBtn = document.querySelector('[data-fc-today]'),
          $dateTitle = document.querySelector('[data-fc-title]'),
          $gridViewSelect = document.querySelector('[data-fc-grid-view]')

        // Filter controls
        const $filterByTitle = document.querySelector('#filter-by-title'),
          $filters = document.querySelectorAll('[data-filter]')

        // Edit popup fields
        const $addEventToCalendarModal = document.querySelector("#addEventToCalendarModal"),
          $titleField = document.querySelector('#eventTitleLabel'),
          $repeatLabel = document.querySelector('#eventRepeatLabel'),
          $eventDescriptionLabel = document.querySelector('#eventDescriptionLabel'),
          $eventLocationLabel = document.querySelector('#eventLocationLabel'),
          $eventColorLabel = document.querySelector('#eventColorLabel'),
          $eventGuestsLabel = document.querySelector('#eventGuestsLabel'),
          $processEvent = document.querySelector('#processEvent'),
          allMembers = [
            {
              "value": "Amanda Harvey",
              "src": null
            }, {
              "value": "Clarice Boone",
              "src": null
            }, {
              "value": "Sam Kart",
              "src": null
            }, {
              "value": "Mark Williams",
              "src": null
            }, {
              "value": "Linda Bates",
              "src": null
            }, {
              "value": "Rachel Doe",
              "src": null
            }, {
              "value": "David Harrison",
              "src": "./assets/img/160x160/img3.jpg"
            }, {
              "value": "Finch Hoot",
              "src": "./assets/img/160x160/img5.jpg"
            }, {
              "value": "Ella Lauda",
              "src": "./assets/img/160x160/img9.jpg"
            }
          ]

        let guestsField,
          repeatField,
          eventColorField;
          //,fullcalendarEditable

        // Init popup
        const addEventToCalendarModal = new bootstrap.Modal($addEventToCalendarModal);

        HSCore.components.HSFlatpickr.init('#eventDateRangeLabel');
        const eventDateRange = HSCore.components.HSFlatpickr.getItem('eventDateRangeLabel');

        HSCore.components.HSTomSelect.init($eventGuestsLabel, {
          options: allMembers,
          render: {
            option: function (data, escape) {
              return data.src ? `<div><img class="avatar avatar-xs avatar-circle me-2" src="${data.src}">${data.value}</div>` : `
                      <div>
                        <div class="avatar avatar-xs avatar-soft-primary avatar-circle me-2">
                          <span class="avatar-initials">${data.value.charAt(0)}</span>
                        </div>

                        ${data.value}
                      </div>
                    `
            },
            item: function (item, escape) {
              return item.src ? `<div><img class="avatar avatar-xs avatar-circle me-2" src="${item.src}">${item.value}</div>` : `
                      <div>
                        <div class="avatar avatar-xs avatar-soft-primary avatar-circle me-2">
                          <span class="avatar-initials">${item.value.charAt(0)}</span>
                        </div>

                        ${item.value}
                      </div>
                    `
            }
          }
        })

        guestsField = HSCore.components.HSTomSelect.getItem("eventGuestsLabel")
        repeatField = HSCore.components.HSTomSelect.getItem("eventRepeatLabel")
        eventColorField = HSCore.components.HSTomSelect.getItem("eventColorLabel")
        
        
        
        HSCore.components.HSFullCalendar.init('#js-fullcalendar', {
          events: newEventList,
          initialDate: firstDay, //"2024-01-01",
          headerToolbar: false,
          editable: false,
          defaultAllDay: false,
          datesSet(dateSet) {
            $dateTitle.textContent = dateSet.view.title
          },
          eventClick: function (event) {
            // Popover Content
            const _popoverContent = popoverContent(event);

            if ($popover && $popover._element) {
              $popover.dispose();
            }

            // Open Popover
            $popover = new bootstrap.Popover(event.el, {
              html: true,
              content: _popoverContent,
              template: `
  							<div class="popover fullcalendar-event-popover" role="tooltip">
  								<div class="arrow"></div>
  								<h3 class="popover-header"></h3>
  								<div class="popover-body"></div>
  							</div>
  						`,
            });
            $popover.show();

            // Open Popover For Editing
            event.el.addEventListener('shown.bs.popover', function () {
              const $invoker = document.querySelector(`#modal-invoker-${event.event.id}`);

              $invoker.addEventListener('click', function () {
                if ($popover && $popover._element) {
                  $popover.dispose();
                }

                prepareData(
                  event.event.title,
                  event.event.start,
                  event.event.end,
                  event.event
                );
              });
            });
          },
          eventContent({event}) {
            return {
              html: eventContent(event),
            };
          },
          drop({draggedEl}) {
            draggedEl.remove();
          },
        });

        fullcalendarEditable = HSCore.components.HSFullCalendar.getItem('js-fullcalendar');
        
        //fullcalendarEditable.getEventById(1).remove(); fullcalendarEditable.getEventById(2).remove();
        /*
        fullcalendarEditable.addEvent({  id: 500,
                      title: "500 mi prueba",
                      start: "2024-04-30",
                      end: "2024-04-30",
                      eventDescriptionLabel: "Lorem ipsum dolor sit",
                      image: './assets/img/calendar/img-avatar-calendar-01.png'});
                      */

        // Events
        document.addEventListener('click', function (e) {
          if (
            (e.target && e.target.id === 'closePopover' && $popover && $popover._element)
            || (e.target && !e.target.closest('.fc-event') && !e.target.closest('.popover') && $popover && $popover._element)
          ) {
            $popover.dispose();
          }
        });

        document.addEventListener('scroll', function () {
          if ($popover && $popover._element) {
            $popover.dispose();
          }
        });

        $prevMonthBtn.addEventListener('click', function () {
          fullcalendarEditable.prev();

          HSCore.hideTooltips();
        });

        $nextMonthBtn.addEventListener('click', function () {
          fullcalendarEditable.next();

          HSCore.hideTooltips();
        });

        $gridViewSelect.addEventListener('change', function (event) {
          fullcalendarEditable.changeView(event.target.value);
        });

        $todayBtn.addEventListener('click', function () {
          fullcalendarEditable.today();
        });
        $todayBtn.title = new Date().toDateString();

        $addEventToCalendarModal.addEventListener('hide.bs.modal', function () {
          $titleField.style.height = 'auto';
        });
        $addEventToCalendarModal.addEventListener('show.bs.modal', function () {
          clearForm();
        });
        $addEventToCalendarModal.addEventListener('shown.bs.modal', function () {
          $titleField.style.height = `${$titleField.scrollHeight}px`;

          $titleField.focus();
        });

        $titleField.addEventListener('input', function () {
          $titleField.style.height = `${$titleField.scrollHeight}px`;
        });

        $processEvent.addEventListener('click', function () {
          const date = eventDateRange.selectedDates

          if (!Object.keys(editableEvent).length) {
            fullcalendarEditable.addEvent({
              id: new Date().getTime(),
              title: $titleField.value || '(No title)',
              repeatField: repeatField.getValue(),
              guestsField: JSON.parse(JSON.stringify(guestsField.getValue())),
              eventDescriptionLabel: $eventDescriptionLabel.value,
              eventLocationLabel: $eventLocationLabel.value,
              start: moment(date[0]).format('YYYY-MM-DD'),
              end: date.length > 1 ? moment(date[1]).format('YYYY-MM-DD') : moment(date[0]).format('YYYY-MM-DD'),
              classNames: eventColorField.getValue(),
            });
          } else {
            editableEvent.setProp('title', $titleField.value)
            editableEvent.setExtendedProp('repeatField', repeatField.getValue())
            editableEvent.setExtendedProp('guestsField', JSON.parse(JSON.stringify(guestsField.getValue())))
            editableEvent.setExtendedProp('eventDescriptionLabel', $eventDescriptionLabel.value)
            editableEvent.setExtendedProp('eventLocationLabel', $eventLocationLabel.value)
            editableEvent.setProp('classNames', [eventColorField.getValue()])
            editableEvent.setStart(moment(date[0]).format('YYYY-MM-DD'))
            editableEvent.setEnd(date.length > 1 ? moment(date[1]).format('YYYY-MM-DD') : moment(date[0]).format('YYYY-MM-DD'))
          }

          addEventToCalendarModal.hide();

          filterSearchExample.filter();
        });

        function triggerEvent(el, evt) {
          const newEvt = document.createEvent('HTMLEvents');

          newEvt.initEvent(evt, false, true);

          el.dispatchEvent(newEvt);
        }

        // Set Form
        function prepareData(title, start, end, event = {}) {
          addEventToCalendarModal.show();

          $processEvent.textContent = 'Save';

          $titleField.value = title;

          eventDateRange.setDate([moment(start).format('MM/DD/YYYY'), moment(end).format('MM/DD/YYYY')])

          if (Object.keys(event).length) {
            let newTags = [];

            for (let i = 0; i < event.extendedProps.guestsField.length; i += 1) {
              newTags.push(event.extendedProps.guestsField[i]);
            }

            guestsField.setValue(newTags);

            repeatField.setValue(event.extendedProps.repeatField)
            $eventDescriptionLabel.value = event.extendedProps.eventDescriptionLabel
            $eventLocationLabel.value = event.extendedProps.eventLocationLabel
            eventColorField.setValue(event.classNames[0])

            triggerEvent($repeatLabel, 'change');
            triggerEvent($eventColorLabel, 'change');

            editableEvent = event;
          }
        }

        // Get Avatar
        function getAvatar(data) {
          let member = allMembers.filter(m => m.value === data)
          if (member.length) {
            member = member[0]
          } else {
            member = {
              value: data,
              src: null
            }
          }

          return member.src ? `<img class="avatar avatar-xs avatar-circle me-2" src="${member.src}">` : `
                        <div class="avatar avatar-xs avatar-soft-primary avatar-circle me-2">
                          <span class="avatar-initials">${member.value.charAt(0)}</span>
                        </div>
                    `
        }

        // Get Avatars HTML
        function getAvatars(members) {
          const $ul = document.createElement('ul');
          $ul.classList.add(
            'list-unstyled',
            'mb-0'
          );

          for (let i = 0; i < members.length; i += 1) {
            const $li = document.createElement('li');
            $li.classList.add(
              'd-flex',
              'align-items-center',
              'mb-2'
            );
            $li.innerHTML = `
  						${getAvatar(members[i])}
  						<span>${members[i]}</span>
  					`;

            $ul.appendChild($li);
          }

          return members.length > 0 ? $ul.outerHTML : false
        }

        // Clear Form
        function clearForm() {
          $titleField.value = '';
          $eventDescriptionLabel.value = '';
          $eventLocationLabel.value = '';
          repeatField.setValue('everyday')
          eventColorField.setValue('hs-team');
          eventDateRange.clear()

          editableEvent = {};

          triggerEvent($repeatLabel, 'change');
          triggerEvent($eventColorLabel, 'change');

          if (guestsField) {
            guestsField.clear();
          }

          $processEvent.text = 'Create Event';
        }

        // Filter
        filterSearchExample = new HSFullcalendarFilter(fullcalendarEditable);

        filterSearchExample.addFilter('byTitle', function (event) {
          return event.title.toLowerCase().indexOf($filterByTitle.value.toLowerCase()) !== -1;
        })

        filterSearchExample.addFilter('byCategory', function (event) {
          const selectedCategories = document.querySelectorAll('[data-filter] input:checked');
          let values = [];
          let show;

          for (let i = 0; i < selectedCategories.length; i += 1) {
            values.push(selectedCategories[i].value);
          }

          if (!selectedCategories.length) {
            return false;
          }

          show = false

          for (let i = 0; i < selectedCategories.length; i += 1) {
            show = values.includes(event.classNames[0]);
          }

          return show;
        });

       
        $filterByTitle.addEventListener('input', function () {
          filterSearchExample.filter();
        });

        for (let i = 0; i < $filters.length; i += 1) {
          $filters[i].addEventListener('change', function () {
            filterSearchExample.filter();
          });
        }

        filterSearchExample.filter();


        // ADD DRAGGABLE CLASS FOR CALENDAR
        // =======================================================
        const Draggable = FullCalendar.Draggable;

        new Draggable(document.querySelector('#external-events'), {
          itemSelector: '.fc-event'
        });


        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside', {
          onMini: function () {
            setTimeout(function () {
              fullcalendarEditable.updateSize()
            }, 200)
          },
          onFull: function () {
            setTimeout(function () {
              fullcalendarEditable.updateSize()
            }, 200)
          },
        }).init()

        setTimeout(() => {
          fullcalendarEditable.updateSize()
        }, 100)
      
      
      
      
      }
      
        
    })()
    
    
    
    
    
    
  </script>
  
 
  
  
  
  
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

</body>
</html>