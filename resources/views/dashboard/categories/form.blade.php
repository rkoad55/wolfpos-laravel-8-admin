

    <div class="card-body pad">

        <div class="row">
          <div class="form-group col-md-12">

            <label for="title">Name<span class="red-star">*</span></label>
            
            <input type="text" name="name" value="{{old('name', isset($categories)?$categories->name:'')}}" class="form-control input-default" id="title" placeholder="Title " >

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
        
        <label for="title">Category Image<span class="red-star">*</span></label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm" type="button">Upload</button>
            </div>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input">
                <label class="custom-file-label">Choose file</label>
            </div>
        </div>
        <?php if(isset($categories)){ ?><img src="{{asset($categories->image)}}" width="200"/><?php } ?>
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

        {!! Form::select('status', ['1' => 'Enable', '0' => 'Disable'] , isset($categories->status) && $categories->status == $categories->status ? $categories->status : 1, ['class'=>'form-control', '']) !!}

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