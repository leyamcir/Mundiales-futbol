<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Estadísticas Mundial 2014</title>
<meta name="keywords" content="world cup 2014 brasil statistics" />
<meta name="description" content="Estadísticas para el Mundial de Fútbol 2014" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<!--  Free CSS Template | Designed by TemplateMo.com  -->

<script src="js/jquery-1.10.0.min.js"></script>

<script type="text/javascript">
    function getTeams(){

        var url = "http://worldcup.sfg.io/teams";
        var text = ""; 
        //Get info
        $.ajax({
                url:url,
                dataType: "json",
                type: "GET",
                async: false,
                complete: function(r){
                    var json = JSON.parse(r.responseText);  
                    for (var i = 0; i < json.length; i++) {
                        text += "insert_team(" + json[i].fifa_code.toLowerCase().replace(/\s/g,"_") + ", " + json[i].country.toLowerCase().replace(/\s/g,"_") + ", " + json[i].group_id + "),\n";
                    }
                },
                onerror: function(e,val){
                    alert("Error buscando los equipos");
                }
        });
        //Create prolog file for update info
        $.ajax({
                url:"insertar_equipos.php",
                dataType: "json",
                type: "POST",
                async: false,
                data: {
                  text:text,
                },
                complete: function(r){
                    alert('Ejecute "insertar." en el archivo insertar_equipos.pl para actualizar equipos');
                },
                onerror: function(e,val){
                    alert("Error buscando los equipos");
                }
        });
    }
</script>

<script type="text/javascript">
$(document).ready(function(){
getTeams();

});
</script>

</head>
<body>

<div id="templatemo_top_panel">
	<div id="templatemo_top_section">
		<div id="site_title">
        	Mundial Fútbol 2014
        </div> 
        <div id="site_tagline">
        	Estadísticas para el mundial de Brasil
        </div>  
        <div id="templatemo_menu">
        	<ul>
                <li><a href="index.html"  class="current">Home</a></li>
                <li><a href="#">Recent Posts</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Company</a></li> 
                <li><a href="#" class="last">Contact</a></li>                     
            </ul> 
		</div> <!-- end of menu -->
    </div> <!-- end of top section -->
</div> <!-- end of top panel -->    

<div id="templatemo_content_panel">
	<div id="templatemo_content_section">   
                 
    	<div id="templatemo_content_left">
        
        	<div id="login_section">
            	<div id="login_section_top"></div>
                <div id="login_section_title">Member Login</div>
                <div id="login_section_middle">
                	<form action="#" method="get">
                            <div class="form_row">
                            	<label>Email: </label>
                            	<input  name="email_address" type="text" id="email_addremss"/>
                            </div>
                            <div class="form_row">
                            	<label>Password: </label>
                                <input  name="password" type="password" id="password"/>
                            </div>
                            <input class="button" type="submit" name="Submit" value="Login" />
                    </form>
                    <a href="#">Forget Password ?</a><br />
                    <a href="#">Create New Account</a></div>
                <div id="login_section_bottom"></div>
            </div>
            
           	<div id="left_column_section">
            	<div id="left_column_section_top"></div>
                <div id="left_column_section_title">Popular Posts</div>
                <div id="left_column_section_middle">
                  <div class="popular_post">
                	<h1>&raquo; Aliquam pretium porta odio</h1>
                        <p>Duis vitae velit. Ut ultricies. Fusce sollici tudin nisl a lectus.</p>
                    </div>
                  <div class="popular_post">
                <h1>&raquo; Donec accumsan urna non</h1>
                        <p>Pellen tesque odio. Pellen tesque habitant morbi tristique.</p>
                    </div>
                    
                  <div class="popular_post">
                <h1>&raquo; Mauris et elit quis mauris</h1>
                        <p>Aliq uam elit risus, volutpat quis, ma ttis ac, elementum eget.</p>
                    </div>
                    
                  <div class="popular_post">
                <h1>&raquo; Cras pretium sem sed odio</h1>
                        <p>Qui sque rhon cus nulla quis sem. Mau ris quis nulla sed ipsum.</p>
                    </div>
                </div>
            </div> 
            
        </div> <!-- end of content left -->
        
        <div id="templatemo_content_right">
        
        	<div class="right_column_section">
            	
                <div class="right_column_section_title">
	                Welcome to our blog template
                </div>
                <div class="right_column_section_body">            	
                    <div class="image_box">
                        <img src="images/templatemo_image_01.jpg" alt="image" />
                    </div>
                    <div class="post_body">
                        <div class="posted_by">Posted by <a href="http://www.templatemo.com" target="_parent">TemplateMo.com</a></div>
                      <p>This <a href="http://www.templatemo.com" target="_parent">Free CSS Template</a> is provided by TemplateMo.com. You may use this template in your websites. Credit goes to <a href="http://www.photovaco.com" target="_blank">Photovaco.com</a> for photos. Suspendisse id velit elementum mi egestas ullamcorper. </p>
                        <p>Curabitur turpis. Nulla a risus. Aliquam lectus dui, euismod id, volutpat ac, fringilla eu, ipsum. Donec malesuada elit vel enim.                        </p>
                  <div class="post_info">
                            <span class="comment">15  comments</span>Post Date: 24 December 2024
                        </div>
                    </div>
	                <div class="cleaner">&nbsp;</div>
				</div>           	
			</div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
            <div class="right_column_section">
            	
                <div class="right_column_section_title">Post One Title Goes Here</div>
          <div class="right_column_section_body">            	
                    <div class="image_box">
                        <img src="images/templatemo_image_02.jpg" alt="image" />
                    </div>
                    <div class="post_body">
                        <div class="posted_by">Posted by <a href="#">TemplateMo.com</a></div>
                        <p>Suspendisse vitae nibh ac nunc mattis blandit. Morbi consectetur ullamcorper felis. Nulla nec elit. Aliquam et mauris. Ut euismod congue diam. </p>
                        <p>Suspendisse metus lorem, volutpat non, molestie sit amet, placerat id, elit. Praesent laoreet. Mauris velit.</p>
                  <div class="post_info">
                            <span class="comment">30 comments</span>Post Date: 14 November 2024
                        </div>
                    </div>
	                <div class="cleaner">&nbsp;</div>
				</div>           	
			</div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
            <div class="right_column_section">
            	
                <div class="right_column_section_title">Post Two Title Goes Here</div>
          <div class="right_column_section_body">            	
                    <div class="image_box">
                        <img src="images/templatemo_image_03.jpg" alt="image" />
                    </div>
                    <div class="post_body">
                        <div class="posted_by">Posted by <a href="#">TemplateMo.com</a></div>
                        <p>Morbi egestas tempus elit. Proin accumsan interdum felis. Aliquam rutrum ante vitae enim. Maecenas in purus ac magna tincidunt aliquet.</p>
                        <p>Phasellus dui velit, sodales aliquam, laoreet id, accumsan nec, dui. Etiam varius. Maecenas sit amet est et enim laoreet rutrum.</p>
                  <div class="post_info">
                            <span class="comment">45 comments</span>Post Date: 19 October 2024
                        </div>
                    </div>
	                <div class="cleaner">&nbsp;</div>
				</div>           	
			</div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
        </div> <!-- end of content right -->
    
    </div> <!-- end of content section -->
