
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 

     <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/login.css"> 
</head>  
<!-- 
<body>
<div class="container-login100" id="form">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="post" 
			action="<?php echo base_url(). 'index.php/login/proses_login'?>">
				<span class="pesan"><strong>Login</strong>
					<br>
					<?php
					if (isset($_GET['pesan']))  {
						if ($_GET['pesan'] == "gagal" ) {
							echo "Login gagal! username dan password salah!";
						}
					}
				?>
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="username">
                    <span class="focus-input100">Username : </span><br>
					<input class="input100" type="text" name="username">
				</div>
                    <br>
				<div class="wrap-input100 validate-input m-b-25" data-validate = "password">
                    <span class="focus-input100">Password : </span><br>
					<input class="input100" type="password" name="password">
				</div>
                    <br>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">	
						Login
					</button>
				</div>
			</form>
		</div>
	</div>
</body>
 -->
<!--  
<body>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Login</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>    
</div>
</body> --> 

<!-- <!doctype html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    
    <link rel="stylesheet" href="css/login.css">
  </head> -->
  
  <body>

    <!-- Example Code -->
    <div class="tombollogin">
    <button type="button" class="btn btn-primary btn-lg scrollto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Log In</button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="pesan">Masukkan Username dan Password yang sudah terdaftar</h5>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Username</label>
                <input type="text" class="form-control" id="username">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Password</label>
                <input type="text" class="form-control"id="password"></input>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" >Login</button>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Masukkan Username dan Password yang sudah terdaftar!</p>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeusernameX">Username</label>
                <input type="username" id="typeusernameX" class="form-control form-control-lg" />
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typePasswordX">Password</label>
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
  </body>
</html>