<div class="navbar">
	<a class="navbar-brand" href="#">Blog App</a>
	<ul class="nav navbar-nav">
		<li>
		<a href="/posts">Posts</a>
		</li>
		
	@if (Auth::check())
		<li>
		<a href="{{ route('posts.create')}}">Write Posts</a>

		</li>
	@endif

	</ul>

	<ul class="nav navbar-nav navbar-right">

	@if (Auth::check())

	<li>

		<a href="/">{{ Auth::user()->name}}</a>
	</li>

	<li>
		<a href="/auth/logout">Logout</a>
	</li>

	@else

	<li>

		<a href="/auth/register">Register</a>

	</li>

	<li>
		<a href="/auth/login">Login</a>
	</li>

	@endif

	</ul>

</div>

