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
				@foreach($data as $result)
				<div class="col-md-6">
					<label>Country : </label>
					<span>{{$result->country_name}}</span>
				</div>
				<div class="col-md-6">
					<label>Name : </label>
					<span>{{$result->name}}</span>
				</div>
				<div class="col-md-6">
					<label>Email : </label>
					<span>{{$result->email}}</span>
				</div>
				<div class="col-md-6">
					<label>Phone : </label>
					<span>{{$result->phone}}</span>
				</div>
				<div class="col-md-6">
					<label>Fax : </label>
					<span>{{$result->fax}}</span>
				</div>
				<div class="col-md-6">
					<label>Date : </label>
					<span>{{$result->date}}</span>
				</div>
				<div class="col-md-6">
					<label>Web Url : </label>
					<span>{{$result->web_url}}</span>
				</div>
				<div class="col-md-6">
					<label>Logo : </label>
					<span><img src="/storage/upload/{{$result->logo}}" width="100px;" height="100px;"></span>
				</div>
				@endforeach
				
			</div>
		@endif
		
	</div>

</body>
</html>