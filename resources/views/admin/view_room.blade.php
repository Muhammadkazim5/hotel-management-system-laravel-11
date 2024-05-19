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
              <table class="table table-striped ">
                <tr class="text-white">
                    <th>Room Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Wifi</th>
                    <th>Room Type</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                @foreach ($rooms as $room )
                <tr class="text-white">
                        <td>{{$room->room_title}}</td>
                        <td>{{$room->description}}</td>
                        <td>{{$room->price}}$</td>
                        <td>{{$room->wifi}}</td>
                        <td>{{$room->room_type}}</td>
                        <td>
                            @if ($room->image!='')    
                            <img width="100" src=" {{asset('room/'.$room->image)}}">
                            @endif
                        </td>
                        <td>
                            <a onclick="return confirm('Are you sure to delete this')" href="{{route('admin.delete_room',$room->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        </td> 
                        <td>
                            <a href="{{route('admin.edit_room',$room->id)}}" class="btn btn-sm btn-success">Update</a>
                        </td>
                    </tr>
                    @endforeach
              </table>
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