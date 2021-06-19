<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-dark">
    
    <div class="container" style="margin-top:2rem;">
        <div class="row">
        
            <div class="col" style="margin-right:30px;">
                <div class="row"><a href="tambah_hero.php" class="btn btn-sm btn-primary" style="float:right;">tambah hero</a></div>
                <div class="row">
                    <div class="container bg-light" style="padding-top:20px; padding-bottom:20px;">
                
                        <?php 
		                    include "koneksi.php";
		                    $query_mysql = mysqli_query($koneksi,"SELECT * FROM heroes_tb");
		                    $query_mysql2 = mysqli_query($koneksi,"SELECT id as id_type,name as type FROM type_tb");
		                    while($data = mysqli_fetch_array($query_mysql)){
                        ?>
                            <div class="card" style="width:10rem;">
                                <h5><?php echo $data['name'] ?></h5>
                                <?php echo $data['detail'] ?>
                                    <div class="row">
                                        <div class="col" ><a href="edit_hero.php?id=<?php echo $data['id']; ?>" class=" btn-sm btn-warning">edit</a></div>
                                        <div class="col "><a href="hapus_hero.php?id=<?php echo $data['id']; ?>" class="btn-sm btn-danger">hapus</a></div>
                                    </div>
                            </div>
  
		                <?php } ?>
                </div>
            </div>
            </div>
            
            <div class="col">
                <div class="row">
                    <a href="tambah_type.php" class="btn btn-sm btn-primary" style="float:right;">tambah type</a>
                </div>
                <div class="row">
                    <div class="container bg-light">
                        
                        <?php 
		                    while($data2 = mysqli_fetch_array($query_mysql2)){
                        ?>
                            <div class="card" style="width:10rem; margin:20px;">
                                <h5><?php echo $data2['id_type'] ?>. <?php echo $data2['type'] ?></h5>
                                <div class="row">
                                        <div class="col" ><a href="edit_type.php?id=<?php echo $data2['id_type']; ?>" class=" btn-sm btn-warning">edit</a></div>
                                        <div class="col "><a href="hapus_type.php?id=<?php echo $data2['id_type']; ?>" class="btn-sm btn-danger">hapus</a></div>
                                    </div>
                            </div>      
                        <?php } ?>
        
                    </div>
       
                </div>
            </div>
        </div>
    </div>
</body>
</html>