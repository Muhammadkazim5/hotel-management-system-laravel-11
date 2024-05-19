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
            <div class="m-5">
                <h4 class="text-center">Create Room</h4>
                <form action="{{route('admin.add_room')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="room_title">Room Title</label>
                        <input type="text" name="room_title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="room_description">Room Description</label>
                        <textarea name="room_description" class="form-control"> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="room_image">Room Image</label>
                        <input type="file" name="room_image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="room_price">Room Price</label>
                        <input type="number" name="room_price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="room_type">Room Type</label>
                        <select name="room_type" class="form-select">
                            <option selected value="regular">Regular</option>
                            <option value="premium">Premium</option>
                            <option value="deluxe">Deluxe</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="room_wifi">Room Wifi</label>
                        <select name="room_wifi" class="form-select">
                            <option selected value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Add Room">
                </form>
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