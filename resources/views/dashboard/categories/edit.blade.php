{{-- Extends layout --}}
@extends('layout.default')

@section('content')



    <section class="content">

        <div class="row white-box ">

            <div class="col-12">

            <div class="card card-dark  card-outline">

                <div class="card-header">

                 <h3 class="card-title">Edit Product</h3>

                </div>
                @if (\Session::has('status'))

<div class="alert alert-success alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
                        <strong>Success!</strong> Product Updated Successfully.
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                    </div>
@endif
                <div class="card-body pad">

                   

                    {{ Form::open(array('url' => '/category/update/', 'id' => 'categories-add','class' => 'form-horizontal', 'role' => 'form', 'enctype'=>'multipart/form-data','method'=>'PATCH')) }}
                        <input type="hidden" name="category_id" value="{{$categories->id}}"/>
                        @include('dashboard.categories.form', ['submitButtonText'=>'Update'])

                    {{ Form::close() }}

                </div>

          </div>

        </div>

      </div>

    </section>

<script>

// CKEDITOR.replace( 'description' );

</script>

@endsection

