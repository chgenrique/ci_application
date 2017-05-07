<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Test Crud App</title>
    
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/js/jquery-ui/jquery-ui.min.css"></script>

    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/testCrud.js"></script>
</head>
<body>
    
    <div >
        
        <div class="container">
            
        <h2>Add Person</h2>
        <form id="formAddPerson">
            <label for="name" class="label_form">Name <span class="span_required">*</span> </label>
            <input type="text" id="pname" name="pname" class="required"/>
            <label for="dob" class="label_form">Date of Birth <span class="span_required">*</span></label>
            <input type="text" id="pdob" name="pdob" class="required"/>
            <label for="email" class="label_form">Email <span class="span_required">*</span></label>
            <input type="email" id="pemail" name="pemail" placeholder="john@mail.com" class="required"/>
            <label for="favoriteColor" class="label_form">Favorite Color <span class="span_required">*</span></label>
            <input type="text" id="pfavoritecolor" name="pfavoritecolor" class="required"/>
            <input type="submit" id="buttonSave" class="btn-submit" value="Save"/>
        </form>
            
        </div>  
        
    </div>

</body>
</html>