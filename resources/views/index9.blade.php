<!DOCTYPE html>
<html>
<head>
	<title>Ini halaman</title>
</head>
<body>
<center>

<h1>Daftar Nama Merk Laptop:</h1>
@foreach ($c as $datas)
<li> {{$datas}} </li>
@endforeach

</center>
</body>
</html>