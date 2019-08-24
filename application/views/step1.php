
<div>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Moodle Mobile Application Generation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="./assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="./" method="POST">
				<span class="contact100-form-title">
					STEP 1
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" id="name" placeholder="Enter your name" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="email" name="email" id="email" placeholder="Enter your email addess" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select" >
					<span class="label-input100">Needed Services</span>
					<div>
						<select class="selection-2" name="service"  id="service" required>
							<option>Android</option>
							<option>iOS</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Price</span>
					<div>
					<input class="input100" type="text" name="price" id="price" placeholder="$0" value="10" disabled>
					</div>
					<span class="focus-input100"></span>
				</div>

			

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" id="step1Btn" type="submit" name="submit">
							<span>
								Next
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="./assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="./assets/vendor/bootstrap/js/popper.js"></script>
	<script src="./assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./assets/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
        document.getElementById('service').onselect = function(){
            if(document.getElementById('service').value){document.getElementById('price').value="$50";}
            else{document.getElementById('price').value="$100";}
   
        }
	</script>
<!--===============================================================================================-->
	<script src="./assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="./assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="./assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

<script>
  
  
// document.getElementById('step1Btn').onclick = function(){
//     console.log("TEST");
//     var name=document.getElementById('name').value;
//     var email=document.getElementById('email').value;
//     var service=document.getElementById('service').value;
//     var price=document.getElementById('price').value;
  
//    location.reload();
// }
</script>

</body>
</html>



</div>