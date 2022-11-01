<?php 
  include 'includes/session.php';
?>
<!DOCTYPE html>

<!-- =========================================================
* MoneyMCS
==============================================================
* 
* Created by: 
* 
* 
=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>MoneyMCS - Home</title>

    <meta name="description" content="" />

    <?php include 'includes/headers.php'; ?>
    

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!-- Paypal Express -->
    <!-- <script src="https://www.paypalobjects.com/api/checkout.js"></script> -->
    <!-- <script src="https://www.paypal.com/sdk/js?client-id=ASQAcFkDyzt_DJLIp2B-5fvNvKwB8RmF56Z82REWkieRIppWs7XoDGZuFJabXe1bly8X8ZncyuXDEULP" data-sdk-integration-source="button-factory"></script> -->

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>
  
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="#" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img aria-hidden="true" class="object-contain w-full h-full" src="../assets/img/earnmoney.png" width="50">
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">MoneyMCS</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item ">
              <a href="home" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Home</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item ">
              <a href="resources" class="menu-link">
                <i class='menu-icon tf-icons bx bx-book-reader'></i>
                <div data-i18n="Basic">Resource Library</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="commissions" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-user-detail'></i>
                <div data-i18n="Basic">Commissions/Referrals</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="clients" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-user-rectangle'></i>
                <div data-i18n="Basic">Clients</div>
              </a>
            </li>

            <!-- <li class="menu-item">
              <a href="#" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-user-plus'></i>
                <div data-i18n="Basic">Add Clients</div>
              </a>
            </li> -->

            <li class="menu-item">
              <a href="downlines" class="menu-link">
                <i class='menu-icon tf-icons bx bx-git-branch'></i>
                <div data-i18n="Basic">Downlines</div>
              </a>
            </li>

            <li class="menu-item active">
              <a href="contacts" class="menu-link">
                <i class='menu-icon tf-icons bx bx-phone-outgoing'></i>
                <div data-i18n="Basic">Contact Us</div>
              </a>
            </li>


           
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  MoneyMCS
                  <!-- <i class="bx bx-search fs-4 lh-0"></i> -->
                  <!-- <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  /> -->
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item lh-1 me-3">
                  <button class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#smallModal" data-backdrop="static" data-keyboard="false" >Subscription </button>
                </li>
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                    <img src="../assets/img/avatars/default.jpg" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/default.jpg" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $admin['firstname'].' '.$admin['lastname']; ?></span>
                            <small class="text-muted"><?php echo $admin['level']; ?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="subscription">
                      <i class='bx bx-detail me-2'></i>
                        <span class="align-middle">Subscription History</span>
                      </a>
                    </li>
                    <!-- <li>
                      <a class="dropdown-item" href="transactions">
                        <i class='bx bx-folder-open'></i>
                        <span class="align-middle">Transactions</span>
                      </a>
                    </li> -->
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-start row align-center">
                      <div class="col-sm-6 p-5">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Get in Touch</h5>
                          <p class="mb-4">
                            Fill in the form to start a conversation
                          </p>
                          <a class="mb-4 " href="#">
                            <i class="m-2 bx bx-map-pin"></i>
                            <span class="text-dark">6655 W Sahara Ave #B200, Las Vegas, NV 89146</span>
                          </a>
                          <div>
                          <a class="mb-4" href="#">
                            <i class="m-2 bx bx-phone"></i>
                            <span class="text-dark">(702) 930-3131</span>
                          </a>
                          </div>
                          <div>
                          <a class="mb-4" href="#">
                            <i class="m-2 bx bx-envelope"></i>
                            <span class="text-dark">info@moneymcs.com</span>
                          </a>
                          </div>
                          
                        </div>
                        
                        
                      </div>
                      <div class="col-sm-6 p-5 text-center text-sm-left ">
                        <div class="card-body pb-0 px-0 px-md-4">
                        <form id="formAuthentication" class="mb-3" action="submit_contact" method="POST">
                          <div class="mb-3">
                            <input
                              type="text"
                              class="form-control"
                              id="fullname"
                              name="fullname"
                              placeholder="Full Name" autocomplete="false"
                              autofocus="true"
                            />
                          </div>
                          <div class="mb-3">
                            <input
                              type="text"
                              class="form-control"
                              id="email"
                              name="email"
                              placeholder="Email" autocomplete="false"
                              autofocus="true"
                            />
                          </div>
                          <div class="mb-3">
                            <input
                              type="text"
                              class="form-control"
                              id="telnumber"
                              name="telnumber"
                              placeholder="Telephone Number" autocomplete="false"
                              autofocus="true"
                            />
                          </div>
                          <div class="mb-3">
                            <button class="btn btn-success d-grid w-100" name="submit_contact" type="submit">Submit</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            <!-- / Content -->
            
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  <!-- ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script> -->
                  <!-- , made with ❤️ by -->
                  <!-- <a href="#" target="_blank" class="footer-link fw-bolder"></a> -->
                </div>
                <div>
                  <!-- <a href="#" class="footer-link me-4" target="_blank"></a> -->
                  <!-- <a
                    href=""
                    target="_blank"
                    class="footer-link me-4"
                    ></a
                  > -->
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->

         <?php include 'includes/subs_form.php'; ?>

      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


    <?php include 'includes/payment_script.php'; ?>
  </body>
</html>
