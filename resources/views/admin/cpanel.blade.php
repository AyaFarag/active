@include('layouts.app')



{{--  bootstrap nav  --}}
<div class="container bg-white p-5" style="height: 700px">
<h2 class=""> Admin cPanel </h2>
<div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Add Product</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Account Setting</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">example 1</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">example 2</a>
            {{--  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Wish List</a>  --}}
          </div>
        </div>







        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">


            {{--  add product form  --}}
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><h1>Add Product </h1>

             <div> 
                <form action="{{route('product.store')}}" method="POST">
                    @csrf
                  <div class="form-row">
                    <div class="form-group col-md-9">
                      <label for="inputEmail4">Item Name</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="name" name="name">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputEmail4">Weight</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="weight" name="weight">
                    </div>
                  </div>

                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label class="mr-sm-1" for="inlineFormCustomSelect" name="brand">Brand</label>
                    <select class="custom-select mr-sm-1" id="inlineFormCustomSelect" name="brand">
                      <option selected>Choose Brand</option>
                      @foreach ($brands as $brand)
                        <option value="{{$brand->brand_id}}">{{$brand->name}}</option>
                      @endforeach
                    </select>    
                  </div>

                  <div class="form-group col-md-3">
                      <label class="mr-sm-1" for="inlineFormCustomSelect" name="quality">Quality</label>
                      <select class="custom-select mr-sm-1" id="inlineFormCustomSelect" name="quality">
                        <option selected>Choose Quality</option>
                        @foreach ($quality as $quality)
                           <option value="{{$quality->quality_id}}">{{$quality->name}}</option>
                        @endforeach
                      </select>    
                    </div>

                  <div class="form-group col-md-3">
                    <label for="inputEmail4">Model</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="model" name="model"> 
                  </div>  
                  
                  <div class="form-group col-md-3">
                      <label for="inputEmail4" >Quantity</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="number" name="quantity"> 
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label class="mr-sm-1" for="inlineFormCustomSelect" name="category">Category</label>
                        <select class="custom-select mr-sm-1" id="inlineFormCustomSelect" name="category">
                          <option selected>Choose Category</option>
                          @foreach ($categories as $category)
                          <option value="{{$category->category_id}}">{{$category->name}}</option>
                        @endforeach
                        </select>
                      </div>

                    <div class="form-group col-md-3">
                      <label class="mr-sm-1" for="inlineFormCustomSelect" name="condition">Condition</label>
                      <select class="custom-select mr-sm-1" id="inlineFormCustomSelect" name="condition">
                        <option selected>Choose Condition</option>
                        @foreach ($condition as $condition)
                          <option value="{{$condition->condition_id}}">{{$condition->name}}</option>
                        @endforeach
                      </select>
                   </div>

                 <div class="form-group col-md-3">
                    <label for="inputEmail4">Color</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="color" name="color">
                  </div>

                <div class="form-group col-md-3">
                  <label for="inputEmail4">Price</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="price" name="price">
                  </div>
                </div>

                <div class="form-row"> 
                  <div class="form-group col-md-12">
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="file()" multiple="yes">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>
                </div>
                
                <div class="form-row"> 
                  <div class="form-group col-md-12">
                    <label for="des">Description</label>
                    <textarea class="form-control" rows="5" placeholder="Item Description" id="des" name="description"></textarea>
                  </div>
                </div>

                  <button type="submit" class="btn btn-dark btn-block">Add Product</button>
                </form>
              </div>
            </div>
          
          {{--  end product form  --}}


            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><h1> Account Setting</h1></div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><h1> example 1</h1></div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"><h1> example 2</h1></div>
          </div>
        </div>


        </div>
      </div>
