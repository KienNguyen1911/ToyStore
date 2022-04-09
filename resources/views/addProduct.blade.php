@include('header')

<form method="post" style="width: 80%; margin:10px auto" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Product Name</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="productname">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Product Code</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="productcode">
    </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Product Price</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="productprice">
    </div>    
    <div class="form-group">
        <label for="exampleFormControlInput1">Product image</label>
        <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="" name="productimage">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Description</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="productdescription"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Primary</button>
  </form>