{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-9 col-xxl-12">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 pb-2 d-lg-flex d-block">
										<div>
											<h4 class="card-title mb-2">Most Favorites Items</h4>
											<p class="fs-14 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
										</div>
										<div class="card-action card-tabs mt-3 mt-3 mt-lg-0">
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#all-categories" role="tab">
														All Categories
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#main-course" role="tab">
														Main Course
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#pizza" role="tab">
														Pizza
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#drink" role="tab">
														Drink
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#dessert" role="tab">
														Dessert
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#more" role="tab">
														More
													</a>
												</li>													
											</ul>
										</div>
									</div>
									<div class="card-body p-1">
										<div class="sp15 row border-bottom favorites-items p-3 align-items-center p-sm-4">
											<div class="col-xl-5 col-lg-5 col-sm-8 col-12 mb-3 mb-lg-0">
												<div class="media align-items-center">
													<img class="rounded mr-3"  src="{{ asset('images/card/pic4.jpg') }}" alt="" width="105">
													<div class="media-body">
														<h5 class="mb-2"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Watermelon Juice with Ice</a></h5>
														<div class="star-review fs-14 mb-2">
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-gray"></i>
															<i class="fa fa-star text-gray"></i>
															<span class="ml-3 text-dark">(454 revies)</span>
														</div>
														<a href="javascript:void(0);" class="text-primary fs-14 d-flex align-items-center"><i class="fa fa-heart fs-20 mr-2" aria-hidden="true"></i> <strong>256k</strong> Like it</a>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-3 col-sm-4 col-12 media align-items-center">
												<div class="mr-3">
													<span class="peity-line" data-width="100%">5,6,4,3,4,3,4,3,6,5,6,4,5,2,3,4,2,1,5,3</span>
												</div>
												<div class="media-body">
													<h3 class="text-black font-w600 mb-1">45%</h3>
													<span class="text-black">Interest</span>
												</div>
											</div>
											<div class="col-xl-2 col-lg-2 col-sm-6 col-6">
												<div class="d-flex align-items-flex-end mb-1">
													<svg class="mr-3" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="3.54545" height="26" rx="1.77273" fill="#EA4989"/>
													<rect x="7.09082" y="7.0909" width="3.54545" height="18.9091" rx="1.77273" fill="#EA4989"/>
													<rect x="14.1816" y="17.7273" width="3.54545" height="8.27273" rx="1.77273" fill="#EA4989"/>
													<rect x="21.2725" y="3.54546" width="3.54545" height="22.4545" rx="1.77273" fill="#EA4989"/>
													</svg>
													<h3 class="text-black mb-0 font-w600 fs-22">6732</h3>
												</div>
												<span class="text-black">Total Sales</span>
											</div>
											<div class="col-xl-2 col-lg-2 col-sm-6 col-6 text-right">
												<div class="d-inline-block relative donut-chart-sale">
													<span class="donut" data-peity='{ "fill": ["rgb(234, 73, 137)", "rgba(236, 236, 236, 1)"],   "innerRadius": 32, "radius": 10}'>7/8</span>
													<small>87%</small>
												</div>
											</div>
										</div>
										<div class="sp15 row border-bottom favorites-items p-3 align-items-center p-sm-4">
											<div class="col-xl-5 col-lg-5 col-sm-8 col-12 mb-3 mb-lg-0">
												<div class="media align-items-center">
													<img class="rounded mr-3"  src="{{ asset('images/card/pic2.jpg') }}" alt="" width="105">
													<div class="media-body">
														<h5 class="mb-2"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Medium Spicy Pizza with Kemangi Leaf</a></h5>
														<div class="star-review fs-14 mb-2">
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-gray"></i>
															<i class="fa fa-star text-gray"></i>
															<span class="ml-3 text-dark">(454 revies)</span>
														</div>
														<a href="javascript:void(0);" class="text-primary fs-14 d-flex align-items-center"><i class="fa fa-heart fs-20 mr-2" aria-hidden="true"></i> <strong>256k</strong> Like it</a>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-3 col-sm-4 col-12 media align-items-center">
												<div class="mr-3">
													<span class="peity-line" data-width="100%">8,5,3,1,2,4,5,7,3,4,6,2,4,6,7,6,3,4,5,3</span>
												</div>
												<div class="media-body">
													<h3 class="text-black font-w600 mb-1">26%</h3>
													<span class="text-black">Interest</span>
												</div>
											</div>
											<div class="col-xl-2 col-lg-2 col-sm-6 col-6">
												<div class="d-flex align-items-flex-end mb-1">
													<svg class="mr-3" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="3.54545" height="26" rx="1.77273" fill="#EA4989"/>
													<rect x="7.09082" y="7.0909" width="3.54545" height="18.9091" rx="1.77273" fill="#EA4989"/>
													<rect x="14.1816" y="17.7273" width="3.54545" height="8.27273" rx="1.77273" fill="#EA4989"/>
													<rect x="21.2725" y="3.54546" width="3.54545" height="22.4545" rx="1.77273" fill="#EA4989"/>
													</svg>
													<h3 class="text-black mb-0 font-w600 fs-22">5721</h3>
												</div>
												<span class="text-black">Total Sales</span>
											</div>
											<div class="col-xl-2 col-lg-2 col-sm-6 col-6 text-right">
												<div class="d-inline-block relative donut-chart-sale">
													<span class="donut" data-peity='{ "fill": ["rgb(234, 73, 137)", "rgba(236, 236, 236, 1)"],   "innerRadius": 32, "radius": 10}'>5/8</span>
													<small>62%</small>
												</div>
											</div>
										</div>
										<div class="sp15 row border-bottom favorites-items p-3 align-items-center p-sm-4">
											<div class="col-xl-5 col-lg-5 col-sm-8 col-12 mb-3 mb-lg-0">
												<div class="media align-items-center">
													<img class="rounded mr-3"  src="{{ asset('images/card/pic7.jpg') }}" alt="" width="105">
													<div class="media-body">
														<h5 class="mb-2"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Mozarella Pizza with Random Topping</a></h5>
														<div class="star-review fs-14 mb-2">
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-orange"></i>
															<i class="fa fa-star text-gray"></i>
															<i class="fa fa-star text-gray"></i>
															<span class="ml-3 text-dark">(454 revies)</span>
														</div>
														<a href="javascript:void(0);" class="text-primary fs-14 d-flex align-items-center"><i class="fa fa-heart fs-20 mr-2" aria-hidden="true"></i> <strong>256k</strong> Like it</a>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-3 col-sm-4 col-12 media align-items-center">
												<div class="mr-3">
													<span class="peity-line" data-width="100%">6,5,2,5,4,7,8,7,6,5,6,4,3,4,3,4,3,6,7,6</span>
												</div>
												<div class="media-body">
													<h3 class="text-black font-w600 mb-1">26%</h3>
													<span class="text-black">Interest</span>
												</div>
											</div>
											<div class="col-xl-2 col-lg-2 col-sm-6 col-6">
												<div class="d-flex align-items-flex-end mb-1">
													<svg class="mr-3" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="3.54545" height="26" rx="1.77273" fill="#EA4989"/>
													<rect x="7.09082" y="7.0909" width="3.54545" height="18.9091" rx="1.77273" fill="#EA4989"/>
													<rect x="14.1816" y="17.7273" width="3.54545" height="8.27273" rx="1.77273" fill="#EA4989"/>
													<rect x="21.2725" y="3.54546" width="3.54545" height="22.4545" rx="1.77273" fill="#EA4989"/>
													</svg>
													<h3 class="text-black mb-0 font-w600 fs-22">3515</h3>
												</div>
												<span class="text-black">Total Sales</span>
											</div>
											<div class="col-xl-2 col-lg-2 col-sm-6 col-6 text-right">
												<div class="d-inline-block relative donut-chart-sale">
													<span class="donut" data-peity='{ "fill": ["rgb(234, 73, 137)", "rgba(236, 236, 236, 1)"],   "innerRadius": 32, "radius": 10}'>4/8</span>
													<small>50%</small>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer border-0 text-center">
										<a href="javascript:;" class="btn-link">View More &gt;&gt;</a>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card">
									<div class="card-header border-0">
										<div>
											<h4 class="card-title mb-2">Sales Summary</h4>
											<p class="fs-14 mb-0">Lorem ipsum dolor sit amet,consecteture</p>
										</div>
										<div class="dropdown">
											<button type="button" class="btn border btn-rounded text-black dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												Monthly
											</button>
											<div class="dropdown-menu" >
												<a class="dropdown-item" href="javascript:;">2020</a>
												<a class="dropdown-item" href="javascript:;">2019</a>
												<a class="dropdown-item" href="javascript:;">2018</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row mx-0 align-items-center">
											<div class="col-sm-4 col-md-5 px-0 text-center">
												<div class="chart-deta d-inline-block">
													<div class="col px-0">
														<span class="bg-primary"></span>	
														<div>
															<h4 class="fs-20 text-black font-w600 mb-1">63876</h4>
															<small class="font-w500 fs-14 text-muted">Menu Sold</small>
														</div>
													</div>
													<div class="col px-0">
														<span class="bg-warning"></span>	
														<div>
															<h4 class="fs-20 text-black font-w600 mb-1">$873,335</h4>
															<small class="font-w500 fs-14 text-muted">Revenue</small>
														</div>
													</div>
													<div class="col px-0">
														<span class="bg-danger"></span>	
														<div>
															<h4 class="text-black fs-20 font-w600 mb-1">$97,126</h4>
															<small class="font-w500 fs-14 text-muted">Safe(20%)</small>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-8 col-md-7  px-0">
												<div id="chartCircle"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div>
											<h4 class="text-black">Loyal Customers</h4>
											<p class="fs-14 mb-0"> Lorem ipsum dolor</p>
										</div>
									</div>
									<div class="card-body">	
										<div class="media align-items-center mb-4">		
											<img class="mr-3 rounded"  src="{{ asset('images/profile/5.jpg') }}" width="70" alt="">
											<div class="media-body">
												<h5 class="text-black"><a href="javascript:;" class="text-black">Alexzander Queqe</a></h5>
												<small class="text-primary mb-0"><strong class="font-w600">651</strong>  Times order</small>
											</div>
										</div>
										<div class="media align-items-center mb-4">		
											<img class="mr-3 rounded"  src="{{ asset('images/profile/6.jpg') }}" width="70" alt="">
											<div class="media-body">
												<h5 class="text-black"><a href="javascript:;" class="text-black">Bella Simatupang</a></h5>
												<small class="text-primary mb-0"><strong class="font-w600">356</strong>  Times order</small>
											</div>
										</div>
										<div class="media align-items-center mb-4">		
											<img class="mr-3 rounded"  src="{{ asset('images/profile/7.jpg') }}" width="70" alt="">
											<div class="media-body">
												<h5 class="text-black"><a href="javascript:;" class="text-black">Jordi Alaba</a></h5>
												<small class="text-primary mb-0"><strong class="font-w600">125</strong>  Times order</small>
											</div>
										</div>
										<div class="media align-items-center">		
											<img class="mr-3 rounded"  src="{{ asset('images/profile/10.jpg') }}" width="70" alt="">
											<div class="media-body">
												<h5 class="text-black"><a href="javascript:;" class="text-black">Kevin Jamet</a></h5>
												<small class="text-primary mb-0"><strong class="font-w600">78</strong>  Times order</small>
											</div>
										</div>
									</div>
									<div class="card-footer border-0 pt-0 text-center">
										<a href="javascript:;" class="btn-link">View More &gt;&gt;</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="card">
									<div class="card-header border-0">
										<div>
											<h4 class="card-title mb-2">Customer Map</h4>
											<p class="fs-14 mb-0">Lorem ipsum dolor</p>
										</div>
									</div>
									<div class="card-body px-3 pb-2 pt-0">
										<div id="chartTimeline"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card">
									<div class="card-header border-0">
										<div>
											<h4 class="card-title mb-2">Revenue</h4>
											<p class="fs-14 mb-0">Lorem ipsum dolor</p>
										</div>
										<div class="dropdown">
											<button type="button" class="btn border btn-rounded text-black dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												Monthly
											</button>
											<div class="dropdown-menu" >
												<a class="dropdown-item" href="javascript:;">2020</a>
												<a class="dropdown-item" href="javascript:;">2019</a>
												<a class="dropdown-item" href="javascript:;">2018</a>
											</div>
										</div>
									</div>
									<div class="card-body px-2 pt-0 pb-2">
										<div id="chartBar"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-12">
						<div class="row">
							<div class="col-xl-12 col-xxl-6 col-md-6">
								<div class="card">
									<div class="card-header border-0">
										<div>
											<h4 class="card-title mb-2">Daily Trending Menus</h4>
											<p class="mb-0 fs-14">Lorem ipsum dolor</p>
										</div>
									</div>
									<div class="card-body p-0">
										<div class="widget-media trending-menus">
											<ul class="timeline">
												<li>
													<div class="timeline-panel">
														<div class="media mr-4">
															<img alt="image" width="90"  src="{{ asset('images/card/pic8.jpg') }}">
															<div class="number">#1</div>
														</div>
														<div class="media-body">
															<h5 class="mb-3 text-black"><a href="{!! url('/ecom-product-detail'); !!}" class="text-black">Chicken curry special with cucumber</a></h5>
															<div class="d-flex justify-content-between align-items-center">
																<h4 class="mb-0 text-black font-w600">$5.6</h4>
																<p class="mb-0">Order <strong class="text-black font-w500">89x</strong></p>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline-panel">
														<div class="media mr-4">
															<img alt="image" width="90"  src="{{ asset('images/card/pic4.jpg') }}">
															<div class="number">#2</div>
														</div>
														<div class="media-body">
															<h5 class="mb-3 text-black"><a href="{!! url('/ecom-product-detail'); !!}" class="text-black">Watermelon juice with ice</a></h5>
															<div class="d-flex justify-content-between align-items-center">
																<h4 class="mb-0 text-black font-w600">$4.8</h4>
																<p class="mb-0">Order <strong class="text-black font-w500">67x</strong></p>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline-panel">
														<div class="media mr-4">
															<img alt="image" width="90"  src="{{ asset('images/card/pic9.jpg') }}">
															<div class="number">#3</div>
														</div>
														<div class="media-body">
															<h5 class="mb-3 text-black"><a href="{!! url('/ecom-product-detail'); !!}" class="text-black">Italiano pizza with garlic</a></h5>
															<div class="d-flex justify-content-between align-items-center">
																<h4 class="mb-0 text-black font-w600">$12.3</h4>
																<p class="mb-0">Order <strong class="text-black font-w500">59x</strong></p>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline-panel">
														<div class="media mr-4">
															<img alt="image" width="90"  src="{{ asset('images/card/pic6.jpg') }}">
															<div class="number">#4</div>
														</div>
														<div class="media-body">
															<h5 class="mb-3 text-black"><a href="{!! url('/ecom-product-detail'); !!}" class="text-black">Tuna soup spinach with himalaya salt</a></h5>
															<div class="d-flex justify-content-between align-items-center">
																<h4 class="mb-0 text-black font-w600">$3.6</h4>
																<p class="mb-0">Order <strong class="text-black font-w500">49x</strong></p>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline-panel">
														<div class="media mr-4">
															<img alt="image" width="90"  src="{{ asset('images/card/pic10.jpg') }}">
															<div class="number">#5</div>
														</div>
														<div class="media-body">
															<h5 class="mb-3 text-black"><a href="{!! url('/ecom-product-detail'); !!}" class="text-black">Medium Spicy Spagethi Italiano</a></h5>
															<div class="d-flex justify-content-between align-items-center">
																<h4 class="mb-0 text-black font-w600">$4.2</h4>
																<p class="mb-0">Order <strong class="text-black font-w500">49x</strong></p>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-xxl-6 col-md-6">	
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div>
											<h4 class="text-black">Best seler menus</h4>
											<p class="fs-14 mb-0"> Lorem ipsum dolor</p>
										</div>
									</div>
									<div class="card-body border-bottom">
										<div class="media mb-3">
											<img class="rounded"  src="{{ asset('images/card/pic11.jpg') }}" style="width:100%;" alt="">
										</div>
										<div class="info">
											<h5 class="text-black mb-3"><a href="{!! url('/ecom-product-detail'); !!}" class="text-black">Medium Spicy Pizza with Kemangi Leaf</a></h5>
											<div class="d-flex justify-content-between align-items-center">
												<h4 class="font-w600 mb-0 text-black">$6.53</h4>
												<div class="d-flex align-items-center">	
													<svg class="mr-2" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M19.8401 2.60999C19.3294 2.099 18.7229 1.69364 18.0555 1.41708C17.388 1.14052 16.6726 0.998169 15.9501 0.998169C15.2276 0.998169 14.5122 1.14052 13.8448 1.41708C13.1773 1.69364 12.5709 2.099 12.0601 2.60999L11.0001 3.66999L9.94012 2.60999C8.90843 1.5783 7.50915 0.998704 6.05012 0.998704C4.59109 0.998704 3.19181 1.5783 2.16012 2.60999C1.12843 3.64169 0.548828 5.04096 0.548828 6.49999C0.548828 7.95903 1.12843 9.3583 2.16012 10.39L3.22012 11.45L11.0001 19.23L18.7801 11.45L19.8401 10.39C20.3511 9.87924 20.7565 9.27281 21.033 8.60535C21.3096 7.93789 21.4519 7.22248 21.4519 6.49999C21.4519 5.77751 21.3096 5.0621 21.033 4.39464C20.7565 3.72718 20.3511 3.12075 19.8401 2.60999Z" fill="#EA4989"></path>
													</svg>
													<h6 class="text-black mb-0">256k</h6>
												</div>
												<div class="d-flex align-items-center">	
													<svg class="mr-2" width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect width="2.95455" height="18" rx="1.47727" fill="#EA4989"></rect>
														<rect x="5.90918" y="4.90906" width="2.95455" height="13.0909" rx="1.47727" fill="#EA4989"></rect>
														<rect x="11.8184" y="12.2728" width="2.95455" height="5.72727" rx="1.47727" fill="#EA4989"></rect>
														<rect x="17.7275" y="2.45459" width="2.95455" height="15.5455" rx="1.47727" fill="#EA4989"></rect>
													</svg>
													<h6 class="text-black mb-0">6,723</h6>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body border-bottom">
										<div class="media mb-3">
											<img class="rounded"  src="{{ asset('images/card/pic12.jpg') }}" style="width:100%;" alt="">
										</div>
										<div class="info">
											<h5 class="text-black mb-3"><a href="{!! url('/ecom-product-detail'); !!}" class="text-black">Medium Spicy Pizza with Kemangi Leaf</a></h5>
											<div class="d-flex justify-content-between align-items-center">
												<h4 class="font-w600 mb-0 text-black">$6.53</h4>
												<div class="d-flex align-items-center">	
													<svg class="mr-2" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M19.8401 2.60999C19.3294 2.099 18.7229 1.69364 18.0555 1.41708C17.388 1.14052 16.6726 0.998169 15.9501 0.998169C15.2276 0.998169 14.5122 1.14052 13.8448 1.41708C13.1773 1.69364 12.5709 2.099 12.0601 2.60999L11.0001 3.66999L9.94012 2.60999C8.90843 1.5783 7.50915 0.998704 6.05012 0.998704C4.59109 0.998704 3.19181 1.5783 2.16012 2.60999C1.12843 3.64169 0.548828 5.04096 0.548828 6.49999C0.548828 7.95903 1.12843 9.3583 2.16012 10.39L3.22012 11.45L11.0001 19.23L18.7801 11.45L19.8401 10.39C20.3511 9.87924 20.7565 9.27281 21.033 8.60535C21.3096 7.93789 21.4519 7.22248 21.4519 6.49999C21.4519 5.77751 21.3096 5.0621 21.033 4.39464C20.7565 3.72718 20.3511 3.12075 19.8401 2.60999Z" fill="#EA4989"></path>
													</svg>
													<h6 class="text-black mb-0">256k</h6>
												</div>
												<div class="d-flex align-items-center">	
													<svg class="mr-2" width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect width="2.95455" height="18" rx="1.47727" fill="#EA4989"></rect>
														<rect x="5.90918" y="4.90906" width="2.95455" height="13.0909" rx="1.47727" fill="#EA4989"></rect>
														<rect x="11.8184" y="12.2728" width="2.95455" height="5.72727" rx="1.47727" fill="#EA4989"></rect>
														<rect x="17.7275" y="2.45459" width="2.95455" height="15.5455" rx="1.47727" fill="#EA4989"></rect>
													</svg>
													<h6 class="text-black mb-0">6,723</h6>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body border-bottom">
										<div class="media mb-3">
											<img class="rounded"  src="{{ asset('images/card/pic11.jpg') }}" style="width:100%;" alt="">
										</div>
										<div class="info">
											<h5 class="text-black mb-3"><a href="{!! url('/ecom-product-detail'); !!}" class="text-black">Pizza Meal for Kids (Small size)</a></h5>
											<div class="d-flex justify-content-between align-items-center">
												<h4 class="font-w600 mb-0 text-black">$6.53</h4>
												<div class="d-flex align-items-center">	
													<svg class="mr-2" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M19.8401 2.60999C19.3294 2.099 18.7229 1.69364 18.0555 1.41708C17.388 1.14052 16.6726 0.998169 15.9501 0.998169C15.2276 0.998169 14.5122 1.14052 13.8448 1.41708C13.1773 1.69364 12.5709 2.099 12.0601 2.60999L11.0001 3.66999L9.94012 2.60999C8.90843 1.5783 7.50915 0.998704 6.05012 0.998704C4.59109 0.998704 3.19181 1.5783 2.16012 2.60999C1.12843 3.64169 0.548828 5.04096 0.548828 6.49999C0.548828 7.95903 1.12843 9.3583 2.16012 10.39L3.22012 11.45L11.0001 19.23L18.7801 11.45L19.8401 10.39C20.3511 9.87924 20.7565 9.27281 21.033 8.60535C21.3096 7.93789 21.4519 7.22248 21.4519 6.49999C21.4519 5.77751 21.3096 5.0621 21.033 4.39464C20.7565 3.72718 20.3511 3.12075 19.8401 2.60999Z" fill="#EA4989"></path>
													</svg>
													<h6 class="text-black mb-0">256k</h6>
												</div>
												<div class="d-flex align-items-center">	
													<svg class="mr-2" width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect width="2.95455" height="18" rx="1.47727" fill="#EA4989"></rect>
														<rect x="5.90918" y="4.90906" width="2.95455" height="13.0909" rx="1.47727" fill="#EA4989"></rect>
														<rect x="11.8184" y="12.2728" width="2.95455" height="5.72727" rx="1.47727" fill="#EA4989"></rect>
														<rect x="17.7275" y="2.45459" width="2.95455" height="15.5455" rx="1.47727" fill="#EA4989"></rect>
													</svg>
													<h6 class="text-black mb-0">6,723</h6>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer border-0 text-center">
										<a href="{!! url('/ecom-product-list'); !!}" class="btn-link">View More &gt;&gt;</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			
@endsection			