<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		
	</head>
	<body>
		<div class="container  mt-5">
			<h1 class="text-center">Add Person's Contact Details</h1>
		<form method="POST" action="{{route('storedetails')}}" class=" mx-auto w-50 mt-3">
			@csrf
			<div class="mb-3">
				<label for="name" class="form-label">Name</label>
				<input type="text" class="form-control" id="name" name="name" required>
			</div>
			<div class="mb-3">
				<label for="number" class="form-label">Number</label>
				<input type="number" class="form-control" id="number" name="number" required>
			</div>
			<button type="submit" class="btn btn-primary">Save</button>
			<a href="{{route('showcontacts')}}" class="btn btn-primary">Back</a>
		</form>
		</div>
	</body>
</html>