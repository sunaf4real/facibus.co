<?php include 'config/connection.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'meta.php'?>
<title>Contacts | Office and  Email Address | Phone Number - <?php echo $thename?></title>
<meta name="keywords" content="Facibus, Facibus Contact, Property Developer Contact in nigeria,  Property Developer Contact in Lagos, Real Estate Agent Contact in nigeria" />
<meta name="description" content="Get in touch with Facibus Housing at 08, The Green Suite 8334, Dover, DE, USA OR Suite C 253, Road 2, Ikota Shopping Complex, Lekki, Lagos. Call (+1)3022021321, (+234)7015795310."/>

<meta property="og:title" content="Contacts | Office and  Email Address | Phone Number - <?php echo $thename?>" />
<meta property="og:image" content="<?php echo $website?>/all-images/plugin-pix/facibus.jpg"/>
<meta property="og:description" content="Get in touch with Facibus Housing at 08, The Green Suite 8334, Dover, DE, USA OR Suite C 253, Road 2, Ikota Shopping Complex, Lekki, Lagos. Call (+1)3022021321, (+234)7015795310."/>

<meta name="twitter:title" content="Contacts | Office and  Email Address | Phone Number - <?php echo $thename?>"/> 
<meta name="twitter:card" content="<?php echo $thename?>"/> 
<meta name="twitter:image"  content="<?php echo $website?>/all-images/plugin-pix/facibus.jpg"/> 
<meta name="twitter:description" content="Get in touch with Facibus Housing at 08, The Green Suite 8334, Dover, DE, USA OR Suite C 253, Road 2, Ikota Shopping Complex, Lekki, Lagos. Call (+1)3022021321, (+234)7015795310."/>

</head>
<body>
<?php include 'header.php'?>

<div class="other-pages-title contacts"  data-aos="fade-down" data-aos-duration="1200">
	<div class="title-div">
    <h1>Contact Us <i class="fa fa-circle"></i></h1>
    </div>
</div>









<div class="body-div">
	<div class="body-div-in">
        <div class="title-div" data-aos="fade-up" data-aos-duration="1000">
        	<h2>Get in touch</h2>
        	<h3>Get in touch</h3>
        </div>
      
      
      <div class="contact-back-div">
      	<div class="contact-left">
        	<p><strong>Address:</strong> 08 The Green Suite 8334, Dover, DE, United States of America. Suite C 253, Road 2 Shopping Complex, Lekki, Lagos, Nigeria.</p>
        	<p><strong>Phone:</strong> (+1)3022021321, (+234)7015795310</p>
            <p><strong>Email:</strong> customersupport@facibus.co </p>
        </div>
        
        <div class="contact-right">
        	<div class="contact-mail-div"  data-aos="fade-in" data-aos-duration="1200">
        	<div class="div-in">
            	<div class="text-segment"><input class="text_field" id="fullname" placeholder="Full Name" /></div>
            	<div class="text-segment"><input class="text_field" id="email" placeholder="Email Address" /></div>
                <input class="text_field" id="subject" placeholder="Subject" />
                <textarea class="text_field" id="message" placeholder="Message" rows="6"></textarea>
                <button class="btn" onclick="_send_contact_email()">Send</button>
            </div>
        	</div>
        </div>
      </div>  
        
    </div>
</div>
<?php include 'footer.php'?>

</body>
</html>

