<!DOCTYPE html>
<html>
<head>
	<title>Ini halaman</title>
</head>
<body>
<center>

<h1>Daftar Nama :</h1>
@foreach ($data as $datas)
<li> {{$datas}} </li>
@endforeach

</center>
</body>
</html>