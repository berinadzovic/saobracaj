@extends('layouts.main')


@section('content')

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
   
    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-6 col-xxl-5 col-lg-6">
						<div class="card ticket-bx">
							<div class="card-body">
								<div class="d-sm-flex d-block pb-sm-3 align-items-end">
									<div class="mr-auto pr-3 mb-2 mb-sm-0">
										<span class="text-white fs-20 font-w200 d-block mb-sm-3 mb-2">Ticket Sold Today</span>
										<h2 class="fs-40 text-white mb-0">456,502<span class="fs-18 ml-2">pcs</span></h2>
									</div>
									<div class="d-flex flex-wrap">
										<svg width="87" height="58" viewBox="0 0 87 58" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M18.4571 37.6458C11.9375 44.6715 4.81049 52.3964 2 55.7162H68.8125C77.6491 55.7162 84.8125 48.5528 84.8125 39.7162V2L61.531 31.9333C56.8486 37.9536 48.5677 39.832 41.746 36.4211L37.3481 34.2222C30.9901 31.0432 23.2924 32.4352 18.4571 37.6458Z" fill="url(#paint0_linear)"/>
											<path d="M2 55.7162C4.81049 52.3964 11.9375 44.6715 18.4571 37.6458C23.2924 32.4352 30.9901 31.0432 37.3481 34.2222L41.746 36.4211C48.5677 39.832 56.8486 37.9536 61.531 31.9333L84.8125 2" stroke="white" stroke-width="4" stroke-linecap="round"/>
											<defs>
											<linearGradient id="paint0_linear" x1="43.4062" y1="8.71453" x2="46.7635" y2="55.7162" gradientUnits="userSpaceOnUse">
											<stop stop-color="white" offset="0"/>
											<stop offset="1" stop-color="white" stop-opacity="0"/>
											</linearGradient>
											</defs>
										</svg>
										<div class="ml-3">
											<p class="text-warning fs-20 mb-0">+4%</p>
											<span class="fs-12">than last day</span>
										</div>
									</div>
								</div>
								<div class="progress mt-3 mb-4" style="height:15px;">
									<div class="progress-bar-striped progress-bar-animated" style="width: 86%; height:15px;" role="progressbar">
										<span class="sr-only">86% Complete</span>
									</div>
								</div>
								<p class="fs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
								<a href="#" class="text-white">View detail<i class="las la-long-arrow-alt-right scale5 ml-3"></i></a>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-7 col-lg-6">
						<div class="row">
							<div class="col-sm-6">
								<div class="card overflow-hidden">
									<div class="card-header align-items-start pb-0 border-0">	
										<div>
											<h4 class="fs-16 mb-0">451,509</h4>
											<span class="fs-12">Sales</span>
										</div>
										<div class="dropdown">
											<a href="javascript:;"	class="dropdown-toggle fs-12" data-toggle="dropdown" aria-expanded="false">
												This Week
											</a>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="javascript:void(0);">Daily</a>
												<a class="dropdown-item" href="javascript:void(0);">Weekly</a>
												<a class="dropdown-item" href="javascript:void(0);">Monthly</a>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<canvas id="widgetChart1" height="60" class="mr-3"></canvas>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card overflow-hidden">
									<div class="card-header align-items-start pb-0 border-0">	
										<div>
											<h4 class="fs-16 mb-0">Increase 25%</h4>
											<span class="fs-12">Comparisson</span>
										</div>
										<div class="dropdown">
											<a href="javascript:;"	class="dropdown-toggle fs-12" data-toggle="dropdown" aria-expanded="false">
												Daily
											</a>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="javascript:void(0);">Daily</a>
												<a class="dropdown-item" href="javascript:void(0);">Weekly</a>
												<a class="dropdown-item" href="javascript:void(0);">Monthly</a>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<canvas id="widgetChart2" height="60"></canvas>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card overflow-hidden">
									<div class="card-header align-items-start pb-0 border-0">	
										<div class="dropdown ml-auto">
											<a href="javascript:;"	class="dropdown-toggle fs-12" data-toggle="dropdown" aria-expanded="false">
												This Week
											</a>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="javascript:void(0);">Daily</a>
												<a class="dropdown-item" href="javascript:void(0);">Weekly</a>
												<a class="dropdown-item" href="javascript:void(0);">Monthly</a>
											</div>
										</div>
									</div>
									<div class="card-body pt-2">
										<div class="index-chart-point">
											<div class="check-point-area">
												<canvas id="doughnut_chart"></canvas>
											</div>
											<ul class="index-chart-point-list">
												<li><i class="fa fa-stop text-danger"></i>Tickets A</li>
												<li><i class="fa fa-stop text-success"></i> Tickets B</li>
												<li><i class="fa fa-stop text-warning"></i> Tickets C</li>
												<li><i class="fa fa-stop text-info"></i> Tickets D</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card overflow-hidden">
									<div class="card-header align-items-start pb-0 border-0">	
										<div>
											<h4 class="fs-16 mb-0">$456,623</h4>
											<span class="fs-12">Income</span>
										</div>
										<div class="dropdown">
											<a href="javascript:;"	class="dropdown-toggle fs-12" data-toggle="dropdown" aria-expanded="false">
												Monthly
											</a>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="javascript:void(0);">Daily</a>
												<a class="dropdown-item" href="javascript:void(0);">Weekly</a>
												<a class="dropdown-item" href="javascript:void(0);">Monthly</a>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<canvas id="lineChart_4" height="60"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8">	
						<div class="card">
							<div class="card-header border-0 pb-0 d-sm-flex d-block">
								
								<div class="card-action card-tabs mt-3 mt-sm-0">
               
                          
                                <span>$airlines</span>	<br>
                           
								</div>
							</div>
							
						</div>
					</div>
					
					
					
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
@endsection
      


