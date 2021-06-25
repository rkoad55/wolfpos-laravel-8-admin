{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-5 align-items-start">
					{{-- <div class="input-group search-area d-inline-flex">
						<input type="text" class="form-control" placeholder="Search here">
						<div class="input-group-append">
							<span class="input-group-text"><i class="flaticon-381-search-2"></i></span>
						</div>
					</div> --}}
					{{-- <div class="dropdown ml-auto d-inline-block">
						<div class="btn btn-outline-primary btn-rounded dropdown-toggle" data-toggle="dropdown">
							<svg class="mr-3" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0)">
								<path d="M22.4276 2.856H21.8676V1.428C21.8676 0.56 21.2796 0 20.4396 0C19.5996 0 19.0116 0.56 19.0116 1.428V2.856H9.71557V1.428C9.71557 0.56 9.15557 0 8.28757 0C7.41957 0 6.85957 0.56 6.85957 1.428V2.856H5.57157C2.85557 2.856 0.55957 5.152 0.55957 7.868V23.016C0.55957 25.732 2.85557 28.028 5.57157 28.028H22.4276C25.1436 28.028 27.4396 25.732 27.4396 23.016V7.868C27.4396 5.152 25.1436 2.856 22.4276 2.856ZM5.57157 5.712H22.4276C23.5756 5.712 24.5836 6.72 24.5836 7.868V9.856H3.41557V7.868C3.41557 6.72 4.42357 5.712 5.57157 5.712ZM22.4276 25.144H5.57157C4.42357 25.144 3.41557 24.136 3.41557 22.988V12.712H24.5556V22.988C24.5836 24.136 23.5756 25.144 22.4276 25.144Z" fill="#EA4989"></path>
								</g>
								<defs>
								<clipPath id="clip0">
								<rect width="28" height="28" fill="white"></rect>
								</clipPath>
								</defs>
							</svg>
							Today
						</div>
						<div class="dropdown-menu dropdown-menu-left">
							<a class="dropdown-item" href="#">A To Z List</a>
							<a class="dropdown-item" href="#">Z To A List</a>
						</div>
					</div> --}}
					
				</div>
				<div class="row">
					<div class="col-xl-12">
								<div class="table-responsive">
									<table id="order_list" class="display mb-4 dataTablesCard">
										<thead>
                                            <tr>
                                                <th><strong class="font-w600">Order ID</strong></th>
                                                <th><strong class="font-w600">Date</strong></th>
                                                <th><strong class="font-w600 wspace-no">Restourant Name</strong></th>
                                                <th><strong class="font-w600">Transcation ID</strong></th>
                                                <th><strong class="font-w600">Amount</strong></th>
                                                <th><strong class="font-w600 wspace-no">Status Order</strong></th>
                                                
                                            </tr>
                                        </thead>
										<tbody>
											@foreach($orders as $key => $value)
												
											
											<tr>
												<td>#{{ $value->authCode }}</td>
												<td class="wspace-no">{{ date('d M Y - H:i:s', strtotime($value->created_at)) }}</td>
												 <td><?php $store_name=Centeral::storeName($value->store_id);
												 echo $store_name[0]['name'];
												 ?></td> 
												<td>{{ $value->transactionId }}</td>
												<td>£ <?php echo $amount=$value->amountTotal/100; ?></td>
												<td><a class="btn bgl-success text-success btn-sm">{{ $value->transactionResult }}</a></td>
												
											</tr>
											
											@endforeach
											
										
											
										</tbody>
									</table>





									
								</div>
							
					</div>
				</div>
            </div>
			
@endsection			