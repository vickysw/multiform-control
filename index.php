<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="assets/jquery-3.1.1.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/jquery.validate.min.js"></script>

</head>
<body>
	<div class="container">
	 <form method="post" action="" id="register_form">
		<div class="row">
			<div class="col-9">
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputEmail4">Email<span class="text-danger">*</span></label>
				      <input type="email" class="form-control" id="inputEmail4" name="inputEmail4" placeholder="Email" required>
				      <label id="inputEmail4-error" class="error text-danger" for="inputEmail4"></label>
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputNamel4">Name</label>
				      <input type="text" class="form-control" id="inputNamel4" name="inputNamel4" placeholder="Name">
				      <label id="inputNamel4-error" class="error text-danger" for="inputNamel4"></label>

				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputPasswordl4">Password<span class="text-danger">*</span></label>
				      <input type="password" class="form-control" id="inputPasswordl4" name="inputPasswordl4" placeholder="Password">
				      <label id="inputPasswordl4-error" class="error text-danger" for="inputPasswordl4"></label>

				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputcnfPasswordl4">Confirm Password</label>
				      <input type="password" class="form-control" id="inputcnfPasswordl4" name="inputcnfPasswordl4" placeholder="Password">
				      <label id="inputcnfPasswordl4-error" class="error text-danger" for="inputcnfPasswordl4"></label>

				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputAddress">Address<span class="text-danger">*</span></label>
				    <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="1234 Main St">
				      <label id="inputAddress-error" class="error text-danger" for="inputAddress"></label>

				  </div>
				  <div class="form-group">
				    <label for="inputAddress2">Address 2</label>
				    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputCity">City</label>
				      <input type="text" class="form-control" id="inputCity">
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputState">State</label>
				      <select id="inputState" class="form-control">
				        <option selected>Choose...</option>
				        <option>...</option>
				      </select>
				    </div>
				    <div class="form-group col-md-2">
				      <label for="inputZip">Zip<span class="text-danger">*</span></label>
				      <input type="text" class="form-control" id="inputZip" name="inputZip">
				      <label id="inputZip-error" class="error text-danger" for="inputZip"></label>

				    </div>
				  </div>
				  <div class="form-group">
				    <div class="form-check">
				      <input class="form-check-input" type="checkbox" id="gridCheck">
				      <label class="form-check-label" for="gridCheck"><span class="text-danger">*</span>
				        Check me out
				      </label>
				      <label id="gridCheck-error" class="error text-danger" for="gridCheck"></label>

				    </div>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
			</div>
			<div class="col-3 mt-4">
				<a href="#" class="btn btn-info">Add</a>
				<div class=".col-md-4 .ml-auto">
					<div class="row container-fluid mt-2">
					    <div class="col">
					      <input type="text" class="form-control" name="fname[]" id="fname[]" placeholder="First name">
					    </div>
					    <div class="col">
					      <input type="text" class="form-control" name="lname[]" id="lname[]" placeholder="Last name">
					    </div>
					  </div>
				</div>
			</div>
		</div>
	</form>	
	</div>

<script type="text/javascript">
	$(document).ready(function(){

		// Validation
		$('#register_form').validate({
			rules:{
				'inputEmail4':{
					required:true,
					email:true
				},
				'inputNamel4':{
					required:true
				},
				'inputPasswordl4': {
					 required: true,
					 minlength:4
					},
				'inputcnfPasswordl4':{
					equalTo: '#inputPasswordl4'
				},
				'inputAddress':{
					required:true,
				},
				'inputZip':{
					minlength:6
				},
				'fname[]':{
					required:true,

				},
				'lname[]':{
					required:true,
				}

			},
			messages:{
				'inputEmail4':{
					required:"Email is required.",
					email:"Email is not valid."
				},
				'inputNamel4':{
					required:"Name is required."
				},
				'inputPasswordl4':{
					required:"Password is required.",
					minlength:"Password must containt 4 char."

				},
				'inputcnfPasswordl4':'Password and confirm password does not match.',
				'fname[]' : "Firstname is required",
				'lname[]' : "Lastname is required"
			}
		});

	});

</script>	
</body>
</html>