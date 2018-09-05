<?php
require 'includes/common.php';
// if(!isset($_SESSION['email']))
//{
//header('location:logout.php');
//}
?>
<html>
<head>
<title>Chat Box</title>

<link href="stylechat.css" rel="stylesheet" type="text/css">

<script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script>

function submitChat() {
	if(form1.uname.value == '' || form1.msg.value == '') {
		alert("ALL FIELDS ARE MANDATORY!!!");
		return;
	}
	var uname = form1.uname.value;
	var msg = form1.msg.value;
	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
		}
	}
	
	xmlhttp.open('GET','insertchat.php?uname='+uname+'&msg='+msg,true);
	xmlhttp.send();

}

$(document).ready(function(e){
	$.ajaxSetup({
		cache: false
	});
	setInterval( function(){ $('#chatlogs').load('logschat.php'); }, 2000 );
});

</script>


</head>
<body>
   
    <button class="btn-primary btn-block"><a class="navbar-brand" href="index.php">The Yellow BackPack </a></button></br>
    <button>  <a class="navbar-brand" href="logout.php"> Logout</a></button>
                           
                           
                           
                          


       
<form name="form1">
    <div class="gap3">
         <textarea rows="2" cols="40" name="uname" placeholder='Enter Your Name'></textarea><br />

         
 <textarea rows="10" cols="200" name="msg" placeholder='Your Message...'></textarea><br />
 <div class="chat-form">
            
 <button role="button" class="btn btn-primary btn-block" href="#" onclick="submitChat()">Send</button><br /><br />
 </div>
    </div>
    <div class="chatbox">
            <div class="chatlogs">
                <div class="chat friend">
                    <div  class="user-photo"><img src="img/user.png"></div>
                    


            
   
    
                    <div class="chat-message" id="chatlogs">
LOADING CHATLOG...

    </div>
    </div>
            </div>      
    </div>
</form>
</body>
