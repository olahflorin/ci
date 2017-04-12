<section id="form"><!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form"><!--login form-->
					<h2>Login to your account</h2>
					<form name="login" action="" method="post">
						<input name="login_email" type="email" placeholder="Email" />
						<input name="login_parola" type="password" placeholder="Password" />
						<?php if(!empty($erori['login'])) echo '<br/>'.$erori['login'].'<br/>'; ?>
						<span>
							<input type="checkbox" class="checkbox"> 
							Keep me signed in
						</span>
						<button type="submit" class="btn btn-default">Login</button>
					</form>
				</div><!--/login form-->
			</div>
			<div class="col-sm-1">
				<h2 class="or">OR</h2>
			</div>
			<div class="col-sm-4">
				<div class="signup-form"><!--sign up form-->
					<h2>New User Signup!</h2>
					<form name="signup" action="" method="post">
						<input name="nume" type="text" placeholder="Name"/>
						<?php if(!empty($erori['nume'])) echo $erori['nume']; ?>
						<input name="email" type="email" placeholder="Email Address"/>
						<?php if(!empty($erori['email'])) echo $erori['email']; ?>
						<input name="parola" type="password" placeholder="Password"/>
						<?php if(!empty($erori['parola'])) echo $erori['parola']; ?>
						<button type="submit" class="btn btn-default">Signup</button>
					</form>
				</div><!--/sign up form-->
			</div>
		</div>
	</div>
</section><!--/form-->