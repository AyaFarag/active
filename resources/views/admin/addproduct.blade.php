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
            <select class="custom-select mr-sm-1" style="height:34px" id="inlineFormCustomSelect" name="brand">
              <option selected>Choose Brand</option>
              @foreach ($brands as $brand)
                <option value="{{$brand->brand_id}}">{{$brand->name}}</option>
              @endforeach
            </select>    
          </div>

          <div class="form-group col-md-3">
              <label class="mr-sm-1" for="inlineFormCustomSelect" name="quality">Quality</label>
              <select class="custom-select mr-sm-1" style="height:34px" id="inlineFormCustomSelect" name="quality">
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
                <select class="custom-select mr-sm-1" style="height:34px" id="inlineFormCustomSelect" name="category">
                  <option selected>Choose Category</option>
                  @foreach ($categories as $category)
                  <option value="{{$category->category_id}}">{{$category->name}}</option>
                @endforeach
                </select>
              </div>

            <div class="form-group col-md-3">
              <label class="mr-sm-1" for="inlineFormCustomSelect" name="condition">Condition</label>
              <select class="custom-select mr-sm-1" style="height:34px" id="inlineFormCustomSelect" name="condition">
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
              <div class="">
                  <input type="file"  id="customFile" name="file()" multiple> 
                  
              </div>
            </div>
        </div>
        
        <div class="form-row"> 
          <div class="form-group col-md-12">
            <label for="des">Description</label>
            <textarea class="form-control" rows="5" placeholder="Item Description" id="des" name="description"></textarea>
          </div>
        </div>

          <button type="submit" class="btn btn-warning btn-block">Add Product</button>
        </form>
      </div>
    </div>
   {{--  end product form  --}}