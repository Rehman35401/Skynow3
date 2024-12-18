<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> @if(Auth::user()) {{Auth::user()->name}} @endif</strong></div>
	
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="{{route('home')}}"><img src="{{asset('themes/images/logo.png')}}" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>CLOTHES </option>
			<option>FOOD AND BEVERAGES </option>
			<option>HEALTH & BEAUTY </option>
			<option>SPORTS & LEISURE </option>
			<option>BOOKS & ENTERTAINMENTS </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="{{route('specialOffer')}}">Specials Offer</a></li>
	 <li class=""><a href="{{route('delivery')}}">Delivery</a></li>
	 <li class=""><a href="{{route('contact')}}">Contact</a></li>
	 <li class="">
	 @if(Auth::user())
	 	<a href="{{route('user_logout')}}"><span class="btn btn-large btn-success">Log out</span></a>
	 @else
	 	<a href="{{route('user_login')}}"><span class="btn btn-large btn-success">Login</span></a>
	 @endif
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
