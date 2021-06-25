



    <div class="card-body pad">



        <div class="row">

          <div class="form-group col-md-12">



            <label for="title">Name<span class="red-star">*</span></label>

            

            <input type="text" name="name" value="{{old('name', isset($products)?$products->name:'')}}" class="form-control input-default" id="title" placeholder="Title " >



            @if ($errors->has('name'))



<span class="" style="width: 100%;

    margin-top: 0.25rem;

    font-size: 80%;

    color: #f35757;" role="alert">



  <strong>{{ $errors->first('name') }}</strong>



</span>



@endif



        </div>

         



        

        <div class="form-group col-md-12">

        

            <label for="title">Brand<span class="red-star">*</span></label>



            <input type="text" name="brand" value="{{old('brand', isset($products)?$products->brand:'')}}" class="form-control " id="title" placeholder="Brand" >



            @if ($errors->has('brand'))



            <span style="width: 100%;

    margin-top: 0.25rem;

    font-size: 80%;

    color: #f35757;" role="alert">



              <strong>{{ $errors->first('brand') }}</strong>



            </span>



            @endif



        </div>

        

        <div class="form-group col-md-12 box">

        

        <label for="title">Select Category<span class="red-star">*</span></label>

        <div class="dropdown bootstrap-select form-control dropup show">

        <select class="form-control" name="category_id" id="single-select" tabindex="-98">

         

        @foreach($category_list  as $key => $list_value) 

        <option value="{{ $list_value->id }}" <?php if(isset($products) && $products->category_id==$list_value->id ){ ?>selected<?php } ?> >{{ $list_value->name }}</option>

                                    

        @endforeach

        </select>

        </div>



    </div>



         

        <div class="form-group col-md-12">

        

        <label for="title">Availability<span class="red-star">*</span></label>





        <div class="dropdown bootstrap-select form-control dropup show">

        <select class="form-control" name="availability" id="sel1" tabindex="-98">

        <?php if(isset($products)){ ?><option>{{$products->availability}}</option><?php } ?> 

                                                <option>In stock</option>

                                                <option>Out of stock</option>

                                            </select></div>



    </div>

    <div class="form-group col-md-12">

        

        <label for="title">Description<span class="red-star">*</span></label>

        <textarea class="form-control" name="description" rows="4" id="comment" ><?php if(isset($products)){ ?>{{$products->description}}<?php } ?></textarea>

        @if ($errors->has('description'))



<span style="width: 100%;

    margin-top: 0.25rem;

    font-size: 80%;

    color: #f35757;" role="alert">



  <strong>{{ $errors->first('description') }}</strong>



</span>



@endif

    </div>

    <div class="form-group col-md-12">

        

        <label for="title">Price<span class="red-star">*</span></label>

        <div class="input-group mb-3  input-primary">

                                            <div class="input-group-prepend">

                                                <span class="input-group-text">£</span>

                                            </div>

                                            <input type="text" class="form-control" name="price" value="{{old('price', isset($products)?$products->price:'')}}" >

                                            <div class="input-group-append">

                                                <span class="input-group-text">.00</span>

                                            </div>

        </div>

        @if ($errors->has('price'))



            <span style="width: 100%;

    margin-top: 0.25rem;

    font-size: 80%;

    color: #f35757;" role="alert">



              <strong>{{ $errors->first('price') }}</strong>



            </span>



            @endif



    </div>

    <div class="form-group col-md-12">

        

        <label for="title">Sale Price<span class="red-star"></span></label>

        <div class="input-group mb-3  input-primary">

                                            <div class="input-group-prepend">

                                                <span class="input-group-text">£</span>

                                            </div>

                                            <input type="text" class="form-control" name="sale_price" value="{{old('sale_price', isset($products)?$products->sale_price:'')}}">

                                            <div class="input-group-append">

                                                <span class="input-group-text">.00</span>

                                            </div>

        </div>

        



    </div>

    <div class="form-group col-md-12">

        

        <label for="title">Product Image<span class="red-star">*</span></label>

        <div class="input-group mb-3">

            <div class="input-group-prepend">

                <button class="btn btn-primary btn-sm" type="button">Upload</button>

            </div>

            <div class="custom-file">

                <input type="file" name="image" class="custom-file-input">

                <label class="custom-file-label">Choose file</label>

            </div>

        </div>

        <?php if(isset($products)){ ?><img src="{{asset($products->image)}}" width="200"/><?php } ?>

        @if ($errors->has('image'))



<span style="width: 100%;

margin-top: 0.25rem;

font-size: 80%;

color: #f35757;" role="alert">



  <strong>{{ $errors->first('image') }}</strong>



</span>



@endif



    </div>

   <div class="form-group has-feedback col-md-12{{ $errors->has('status') ? ' has-error' : '' }}">



        {!! Form::label('status', 'Status') !!}



        {!! Form::select('status', ['1' => 'Enable', '0' => 'Disable'] , isset($products->status) && $products->status == $products->status ? $products->status : 1, ['class'=>'form-control', '']) !!}



        @if ($errors->has('status'))



                <span class="help-block">



                        <strong>{{ $errors->first('status') }}</strong>



                </span>



        @endif



    </div>











        </div>



    </div>



    <div class="card-footer">



        <button type="submit" class="fcbtn btn btn-primary btn-outline btn-1d">Submit</button>



    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script type="application/javascript">

    $('input[type="file"]').change(function(e){

       

        var fileName = e.target.files[0].name;

        $('.custom-file-label').html(fileName);

    });

</script>

