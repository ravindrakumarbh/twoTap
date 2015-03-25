<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Eureka Search</title>
<style type="text/css">
body {
	background-color: #eee;
	margin:0px;
}

#apDiv1 {
position: absolute;

height: 17px;
z-index: 1;
left: 801px;
top: 200px;
}

.main_footer {
    background: none repeat scroll 0 0 #4f6ac1;
    height: 70px;
    margin-top: 1px;
    width: 100% !important;
    padding-top: 12px;
}

#footer {

height: 25px;
z-index: 1;
left: 550px;
top: 764px;
color: #fff;
}


#copy {
height: 17px;
z-index: 1;
left: 543px;
top: 795px;
color: #fff;
}



#tfheader {
  float: left;
  width: 422px;
}
	/*#tfnewsearch{
		float:right;
		padding:20px;
	}*/
	
	#tfnewsearch {
  float: left;
  padding: 20px;
}
	.tftextinput{
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		border:1px solid #0076a3; border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
	}
	.tfbutton {
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; border-right:0px;
		background: #0095cd;
		background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-top-right-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
	}
	.tfbutton:hover {
		text-decoration: none;
		background: #007ead;
		background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}
	/* Fixes submit button height problem in Firefox */
	.tfbutton::-moz-focus-inner {
	  border: 0;
	}
	.tfclear{
		clear:both;
	}
	.sicon {
  float: left;
  padding-top: 16px;
}
.content{
 background: none repeat scroll 0 0 #fff;
    box-shadow: 0 0 2px #000;
    font-family: arial;
    font-size: 13px;
    height: auto;
    line-height: 20px;
    margin: 0 auto;
    margin-top: -20px;
    padding: 10px 60px;
    right: 0;
    text-align: left;
    width: 900px;
    z-index: 1;
}
img{box-shadow: 0 0 2px #000;}
.sicon img{box-shadow: 0 0 0px #000;}
#footer a{text-decoration:none; color:#fff; padding-bottom:10px;}
#footer{color:#fff;}
.top-bar {
  border:2px solid #3974bb;
}
.content p{margin-top:10px;  text-align: justify;}
body p{margin:0px;}
.menu_home {
    float: left;
    margin-left: -500px;
    margin-top: -43px;
}
.content h2 {
    padding-top: 25px;
    border-bottom: 2px solid #666;
    padding-bottom: 10px;
}
.menu_home > a {
    color: #eee;
    font-family: arial;
    font-size: 15px;
    font-weight: bold;
    text-decoration: none;
}
.back_button {
    float: right;
    margin-top: 15px;    
}
.back_button img {
    box-shadow: 0 0 0;
}
</style>
</head>

<body>
<div class="top-bar"> </div>
<div style="margin: 0 auto; width: auto; text-align: center;">
  <p><img src="top.jpg" width="1021" height="250" usemap="#Map">
    <map name="Map"><area shape="rect" coords="833,169,979,189" href="http://eurekabusiness.co.za/" target="_blank"><area shape="rect" coords="804,120,984,145" href="http://eurekajobs.co.za/" target="_blank"><area shape="circle" coords="953,80,25" href="http://eurekadate.co.za/" target="_blank"><area shape="circle" coords="943,12,41" href="http://eurekaholidays.co.za/" target="_blank">
      <area shape="circle" coords="150,552,86" href="http://eurekaholidays.co.za/" target="_blank">
      <area shape="circle" coords="316,365,68" href="http://eurekadate.co.za/" target="_blank">
      <area shape="circle" coords="559,358,68" href="http://eurekajobs.co.za/" target="_blank">
      <area shape="circle" coords="865,415,101" href="http://eurekabusiness.co.za/" target="_blank">
      <area shape="rect" coords="22,220,114,249" href="mailto:admin@eurekasearch.co.za" target="_blank">
      <area shape="rect" coords="135,220,170,249" href="index.html">
      <div id="apDiv1"><!-- HTML for SEARCH BAR -->
     	<div id="tfheader">
		<form id="tfnewsearch" method="get" action="https://www.google.com/search">
		        <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
		</form>
		<div class="sicon"><a href="https://www.facebook.com/people/Trevor-Davies/100007794287856" target="_blank"><img src="../images/fb.png" width="31" height="32" alt="fb" /></a>
		<a href="https://twitter.com/GlobalOnlineSA" target="_blank"><img src="../images/tw.png" width="31" height="32" alt="twitter" /></a></div>	
	<div class="tfclear"></div>
	 <!--<div class="menu_home"><a href="index.html">Home</a></div>-->
	</div></div>
	<div class="content">
	<div class="back_button"><a href="http://eurekasearch.co.za"><img src="../images/back.png"></a></div>
	<h2>Contact Us</h2>
	<p><br/></p>
	<p>Mail us to contact: <a href="mailto:admin@eurekasearch.co.za">admin@eurekasearch.co.za</a></p>
	<form action="contactus_code.php" method="post">
		<table width="500" border="1">
		  <tr>
			<td>Name:</td>
			<td>&nbsp;</td>
			<td><input type="text" name="user_name"/></td>
		  </tr>
		  <tr>
			<td>Email:</td>
			<td>&nbsp;</td>
			<td><input type="text" name="email" id="email"/></td>
		  </tr>
		  <tr>
			<td>Phone:</td>
			<td>&nbsp;</td>
			<td><input type="text" name="phone_number" id="phone_number"/></td>
		  </tr>
		  <tr>
			<td>Subject:</td>
			<td>&nbsp;</td>
			<td><input type="text" name="subject" /></td>
		  </tr>
		  <tr>
			<td>Message:</td>
			<td>&nbsp;</td>
			<td><textarea name="message" rows="5" cols="40"></textarea></td>
		  </tr>
		  <tr>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td><input type="submit" name="Submit" value="Submit" /></td>
		  </tr>
		</table>
	</form>
	<p></p>
	</div>
		<div class="tfclear"></div>
  <div class="main_footer">
      <div id="footer">
        <!-- HTML for footer-->
       <a href="terms-use.html">Terms of use</a> | <a href="privacy-policy.html">Privacy Policy</a></div>
      <div id="copy">
        <!-- HTML for copy-->
      2013 Copyright Eureka Search  </div>
      </div>
    </div>
      <area shape="rect" coords="806,113,986,138" href="http://eurekajobs.co.za/" target="_blank">
      <area shape="rect" coords="832,164,978,184" href="http://eurekabusiness.co.za/" target="_blank">
    </map>
  </p>
  <div></div>
</div>


</body>
</html>