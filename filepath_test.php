<!DOCTYPE html>
<html>
<head>
	<title></title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>

	<label>select image</label>
	<input type="file" name="file" id="file"><br>
	<span id="uploaded_image"></span>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){

		$(document).on('change','#file',function(){
			var property = document.getElementById("file").files[0];
			var image_name = property.name;
			var image_extension = image_name.split('.').pop().toLowerCase();
			if(jQuery.inArray(image_extension,['png','jpeg','jpg'])== -1)
			{
				alert('Invalid file');
			}
			var image_size = property.size;
			if(image_size > 2000000)
			{
				alert('file size is big');
			}
			else
			{
				var form_data = new FormData();
				form_data.append("file",property);
				$.ajax({
                method: "POST",
                url: "testupload.php",
                data: form_data,
                processData:false,
                     contentType:false,
                     cache:false,
                     beforeSend:function(){
                     	$('#uploaded_image').html("<label>image upload..</label>");
                     },
                     success: function(data){
                         
                         $('#uploaded_image').html(data);
                     }
                  }); 
			}

		})

	});
</script>