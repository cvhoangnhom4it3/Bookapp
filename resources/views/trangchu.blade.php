<!DOCTYPE html>
<html>
<head>
	<title>KK</title>
</head>
<body>
	@foreach($theloai as $tl)
		<a href="#">
			{{$tl->TenTL}}
		</a>
	@endforeach
</body>
</html>