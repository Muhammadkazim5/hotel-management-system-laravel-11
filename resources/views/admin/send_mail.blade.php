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
                <h1 class="text-center">Send mail to {{$data->name}}</h1>  
                <form action="{{route('admin.mail',$data->id)}}" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for="greeting">Greeting</label>
                        <input type="text" name="greeting" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="body">Mail Body</label>
                        <textarea cols="3" name="body" class="form-control"> </textarea>
                    </div>
                  
                    <div class="form-group">
                        <label for="action_text">Action Text</label>
                        <input type="text" name="action_text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="action_url">Action Url</label>
                        <input type="text" name="action_url" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="end_line">End Line</label>
                        <input type="text" name="end_line" class="form-control">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Send Mail">
                </form>
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