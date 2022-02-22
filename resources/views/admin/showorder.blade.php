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
    <div style="padding-top:100px; text-align:center" >

        <h1 class="display-2" style="padding-bottom: 10px" >Show Order</h1>
        <hr>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Customer Name</th>
                  <th>Customer Phone</th>
                  <th>Address</th>
                  <th>Product Title</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              @foreach ($order as $orders)
              <tbody>
                <tr>
                    <td>{{ $orders->name }}</td>
                    <td>{{ $orders->phone }}</td>
                    <td>{{ $orders->address }}</td>
                    <td>{{ $orders->product_title }}</td>
                    <td>{{ $orders->quantity }}</td>
                    <td>{{ $orders->price }}</td>
                    <td>{{ $orders->status }}</td>
                    <td><a class="btn btn-success" href="{{ url('updatestatus',$orders->id) }}">Delivered</a></td>
                </tr>
              </tbody>
              @endforeach

            </table>
        </div>

    <!-- main-panel ends -->
        @include('admin.script')
    <!-- End custom js for this page -->


  </body>
</html>
