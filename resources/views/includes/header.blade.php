    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

    	<!--**********************************
            Nav header start
        ***********************************-->
    	<div class="nav-header">
    		<!--<a href="{{route('welcome')}}" class="brand-logo">
    			<img class="logo-abbr" src="./images/logo.png" alt="">
    			<img class="logo-compact" src="./images/logotext.png" alt="">
    			<img class="brand-title" src="./images/logotext.png"   alt="">-->
    		</a>

    		<div class="nav-control">
    			<div class="hamburger">
    				<span class="line"></span><span class="line"></span><span class="line"></span>
    			</div>
    		</div>
    	</div>
    	<!--**********************************
            Nav header end
        ***********************************-->

    
    	<!--**********************************
            Header start
        ***********************************-->
    	<div class="header">
    		<div class="header-content">
    			<nav class="navbar navbar-expand">
    				<div class="collapse navbar-collapse justify-content-between">
    					<div class="header-left">
    						<div class="dashboard_bar">
    							PREGLED
    						</div>
    					</div>
    					<ul class="navbar-nav header-right">
    						<li class="nav-item">
    							<div class="input-group search-area ml-auto d-inline-flex">
    								<input type="text" class="form-control" placeholder="Pretraga">
    								<div class="input-group-append">
    									<button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
    								</div>
    							</div>
    						</li>
    						
    					
    				
    						<li class="nav-item dropdown header-profile">
    							<a class="nav-link" href="javascript:;" role="button" data-toggle="dropdown">
    								<img src="images/profile/12.png" width="0" alt="" />
    								<div class="header-info">
    									@auth
    									<h5 style="color:white">&nbsp; Prijavljeni ste kao: {{ auth()->user()->name}}  &nbsp; </h5>



    								</div>
    							</a>
    							<div class="dropdown-menu dropdown-menu-right">


								<form action="{{route('logout')}}" method="POST"><a>LOGOUT</a>
                     @csrf
                     <button type="submit"><i class="fa fa-sign-out"></i></button>

                 </form>
    								@endauth
									
									
    								</a>
    						</div>
    						</li>
    					</ul>
    				</div>
    			</nav>
    		</div>
    	</div>
    	<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    	<!--**********************************
            Sidebar start
        ***********************************-->

		
    	<div class="deznav">
    		<div class="deznav-scroll">
    			<ul class="metismenu" id="menu">
    				<li><a class="" href="{{route('welcome')}}" aria-expanded="false">
    						<i class="flaticon-381-home-2"></i>
    						<span class="nav-text">Početna</span>
    					</a>
    					
    				</li>
    				<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
    						<i class="flaticon-381-controls-3"></i>
    						<span class="nav-text">Parking</span>
    					</a>
    					<ul aria-expanded="false">
    						<li><a href="{{route('parking')}}">Parking pozicije</a></li>
    						
    						
    					</ul>
    				</li>
    			</ul>

    			<div class="plus-box">
    				<p class="fs-16 font-w500 mb-1">Statistike</p>
    				<a class="text-white fs-26" href="javascript:;"><i class="las la-long-arrow-alt-right"></i></a>
    			</div>
    			<div class="copyright">
    				<p class="fs-14 font-w200"><strong class="font-w400">SEKTOR ZA IKT</strong> © 2021 </p>

    			</div>
				
    		</div>
    	</div>
    	<!--**********************************
            Sidebar end
        ***********************************-->




    </div>

	