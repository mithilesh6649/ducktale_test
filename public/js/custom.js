 
 
 $(document).ready(function(){
        $('input[name="type"],#length,#weight,#height,#quantity').on('change',function(){

            var type = $('input[name="type"]:checked').val();
            var length = $('#length').val();
            var weight = $('#weight').val();
            var height = $('#height').val();
            var quantity = $('#quantity').val();
              
             $('#volume_cm').val('');
             $('#volume_lbs').val('');
               
            if(length && weight && height && quantity != ""){
                
              $.ajax({
                    type: "POST",
                    url:calculateURL,
                    data: {
                      type:type,
                      length:length,
                      weight:weight,
                      height:height,
                      quantity:quantity,
                      "_token": csrfToken
                    },
                    error: function(xhr, status, error) {
                       alert(error);      
                    },
                    success: function(response) {
                       if(type == 'kg'){
                        $('#volume_cm').val(response.calculatedVol.toFixed(2));
                       }else{
                        $('#volume_lbs').val(response.calculatedVol.toFixed(2));
                       }  
                    }
                });

            } 
            
        });   
    });