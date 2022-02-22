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

        @if(session()->has('message'))

            <div class="alert alert-success" >

                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session()->get('message') }}
              </div>
            @endif

        <h1 class="display-2" style="padding-bottom: 10px" >Show All Products</h1>
        <hr>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    @foreach ($data as $product)

                  <td>{{ $product->title }}</td>
                  <td>{{ $product->description }}</td>
                  <td>{{ $product->quantity }}</td>
                  <td>{{ $product->price }}</td>
                  <td><img height="200" width="200" src="productimage/{{ $product->image }}" ></td>
                  <td><a class="btn btn-primary" href="{{ url('updateView',$product->id) }}">Update</a></td>
                  <td><a class="btn btn-danger" onclick="return confirm('Are You sure to delete this')" href="{{ url('deleteproduct',$product->id) }}">Delete</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
    <!-- main-panel ends -->
        @include('admin.script')
    <!-- End custom js for this page -->


  </body>
</html>
