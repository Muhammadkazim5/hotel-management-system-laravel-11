<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{asset('admin-assets/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="active">
            <a href="index.html"> <i class="icon-home"></i>Home </a>
        </li>
       
        <li>
            <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Hotel Rooms </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="{{route('admin.create_room')}}">Add Rooms</a></li>
                <li><a href="{{route('admin.view_room')}}">View Rooms</a></li>
             
            </ul>
        </li>
        <li>
            <a href="{{route('admin.bookings')}}"> <i class="icon-home"></i>Bookings </a>
        </li>
        <li>
            <a href="{{route('admin.view_gallery')}}"> <i class="icon-home"></i>Gallery </a>
        </li>
        <li>
            <a href="{{route('admin.view_messages')}}"> <i class="icon-home"></i>Messages </a>
        </li>
    </ul>
     
</nav>