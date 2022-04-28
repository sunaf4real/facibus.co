<?php
ini_set('session.use_only_cookies', 1); // secure cookie
session_start(); // start session
session_regenerate_id(); // regenerating for security issues

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
$website='http://localhost/softamos_project/facibus.co';
//$website='https://www.facibus.co';
$thename='Facibus'; 
$page = basename($_SERVER['SCRIPT_NAME']);
$ip_address=$_SERVER['REMOTE_ADDR']; //ip used
$sysname=gethostname();//computer used
/////////////////////////////////////////////////////////////////

$siteuser='root';
$serverpass='';
//$siteuser='facibusc';
//$serverpass='SomebodyNice@2021';

$hostname = "localhost";  
//conn_admin string with database  
$conn = mysqli_connect($hostname, $siteuser, $serverpass)or die("Unable to connect to MySQL");
mysqli_select_db($conn,"facibusc_co_db");
/////////////////////////////////////////////////////////////////
?>

<?php
////////// login session
if ($_POST && !empty($_POST['username'])) {
$_SESSION['username'] = $_POST['username'];
}
$suser=$_SESSION['username'];
if ($_POST && !empty($_POST['password'])) {
$_SESSION['password'] = $_POST['password'];
}
$spass=md5($_SESSION['password']);

///// user session
$suserid=$_SESSION['userid'];
$property_id=$_SESSION['property_id'];
?>








































<?php
class allClass{
/////////////////////////////////////////
function _get_setup_backend_settings_detail($conn, $backend_setting_id){
	$query=mysqli_query($conn,"SELECT * FROM setup_backend_settings_tab WHERE backend_setting_id='$backend_setting_id'")or die (mysqli_error($conn));
	$fetch=mysqli_fetch_array($query);
		$smtp_host=$fetch['smtp_host'];
		$smtp_username=$fetch['smtp_username'];
		$smtp_password=$fetch['smtp_password'];
		$smtp_port=$fetch['smtp_port'];
		$sender_name=$fetch['sender_name'];
		$support_email=$fetch['support_email'];
		$form_fee=$fetch['form_fee'];
		$bank_name=$fetch['bank_name'];
		$account_name=$fetch['account_name'];
		$account_number=$fetch['account_number'];
		$payment_key=$fetch['payment_key'];
		return '[{"smtp_host":"'.$smtp_host.'","smtp_username":"'.$smtp_username.'","smtp_password":"'.$smtp_password.'",
		"smtp_port":"'.$smtp_port.'","sender_name":"'.$sender_name.'","support_email":"'.$support_email.'","form_fee":"'.$form_fee.'","bank_name":"'.$bank_name.'","account_name":"'.$account_name.'",
		"account_number":"'.$account_number.'","payment_key":"'.$payment_key.'"}]';
}
	
