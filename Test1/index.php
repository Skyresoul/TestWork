<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Test1</title>
</head>
<body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
	<script>
		$(document).ready(function(){
			var errorTxt = 'Ошибка отправки';
			$("#sendform").validate({
				submitHandler: function(form){
					var form = document.forms.sendform,
					formData = new FormData(form),
					xhr = new XMLHttpRequest();

					xhr.open("POST", "mail.php");
			      
					xhr.onreadystatechange = function(){
			        	if (xhr.readyState == 4){
			          		if(xhr.status == 200){
			            		$("#sendform").html('<p class="thank">Данные отправлены!<p>');
			          		}
			        	}
			      	};
			      	xhr.send(formData);
			    }
		  	}); 
		});
	</script>

	<div class="container">
		<h1>Форма обратной связи</h1>
			<form action="#" method="post" id="sendform" enctype="multipart/form-data">
				<fieldset>
	    			<p>
	      				<label>Имя*:</label>
						<input name="name" value="" type="text" class="form-control required">
	    			</p>

					<p>
				      	<label>E-mail*:</label>
				      	<input name="email" value="" type="email" class="form-control required">
				    </p>

	    			<p>
	      				<label>Сообщение*:</label>
	      				<textarea name="message" class="form-control required"></textarea>
	    			</p>

				    <p>
				      <label>Прикрепить фото:</label>
				      <input name="file" value="1" type="file" accept=".jpg, .png, .jpeg" class="form-control">
				    </p>

	    			<input value="Отправить" name="sendMail" type="submit" class="btn btn-success">
	  			</fieldset>
			</form>
	</div>

</body>
</html>