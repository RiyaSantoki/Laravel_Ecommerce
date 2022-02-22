<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

  <head>
  <base href="/public">
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
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">Update Product</h1>

            @if(session()->has('message'))

            <div class="alert alert-success" >

                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session()->get('message') }}
              </div>
            @endif

            <form class="forms-sample" method="post" action="{{ url('updateproduct',$data->id) }}" enctype="multipart/form-data" >

                @csrf

              <div class="form-group">
                <label for="exampleInputName1">Product Title</label>
                <input type="text"
                name="title"
                required=""
                style="color: grey"
                class="form-control" id="exampleInputName1"
                value="{{ $data->title }}" >
              </div>

              <div class="form-group">
                <label for="exampleInputName1">Product Price</label>
                <input type="number"
                name="price"
                required=""
                style="color: grey"
                class="form-control" id="exampleInputName1"
                value="{{ $data->price }}" >
              </div>

             <div class="form-group">
                <label for="exampleInputName1">Description </label>
                <input type="text"
                name="description"
                required=""
                style="color: grey"
                class="form-control" id="exampleInputName1"
                value="{{ $data->description }}" >
              </div>

              <div class="form-group">
                <label for="exampleInputName1">Quantity </label>
                <input type="text"
                name="quantity"
                required=""
                style="color: grey"
                class="form-control" id="exampleInputName1"
                value="{{ $data->quantity }}" >
              </div>

              <div class="form-group">
                <label>Old Product Image</label>
                <img height="100" width="100" src="/productimage/{{ $data->image }}">
            </div>
            <div>
                <label>Change The Product Image</label>
                <input type="file" name="file">
            </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
            </form>
          </div>
        </div>
      </div>
    <!-- main-panel ends -->
        @include('admin.script')
    <!-- End custom js for this page -->


  </body>
</html>
