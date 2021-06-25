{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
			<div class="container-fluid">
                <!-- row -->
                <div class="row">
					<div class="col-xl-9">
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div>
											<h4 class="card-title mb-2">Recent Order Request</h4>
											<p class="fs-14">Lorem ipsum dolor</p>
										</div>
										<div class="dropdown">
											<button type="button" class="btn btn-outline-primary btn-rounded text-black dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												Newest
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">2020</a>
												<a class="dropdown-item" href="#">2019</a>
												<a class="dropdown-item" href="#">2018</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive ">
											<table class="table order-request">
												<tbody>
												<tr>
													<td>
														<div class="media align-items-center">
															<img class="mr-3 img-fluid rounded-circle" width="85"  src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
															<div class="media-body">
																<h5 class="mt-0 mb-3 text-black">Tuna Soup spinach with himalaya salt.</h5>
																<p class="mb-0 text-primary">#0010235</p>
															</div>
														</div>
													</td>
													<td>
														<h5 class="mb-3 text-black">Jimmy Kueai</h5>
														<p class="mb-0">South Corner st41256 london</p>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<h4 class="mb-0 mr-4 fs-22">$7.4</h4>
															<p class="mb-0 fs-20">x3</p>
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<a class="btn bgl-warning text-warning" href="#">PENDING</a>
															<div class="dropdown ml-auto">
																<div class="btn-link" data-toggle="dropdown">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item text-black" href="#">
																	<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999" stroke="#209F84" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M22 4L12 14.01L9 11.01" stroke="#209F84" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																	</svg>
																	Accept order
																	</a>
																	<a class="dropdown-item text-black" href="#">
																	<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M15 9L9 15" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M9 9L15 15" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																	</svg>
																	Reject order
																	</a>
																	<a class="dropdown-item text-black" href="#">
																	<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M12 16V12" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M12 8H12.01" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																	</svg>
																	View Details
																	</a>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="media align-items-center">
															<img class="mr-3 img-fluid rounded-circle" width="85"  src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
															<div class="media-body">
																<h5 class="mt-0 mb-3 text-black">Tuna Soup spinach with himalaya salt.</h5>
																<p class="mb-0 text-primary">#0010235</p>
															</div>
														</div>
													</td>
													<td>
														<h5 class="mb-3 text-black">Jimmy Kueai</h5>
														<p class="mb-0">South Corner st41256 london</p>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<h4 class="mb-0 mr-4">$7.4</h4>
															<p class="mb-0">x3</p>
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<a class="btn bgl-success text-success" href="#">DELIVERED</a>
															<div class="dropdown ml-auto">
																<div class="btn-link" data-toggle="dropdown">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item text-black" href="#">
																	<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999" stroke="#209F84" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M22 4L12 14.01L9 11.01" stroke="#209F84" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																	</svg>
																	Accept order
																	</a>
																	<a class="dropdown-item text-black" href="#">
																	<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M15 9L9 15" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M9 9L15 15" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																	</svg>
																	Reject order
																	</a>
																	<a class="dropdown-item text-black" href="#">
																	<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M12 16V12" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M12 8H12.01" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																	</svg>
																	View Details
																	</a>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="media align-items-center">
															<img class="mr-3 img-fluid rounded-circle" width="85"  src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
															<div class="media-body">
																<h5 class="mt-0 mb-3 text-black">Tuna Soup spinach with himalaya salt.</h5>
																<p class="mb-0 text-primary">#0010235</p>
															</div>
														</div>
													</td>
													<td>
														<h5 class="mb-3 text-black">Jimmy Kueai</h5>
														<p class="mb-0">South Corner st41256 london</p>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<h4 class="mb-0 mr-4">$7.4</h4>
															<p class="mb-0">x3</p>
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<a class="btn bgl-warning text-warning" href="#">PENDING</a>
															<div class="dropdown ml-auto">
																<div class="btn-link" data-toggle="dropdown">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item text-black" href="#">
																	<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999" stroke="#209F84" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M22 4L12 14.01L9 11.01" stroke="#209F84" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																	</svg>
																	Accept order
																	</a>
																	<a class="dropdown-item text-black" href="#">
																	<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M15 9L9 15" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M9 9L15 15" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																	</svg>
																	Reject order
																	</a>
																	<a class="dropdown-item text-black" href="#">
																	<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M12 16V12" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M12 8H12.01" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																	</svg>
																	View Details
																	</a>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="media align-items-center">
															<img class="mr-3 img-fluid rounded-circle" width="85"  src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
															<div class="media-body">
																<h5 class="mt-0 mb-3 text-black">Tuna Soup spinach with himalaya salt.</h5>
																<p class="mb-0 text-primary">#0010235</p>
															</div>
														</div>
													</td>
													<td>
														<h5 class="mb-3 text-black">Jimmy Kueai</h5>
														<p class="mb-0">South Corner st41256 london</p>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<h4 class="mb-0 mr-4">$7.4</h4>
															<p class="mb-0">x3</p>
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<a class="btn bgl-warning text-warning" href="#">PENDING</a>
															<div class="dropdown ml-auto">
																<div class="btn-link" data-toggle="dropdown">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item text-black" href="#">
																	<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999" stroke="#209F84" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M22 4L12 14.01L9 11.01" stroke="#209F84" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																	</svg>
																	Accept order
																	</a>
																	<a class="dropdown-item text-black" href="#">
																	<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M15 9L9 15" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M9 9L15 15" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																	</svg>
																	Reject order
																	</a>
																	<a class="dropdown-item text-black" href="#">
																	<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M12 16V12" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M12 8H12.01" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																	</svg>
																	View Details
																	</a>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="media align-items-center">
															<img class="mr-3 img-fluid rounded-circle" width="85"  src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
															<div class="media-body">
																<h5 class="mt-0 mb-3 text-black">Tuna Soup spinach with himalaya salt.</h5>
																<p class="mb-0 text-primary">#0010235</p>
															</div>
														</div>
													</td>
													<td>
														<h5 class="mb-3 text-black">Jimmy Kueai</h5>
														<p class="mb-0">South Corner st41256 london</p>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<h4 class="mb-0 mr-4">$7.4</h4>
															<p class="mb-0">x3</p>
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<a class="btn bgl-light" href="#">Canceled</a>
															<div class="dropdown ml-auto">
																<div class="btn-link" data-toggle="dropdown">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item text-black" href="#">
																	<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999" stroke="#209F84" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M22 4L12 14.01L9 11.01" stroke="#209F84" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																	</svg>
																	Accept order
																	</a>
																	<a class="dropdown-item text-black" href="#">
																	<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M15 9L9 15" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M9 9L15 15" stroke="#F24242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																	</svg>
																	Reject order
																	</a>
																	<a class="dropdown-item text-black" href="#">
																	<svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M12 16V12" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		<path d="M12 8H12.01" stroke="#6F6F6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																	</svg>
																	View Details
																	</a>
																</div>
															</div>
														</div>
													</td>
												</tr>												
											</tbody></table>
										</div>
									</div>
									<div class="card-footer border-0 pt-0 text-center">
										<a href="#" class="btn-link">View More &gt;&gt;</a>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body p-5">
										<div class="widget-timeline-icon">
											<ul class="timeline">
												<li>
													<div class="icon bg-primary"></div>
													<a class="timeline-panel text-muted" href="#">
														<h4 class="mb-2 mt-1">Order Created</h4>
														<p class="fs-14 mb-0 ">Sat, 23 Jul 2020, 01:24 PM</p>
													</a>
												</li>
												<li>
													<div class="icon bg-primary"></div>
													<a class="timeline-panel text-muted" href="#">
														<h4 class="mb-2 mt-1">Order Created</h4>
														<p class="fs-14 mb-0 ">Sat, 23 Jul 2020, 01:24 PM</p>
													</a>
												</li>
												<li class="border-dark">
													<div class="icon bg-primary"></div>
													<a class="timeline-panel text-muted" href="#">
														<h4 class="mb-2 mt-1">Order Created</h4>
														<p class="fs-14 mb-0 ">Sat, 23 Jul 2020, 01:24 PM</p>
													</a>
												</li>
												<li>
													<div class="icon bg-dark"></div>
													<a class="timeline-panel text-muted" href="#">
														<h4 class="mb-2 mt-1">Order Created</h4>
														<p class="fs-14 mb-0 ">Sat, 23 Jul 2020, 01:24 PM</p>
													</a>
												</li>
											</ul>	
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div class="full-map-area">
											<img  src="{{ asset('images/svg/map.svg') }}" alt=""> 
											<a href="javascript:void(0);">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M23 8.93333H21V4.41733L13.414 12L21 19.5853V15.0667H23V23H15.0667V21H19.5833L12 13.414L4.41467 21H8.93333V23H1V15.0667H3V19.584L10.586 12L3.00333 4.41467V8.93333H1.00333V1H8.93333V3H4.41733L12 10.586L19.5853 3.00333H15.0667V1.00333H23V8.93333Z" fill="white"/>
												</svg>
											</a>
											<div class="map-text">
												<h4 class="text-black">Track Orders</h4>
												<p class="fs-14">Lorem ipsum dolor sit</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body rounded" style="background:#3f4953;">
										<div class="row mx-0">
											<div class="media align-items-center col-md-4 col-lg-6 px-0 mb-3 mb-md-0">
												<img class="mr-4 img-fluid rounded-circle" width="120"  src="{{ asset('images/avatar/3.jpg') }}" alt="DexignZone">
												<div class="media-body">
													<p class="text-white mb-1">Delivery guy</p>
													<h3 class="mb-1 text-white">Kevin Hobs Jr.</h3>
													<small class="text-gray">ID 412455</small>
												</div>
											</div>
											<div class="justify-content-end d-flex align-items-center col-xl-6 p-0">
												<div class="iconbox mb-3 mr-3 mb-md-0">
													<i class="las la-phone"></i>
													<small>Telepon</small>
													<p>+12 345 5662 66</p>
												</div>
												<div class="iconbox mb-md-0">
													<i class="las la-shipping-fast"></i>
													<small>Delivery Time</small>
													<p>12:52 AM</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body pt-2">
										<div class="table-responsive ">
											<table class="table items-table">
												<tbody><tr>
													<th class="my-0 text-black font-w500 fs-20">Items</th>
													<th style="width:10%;" class="my-0 text-black font-w500 fs-20">Qty</th>
													<th style="width:10%;" class="my-0 text-black font-w500 fs-20">Price</th>
													<th class="my-0 text-black font-w500 fs-20">Total Price</th>
													<th></th>
												</tr>
												<tr>
													<td>
														<div class="media">
															<a href="ecom-product-detail.html"><img class="mr-3 img-fluid rounded" width="85"  src="{{ asset('images/card/4.png') }}" alt="DexignZone"></a>
															<div class="media-body">
																<small class="mt-0 mb-1 font-w500"><a class="text-primary" href="javascript:void(0);">BURGER</a></small>
																<h5 class="mt-0 mb-2 mb-4"><a class="text-black" href="ecom-product-detail.html">Chicken curry special with cucumber</a></h5>
																<div class="star-review fs-14">
																	<i class="fa fa-star text-orange"></i>
																	<i class="fa fa-star text-orange"></i>
																	<i class="fa fa-star text-orange"></i>
																	<i class="fa fa-star text-gray"></i>
																	<i class="fa fa-star text-gray"></i>
																	<span class="ml-3 text-dark">451 reviews</span>
																</div>
															</div>
														</div>
													</td>
													<td>
														<h4 class="my-0 text-secondary font-w600">3x</h4>
													</td>
													<td>
														<h4 class="my-0 text-secondary font-w600">$14.99</h4>
													</td>
													<td>
														<h4 class="my-0 text-secondary font-w600">$44.97</h4>
													</td>
													<td>
														<a href="javascript:void(0);" class="ti-close fs-28 text-danger las la-times-circle"></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="media">
															<a href="ecom-product-detail.html"><img class="mr-3 img-fluid rounded" width="85"  src="{{ asset('images/card/4.png') }}" alt="DexignZone"></a>
															<div class="media-body">
																<small class="mt-0 mb-1 font-w500"><a class="text-primary" href="javascript:void(0);">PIZZA</a></small>
																<h5 class="mt-0 mb-2 text-black mb-4"><a class="text-black" href="ecom-product-detail.html">Italiano pizza with garlic</a></h5>
																<div class="star-review fs-14">
																	<i class="fa fa-star text-orange"></i>
																	<i class="fa fa-star text-orange"></i>
																	<i class="fa fa-star text-orange"></i>
																	<i class="fa fa-star text-gray"></i>
																	<i class="fa fa-star text-gray"></i>
																	<span class="ml-3 text-dark">451 reviews</span>
																</div>
															</div>
														</div>
													</td>
													<td>
														<h4 class="my-0 text-secondary font-w600">1x</h4>
													</td>
													<td>
														<h4 class="my-0 text-secondary font-w600">$4.12</h4>
													</td>
													<td>
														<h4 class="my-0 text-secondary font-w600">$4.12</h4>
													</td>
													<td>
														<a href="javascript:void(0);" class="ti-close fs-28 text-danger las la-times-circle"></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="media">
															<a href="ecom-product-detail.html"><img class="mr-3 img-fluid rounded" width="85"  src="{{ asset('images/card/4.png') }}" alt="DexignZone"></a>
															<div class="media-body">
																<small class="mt-0 mb-1 font-w500"><a class="text-primary" href="javascript:void(0);">JUICE</a></small>
																<h5 class="mt-0 mb-2 text-black mb-4"><a class="text-black" href="ecom-product-detail.html">Watermelon juice with ice</a></h5>
																<div class="star-review fs-14">
																	<i class="fa fa-star text-orange"></i>
																	<i class="fa fa-star text-orange"></i>
																	<i class="fa fa-star text-orange"></i>
																	<i class="fa fa-star text-gray"></i>
																	<i class="fa fa-star text-gray"></i>
																	<span class="ml-3 text-dark">451 reviews</span>
																</div>
															</div>
														</div>
													</td>
													<td>
														<h4 class="my-0 text-secondary font-w600">2x</h4>
													</td>
													<td>
														<h4 class="my-0 text-secondary font-w600">$15.44</h4>
													</td>
													<td>
														<h4 class="my-0 text-secondary font-w600">$15.44</h4>
													</td>
													<td>
														<a href="javascript:void(0);" class="ti-close fs-28 text-danger las la-times-circle"></a>
													</td>
												</tr>
											</tbody></table>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3">
						<div class="col-12">
							<div class="card">
								<div class="card-header border-0 pb-0">
									<div>
										<h4 class="card-title mb-2">Daily Trending Menus</h4>
										<p class="mb-0 fs-14" href="#">Lorem ipsum dolor</p>
									</div>
								</div>
								<div class="card-body p-0">
									<div class="widget-media best-doctor">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media mr-4">
														<img alt="image" width="90"  src="{{ asset('images/avatar/1.jpg') }}">
														<div class="number">#1</div>
													</div>
													<div class="media-body">
														<h5 class="mb-3 text-black">Chicken curry special with cucumber</h5>
														<div class="d-flex justify-content-between align-items-center">
															<h4 class="mb-0 text-black">$5.6</h4>
															<p class="mb-0">Order <strong class="text-black">89x</strong></p>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-4">
														<img alt="image" width="90"  src="{{ asset('images/avatar/1.jpg') }}">
														<div class="number">#2</div>
													</div>
													<div class="media-body">
														<h5 class="mb-3 text-black">Chicken curry special with cucumber</h5>
														<div class="d-flex justify-content-between align-items-center">
															<h4 class="mb-0 text-black">$5.9</h4>
															<p class="mb-0">Order <strong class="text-black">89x</strong></p>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-4">
														<img alt="image" width="90"  src="{{ asset('images/avatar/1.jpg') }}">
														<div class="number">#3</div>
													</div>
													<div class="media-body">
														<h5 class="mb-3 text-black">Chicken curry special with cucumber</h5>
														<div class="d-flex justify-content-between align-items-center">
															<h4 class="mb-0 text-black">$8.6</h4>
															<p class="mb-0">Order <strong class="text-black">89x</strong></p>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-4">
														<img alt="image" width="90"  src="{{ asset('images/avatar/1.jpg') }}">
														<div class="number">#4</div>
													</div>
													<div class="media-body">
														<h5 class="mb-3 text-black">Chicken curry special with cucumber</h5>
														<div class="d-flex justify-content-between align-items-center">
															<h4 class="mb-0 text-black">$4.6</h4>
															<p class="mb-0">Order <strong class="text-black">89x</strong></p>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-4">
														<img alt="image" width="90"  src="{{ asset('images/avatar/1.jpg') }}">
														<div class="number">#5</div>
													</div>
													<div class="media-body">
														<h5 class="mb-3 text-black">Chicken curry special with cucumber</h5>
														<div class="d-flex justify-content-between align-items-center">
															<h4 class="mb-0 text-black">$5.6</h4>
															<p class="mb-0">Order <strong class="text-black">89x</strong></p>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="card-footer border-0 pt-0 text-center">
									<a href="#" class="btn-link">See More &gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="col-xl-12 mb-4 text-center">
							<div class="dropdown ml-3 p-3">
								<div class="btn btn-primary btn-rounded dropdown-toggle" data-toggle="dropdown">
									<svg class="mr-3" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.12885 22H6.87549C6.11615 22 5.50049 22.615 5.50049 23.375C5.50049 24.135 6.11615 24.75 6.87549 24.75H7.12894C7.69836 26.3471 9.21032 27.5 11.0005 27.5C12.7907 27.5 14.3027 26.3471 14.8721 24.75H18.1289C18.6984 26.3471 20.2103 27.5 22.0005 27.5C23.7985 27.5 25.3154 26.3366 25.8788 24.7285C27.5195 24.6187 28.8881 23.4711 29.2494 21.8443L30.9608 14.1408C31.2065 13.037 30.9413 11.897 30.233 11.0148C29.5247 10.1312 28.47 9.62501 27.338 9.62501H25.5407C25.4027 9.11082 25.1547 8.62591 24.8035 8.2057C24.0966 7.35976 23.0586 6.87502 21.9562 6.87502H8.25049C7.49115 6.87502 6.87549 7.49001 6.87549 8.25002C6.87549 9.01002 7.49115 9.62501 8.25049 9.62501H21.9562C22.3469 9.62501 22.5859 9.8412 22.694 9.97011C22.8014 10.099 22.9713 10.3716 22.9028 10.7543L21.3436 19.3164C19.8457 19.5586 18.6267 20.6036 18.1289 22H14.8721C14.3027 20.403 12.7907 19.25 11.0005 19.25C9.21032 19.25 7.69827 20.403 7.12885 22ZM28.0879 12.7349C28.196 12.8692 28.3632 13.1525 28.2766 13.5446L26.5652 21.2481C26.4852 21.6074 26.2128 21.8686 25.8719 21.9582C25.5383 21.0569 24.8921 20.2959 24.0492 19.8082L25.403 12.375H27.338C27.7395 12.375 27.9799 12.6006 28.0879 12.7349ZM22.0005 22C22.0878 22 22.1757 22.0067 22.2348 22.0161C22.8954 22.145 23.3755 22.7157 23.3755 23.375C23.3755 24.1337 22.7585 24.75 22.0005 24.75C21.2425 24.75 20.6255 24.1337 20.6255 23.375C20.6255 22.6163 21.2425 22 22.0005 22ZM11.0005 22C11.7585 22 12.3755 22.6163 12.3755 23.375C12.3755 24.1337 11.7585 24.75 11.0005 24.75C10.2425 24.75 9.62549 24.1337 9.62549 23.375C9.62549 22.6163 10.2425 22 11.0005 22Z" fill="white"/>
										<path d="M5.5 15.125H11C11.7593 15.125 12.375 14.51 12.375 13.75C12.375 12.99 11.7593 12.375 11 12.375H5.5C4.74066 12.375 4.125 12.99 4.125 13.75C4.125 14.51 4.74066 15.125 5.5 15.125Z" fill="white"/>
										<path d="M2.75049 19.25H6.87549C7.63483 19.25 8.25049 18.635 8.25049 17.875C8.25049 17.115 7.63483 16.5 6.87549 16.5H2.75049C1.99115 16.5 1.37549 17.115 1.37549 17.875C1.37549 18.635 1.99115 19.25 2.75049 19.25Z" fill="white"/>
										<path d="M4.12451 9.62501C4.8839 9.62501 5.49951 9.0094 5.49951 8.25001C5.49951 7.49062 4.8839 6.87502 4.12451 6.87502C3.36512 6.87502 2.74951 7.49062 2.74951 8.25001C2.74951 9.0094 3.36512 9.62501 4.12451 9.62501Z" fill="white"/>
										<path d="M2.75049 24.75C3.50988 24.75 4.12549 24.1344 4.12549 23.375C4.12549 22.6156 3.50988 22 2.75049 22C1.9911 22 1.37549 22.6156 1.37549 23.375C1.37549 24.1344 1.9911 24.75 2.75049 24.75Z" fill="white"/>
									</svg>
									ON DELIVERY
								</div>
								<div class="dropdown-menu dropdown-menu-left">
									<a class="dropdown-item" href="#">A To Z List</a>
									<a class="dropdown-item" href="#">Z To A List</a>
								</div>
							</div>
						</div>
						<div class="col-xl-12">
							<div class="card">
								<div class="card-body border-bottom">
									<div class="media align-items-center">
										<img class="mr-3 rounded-circle"  src="{{ asset('images/profile/pic1.jpg') }}" width="90" alt="">
										<div class="media-body">
											<h4 class="text-black mb-3">James Witwicty</h4>
											<span class="bgl-info fs-14 text-info p-2 rounded">Customer</span>
										</div>
									</div>
								</div>
								<div class="card-body border-bottom">
									<div class="media align-items-center">
										<svg class="mr-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M22.9993 17.4712V20.7831C23.0006 21.0906 22.9375 21.3949 22.814 21.6766C22.6906 21.9583 22.5096 22.2112 22.2826 22.419C22.0556 22.6269 21.7876 22.7851 21.4958 22.8836C21.2039 22.9821 20.8947 23.0187 20.5879 22.991C17.1841 22.6219 13.9145 21.4611 11.0418 19.6019C8.36914 17.9069 6.10319 15.6455 4.40487 12.9781C2.53545 10.0981 1.37207 6.81909 1.00898 3.40674C0.981336 3.10146 1.01769 2.79378 1.11572 2.50329C1.21376 2.2128 1.37132 1.94586 1.57839 1.71947C1.78546 1.49308 2.03749 1.31221 2.31843 1.18836C2.59938 1.06451 2.90309 1.0004 3.21023 1.00011H6.52869C7.06551 0.994834 7.58594 1.18456 7.99297 1.53391C8.4 1.88326 8.66586 2.36841 8.74099 2.89892C8.88106 3.9588 9.14081 4.99946 9.5153 6.00106C9.66413 6.39619 9.69634 6.82562 9.60812 7.23847C9.51989 7.65131 9.31494 8.03026 9.01753 8.33042L7.61272 9.73245C9.18739 12.4963 11.4803 14.7847 14.2496 16.3562L15.6545 14.9542C15.9552 14.6574 16.3349 14.4528 16.7486 14.3648C17.1622 14.2767 17.5925 14.3089 17.9884 14.4574C18.992 14.8312 20.0348 15.0904 21.0967 15.2302C21.6341 15.3058 22.1248 15.576 22.4756 15.9892C22.8264 16.4024 23.0128 16.9298 22.9993 17.4712Z" stroke="#566069" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
										<h4 class="mb-0 text-black">+855 4554 5754</h4>
									</div>
								</div>
								<div class="card-body border-bottom">
									<div class="media align-items-center">
										<svg class="mr-4" width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M28 13.3333C28 22.6667 16 30.6667 16 30.6667C16 30.6667 4 22.6667 4 13.3333C4 10.1507 5.26428 7.09848 7.51472 4.84805C9.76516 2.59761 12.8174 1.33333 16 1.33333C19.1826 1.33333 22.2348 2.59761 24.4853 4.84805C26.7357 7.09848 28 10.1507 28 13.3333Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M16 17.3333C18.2091 17.3333 20 15.5425 20 13.3333C20 11.1242 18.2091 9.33333 16 9.33333C13.7909 9.33333 12 11.1242 12 13.3333C12 15.5425 13.7909 17.3333 16 17.3333Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
										<h4 class="mb-0 text-black">+855 4554 5754</h4>
									</div>
								</div>
								<div class="card-body">
									<h4 class="text-black font-weight-bold mb-3">Note Order</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header border-0 pb-0">
									<div>
										<h4 class="text-black">Loyal Customers</h4>
										<p class="fs-14 mb-0"> Lorem ipsum dolor</p>
									</div>
								</div>
								<div class="card-body">	
									<div class="media align-items-center mb-4">		
										<img class="mr-3 rounded"  src="{{ asset('images/profile/1.png') }}" width="70" alt="">
										<div class="media-body">
											<h5 class="text-black">Alexzander Queqe</h5>
											<p class="text-primary mb-0"><strong>651</strong>  Times order</p>
										</div>
									</div>
									<div class="media align-items-center mb-4">		
										<img class="mr-3 rounded"  src="{{ asset('images/profile/2.png') }}" width="70" alt="">
										<div class="media-body">
											<h5 class="text-black">Bella Simatupang</h5>
											<p class="text-primary mb-0"><strong>356</strong>  Times order</p>
										</div>
									</div>
									<div class="media align-items-center mb-4">		
										<img class="mr-3 rounded"  src="{{ asset('images/profile/3.png') }}" width="70" alt="">
										<div class="media-body">
											<h5 class="text-black">Jordi Alaba</h5>
											<p class="text-primary mb-0"><strong>125</strong>  Times order</p>
										</div>
									</div>
									<div class="media align-items-center">		
										<img class="mr-3 rounded"  src="{{ asset('images/profile/4.png') }}" width="70" alt="">
										<div class="media-body">
											<h5 class="text-black">Kevin Jamet</h5>
											<p class="text-primary mb-0"><strong>78</strong>  Times order</p>
										</div>
									</div>
								</div>
								<div class="card-footer border-0 pt-0 text-center">
									<a href="#" class="btn-link">View More &gt;&gt;</a>
								</div>
							</div>
						</div>
						<div class="col-xl-12">	
							<div class="card">
								<div class="card-header border-0 pb-0">
									<div>
										<h4 class="text-black">Best seler menus</h4>
										<p class="fs-14 mb-0"> Lorem ipsum dolor</p>
									</div>
								</div>
								<div class="card-body border-bottom">
									<div class="media mb-3">
										<img class="rounded"  src="{{ asset('images/card/5.png') }}" style="width:100%;" alt="">
									</div>
									<div class="info">
										<h5 class="text-black mb-3">Medium spicy pizza with Kemangi leaf.</h5>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="f-nt-weight-bold mb-0 text-black">$6.53</h4>
											<div class="d-flex align-items-center">	
												<svg class="mr-2" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19.8401 2.60999C19.3294 2.099 18.7229 1.69364 18.0555 1.41708C17.388 1.14052 16.6726 0.998169 15.9501 0.998169C15.2276 0.998169 14.5122 1.14052 13.8448 1.41708C13.1773 1.69364 12.5709 2.099 12.0601 2.60999L11.0001 3.66999L9.94012 2.60999C8.90843 1.5783 7.50915 0.998704 6.05012 0.998704C4.59109 0.998704 3.19181 1.5783 2.16012 2.60999C1.12843 3.64169 0.548828 5.04096 0.548828 6.49999C0.548828 7.95903 1.12843 9.3583 2.16012 10.39L3.22012 11.45L11.0001 19.23L18.7801 11.45L19.8401 10.39C20.3511 9.87924 20.7565 9.27281 21.033 8.60535C21.3096 7.93789 21.4519 7.22248 21.4519 6.49999C21.4519 5.77751 21.3096 5.0621 21.033 4.39464C20.7565 3.72718 20.3511 3.12075 19.8401 2.60999Z" fill="#EA4989"/>
												</svg>
												<h6 class="text-black mb-0">256k</h6>
											</div>
											<div class="d-flex align-items-center">	
												<svg class="mr-2" width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="2.95455" height="18" rx="1.47727" fill="#EA4989"/>
													<rect x="5.90918" y="4.90906" width="2.95455" height="13.0909" rx="1.47727" fill="#EA4989"/>
													<rect x="11.8184" y="12.2728" width="2.95455" height="5.72727" rx="1.47727" fill="#EA4989"/>
													<rect x="17.7275" y="2.45459" width="2.95455" height="15.5455" rx="1.47727" fill="#EA4989"/>
												</svg>
												<h6 class="text-black mb-0">6,723</h6>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body border-bottom">
									<div class="media mb-3">
										<img class="rounded"  src="{{ asset('images/card/5.png') }}" style="width:100%;" alt="">
									</div>
									<div class="info">
										<h5 class="text-black mb-3">Medium spicy pizza with Kemangi leaf.</h5>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="f-nt-weight-bold mb-0 text-black">$6.53</h4>
											<div class="d-flex align-items-center">	
												<svg class="mr-2" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19.8401 2.60999C19.3294 2.099 18.7229 1.69364 18.0555 1.41708C17.388 1.14052 16.6726 0.998169 15.9501 0.998169C15.2276 0.998169 14.5122 1.14052 13.8448 1.41708C13.1773 1.69364 12.5709 2.099 12.0601 2.60999L11.0001 3.66999L9.94012 2.60999C8.90843 1.5783 7.50915 0.998704 6.05012 0.998704C4.59109 0.998704 3.19181 1.5783 2.16012 2.60999C1.12843 3.64169 0.548828 5.04096 0.548828 6.49999C0.548828 7.95903 1.12843 9.3583 2.16012 10.39L3.22012 11.45L11.0001 19.23L18.7801 11.45L19.8401 10.39C20.3511 9.87924 20.7565 9.27281 21.033 8.60535C21.3096 7.93789 21.4519 7.22248 21.4519 6.49999C21.4519 5.77751 21.3096 5.0621 21.033 4.39464C20.7565 3.72718 20.3511 3.12075 19.8401 2.60999Z" fill="#EA4989"/>
												</svg>
												<h6 class="text-black mb-0">256k</h6>
											</div>
											<div class="d-flex align-items-center">	
												<svg class="mr-2" width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="2.95455" height="18" rx="1.47727" fill="#EA4989"/>
													<rect x="5.90918" y="4.90906" width="2.95455" height="13.0909" rx="1.47727" fill="#EA4989"/>
													<rect x="11.8184" y="12.2728" width="2.95455" height="5.72727" rx="1.47727" fill="#EA4989"/>
													<rect x="17.7275" y="2.45459" width="2.95455" height="15.5455" rx="1.47727" fill="#EA4989"/>
												</svg>
												<h6 class="text-black mb-0">6,723</h6>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body border-bottom">
									<div class="media mb-3">
										<img class="rounded"  src="{{ asset('images/card/5.png') }}" style="width:100%;" alt="">
									</div>
									<div class="info">
										<h5 class="text-black mb-3">pizza meals for kids (Small size)</h5>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="f-nt-weight-bold mb-0 text-black">$6.53</h4>
											<div class="d-flex align-items-center">	
												<svg class="mr-2" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19.8401 2.60999C19.3294 2.099 18.7229 1.69364 18.0555 1.41708C17.388 1.14052 16.6726 0.998169 15.9501 0.998169C15.2276 0.998169 14.5122 1.14052 13.8448 1.41708C13.1773 1.69364 12.5709 2.099 12.0601 2.60999L11.0001 3.66999L9.94012 2.60999C8.90843 1.5783 7.50915 0.998704 6.05012 0.998704C4.59109 0.998704 3.19181 1.5783 2.16012 2.60999C1.12843 3.64169 0.548828 5.04096 0.548828 6.49999C0.548828 7.95903 1.12843 9.3583 2.16012 10.39L3.22012 11.45L11.0001 19.23L18.7801 11.45L19.8401 10.39C20.3511 9.87924 20.7565 9.27281 21.033 8.60535C21.3096 7.93789 21.4519 7.22248 21.4519 6.49999C21.4519 5.77751 21.3096 5.0621 21.033 4.39464C20.7565 3.72718 20.3511 3.12075 19.8401 2.60999Z" fill="#EA4989"/>
												</svg>
												<h6 class="text-black mb-0">256k</h6>
											</div>
											<div class="d-flex align-items-center">	
												<svg class="mr-2" width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="2.95455" height="18" rx="1.47727" fill="#EA4989"/>
													<rect x="5.90918" y="4.90906" width="2.95455" height="13.0909" rx="1.47727" fill="#EA4989"/>
													<rect x="11.8184" y="12.2728" width="2.95455" height="5.72727" rx="1.47727" fill="#EA4989"/>
													<rect x="17.7275" y="2.45459" width="2.95455" height="15.5455" rx="1.47727" fill="#EA4989"/>
												</svg>
												<h6 class="text-black mb-0">6,723</h6>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer border-0 text-center">
									<a href="#" class="btn-link">View More &gt;&gt;</a>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			
@endsection			