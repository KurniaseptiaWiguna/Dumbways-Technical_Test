<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="card" style="width:20rem;">
            <div class="card-header">
                <label>Form Edit hero</label>
            </div>
                <div class="card-body">
                    <form action="update_hero.php" method="post">
                        <?php 
		                    include "koneksi.php";
                            $id = $_GET['id'];
                            $query_mysql1 = mysqli_query($koneksi,"SELECT * FROM heroes_tb where id=$id");
		                    while($data1 = mysqli_fetch_array($query_mysql1)){
                         ?>
                        <div class="form-group">
                            <label class="col-sm-2 col-form-label">id</label>
                            <input  type="text" name="id"  value="<?php echo $data1['id'] ?>"> 
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-form-label">name</label>
                            <input type="text" name="name"  value="<?php echo $data1['name'] ?>"> 
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-form-label" >type</label>
                            <select name="type" id="2">
                                <?php 
                            
		                            $query_mysql2 = mysqli_query($koneksi,"SELECT id as id_type,name as type FROM type_tb");
		                            while($data2 = mysqli_fetch_array($query_mysql2)){
                                ?> 
                                    <option value="<?php echo $data2['id_type'] ?>"><?php echo $data2['type'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-form-label">detail</label> 
                            <input type="text" name="detail"  value="<?php echo $data1['detail'] ?>"> 
                            <?php } ?>
                        </div>
                        <div class="form-group" style="margin-left:30px;">
                            <a href="index.php" class="btn btn-warning" style="margin-right:20px;" role="button">Batal</a> 
                            <input type="submit" value="simpan" class="btn btn-primary" role="button">            
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>