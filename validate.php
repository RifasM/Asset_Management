<?php
      include("config.php");
      session_start();

      if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form

        $myusername = mysqli_real_escape_string($db,$_POST['username']);
        $mypassword = mysqli_real_escape_string($db,$_POST['password']);

        $sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";

        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $id=null;
        $count = mysqli_num_rows($result);

        // If result matched $myusername and $mypassword, table row must be 1 row

        if($count == 1) {
          // session_register("myusername");
          $_SESSION['login_user'] = $myusername;
          $id = $row['userid'];
            header("home.php");
        }else {
          $error = "Your Login Name or Password is invalid";
					?>
					<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				    <div class="modal-dialog" role="document">
				      <div class="modal-content">
				        <div class="modal-header">
				          <h5 class="modal-title" id="exampleModalLabel">Password or Username Invalid</h5>
				          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
				            <span aria-hidden="true">×</span>
				          </button>
				        </div>
				        <div class="modal-footer">
				          <button class="btn btn-secondary" type="button" data-dismiss="modal">Retry</button>
				        </div>
				      </div>
				    </div>
				  </div>
   <?php }} ?>
