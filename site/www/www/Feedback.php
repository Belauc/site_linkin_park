<!doctype html>
<html>
<head>
<?php 

	$title = "Feed Back";
	require_once "blocks/head.php";

?>
<link href="/css/Event Style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/js/jquery-3.0.0.min.js"></script>
<script>
	$(document).ready (function () {
        $("#done").click (function () {
			$("#messageShow").hide ();
			var name = $("#name").val();
			var email = $("#email").val();
			var subject = $("#subject").val();
			var message = $("#message").val();
			var fail ="";
				if(name.length < 3) fail = "Имя меньше 3 символов";
			else if(email.split('@').length-1 == 0 || email.split('.').length-1 == 0) fail = "Введен не корректный email";
			else if(subject.length < 5) fail = "Тема сообщения меньше 5 символов";
			else if(message.length < 20) fail = "Сообщения меньше 20 символов";
				if(fail !="")
					{
						$("#messageShow").html (fail);
						$("#messageShow").show ();
						return false;
					}
					
				$.ajax({
					url: '/ajax/feedback2.php',
					type: 'POST',
					cache: false,
					data: {'name': name, 'email': email, 'subject': subject, 'message': message},
					dataType: 'html',
					success: function (data){
						$('#messageShow').html (data);
						$('#messageShow').show ();
					}	
					  });
			
		});
    });

</script>
</head>

<body>
<?php require_once "blocks/header.php"?>
    <div id="Page-wrap">
        <div id="FeedbackWrapper">
              <input type="text" placeholder="Имя" id="name" name="name">
              <input type="text" placeholder="Email" id="email" name="Email">
              <input type="text" placeholder="Тема сообщения" id="subject" name="subject">
              <textarea name="message" id="message" placeholder="Введите ваше сообщение" ></textarea><br>
              <input type="button" id="done" value="Отправить">
               <div id="messageShow"></div>
        </div>
   </div>
   <?php require_once "blocks/footer.php"?>
   
</body>




</html>