

    <div class="card-body pad">

        <div class="row">
          <div class="form-group col-md-12">

            <label for="title">Name<span class="red-star">*</span></label>
            
            <input type="text" name="name" value="{{old('name', isset($users)?$users->name:'')}}" class="form-control input-default" id="title" placeholder="Title " >

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
        
            <label for="title">Email<span class="red-star">*</span></label>

            <input type="email" name="email" value="{{old('email', isset($users)?$users->email:'')}}" class="form-control " id="title" placeholder="Email" >

            @if ($errors->has('email'))

            <span style="width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #f35757;" role="alert">

              <strong>{{ $errors->first('email') }}</strong>

            </span>

            @endif

        </div>
        
        

         
        <div class="form-group col-md-12">
        
        <label for="title">Account Type<span class="red-star">*</span></label>


        <div class="dropdown bootstrap-select form-control dropup show">
        <select class="form-control select" name="type" id="sel1" tabindex="-98">
        <?php if(isset($users)){ ?><option>{{$users->type}}</option><?php } ?> 
                                              @if(session('type') =='Super'  )  <option>Master</option> @endif
                                                <option>User</option>
                                            </select></div>

    </div>


    <div class="form-group col-md-12 box">
        
        <label for="title">Select Master<span class="red-star">*</span></label>
        <div class="dropdown bootstrap-select form-control dropup show">

        @if(session('type') =='Master')

        <input type="hidden" name="master_id" value="{{session('id') }}" />

        @else

        <select class="form-control" name="master_id" id="single-select" tabindex="-98">
         
        @foreach($users_list  as $key => $list_value) 
        <option value="{{ $list_value->id }}" <?php if(isset($users) && $users->master_id==$list_value->id ){ ?>selected<?php } ?> >{{ $list_value->name }}</option>
                                    
        @endforeach
        </select>
        @endif
        </div>

    </div>

    <div class="form-group col-md-12">
        
            <label for="title">Password<span class="red-star">*</span></label>

            <input type="password" name="password" value="" class="form-control " id="title" placeholder="Password" >

            @if ($errors->has('password'))

            <span style="width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #f35757;" role="alert">

              <strong>{{ $errors->first('password') }}</strong>

            </span>

            @endif

        </div>
    <!-- <div class="form-group col-md-12">
        
        <label for="title">Description<span class="red-star">*</span></label>
        <textarea class="form-control" name="description" rows="4" id="comment" ><?php if(isset($users)){ ?>{{$users->description}}<?php } ?></textarea>
        @if ($errors->has('description'))

<span style="width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #f35757;" role="alert">

  <strong>{{ $errors->first('description') }}</strong>

</span>

@endif
    </div> -->
    <!-- <div class="form-group col-md-12">
        
        <label for="title">Price<span class="red-star">*</span></label>
        <div class="input-group mb-3  input-primary">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="number" class="form-control" name="price" value="{{old('price', isset($users)?$users->price:'')}}" >
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
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="number" class="form-control" name="sale_price" value="{{old('sale_price', isset($users)?$users->sale_price:'')}}">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
        </div>
        

    </div> -->
    <div class="form-group col-md-12">
        
        <label for="title">Profile Image<span class="red-star">*</span></label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm" type="button">Upload</button>
            </div>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input">
                <label class="custom-file-label">Choose file</label>
            </div>
        </div>
        <?php if(isset($users)){ ?><img src="{{asset($users->image)}}" width="200"/><?php } ?>
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

        {!! Form::select('status', ['1' => 'Enable', '0' => 'Disable'] , isset($users->status) && $users->status == $users->status ? $users->status : 1, ['class'=>'form-control', '']) !!}

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
    <script>
        $(document).ready(function(){

        <?php if(!isset($users)) { ?>
            $(".box").hide();
        <?php } ?>

        <?php if(isset($users) && $users->type=='Master') { ?>
            $(".box").hide();
        <?php } ?>
            $(".select").change(function(){
               
            var optionValue = $(this).val();
                    
            if(optionValue=='User'){
                $(".box").show();
                
            } else{
                $(".box").hide();
            }
      
    });
});
</script>

    <script type="application/javascript">
    $('input[type="file"]').change(function(e){
       
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>