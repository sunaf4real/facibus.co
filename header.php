<?php  include 'alert.php'?>

<div class="header-div animated fadeInDown animated animated">
  <div class="header-div-in"> 
      <a href="<?php echo $website?>" title="<?php echo $thename?>">
        <div class="logo-div"><img src="all-images/images/icon.png" alt="<?php echo $thename?> Logo"  class="animated zoomIn"/></div>
      </a>
        
        <div class="nav-div">
          <ul>
            <a href="<?php echo $website?>" title="<?php echo $thename?>">
                <li <?php if (($page=='index.php')) {?> class="active-li"<?php }?>>HOME</li>
            </a>
            <a href="about" title="About <?php echo $thename?>">
                <li <?php if (($page=='about.php')) {?> class="active-li"<?php }?>>ABOUT US</li>
            </a>
            <a href="services" title="<?php echo $thename?> Services">
                <li <?php if (($page=='services.php')) {?> class="active-li"<?php }?>>OUR SERVICES</li>
            </a>
            
                <li id="expand" <?php if (($page=='blogs.php')||($page=='blog-details.php')) {?> class="active-li"<?php }?>><i class="fa fa-plus"></i> PUBLICATIONS
                	<div class="sub-nav-div animated fadeIn animated animated">
                    	<div class="li" id="li"><strong>Publications</strong></div>
                    	<a href="blogs" title="<?php echo $thename?> Blogs"> 
                    	<div class="li">Blogs & Articles</div></a>
                    	<div class="li">Announcements</div>
                    </div>
                </li>

            <a href="contacts" title="Contact Us | <?php echo $thename?>">
                <li <?php if (($page=='contacts.php')) {?> class="active-li"<?php }?>>CONTACT US</li>
            </a>
          </ul>
        </div>
        
        <button class="btn" onclick="_open_menu()"><i class="fa fa-navicon (alias)"></i></button>
        <button class="btn social social-right"><i class="fa fa-instagram"></i></button>
        <a href="https://api.whatsapp.com/send?phone=+2347045981007" target="_blank" title="Whatsapp">
        <button class="btn social social-middle"><i class="fa fa-whatsapp"></i></button></a>
        <a href="tel:+2347045981007" title="Call Customer Care">
        <button class="btn social social-left"><i class="fa fa-phone"></i></button></a>
  </div>
</div>
 