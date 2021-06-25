{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
			<div class="container-fluid">
			@if (\Session::has('status'))

<div class="alert alert-success alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
                        <strong>Success!</strong> Addon Deleted Successfully.
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                    </div>
@endif
				<div class="row">
       



              <div class="card-tools">

                <a href="{{ url('/addons/create') }}" class="fcbtn btn btn-outline btn-primary btn-1b">Add Addon</a>

              </div>
			  
           
			

           
					<div class="col-xl-12">
								<div class="table-responsive">
									<table id="example-5" class="display mb-4 dataTablesCard">
										<thead>
                                            <tr>
												
                                                
                                                <th><strong class="font-w600 wspace-no">Name</strong></th>
                                                
                                                <th><strong class="font-w600 wspace-no">Price</strong></th>
                                                
                                                <th><strong class="font-w600 wspace-no">Image</strong></th>
                                                
                                                <th>Status</th>
												<th>...</th>
                                            </tr>
                                        </thead>
										<tbody>
                    @if(count($addons))

@foreach($addons as $key => $value)

<tr id="row_{{$value->id}}">

  <td>{{$value->name}}</td>
  
  <td>{{ $value->price}}</td>
  <!-- <td>{{ $value->sale_price}}</td> -->
  <td><img src="{{ asset($value->image) }}" width="100" /> </td>

  <td>

  <div id="statusBtn_{{$value->id}}" class="btn-group">

  @if($value->status == 1)

      <button type="button"  class="fcbtn btn btn-info btn-outline btn-1d"> Active </button>

      

  @else

      <button type="button" class="fcbtn btn btn-danger btn-outline btn-1d">Inactive</button>

      

  @endif



  </div>

  </td>

  <td>

  <div class="dropdown ml-auto">
		<div class="btn-link" data-toggle="dropdown" aria-expanded="false">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</div>
		<div class="dropdown-menu dropdown-menu-right">
        
			<a class="dropdown-item text-black" href="#" data-toggle="modal" data-target="#basicModal{{$value->id}}">
			<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
			<path d="M15 9L9 15" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
			<path d="M9 9L15 15" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
			</svg>
															Delete
			</a>
			<a class="dropdown-item text-black" href="{{ url('/addons/'.$value->id.'/edit') }}">
			<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
			<path d="M12 16V12" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
			<path d="M12 8H12.01" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
			</svg>
															Edit
			</a>
			
		</div>
	</div>
	<div class="modal fade" id="basicModal{{$value->id}}">
                                        <div class="modal-dialog" role="document">
										<form  method="POST" action="{{ url('/addons/delete') }}">
                      						@csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Warning</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Are You Sure You Want To Delete This Addon.</div>
												<input type="hidden" name="addon_id" value="{{$value->id}}"/>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                </div>
                                            </div>
										</form>
                                        </div>
                                    </div>
  </td>

 



</tr>

@endforeach

@endif
										</tbody>
									</table>
								</div>
						</div>
					</div>
				</div>
     

@endsection			