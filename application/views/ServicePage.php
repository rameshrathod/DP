
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>City Night Layout - free website template</title>
<meta name="keywords" content="dream projects,it project making" />
<meta name="description" content="City Night layout is a free website template provided by templatemo.com" />
<link href="<?php echo base_url()?>css/expandcss.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css/loginstyle.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url()?>js/jquery.js"></script>
<script src="<?php echo base_url()?>js/jquery.validate.min.js"></script>
<script src="<?php echo base_url()?>js/loginform-validation.js"></script>
<script src="<?php echo base_url()?>js/form-validation1.js"></script>
  <script>
  $(document).ready(function() {
	  $(".p_hide").hide();
	  $(".mi").hide();
	  $(".pl").show();

	     function check(){
	    	 $('.inputClass').each(function() {
	 	        $(this).click(function(){
	 	            var pp = $(this).attr('id');

	 		  $("#minus"+pp).toggle();
	 		  $("#plus"+pp).toggle();
	 		  $("#s_"+pp).toggle();
	 		  $("div #service_anchor_onclick"+pp).addClass("red");
	 		  $("inputClass").addClass("return");
	 		$(".inputClass").click(function(){
	 			$("div #service_anchor_onclick"+pp).removeClass("red");
	 			
	 			});

	 	  
	 	            //Do whatever the edit function should do with the id
	 	        });
	 	     });
		     }
	     check();
	  });
  </script>

</head>
  <style type="text/css">

  </style>
<body>
<div id="templatemo_wrapper1">
<div id="templatemo_wrapper2">
	<div id="templatemo_container">
    
					<?php 
					include_once './application/views/menuAnchors.php';
					include_once './application/views/banner.php';

					?>
     <div id="templatemo_content">
<div style="background-color:black;padding: 10px;margin: 10px;font-size:20px;">We can provide services for :</div>

		<?php 
		
		
				  foreach ($welcomePageDisplayData[0] as $s_anchor){
						$i=0;
						for ($i;$i<count($s_anchor);$i++)
						{
						
						
							echo '<div class="service-name" id='."service_anchor_onclick".$s_anchor[$i]->anchor_id.'><div class="service-expant-symbol"><lable class="pl" id='."plus".$s_anchor[$i]->anchor_id.'>+</lable><lable class="mi" id='."minus".$s_anchor[$i]->anchor_id.'>-</lable><a id='.$s_anchor[$i]->anchor_id.' href="#"  class="inputClass"/> '.$s_anchor[$i]->anchor_name.'</a></div></div>
							  <div class="p_hide" id='."s_".$s_anchor[$i]->anchor_id.'> '.$s_anchor[$i]->description.'</div><br>
							    ';	
						}
				  }
				  ?>
      </div>
    
		<div id="templatemo_footer">
	        <a href="#">Home</a> | <a href="#">Services</a> | <a href="#">Projects</a> | <a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="#">Register</a><br />
	        Copyright © 2016 <a href="#"><strong>Dream Projects And Solutions</strong></a> | 
	        <a href="http://www.iwebsitetemplate.com" target="_parent">Website</a> by <a href="http://www.templatemo.com" target="_parent">Dream Projects And Solutions</a>
        </div>
   
    </div><!-- Container close -->
    
</div> <!-- Wrapper 2 close -->
</div> <!-- Wrapper 1 close -->
</body>
</html>