<!DOCTYPE html>
<html>
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



