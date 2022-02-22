<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

  <head>
   @include('admin.css')
  </head>

  <body>
      <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
      </div>
    <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
    <!-- partial -->
        <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
    <!-- partial -->
        @include('admin.body')
    <!-- main-panel ends -->
        @include('admin.script')
    <!-- End custom js for this page -->


  </body>
</html>
