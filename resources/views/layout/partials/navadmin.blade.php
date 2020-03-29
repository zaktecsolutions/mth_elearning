{{-- Nav bar for the  student  dashboard  --}}

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

	<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="collapse_target">
		{{-- <span class="navbar-text">hgjhfjhgjhgfj</span>  --}}
		<a class="navbar-brand" href="{{ route('dashboard') }}">  Admin Dashboard</a>
		{{-- <a class="navbar-brand"><img src="{{ url('images/mathstutorhelplogo.png')}}"> </a> --}}
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="{{ route('dashboard') }}">Home </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('account')}}">myAccount </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('post')}}">Ask Questions </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Digital Coach </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Learn </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Topics </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Quiz </a>
			</li>

		</ul>
		<ul class="navbar-right">
			{{-- 	<form action="/action_page.php">
				<input type="text" placeholder="Username" name="username">
				<input type="text" placeholder="Password" name="psw">
				<button type="submit">Login</button> --}}
			<a href="{{ route('logout') }}" class="btn btn-light" role="button">Logout</a>

			</form>
		</ul>


		{{-- <ul class="navbar-right">
			 <li><a href= "{{ route('logout') }}">Logout</a> </li>
		</ul> --}}

	</div>
</nav>