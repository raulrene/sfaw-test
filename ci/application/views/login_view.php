<!DOCTYPE html>
<html>
 <head>
	 <?php
		 $this->load->view('includes/site_head.php');
	 ?>
 </head>
 <body>
	 <?php 	
		 $this->load->view('includes/site_header.php');
	 ?>
	 <div class="login_admin">
   <h1>Sign in</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="password" name="password"/>
     <br/>
     <input class= "submit" type="submit" value="Sign in"/>
   </form>
   </div>
 </body>
</html>