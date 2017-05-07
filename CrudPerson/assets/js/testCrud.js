
$(document).ready(function(){
    $('#pdob').datepicker({
        'format': 'yyyy-m-d',
         changeMonth: true,
         changeYear: true,
         yearRange: "-100:+0"
    });
     
$('#buttonSave').on('click',function(e){
    e.preventDefault();
    var formStatus = $('#formAddPerson').validate().form();

    if(formStatus === true){ 
       var pname = $("#pname").val();
       var pdob = $("#pdob").val();
       var pfavoritecolor = $("#pfavoritecolor").val();
       var pemail = $('#pemail').val();
       $.ajax({
        type: "POST",
        url: 'http://localhost/CrudPerson/index.php/TestCrudController/saveData',
        dataType: 'json',
        data: {pname: pname, pdob: pdob, pfavoritecolor:pfavoritecolor, pemail: pemail},
        success: function(data){
            
            if (data.message == 1) {
                $("<div>The person was added successfully!</div>").dialog({
                    resizable:false,
                    title:'Notification!.',
                    modal:true,
                    buttons:{
                        "OK":{
                          text:'OK',
                          click: function() {
                            clean();
                            $(this).dialog("close");
                          }
                        }
                    }
                });
                            
             }else{
                 $("<div>Error!</div>").dialog({
                    title:'Validation Error!',
                    modal:true,
                    buttons:{
                        "OK":{
                          text:'OK',
                          click: function() {
                            $(this).dialog("close");
                          }
                        }
                    }
                });
             } 
           }
        });
        
    } // Validation
    
    }); // End button click
     
}); // End function ready

function clean()
{
    $(':input').not(':button, :submit, :reset, :hidden, :checkbox, :radio').val('');
}

