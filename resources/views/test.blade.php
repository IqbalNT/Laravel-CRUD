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
		<h4>Company Info</h4>
		<div class="row">
			<div class="col-md-6">
			<form action="find_info" method="POST">
				{{csrf_field()}}
				<label>Country</label>
				<select class="form-control" name="country" required>
					<option value="">Select Country</option>
					<option>Bangladesh</option>
					<option>China</option>
					<option>India</option>
				</select>
			</div>
			<div class=" col-md-6">
				<button class="btn btn-primary" type="submit" name="submit" style="margin-top: 23px;">Search</button>
			</form>
				
			</div>
			
		</div>
		<button class="btn btn-info" data-toggle="modal" data-target="#myModal" style="float: right;">Add New</button>

		@if(count($data)>0)
			<table class="table table-responsive">
				<thead>
					<th>#</th>
					<th>Country Name</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Web URL</th>
					<th>View</th>
					<th>Edit</th>
				</thead>
				<tbody>
					@php
					$i=0;
					@endphp
					@foreach($data as $result)
					<tr>
						<td>{{++$i}}</td>
						<td>{{$result->country_name}}</td>
						<td>{{$result->name}}</td>
						<td>{{$result->email}}</td>
						<td>{{$result->phone}}</td>
						<td>{{$result->web_url}}</td>
						<td><a href="{{URL::to('view',$result->id)}}">View</a></td>
						<td><a href="{{URL::to('edit',$result->id)}}">Edit</a></td>
					</tr>
					@endforeach

					

				</tbody>
				
			</table>
		@endif
		
	</div>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Info</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<form action="addinfo" method="POST" enctype="multipart/form-data">
        		{{csrf_field()}}
        	<div class="col-md-12">
        		<label>Country</label>
				<select class="form-control" name="country" required>
					<option value="">Select Country</option>
					<option>Bangladesh</option>
					<option>China</option>
					<option>India</option>
				</select>
        	</div>
        	<div class="col-md-12">
        		<label>Name</label>
        		<input type="text" name="name" class="form-control" required>
        	</div>
        	<div class="col-md-12">
        		<label>Address</label>
        		<textarea class="form-control" rows="5" name="address"></textarea>
        	</div>
        	<div class="col-md-12">
        		<label>Email</label>
        		<input type="email" name="email" class="form-control" required>
        	</div>
        	<div class="col-md-12">
        		<label>Phone</label>
        		<input type="number" name="phone" class="form-control" required>
        	</div>
        	<div class="col-md-12">
        		<label>Fax</label>
        		<input type="text" name="fax" class="form-control">
        	</div>
        	<div class="col-md-12">
        		<label>Web Url</label>
        		<input type="text" name="web_url" class="form-control">
        	</div>
        	<div class="col-md-12">
        		<label>Date</label>
        		<input type="date" name="date" class="form-control">
        	</div>
        	<div class="col-md-12">
        		<label>Logo</label>
        		<input type="file" name="logo" class="form-control">
        	</div>
        	
        </div>
      </div>
      <div class="modal-footer">
      	<button class="btn btn-success" type="submit" name="Submit">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </form>
      </div>
    </div>

  </div>
</div>

</body>
</html>