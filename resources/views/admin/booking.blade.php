<!DOCTYPE html>
<html>

@include('admin.css')

<body class="w-full">
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
            <div class="m-2">
                <h4 class="text-center mb-2">Bookings</h4>
                <table class="table table-striped ">
                    <tr class="text-white">
                        <th>Room Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        {{-- <th>Phone</th> --}}
                        <th>Arrival Date</th>
                        <th>Leaving Date</th>
                        <th>Status</th>
                        <th>Room Title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Delete</th>
                        <th>Status Update</th>
                    </tr>
                    @foreach ($bookings as $booking )
                    <tr class="text-white">
                            <td>{{$booking->room_id}}</td>
                            <td>{{$booking->name}}</td>
                            <td>{{$booking->email}}</td>
                            {{-- <td>{{$booking->phone}}</td> --}}
                            <td>{{$booking->start_date}}</td>
                            <td>{{$booking->end_date}}</td>
                            <td>
                                @if ($booking->status=='Approve')
                              <span class="text-info">{{$booking->status}}</span>  
                              @elseif ($booking->status=='Rejected')
                              <span class="text-danger">{{$booking->status}}</span>  
                              @elseif ($booking->status=='waiting')
                              <span class="text-warning">{{$booking->status}}</span>  
                              @endif
                              
                            </td>
                            <td>{{$booking->room->room_title}}</td>
                            <td>{{$booking->room->price}}</td>
                            <td>
                                <img width="70px" src="{{asset('room/'.$booking->room->image)}}" alt="">
                            </td>
                          <td>
                            <a onclick="return confirm('Are you Sure to delete this');" href="{{route('admin.delete_booking',$booking->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                          </td>
                          <td > 
                            <a class="btn btn-sm btn-outline-info mb-2" href="{{route('admin.book_approve',$booking->id)}}">Approve</a>
                            <a class="btn btn-sm btn-danger btn-outline-warning" href="{{route('admin.book_reject',$booking->id)}}">Rejected</a>
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