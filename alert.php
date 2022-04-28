<div class="success-div animated bounceInDown animated animated" id="success-div">
<div><i class="fa fa-check"></i></div> 
Password Reset Successfuly<br /> 
<span>Check your email to confirm.</span>
</div>


<div class="success-div animated bounceInDown animated animated" id="not-success-div">
<div><i class="fa fa-close"></i></div> 
Invalid Login Parameters<br /> 
<span>Please check the login detail.</span>
</div>


<div class="success-div animated bounceInDown animated animated" id="warning-div">
<div><i class="fa fa-warning (alias)"></i></div> 
Fill The Fields To Continue<br /> 
</div>




<div id="get-more-div">

</div>







































<div class="sidenavdiv">
<div class="sidenavdiv-in" onclick="_close_side_nav()"></div>

<div class="sidenavdiv-menu" id="menu-list-div"> 

   <div class="div">
    <a href="<?php echo $website;?>" title="Home Page">
      <li <?php if ($page=='index.php') {?> id="active-li"<?php }?>><i class="fa fa-home"></i>Home Page</li></a>
    </div>
        
<a href="about" title="About <?php echo $thename?> | Real Estate Development">
     <div class="div">
      <li <?php if ($page=='about.php') {?> id="active-li"<?php }?>><i class="fa fa-building"></i> About Us</li>
    </div></a>
 <a href="services" title="<?php echo $thename?> Services">   
     <div class="div">
      <li <?php if ($page=='services.php') {?> id="active-li"<?php }?>><i class="fa fa-gear"></i> Our Services</li>
    </div></a>
    
    
    <div class="div">
    <li onclick="_open_li('publications')" <?php if ($page=='blogs.php') {?> id="active-li"<?php }?>><i class="fa fa-newspaper-o"></i> Publications <i class="fa fa-plus" id="side-expand"></i></li>
    <div class="sub-li" id="publications-sub-li">
    						<a href="blogs" title="<?php echo $thename?> Blogs"> 
                            <li>Blogs & Articles</li></a>
                            <li>Announcements</li>
    </div>
    </div>
    
    <a href="contacts" title="Contact Us | <?php echo $thename?>">
   <div class="div">
      <li <?php if ($page=='contacts.php') {?> id="active-li"<?php }?>><i class="fa fa-phone"></i>Contact Us</li>
    </div></a>
    
    <div class="menu-title" style="height:100px;"> &nbsp;</div>
  </div>  
  
</div>




 







