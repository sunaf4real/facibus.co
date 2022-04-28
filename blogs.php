<?php include 'config/connection.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'meta.php'?>
<title>Publications: News, Blogs & Updates |  <?php echo $thename?></title>
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
    <h1>Publications: News, Blogs & Updates <i class="fa fa-circle"></i></h1>
    </div>
</div>


<div class="search-text-div">
	<input class="text_field" placeholder="Type Here To Search..." title="Type to Search Here" />
</div>


<div class="body-div">
<div class="body-div-in">
			<?php include 'mini-blog.php'?>
</div>
</div>







<?php include 'footer.php'?>

</body>
</html>

