<?php include "header.php"; ?>
<style>
  body{
    background-color:#233140 !important;
    
}
</style>
    <section class="main_section">
  <!-- <a href="create_account.php" target="_blank" style="border: 2px solid red;">Form</a>
  <a href="table.php">Table</a> -->

        
        <div class="container" style="margin-top: 150px;">
          <div class="container center_form">
              <form id="login-form" action="sign-in.php" method="POST" enctype="multipart/form-data">
                <?php 
                session_start();

                if (isset($_SESSION['message'])) {?>
                <div class="text-center" style="background-color: red;">

                  <h5><b><?php echo $_SESSION['message']; ?> </b></h5>
                </div>
        <?php  unset($_SESSION['message']); } ?>
                <h3><b>Login Account</b></h3>
                <div class="row">
                  <div class="col-md-12 mb-2">
                    <div class="">
                    <label class="form-label">Mobile No</label>
                      <input type="text" id="mobile" name="mobile" class="form-control" value="<?php if(isset($_COOKIE['mobile'])) { echo $_COOKIE['mobile'];} ?>"/>
                    </div>
                  </div>
                  <div class="col-md-12 mb-2">
                    <div class="form-outline">
                    <label class="form-label">Password</label>
                      <input type="password" id="password" name="password" class="form-control" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password'];} ?>"/>
                    </div>
                  </div>
                  <div>
                    <input type="checkbox" name="remember" id="remember">
                    <label>Remember Me</label>            
              

                  </div>
                <div class="pt-3">
                  <button type="submit" id="submit" class="btn btn-warning sing-in-btn">Login</button>
                  <a type="button" class="btn btn-warning sing-in-btn">Forgot Password</a>
                </div>
                </form>
    
                <div class="pt-3">
                  <span class="btn sign-in-btn bg-grey" style="color:yellow">Don't Have a Account</span>
                  <a href="create_account.php" class="btn btn-light sign-in-btn">Sign Up</a>
                </div>

                
            
            

        </div>
      </div>
      </section>
  <?php include "footer.php"; ?>

<script>
    $(document).ready(function () {
        $("#login-form").validate({
            rules: {
                mobile: {
                    required: true,
                    minlength: 4,
                },
                password: {
                    required: true,
                    minlength: 6,
                },
            },
            messages: {
                mobile: {
                    required: "Please enter your username",
                    minlength: "Username must be at least 4 characters long",
                },
                password: {
                    required: "Please enter your password",
                    minlength: "Password must be at least 6 characters long",
                },
            },
        });
    });
</script>

