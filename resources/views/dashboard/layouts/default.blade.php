<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
-->
<!-- beautify ignore:start -->
<html
lang="en"
class="light-style layout-menu-fixed"
dir="ltr"
data-theme="theme-default"
data-assets-path="assets/"
data-template="vertical-menu-template-free"
>
<head>
   <meta charset="utf-8" />
   <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
   />

   <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

   <meta name="description" content="" />

   @vite(['resources/css/app.css', 'resources/js/app.js'])

   @include('dashboard.includes.style')
</head>

<body>
   <!-- Layout wrapper -->
   <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
         @include('dashboard.includes.sidebar')

      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
         <!-- Navbar -->

         <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
         >
            @include('dashboard.includes.navbar')
         </nav>

         <!-- / Navbar -->

         <!-- Content wrapper -->
         <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
               @yield('content')
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
               <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">
                     ©
                     <script>
                     document.write(new Date().getFullYear());
                     </script>
                     , made with ❤️ by
                     <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                  </div>
                  <div>
                     <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                     <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                     <a
                     href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                     target="_blank"
                     class="footer-link me-4"
                     >Documentation</a
                     >

                     <a
                     href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                     target="_blank"
                     class="footer-link me-4"
                     >Support</a
                     >
                  </div>
               </div>
            </footer>
            <!-- / Footer -->

            <!-- <div class="content-backdrop fade"></div> -->
         </div>
         <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
   </div>
   <!-- / Layout wrapper -->

   @stack('before-script')
   @include('dashboard.includes.script')
   @stack('after-script')
</body>
</html>
