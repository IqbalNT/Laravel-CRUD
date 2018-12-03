<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h4>Company Dtails</h4>
		@if(count($data)>0)
			<div class="row">
				<form action="/update" method="POST" enctype="multipart/form-data">
					{{csrf_field()}}
				@foreach($data as $result)
				<input type="hidden" name="id" value="{{$result->id}}">
				<div class="col-md-6">
					<label>Country : </label>
					<select class="form-control" name="country" required>
						<option value="">Select Country</option>
						<option>Bangladesh</option>
						<option>China</option>
						<option>India</option>
					</select>
				</div>
				<div class="col-md-6">
					<label>Name : </label>
					<input type="text" name="name" value="{{$result->name}}" class="form-control">
				</div>
				<div class="col-md-6">
					<label>Email : </label>
					<input type="email" name="email" value="{{$result->email}}" class="form-control">
				</div>
				<div class="col-md-6">
					<label>Phone : </label>
					<input type="number" name="phone" value="{{$result->phone}}" class="form-control">
				</div>
				<div class="col-md-6">
					<label>Fax : </label>
					<input type="text" name="fax" value="{{$result->fax}}" class="form-control">
				</div>
				<div class="col-md-6">
					<label>Date : </label>
					<input type="date" name="date" value="{{$result->date}}" class="form-control">
				</div>
				<div class="col-md-6">
					<label>Web Url : </label>
					<input type="text" name="web_url" value="{{$result->web_url}}" class="form-control">
				</div>
				<div class="col-md-6">
					<label>Logo : </label>
					<input type="file" name="logo" value="{{$result->logo}}" class="form-control">
					<span><img src="/storage/upload/{{$result->logo}}" width="100px;" height="100px;"></span>
				</div>
				@endforeach
			<button class="btn btn-success" type="submit" name="update">Update</button>

				</form>
				
			</div>
		@endif
		
	</div>

</body>
</html>