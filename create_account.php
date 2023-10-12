<?php include "header.php"; ?>

<section class="main_section">


  <div class="container" style="margin-top: 40px;">


    <div class="row center_form">
      <form id="student_form" action="save.php" method="POST" enctype="multipart/form-data">
        <h3><b>Create Account</b></h3>
        <div class="row">
          <div class="col-md-12 mb-2">
            <?php $value_f = isset($row['f_name'])!='' ? $row['f_name']: ''; ?>
            <div class="">
              <input type="hidden" name="update_id" value="" />
              <label class="form-label">First name</label>
              <input type="text" id="f_name" name="f_name" class="form-control" value="<?php echo $value_f ;?>"
                required="true" />
            </div>
          </div>
          <?php $value_l = isset($row['l_name'])!='' ? $row['l_name']: ''; ?>
          <div class="col-md-12 mb-2">
            <div class="form-outline">
              <label class="form-label">Last name</label>
              <input type="text" id="l_name" name="l_name" class="form-control" value="<?php echo $value_l ?>" />

            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-outline">
              <label class="form-label">Email</label>
              <input type="text" id="email" name="email" class="form-control" value="<?php echo $value_l ?>" />

            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-outline">
              <label class="form-label">Mobile</label>
              <input type="text" id="mobile" name="mobile" class="form-control" value="<?php echo $value_l ?>" />

            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-outline">
              <label class="form-label">Password</label>
              <input type="text" id="password" name="password" class="form-control" value="<?php echo $value_l ?>" />

            </div>
          </div>
        </div>
        <?php $value_m = isset($row['mothers_name'])!='' ? $row['mothers_name']: ''; ?>
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
        <a href="sign-in.php" class="btn btn-light sign-in-btn">Sign In</a>
      </div>




    </div>
  </div>
</section>
<?php include "footer.php"; ?>