/////////////////////////////////////////
function _get_sequence_count($conn, $item){
		 $count=mysqli_fetch_array(mysqli_query($conn,"SELECT mast_val FROM setup_masters_tab WHERE mast_id = '$item' FOR UPDATE"));
		  $num=$count[0]+1;
		  mysqli_query($conn,"UPDATE `setup_masters_tab` SET `mast_val` = '$num' WHERE mast_id = '$item'")or die (mysqli_error($conn));
		  if ($num<10){$no='00'.$num;}elseif($num>=10 && $num<100){$no='0'.$num;}else{$no=$num;}
		  return '[{"num":"'.$num.'","no":"'.$no.'"}]';
}
/////////////////////////////////////////
function _alert_sequence_and_update($conn,$alert_detail,$user_id,$user_name,$ip_address,$sysname,$role_id){
		$alertsele=mysqli_fetch_array(mysqli_query($conn,"SELECT mast_val FROM setup_masters_tab WHERE mast_id = 'ALT' FOR UPDATE"));
		$alertno=$alertsele[0]+1;
		$alertid='ALT'.$alertno;
		
		mysqli_query($conn,"INSERT INTO `alert_tab`
		(`alert_id`, `alert_detail`, `user_id`, `name`, `ipaddress`, `computer`, `role_id`, `seen_status`, `date`) VALUES
		('$alertid', '$alert_detail', '$user_id', '$user_name', '$ip_address', '$sysname', '$role_id', 0, NOW())")or die (mysqli_error($conn));
		
		mysqli_query($conn,"UPDATE setup_masters_tab SET mast_val='$alertno' WHERE mast_id = 'ALT'")or die (mysqli_error($conn));
}
	
/////////////////////////////////////////
function _get_setup_role_detail($conn, $role_id){
	$query=mysqli_query($conn,"SELECT * FROM setup_role_tab WHERE role_id = '$role_id'");
	$fetch=mysqli_fetch_array($query);
		$role_name=$fetch['role_name'];
	return '[{"role_name":"'.$role_name.'"}]';
}
/////////////////////////////////////////
function _get_setup_status_detail($conn, $status_id){
	$query=mysqli_query($conn,"SELECT * FROM setup_status_tab WHERE status_id='$status_id'");
	$fetch=mysqli_fetch_array($query);
		$status_name=$fetch['status_name'];
	return '[{"status_name":"'.$status_name.'"}]';
}











	
//////////////////////////////////////////////////////////////////////////////////////////////////////
function _get_staff_detail($conn, $user_id){
	$query=mysqli_query($conn,"SELECT * FROM staff_tab WHERE user_id='$user_id'")or die ('cannot select staff_tab');
	$fetch=mysqli_fetch_array($query);
		$user_id=$fetch['user_id'];
		$fullname=$fetch['fullname'];
		$mobile=$fetch['mobile'];
		$email=$fetch['email'];
		$passport=$fetch['passport'];
		if ($passport==''){
			$passport='friends.png';
		}
		$otp=$fetch['otp'];
		$role_id=$fetch['role_id'];
		$status_id=$fetch['status_id'];
		$reg_date=$fetch['reg_date'];
		$last_login=$fetch['last_login'];
		
	return '[{"user_id":"'.$user_id.'","fullname":"'.$fullname.'","mobile":"'.$mobile.'","email":"'.$email.'","passport":"'.$passport.'","otp":"'.$otp.'",
	"role_id":"'.$role_id.'","status_id":"'.$status_id.'","reg_date":"'.$reg_date.'","last_login":"'.$last_login.'"}]';
}	

//////////////////////////////////////////////////////////////////////////////////////////////////////
function _get_blog_detail($conn, $blog_id){
$query=mysqli_query($conn,"SELECT * FROM blog_tab WHERE blog_id='$blog_id'")or die ('cannot select blog_tab');
$fetch=mysqli_fetch_array($query);
	$blog_id=$fetch['blog_id'];
	$blog_cat_id=$fetch['cat_id'];
	$blog_title=$fetch['title'];
	$blog_summ=$fetch['summary'];
	$blog_status_id=$fetch['status_id'];
	$blog_pix=$fetch['thumbnail'];
	$user_id=$fetch['user_id'];
	$blog_views=$fetch['views'];
	$blog_date_of_reg=$fetch['date_of_reg'];
	$blog_last_updated=$fetch['last_updated'];
	if ($blog_pix==''){
		$blog_pix='blog.jpg';
	}
return '[{"blog_id":"'.$blog_id.'","branch_id":"'.$branch_id.'","blog_cat_id":"'.$blog_cat_id.'","blog_title":"'.$blog_title.'","blog_summ":"'.$blog_summ.'","blog_status_id":"'.$blog_status_id.'","blog_pix":"'.$blog_pix.'","user_id":"'.$user_id.'","blog_views":"'.$blog_views.'","blog_date_of_reg":"'.$blog_date_of_reg.'","blog_last_updated":"'.$blog_last_updated.'"}]';
}







}//end of class
$callclass=new allClass();
?>










