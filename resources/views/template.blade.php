<!DOCTYPE html>
<html>
<head>
	<title>Mini Projek</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

	<nav class="navbar navbar-expand bg-dark">
		<ul class="nav">
			<li>
				<a href="{{url('/beranda') }}" class="nav-link">Home</a>
			</li>
			<li>
				<a href="{{url('/mahasiswa') }}" class="nav-link">Data Mahasiswa</a>
			</li>
			<li>
				<a href="{{url('/info') }}" class="nav-link">Info Kegiataan</a>
			</li>
		</ul>
	</nav>
	@yield('content')

	<footer class="fixed-bottom bg-danger">
		<div class="text-center">
			(c) 2023 Copyright : Universitas Coding Indonesia!
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>