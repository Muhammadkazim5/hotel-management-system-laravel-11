
<div class="contact">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Contact Us</h2>
             </div>
             @if (Session::has('message'))
             <div class="alert alert-success d-flex justify-content-between align-items-center">
                {{Session::get('message')}}
                <button type="button" class="close bg-danger text-bold py-1 px-2 text-white border" data-bs-dismiss='alert'>X</button>
             </div>
             @endif
          </div>
       </div>
       <div class="row">
          <div class="col-md-6">
             <form id="request" class="main_form" method="POST" action="{{route('account.contact')}}">
               @csrf
                <div class="row">
                   <div class="col-md-12 ">
                      <input class="contactus" placeholder="Name"  @if (Auth::id()) 
                      value="{{Auth::user()->name}}"
                      @endif type="text" name="named" required> 
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Email" @if (Auth::id()) 
                      value="{{Auth::user()->email}}"
                      @endif type="email" name="email" required> 
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Phone Number"  @if (Auth::id()) 
                      value="{{Auth::user()->phone}}"
                      @endif  type="number" name="phone" required>                          
                   </div>
                   <div class="col-md-12">
                      <textarea class="textarea" name="message" placeholder="Message" type="type" required></textarea>
                   </div>
                   <div class="col-md-12">
                      <button type="submit" class="send_btn">Send</button>
                   </div>
                </div>
             </form>
          </div>
          <div class="col-md-6">
             <div class="map_main">
                <div class="map-responsive">
                   <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

 
