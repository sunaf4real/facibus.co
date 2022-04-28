//////////////////////////////03/02/2022////////////////////////// by Afolabi Oluwagbnega Sunday
$(window).scroll(function() { 
  var scrollheight = $(window).scrollTop();
  	if (scrollheight >= 100) {
		$("#back2Top").fadeIn(1000);
		$(".header-div").css("box-shadow","0px 0px 20px 2px rgba(0,0,0,.2)");
	} else {
		$('#back2Top').fadeOut(1000);
		$(".header-div").css("box-shadow","none");
	}
});


function _back_to_top(){
		event.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
}

function _open_menu(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'0'},200);
	   $('#live-chat-div').animate({'margin-left':'-100%'},400);
	   $('#menu-list-div').animate({'margin-left':'0'},400);
}

function _close_side_nav(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'-100%'},200);
	   $('#menu-list-div,#live-chat-div').animate({'margin-left':'-100%'},400);
}

function _open_li(ids){
		 $('#'+ids+'-sub-li').toggle('slow');
}

function alert_close(){
		$('#get-more-div').html('').fadeOut(200);
}

function _get_form(page){
		$('#get-more-div').html('<div class="ajax-loader">Loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
			var action='get-form';
			var dataString ='action='+ action+'&page='+ page;
			$.ajax({
			type: "POST",
			url: "config/code.php",
			data: dataString,
			cache: false,
			success: function(html){$('#get-more-div').html(html);}
			});
}

function _get_form_with_id(page,ids){
		var action='get-form';
		$('#get-more-div').html('<div class="ajax-loader">Loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
			var dataString ='action='+ action+'&page='+ page+'&ids='+ ids;
			$.ajax({
			type: "POST",
			url: "config/code.php",
			data: dataString,
			cache: false,
			success: function(html){$('#get-more-div').html(html);}
			});
}





function _add_news_letter(){
		var new_letter_email=$('#new_letter_email').val();
			var action='add_news_letter';
			if((new_letter_email=='')||(new_letter_email.indexOf('@')<=0)){
				$('#warning-div').html('<div><i class="fa fa-warning (alias)"></i></div> USER ERROR! <br /><span>Kindly fill in your email to subscribe.</span>').fadeIn(500).delay(5000).fadeOut(100);
			}else{
			
		$('#get-more-div').html('<div class="ajax-loader"><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
			var dataString ='action='+ action+'&new_letter_email='+ new_letter_email;
			$.ajax({
			type: "POST",
			url: "config/code.php",
			data: dataString,
			cache: false,
			success: function(html){
				$('#get-more-div').html(html);
				$('#new_letter_email').val('');
				}
			});
			}
}

function _send_contact_email(){
		var fullname=$('#fullname').val();
		var email=$('#email').val();
		var subject=$('#subject').val();
		var message=$('#message').val();
			var action='send_contact_email';
			if((fullname=='')||(email=='')||(subject=='')||(message=='')||(email.indexOf('@')<=0)){
				$('#warning-div').html('<div><i class="fa fa-warning (alias)"></i></div> USER ERROR! <br /><span>Kindly fill all fields to continue.</span>').fadeIn(500).delay(5000).fadeOut(100);
			}else{
		$('#get-more-div').html('<div class="ajax-loader"><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
			var dataString ='action='+ action+'&fullname='+ fullname+'&email='+ email+'&subject='+ subject+'&message='+ message;
			$.ajax({
			type: "POST",
			url: "config/code.php",
			data: dataString,
			cache: false,
			success: function(html){
				$('#get-more-div').html(html);
				$('#fullname,#email,#subject,#message').val('');
				}
			});
			}
}