</div> <!-- end of content panel -->
<div id="templatemo_bottom_panel">
  <div id="templatemo_bottom_section">
    <div class="templatemo_bottom_section_01">
      <div class="templatemo_bottom_section_01_top"></div>
      <div class="templatemo_bottom_section_01_middle">
        <h1>Useful Links</h1>
        <ul>
        	<li><a href="http://www.templatemo.com" target="_parent">&raquo; Free CSS Template</a></li>
            <li><a href="http://www.flashmo.com" target="_parent">&raquo; Free Flash Template</a></li>
            <li><a href="http://www.photovaco.com" target="_blank">&raquo; Royalty Free Photos</a></li>
            <li><a href="http://www.webdesignmo.com" target="_parent">&raquo; Web Design</a></li>
            <li><a href="http://www.templatemo.com/page/1" target="_parent">&raquo; Website Templates</a></li>
            <li><a href="http://www.flashmo.com/page/1" target="_parent">&raquo; Flash Templates</a></li>
        </ul>
      </div>
      <div class="templatemo_bottom_section_01_bottom"></div>
    </div>
    <div class="templatemo_bottom_section_01">
      <div class="templatemo_bottom_section_01_top"></div>
      <div class="templatemo_bottom_section_01_middle">
        <h1>Most Commented Posts</h1>
        <p>Quisque at ante sit amet erat laoreet fermentum. Quisque nec nisl.</p>
        <div class="most_commented_post">
        	<h2>&raquo; Mauris congue felis at nisi</h2>
            <div class="comment">(186) comments</div>
            <div class="cleaner">&nbsp;</div>
        </div>
        <div class="most_commented_post">
        	<h2>&raquo; Donec mattis egestas sem</h2>
            <div class="comment">(164) comments</div>
            <div class="cleaner">&nbsp;</div>
        </div>
        <div class="most_commented_post">
        	<h2>&raquo; Praesent varius egestas velit</h2>
            <div class="comment">(142) comments</div>
            <div class="cleaner">&nbsp;</div>
        </div>
      </div>
      <div class="templatemo_bottom_section_01_bottom"></div>
    </div>
    <div class="templatemo_bottom_section_02">
      	<h1>Image Gallery</h1>
        <img src="images/templatemo_image_04.jpg" alt="Free CSS" />
        <img src="images/templatemo_image_05.jpg" alt="Royalty Free Photos" />
        <img src="images/templatemo_image_06.jpg" alt="Website Templates" />
        <img src="images/templatemo_image_07.jpg" alt="image 1" />
        <img src="images/templatemo_image_08.jpg" alt="image 2" />
        <img src="images/templatemo_image_09.jpg" alt="image 3" />
        <p>
        Donec iaculis felis id neque. Morbi nunc. Praesent varius egestas velit. Donec a massa ut pede pulvinar vulputate. Nulla et augue.</p> 
    </div>
    <div class="cleaner">&nbsp;</div>
  </div>
  <!-- end of bottom section -->
</div>
<!-- end of bottom panel -->

<div id="templatemo_footer_panel">
	<div id="templatemo_footer_section">
    	Copyright © 2024 <a href="#">Your Company Name</a> | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
    </div> <!-- end of footer section -->
</div> <!-- end of footer panel -->
</body>
<!--  Designed by w w w . t e m p l a t e m o . c o m  --> 
</html>