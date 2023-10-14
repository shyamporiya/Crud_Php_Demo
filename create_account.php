<?php 
session_start();
include "header.php"; ?>
<style>
  body{
    background-color:#233140 !important;
  }
  .success{
    color: #ea1a1a;
    font-style: revert;
    font-weight: 700;
    font-size: 31px;
    background-color: darkblue;
  }
</style>
<section class="main_section">


  <div class="container" style="margin-top: 40px;">


    <div class="row center_form">
        <?php 
if (isset($_SESSION['success'])) {?>
     <div class="text-center">
      <div class="success"><?php echo $_SESSION['success']; ?> </div>
      </div>
  <?php  unset($_SESSION['success']); } ?>
     
      <form id="signup-form" action="save.php" method="POST" enctype="multipart/form-data">
        <h3><b>Create Account</b></h3>
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="">
              <input type="hidden" name="update_id" value="" />
              <label class="form-label">First name</label>
              <input type="text" id="f_name" name="f_name" class="form-control" value=""
                required="true" />
            </div>
          </div>
         
          <div class="col-md-12 mb-2">
            <div class="form-outline">
              <label class="form-label">Last name</label>
              <input type="text" id="l_name" name="l_name" class="form-control" value="" />

            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-outline">
              <label class="form-label">Email</label>
              <input type="email" id="email" name="email" class="form-control" value="" />

            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-outline">
              <label class="form-label">Mobile</label>
              <input type="text" id="mobile" name="mobile" class="form-control" value="" />

            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-outline">
              <label class="form-label">Password</label>
              <input type="password" id="password" name="password" class="form-control" value="" />

            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-outline">
              <label class="form-label">Profile Photos</label>
              <input type="file" id="image" name="image" class="form-control" />
            </div>
          </div>

          <div class="pt-3">
            <button type="submit" id="submit" class="btn btn-warning sing-up-btn">Submit</button>
            <a type="button" class="btn btn-warning sing-up-btn">Forgot Password</a>
          </div>
      </form>
      <div class="pt-3">
        <span class="btn sign-in-btn bg-grey" style="color:yellow">Already Have an Account</span>
        <a href="login.php" class="btn btn-light sign-in-btn">Sign In</a>
      </div>




    </div>
  </div>
</section>
<?php include "footer.php"; ?>
<script>
    $(document).ready(function () {
      $.validator.addMethod("customemail", 
    function(value, element) {
        return /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(value);
    }, 
    "Enter A Valid Email address"
);
        $("#signup-form").validate({
            rules: {
                f_name: {
                    required: true,
                },
                l_name: {
                    required: true,
                },
                 email: {
                        required:  {
                                depends:function(){
                                    $(this).val($.trim($(this).val()));
                                    return true;
                                }   
                            },
                        customemail: true
                    },
                mobile: {
                    required: true,
                },
                password: {
                    required: true,
                },
                image: {
                    required: true,
                },
            },
            messages: {
                f_name: {
                    required: "Please enter First Name",
                },
                l_name: {
                    required: "Please enter your Last Name",
                },
                email: {
                    required: "Please enter your Email",
                },
                mobile: {
                    required: "Please enter your Mobile No",
                },
                password: {
                    required: "Please enter your password",
                },
                image: {
                    required: "Please Upload your image",
                },
            },
        });
    });
</script>
