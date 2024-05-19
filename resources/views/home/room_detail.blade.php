@extends('home.layout')
@include('home.header')
    <div  class="our_room">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>Room Detail</h2>
                    <p>Lorem Ipsum available, but the majority have suffered </p>
                 </div>
              </div>
           </div>
           <div class="row"  >
            
              <div class="col-md-8">
                 <div id="serv_hover"  class="room" >
                    <div class="room_img">
                       <figure><img style="height: 45%" src="{{asset('room/'.$data->image)}}" alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                       <h3>{{$data->room_title}}</h3>
                       <p>Description : {{$data->description}}</p>
                       <p>Price : {{$data->price}}</p>
                       <p>Room Type : {{$data->room_type}}</p>
                       <p>Free Wifi : {{$data->wifi}}</p>
                    </div>
                 </div>
              </div>
              <div class="col-md-4  p-2"   >
               <h2 class="text-center text-bold">Book Room</h2>
               @if (Session::has('message'))
               <div class="alert alert-success d-flex justify-content-between align-items-center">
                  {{Session::get('message')}}
                  <button type="button" class="close bg-danger text-bold py-1 px-2 text-white border"  data-bs-dismiss="alert">X</button>
               </div>
                @endif
               @if ($errors)
               @foreach ($errors->all() as $errors)
                  <li class="text-danger">{{$errors}}</li>
               @endforeach  
               @endif
              
                <form action="{{route('account.add_booking',$data->id)}}" method="POST">
                  @csrf
                  <div class="form-group mb-4">
                     <label for="named">Name:</label>
                     <input type="text" name="named" class="form-control "
                     @if (Auth::id()) 
                     value="{{Auth::user()->name}}">
                     @endif
                  </div>
                  <div class="form-group mb-4">
                     <label for="email">Email:</label>
                     <input type="text" name="email" class="form-control"
                     @if (Auth::id()) 
                     value="{{Auth::user()->email}}"
                     @endif
                     >
                  </div>
                  <div class="form-group mb-4">
                     <label for="phone">Phone:</label>
                     <input type="text" name="phone" class="form-control"
                     @if (Auth::id()) 
                     value="{{Auth::user()->phone}}"
                     @endif
                     >
                  </div>
                  <div class="form-group mb-4">
                     <label for="start_date">Start Date:</label>
                     <input type="date" name="start_date" id="start_date" class="form-control">
                  </div>
                  <div class="form-group mb-4">
                     <label for="end_date">End Date:</label>
                     <input type="date" name="end_date" id="end_date" class="form-control">
                  </div>
                  <input type="submit" class="btn btn-sm btn-primary mt-2" value="Book Room">
                </form>
              </div>
          
           </div>
        </div>
     </div>

@include('home.footer')
<script type="text/javascript">
$(finction(){
   var today=new Date();
   var month=today.getMonth()+1;
   var day=today.getDay();
   var year=today.getFullYear();
   if(month<10){
      month='0'+month.tostring();
   }
   if(day<10){
      day='0'+day.tostring();
   }
   var maxyear=year+'-'+month+'-'+day;
   $('#start_date').attr('min',maxyear);
   $('#end_date').attr('min',maxyear);
})
</script>
