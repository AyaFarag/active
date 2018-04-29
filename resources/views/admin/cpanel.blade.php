@include('layouts.header')
@include('admin.adminheader')


{{-- @section('x') --}}
<div class="card border border-warning">
  <div class="card-header bg-warning  text-dark" style="height:50px; line-height:1">
      <strong style="font-size:1.8em">Admin cPanel</strong> 
      <span><a href="{{url('home')}}" class="text-secondary ml-5">Back to home</a></span>
  </div>

<div class="">
{{--  bootstrap nav  --}}
<div class=" bg-white" style="height: 700px">
<div class="row">

        <div class="col-2 bg-dark " style="height: 700px; padding-top:20px;"> 
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link text-light active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Add Product</a>
            <a class="nav-link text-light" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Add Site Content</a>
            <a class="nav-link text-light" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">example 1</a>
            <a class="nav-link text-light" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">example 2</a>
            {{--  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Wish List</a>  --}}
          </div>
        </div>







        <div class="col-10" style="padding-left:15px; padding-right:30px">
          <div class="tab-content" id="v-pills-tabContent">
              <div style="padding-top:15px;">@include('admin.smalldiv')</div>
            {{--  add product form  --}}
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><h1>Add Product </h1>
              @include('admin.addproduct')
         
              {{--  add site content  --}}
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><h1> Add Site Content</h1>
            @include('admin.adding')
            </div>
            
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><h1> example 1</h1>
            
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"><h1> example 2</h1></div>
          </div>
        </div>


        </div>
      </div>

    </div>
  </div>
{{-- @endsection --}}

@include('layouts.footer')