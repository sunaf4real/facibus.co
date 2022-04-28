<?php include 'connection.php'?>

<?php
  	$action=$_POST['action'];
  switch ($action){


case 'add_news_letter':
	  $new_letter_email=trim($_POST['new_letter_email']);
	  
	  $query=mysqli_query($conn,"SELECT * FROM news_letter_tab WHERE email='$new_letter_email'");
	  $count = mysqli_num_rows($query);
	  if ($count>0){
		  /// do nothing
	  }else{
		  
	  	mysqli_query($conn,"INSERT INTO `news_letter_tab`
		(`email`, `date`) VALUES
		('$new_letter_email',NOW())")or die (mysqli_error($conn));
	  }

  	$view_content=$action;
	require_once('../content/content-page.php');
break;


case 'send_contact_email':
	  $fullname=trim(strtoupper($_POST['fullname']));
	  $email=trim($_POST['email']);
	  $subject=trim($_POST['subject']);
	  $message=trim(strtoupper(str_replace("'", "\'", $_POST['message'])));
	  
	  $query=mysqli_query($conn,"SELECT * FROM news_letter_tab WHERE email='$email'");
	  $count = mysqli_num_rows($query);
	  if ($count>0){
		mysqli_query($conn,"UPDATE news_letter_tab SET name='$fullname' WHERE email='$email'")or die (mysqli_error($conn));
	  }else{
	  	mysqli_query($conn,"INSERT INTO `news_letter_tab`
		(`email`,`name`, `date`) VALUES
		('$email','$fullname',NOW())")or die (mysqli_error($conn));
	  }

 		$mail_to_send=$action;
		require_once('mail/mail.php');
  	$view_content=$action;
	require_once('../content/content-page.php');
break;

  
 
}
?>
