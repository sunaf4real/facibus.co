<?php include 'config/connection.php'?>

<?php
	$blog_id='BLOG0001';
	//$blog_id=$_GET['blog_id'];
            $blogquery=mysqli_query($conn,"SELECT blog_id, detail FROM blog_tab  WHERE blog_id='$blog_id'");
			$blog_sel=mysqli_fetch_array($blogquery);
                $blog_id=$blog_sel['blog_id'];
				if($blog_id==''){
				?>
					<script>
					window.parent(location="blog");
					</script>
				<?php
				}
			if ($blogsession==''){
				$blogsession=date('Y-m-d-h-i-s');
				$_SESSION['blogsession']=$blogsession;
				mysqli_query($conn,"INSERT INTO `blog_view_tab` VALUES ('','$blog_id','$blogsession','$sysname','$ip_address', NOW())")or die ("cannot insert blog_view_tab");;
				  mysqli_query($conn,"UPDATE `blog_tab` SET views=views+1 WHERE blog_id='$blog_id'")or die ("cannot update blog_tab");
			}else{
					$viewcount = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM blog_view_tab WHERE blog_id='$blog_id' AND session='$blogsession'"));
					if ($viewcount>0){
						// do nothing
					}else{
				mysqli_query($conn,"INSERT INTO `blog_view_tab` VALUES ('','$blog_id','$blogsession','$sysname','$ip_address', NOW())")or die ("cannot insert blog_view_tab");;
				  mysqli_query($conn,"UPDATE `blog_tab` SET views=views+1 WHERE blog_id='$blog_id'")or die ("cannot update blog_tab");
					}
			}
				
					$blog_detail=$blog_sel['detail'];
 			$blog_array=$callclass->_get_blog_detail($conn, $blog_id);
 			  $b_array = json_decode($blog_array, true);
					$blog_cat_id=$b_array[0]['blog_cat_id'];
					$blog_title=$b_array[0]['blog_title'];
					$blog_summ=$b_array[0]['blog_summ'];
					$blog_status_id=$b_array[0]['blog_status_id'];
					if($blog_status_id=='PUB'){$blog_status='active';}else{$blog_status='inactive';}
					$user_id=$b_array[0]['user_id'];
					  $user_array=$callclass->_get_staff_detail($conn, $user_id);
					  $u_array = json_decode($user_array, true);
					  $user_name= $u_array[0]['user_name'];
					$blog_pix=$b_array[0]['blog_pix'];
					$blog_views=$b_array[0]['blog_views'];
					$blog_date_of_reg=date('d M Y', strtotime($b_array[0]['blog_date_of_reg']));
					$blog_last_updated=date('d M Y', strtotime($b_array[0]['blog_last_updated']));
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'meta.php'?>
<title>Partnering with Salesforce Essentials</title>
<meta name="keywords" content="Real Estate Blogs, Facibus news, Facibus Blogs and articles" />
<meta name="description" content="Get the latest news, blogs and articles for different categories on facibus real estate Solutions Property Development, Housing Tech and software Publishing"/>

<meta property="og:title" content="Publications: News, Blogs & Updates |  <?php echo $thename?>" />
<meta property="og:image" content="<?php echo $website?>/all-images/plugin-pix/facibus.jpg"/>
<meta property="og:description" content="Get the latest news, blogs and articles for different categories on facibus real estate Solutions Property Development, Housing Tech and software Publishing"/>

<meta name="twitter:title" content="Publications: News, Blogs & Updates |  <?php echo $thename?>"/> 
<meta name="twitter:card" content="<?php echo $thename?>"/> 
<meta name="twitter:image"  content="<?php echo $website?>/all-images/plugin-pix/facibus.jpg"/> 
<meta name="twitter:description" content="Get the latest news, blogs and articles for different categories on facibus real estate Solutions Property Development, Housing Tech and software Publishing"/>
</head>
<body>
<?php include 'header.php'?>

<div class="other-pages-title"  data-aos="fade-down" data-aos-duration="1200">
	<div class="title-div">
    <h1>Why investing in Real Estate matters more than ever today <i class="fa fa-circle"></i></h1>
    </div>
</div>


<div class="search-text-div">
	<input class="text_field" placeholder="Type Here To Search..." title="Type to Search Here" />
</div>





<div class="body-div">
	<div class="page-info">
    	<div class="info-left">
        	<img src="uploaded_files/blog-pix/2.jpg" alt="Test for blogs detials" />
            <h2>Why investing in Real Estate matters more than ever today</h2>
            <p>Facibus housing is a powerhouse affordable living brand focused on developing lifestyle housing options in Lagos, Nigeria, and Charlotte, NC. Through the use of technology, we are providing a quicker, lower – priced, and more convenient service in housing. Housing tech is our own way of playing a central role in the property industry. This is why we created a platform called Pellow.</p>
            <p>Facibus housing is a powerhouse affordable living brand focused on developing lifestyle housing options in Lagos, Nigeria, and Charlotte, NC. Through the use of technology, we are providing a quicker, lower – priced, and more convenient service in housing. Housing tech is our own way of playing a central role in the property industry. This is why we created a platform called Pellow.</p>
            <p>Facibus housing is a powerhouse affordable living brand focused on developing lifestyle housing options in Lagos, Nigeria, and Charlotte, NC. Through the use of technology, we are providing a quicker, lower – priced, and more convenient service in housing. Housing tech is our own way of playing a central role in the property industry. This is why we created a platform called Pellow.</p>
            <p>Facibus housing is a powerhouse affordable living brand focused on developing lifestyle housing options in Lagos, Nigeria, and Charlotte, NC. Through the use of technology, we are providing a quicker, lower – priced, and more convenient service in housing. Housing tech is our own way of playing a central role in the property industry. This is why we created a platform called Pellow.</p>
        </div>
        
        
        
        <div class="info-right">
			<div class="div-in">
            
                <div class="insight-recommended-div">
                    <div class="recommended-blogs">
                        <div class="img"><img src="uploaded_files/blog-pix/aaaa.png" alt="Blog" /></div>
                        <div class="text-div">
                            <span>21 May 2021</span> | <span><i class="fa fa-eye"></i> 9 Views</span>
                            <h2>Why investing in Real Estate matters more than ever today</h2>
                            <p>Some basic investment principles to be reminded of in these uncertain and frothy-looking times.</p>
                        </div>
                    </div>
        
                    <div class="recommended-blogs">
                        <div class="img"><img src="uploaded_files/blog-pix/aaaa.png" alt="Blog" /></div>
                        <div class="text-div">
                            <span>21 May 2021</span> | <span><i class="fa fa-eye"></i> 9 Views</span>
                            <h2>Why investing in Real Estate matters more than ever today</h2>
                            <p>Some basic investment principles to be reminded of in these uncertain and frothy-looking times.</p>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        
        
        <br clear="all" />
    </div>
</div>




<div class="body-div">
<div class="body-div-in">
        <div class="title-div" data-aos="fade-up" data-aos-duration="1000">
        	<h2>Latest Insights</h2>
        	<h3>Latest Insights</h3>
        </div>
			
			<?php include 'mini-blog.php'?>
</div>
</div>







<?php include 'footer.php'?>

</body>
</html>

