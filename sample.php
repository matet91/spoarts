<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		$(function() {
        $('.image-editor').cropit();

        $('form').submit(function() {
          // Move cropped image data to hidden input
          var imageData = $('.image-editor').cropit('export');
          $('.hidden-image-data').val(imageData);

          // Print HTTP request params
          var formValue = $(this).serialize();
          $('#result-data').text(formValue);
   $.ajax({
            url: "upload.php",
            type: "POST",
            data: formValue,
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $("#targetLayer1").html(data);
            },
            error: function () {}
        });
          // Prevent the form from actually submitting
          return false;
        });
      });
	</script>
</head>
<body>

</body>
</html>