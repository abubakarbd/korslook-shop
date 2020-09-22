 <?php include '../classes/Sms.php'; ?>
 <?php $sms = new Sms();?>
  <!-- Footer block Start  -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class= "newslatter">
         <?php 
            $FootTopSms = $sms->topFootSms();
            if($FootTopSms){
                $result = $FootTopSms->fetch_assoc();
                ?> 
            <form>
              <h2 class="tf"><?php echo $result['smsTitle']?></h2>
              <p><?php echo $result['smsBody']?></p>
              <div class="input-group">
                <input class=" form-control" type="text" placeholder="Email Here......">
                <button type="submit" value="Sign up" class="btn btn-large btn-primary">Sign up</button>
              </div>
            </form>
            <?php }?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="about">
            <div class="footer-logo"></div>
            
            <?php
          $FootLeftSms = $sms->LeftFootSms();
          if($FootLeftSms){
              $result = $FootLeftSms->fetch_assoc();  
          ?>
        <p><?php echo $result['smsBody'];?></p>
        <?php }  ?>
            
          </div>
        </div>
        <div class="col-md-3">
          <div class="new-store">
            <h4>Whats in store</h4>
            <ul class="toggle-footer">
              <li><a href="#">Returns</a></li>
              <li><a href="#">Delivery Options</a></li>
              <li><a href="#">Brand Directory</a></li>
              <li><a href="#">Buying Guides</a></li>
              <li><a href="#">My Account</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="information">
            <h4>information</h4>
            <ul class="toggle-footer">
              <li><a href="#">Returns</a></li>
              <li><a href="#">Delivery Options</a></li>
              <li><a href="#">Brand Directory</a></li>
              <li><a href="#">Buying Guides</a></li>
              <li><a href="#">My Account</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="contact">
            <h4>Contact Us</h4>
            <ul class="toggle-footer">
              <li> <i class="fa fa-map-marker"></i>
                <div class="address-info">Bank Kolony, Barguna Sador, Barguna </div>
              </li>
              <li> <i class="fa fa-mobile"></i>
                <div class="call-info">+880 1726-122-917<br>
                  <span>+880-1726-122 917</span> </div>
              </li>
              <li> <i class="fa fa-envelope"></i>
                <div class="email-info"> <a href="#">asonlinebd18@gmail.com</a></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="footer-link">
              <ul>
                <li><a href="#">Specials</a></li>
                <li><a href="#">Affiliates</a></li>
                <li><a href="#">Gift Vouchers</a></li>
                <li><a href="#">Brands</a></li>
                <li><a href="#">Returns</a></li>
                <li><a href="#">Site Map</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="copy-right">
              <p> All Rights Reserved. Copyright <?php echo date('Y');?> Powered by AS OnlineBD.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-offer">
          <?php
          $FootBottomSms = $sms->bootomFootSms();
          if($FootBottomSms){
              $result = $FootBottomSms->fetch_assoc();  
          ?>
        <h2><?php echo $result['smsBody'];?></h2>
        <?php }  ?>
      </div>
    </div>
  </footer>
  <!-- Footer block End  --> 
  
</div>
<!-- jQuery (necessary for Bootstraps JavaScript plugins) --> 
<script src="js/jQuery.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="Bootstrap/js/bootstrap.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/globle.js"></script>
<script type="text/javascript" src="js/smoothproducts.min.js"></script> 
<!-- product tab js --> 
 <!-- zoom -->
<script src="js/imagezoom.js"></script>
<!-- zoom-->
<script type="text/javascript">	
      $("#tabs li a").click(function(e){
        var title = $(e.currentTarget).attr("title");
        $("#tabs li a").removeClass("selected")
        $(".tab-content li div").removeClass("selected")
        $(".tab-"+title).addClass("selected")
        $(".items-"+title).addClass("selected")
        $("#items").attr("class","tab-"+title);
      });
	      $(window).load( function() {
        $('.sp-wrap').smoothproducts();
    });
     </script>
<script>
  
    function close_accordion_section() {
		jQuery('.accordion .accordion-section-title').removeClass('active');
		jQuery('.accordion .accordion-section-content').slideUp(300).removeClass('open');
		jQuery('.accordion2 .accordion-section-title1').removeClass('active');
		jQuery('.accordion2 .accordion-section-content1').slideUp(300).removeClass('open');
	}

	jQuery('.accordion-section-title').click(function(e) {
		// Grab current anchor value
		var currentAttrValue = jQuery(this).attr('href');

		if(jQuery(e.target).is('.active')) {
			close_accordion_section();
		}else {
			close_accordion_section();

			// Add active class to section title
			jQuery(this).addClass('active');
			// Open up the hidden content panel
			jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
			jQuery('.accordion2 ' + currentAttrValue).slideDown(300).addClass('open'); 
		}

		e.preventDefault();
	});

</script>
<script type="text/javascript">
		$( "#progress1" ).appendSimpleProgressBar();
		$( "#progress1" ).slow( { width:"78" } );
		
		$( "#progress2" ).appendSimpleProgressBar();
		$( "#progress2" ).slow( { width:"92" } );
		
		$( "#progress3" ).appendSimpleProgressBar();
		$( "#progress3" ).slow( { width:"76" } );
		
		$( "#progress4" ).appendSimpleProgressBar();
		$( "#progress4" ).slow( { width:"98" } );
	</script> 
</body>
</html>