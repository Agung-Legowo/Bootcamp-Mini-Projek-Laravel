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
				<a class="nav-link" href="{{ url('/beranda') }}">Home</a>
			</li>
			<li>
				<a class="nav-link" href="{{ url('/mahasiswa') }}">Data Mahasiswa</a>
			</li>
			<li>
				<a class="nav-link" href="{{ url('/info') }}">Info Kegiataan</a>
			</li>
		</ul>
		
	</nav>

	<div class="jumbotron text-center">
		<h1>Portal Informasi Mahasiswa</h1>
		<p>Selamat Datang di Portal Informasi Universitas Coding Indonesia!</p>
		<a href="#" class="btn btn-danger">Info Kegiataan Kampus</a>
		<a href="#" class="btn btn-dark">Data Mahasiswa</a>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>