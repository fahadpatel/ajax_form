<!DOCTYPE html>
<html>
	<head>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	</head>	
<body>

<h2>The XMLHttpRequest Object</h2>
<form id="form">
<input type="hidden" name="phone_no" value="12345678" />
<input type="submit" value="Request data" />
</form>
<p id="demo"></p>

<script>


 <script>
 $("#form").submit(function(e){
                 
    
                        
                        var formData = $("#create_memo").serialize();
                         $.ajax({
                            type: "POST",
                            url: '<? echo base_url() ?>update.php',
                            dataType: 'json',
                            data: new FormData(this),
                            processData:false,
                            contentType:false,
                            cache:false,
                            async:false,
                            success: function (res) {
								
                               if (res['status'] == 1) {
									
                                      
                                        $("#demo").html("<p>"+res['message']+"<p>");
										
										}else{
										
											$("#demo").html("<p>"+res['message']+"<p>");
											
                                    }
                               
                            }
                        });
                  
                 
                    e.stopPropagation();
                    e.preventDefault();
                    return false;
                });


</script>

</body>
</html>



