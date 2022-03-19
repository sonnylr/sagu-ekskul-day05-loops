<?php include('students3.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

    <div class="container">

        <div class="row">

            <div class="col-12">

                
                <?php 
                    for ($row = 0; $row < 4; $row++ ) {
                       
                ?>
                    
                    <!-- start card -->

                    <div class="card mt-5">

                        <?php for ($col = 0; $col < 3; $col++) { ?> 
                        
                        <div class="card-body">
                        <h1><?php echo $students[$row][$col]; ?></h1>
                        </div>

                        <?php } } ?>
                    <!-- end card -->
                    
                    </div>
                
                
            </div>

        </div>
        
    </div>

        
</body>
</html>