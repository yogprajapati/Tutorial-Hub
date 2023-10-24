
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<style>
  body{
	background-image: url("https://static.vecteezy.com/system/resources/previews/005/210/247/original/bright-abstract-background-orange-color-free-vector.jpg");
    /* ("https://images.pexels.com/photos/891252/pexels-photo-891252.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"); */
	background-position: center;
    background-origin: content-box;
    background-repeat: no-repeat;
    background-size: cover;
	min-height:100vh;
	font-family: 'Noto Sans', sans-serif;
}
    .form-gap {
        padding-top: 70px;
    }
    .panel-default {
        border-color:#ff6600 ;
        box-shadow: none;
    }
    .panel-default > .panel-heading {
        color: #ff6600;
        background-color: #fff;
        border-color: #fff;
        padding: 10px 15px;
    }
    .panel-default > .panel-heading h2 {
        margin-top: 0;
        margin-bottom: 0;
        font-size: 24px;
    }
    .panel-default > .panel-body {
        padding: 30px 40px;
    }
    .form-control {
        border-radius: 0;
    }
    .btn-primary {
        background-color: #2e6da4;
        border-color: #2e6da4;
    }
    .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
        background-color: #265d8e;
        border-color: #265d8e;
    }
</style>
<div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <div class="panel-heading">
                    <h2 class="text-center">Forgot Password?</h2>
                    <p>You can reset your password here.</p>
                  </div>
                  <div class="panel-body">
                    <form id="register-form" role="form" action="forgotpassword.php" autocomplete="off" class="form" method="post">
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input type="email" id="email" name="email" placeholder="Email Address" class="form-control"  type="email" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Send Mail" type="submit">
                      </div>
                      <!-- <input type="hidden" class="hide" name="token" id="token" value="">  -->
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
