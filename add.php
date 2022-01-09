<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        a {
            display: inline-block;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            line-height: 25px;
            color: #ffff;
        }
    </style>
</head>
<body>


<div style="color: red">
    <?php echo $error; ?>
</div>
<div class="modal-dialog">
        <h1 class="text-center">
            Thêm mới blood
        </h1>

        <!--</form>-->
        <div style="color: red">
            <?php echo $error; ?>
        </div>

        <form method="post" id="recordForm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-plus"></i> Insert Record</h4>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" require name="txtName">			
                        </div>
                        <div class="form-group">
                            <label for="age" class="control-label">DATE</label>							
                            <input type="text" require name="txtDate">							
                        </div>	 	
                        <div class="form-group">
                            <label for="lastname" class="control-label">Linh Vuc</label>							
                            <input type="text" require name="txtLV">				
                        </div>	
                        <div class="form-group">
                            <label for="address" class="control-label">Nhiem Vu</label>							
                            <input type="text" require name="txtNV">
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="control-label">Co quan thuc hien</label>							
                            <input type="text" require name="txtCQ">
                        </div>					
                </div>
                <div class="modal-footer">
                        <input type="submit" name="submit" value="Insert" />
                </div>
            </div>
        </form>
    
</div>

</body>
</html>




<!-- <form method="post" action="">
    Name :
    <input type="text" require name="txtName" value="" />
    <br />
    Date :
    <input type="text" require name="txtDate" value="" />
    <br />
    Linh Vuc :
    <input type="text" require name="txtLV" value="" />
    <br />
    Nhiem Vu :
    <input type="text" require name="txtNV" value="" />
    <br />
    Co quan thuc hien :
    <input type="text" require name="txtCQ" value="" />
    <br />
   
    <input type="submit" require name="submit" value="Save" />
</form> -->