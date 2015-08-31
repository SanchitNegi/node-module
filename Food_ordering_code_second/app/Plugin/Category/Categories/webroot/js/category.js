  jQuery(document).ready(function(){    
    /* check and uncheck functionality Start*/
    jQuery('.checkall').click(function(){
        if(!jQuery(this).is(':checked')){            
            jQuery('.dyntable input[type=checkbox]').each(function(){
                jQuery(this).attr('checked',false);				
            });
        }else{			
            jQuery('.dyntable input[type=checkbox]').each(function(){
                jQuery(this).attr('checked',true);				
            });
        }
    });    
    jQuery('.checkboxlist').click(function(){
        var selectedCounter = 0, no_of_records = 0;        
        jQuery('.dyntable input[type=checkbox]').each(function(){
                  no_of_records++;
                  if (jQuery(this).is(':checked')) {
                      selectedCounter++;
                  }
        })
        checkAllStatus = (no_of_records == selectedCounter) ? true : false;        
        jQuery('.checkall').attr('checked',checkAllStatus);	                    
    });
    jQuery('#operationId').click(function(){      
        var selectedCounter = 0;              
        jQuery('.dyntable input[type=checkbox]').each(function(){
                  if (jQuery(this).is(':checked')) {
                      selectedCounter++;
                  }
        });
        if(selectedCounter < 1)
        {
            alert('Please select the at least one record.');
            return false;
        }
        return confirm("Are you sure you wish to continue?");      
    });
    jQuery('#statusId').change(function(){        
        $class = (jQuery(this).val() == '') ? 'btn btn-default disabled' : 'btn btn-default' ;
        jQuery('#operationId').attr('class',$class);
    });
    /* check and uncheck functionality End*/
    
});
  
  
  
    jQuery(document).ready(function()
    {
        jQuery("#categoryId").validate(
        {	
            errorElement: "div",
            rules: {	                 
                "data[Category][category]": {
                    required: true
                }                
            },
             messages: {
                "data[Category][category]": {
                    required: "Please enter the category name."                    
                },
                "data[Category][parent_id]": {
                    required: "Please select the parent category."                    
                }
            }         
        });
        
        $('#CategoryImage').on('change',function(){
            
            var file = $(this).val();
            var picRegex=/^.*\.(jpg|JPG|jpeg|JPEG|png|PNG|gif|GIF)$/i;
            
            if(!picRegex.test(file)) {
                  
                  $(this).val('');
                  msg = "Please upload jpg, jpeg, png and gif file format file only.";
                  
                  if($(this).next().hasClass('error')){
                    $(this).next('.error').html(msg).show();
                  }else{
                    div = "<div class='error'>"+msg+"</div>";
                    $(this).parent().append(div);
                  }
                  return false;
            }
            return true;
          
        });
        
    });