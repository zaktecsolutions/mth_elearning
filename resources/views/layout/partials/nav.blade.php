<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

	<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="collapse_target">
		{{-- <span class="navbar-text"></span> --}}
		<a class="navbar-brand"><img src="{{ url('images/mathstutorhelplogo.png')}}"> </a>


		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="#">Home </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Trial </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Register </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">FAQ </a>
			</li>
		</ul>
		{{--   <ul class="navbar-right">
		 	<form action="/action_page.php">
				<input type="text" placeholder="Username" name="username">
				<input type="text" placeholder="Password" name="psw">
				<button type="submit">Login</button> 		
				<a href="{{ route('logout') }}" class="btn btn-light" role="button">Logout</a>
			</form>
		</ul>    --}}


	</div>
</nav>