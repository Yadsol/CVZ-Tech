<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<script src="js/jquery.js"></script> 
<script> 
function loadContent() 
{ 
   $("#includedContent").load("header.html"); 
} 

</script> 
</head>


<body> 
<div class="container">
<?php 
include 'header.php';
 ?>
<div class="panel panel-default">
<div class="row" style="margin:0px;">
<div class="col-sm-5 col-md-2" style="background-color:white">
<div class="table-responsive">
<table class="table">
<tr>
<th class="success">ABOUT US</th>
</tr>
<tr><td>Who We Are</td></tr>
<tr><td>Focusing On Customers</td></tr>
<tr><td>Always Evolving</td></tr>
<tr><td>compare plans</td><tr>
</table></div></div>
<div class="col-md-9 col-md-offset-1" style="background-color:white;padding-top:0px;">
<div class="col-sm-5 col-md-2 pull-right" style="background-color:white;">
<img src="img/web_2.gif"></img>
</div>
<p class="text-center" style="font-size:22px"><strong>About Us</strong></p>
<div class="text-muted" style="font-size:18px"><strong>Who We Are</strong></div><br>
<p>Founded in 2001, IPOWER has established itself as a leader in the web hosting industry, providing a comprehensive suite of online services for small and medium-sized businesses worldwide. Our custom control panel, vDeck, offers access to more than 200 tools, features, and services, giving our customers a wide selection of web hosting applications available.

IPOWER has seen tremendous growth, at one point being named to the Inc. 500 list, fueled both by word of mouth and by a competitive affiliate program. More than 1,000,000 customers from more than 100 countries depend on out platform every day for speed, reliability, security and global reach.</p>
<br>
<div class="text-muted" style="font-size:18px"><strong>Focusing on Our Customers</strong></div>
<p>At IPOWER, our customers aren't faceless numbers. We know them; we listen to them; we implement changes based on their feedback. Our "Customer Experience" team conducts monthly surveys and focus groups to monitor customer satisfaction and find out how we can improve. We perform usability testing on our tools, with real customers, during the development process. Our hosting platform helps ensure that our customers' websites and email are hosted in an environment that is as secure and reliable as possible.</p>
<br>
<div class="text-muted" style="font-size:18px"><strong>Always Evolving</strong></div>
<p>
When a company becomes as successful as IPOWER, it's easy to become complacent. We don't let that happen. We're constantly looking for newer and better ways we can serve our customers. We leverage our position within the industry to forge strong partnerships with industry giants, such as Google, Yahoo!/Bing, WordPress, ShopSite and Facebook. In fact, we were one of the first hosts to integrate Google Webmaster Tools directly into our control panel, giving our customers unprecedented insight into how Google views sites.</p>
</div>
</div>
</div>
<?php 
include 'footer.php';
 ?></div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/holder.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>