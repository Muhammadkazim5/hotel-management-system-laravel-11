<!DOCTYPE html>
<html>

@include('admin.css')

<body>
   @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Dashboard</h2>
                </div>
            </div>
            <div class="m-5 ">
             <h2 class="text-center  mb-3">Gallery</h2>
                 <div class="row">
                     @foreach ($gallery as $gallery)
                     <div class="col-md-4">
                        <img  height="200px" width="300px" src="{{asset('gallery/'.$gallery->image)}}" alt="">
                        <a class="btn btn-sm btn-outline-danger mt-3 d-flex justify-content-center" href="{{route('admin.delete_image',$gallery->id)}}">Delete Image</a>
                    </div>
                        @endforeach
                 </div>
                 <div class="row">
                     <form action="{{route('admin.upload_gallery')}}" class="d-flex justify-content-center mt-5"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="image">Upload Image</label>
                            <input type="file" name="image" required>
                        </div>
                        <div>
                            <input class="btn btn-sm btn-outline-info" type="submit" value="Add Image">
                        </div>
                    </form>
                </div>
      
            </div>
      
    @include('admin.footer')
</div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admin-assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendor/popper.js/umd/popper.min.js')}}">
    </script>
    <script src="{{asset('admin-assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendor/jquery.cookie/jquery.cookie.js')}}">
    </script>
    <script src="{{asset('admin-assets/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/charts-home.js')}}"></script>
    <script src="{{asset('admin-assets/js/front.js')}}"></script>
</body>

</html>