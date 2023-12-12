<?php
include('header.php');
?>



<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
						<form action="" class="sign__form" method="post">
							
                            <div class="sign__group">
                                  <h3 class="text-white">Registration</h3>
							</div>	

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Full Name"  name="name" required >
							</div>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Email"  name="email" required >
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Password"  name="password" required >
							</div>

                            <div class="sign__group">
								<input type="password" class="sign__input" placeholder="Confirm Password"  name="re_pass" required >
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">I agree to the <a href="#">Privacy Policy</a></label>
							</div>
							
							<button class="sign__btn" type="submit" name="btn_signup">Sign up</button>

							<span class="sign__text">Already have an account? <a href="signin.php">Sign in!</a></span>
						</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- isset php -->


<?php 


if(isset($_POST['btn_signup'])){


    $ux_name=$_POST['name'];
    $ux_email=$_POST['email'];
    $ux_pass=$_POST['password'];
    $ux_recheck=$_POST['re_pass'];



if($ux_pass==$ux_recheck){

	$ux_insert=mysqli_query($con,"insert into user_reg_login values('null','$ux_name','$ux_email','$ux_pass')");


	echo
	'
	<script>
       alert("Now Please Log In With Your Email and Password")
	</script>

	<meta http-equiv="refresh" content="0; URL=signin.php"/>

	';

}
else{

	echo '
	<script>
	alert("Password Did Not Matched!")
    </script>
 ';
}


};



?>






<?php
include('footer.php');
?>