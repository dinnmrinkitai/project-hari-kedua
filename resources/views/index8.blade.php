<!DOCTYPE html>
<html>
<head>
	<title>Ini halaman</title>
</head>
<body>
<center>

<h1>Daftar Nama Kendaraan :</h1>
@foreach ($b as $datas)
<li> {{$datas}} </li>
@endforeach

</center>
</body>
</html>