<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,
 initial-scale=1.0">
 <title>Adding new empolyees</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

</head>
<body>

<!-- /.navbar link -->
<?php include "viem/_navbar.php" ?>

<div class="container">

<div class="row">

<div class="col-md-6 col-md-offset-3">

 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Adding new empolyees</h2>
                    </div>

                    <form action="Controller/EmployeeController.php" method="post" enctype="multipart/form-data">
                        <div class="panel-body">
                            <label for="name">Employee name:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>

                            <label for="id" class="mt-10">Employee id:</label>
                            <input type="number" name="id" id="id" class="form-control" placeholder="Enter your id" required>

                            <label for="department" class="mt-10">Employee department:</label>
                            <textarea name="department" id="department" class="form-control" placeholder="Enter your department" required></textarea>

                            <label for="image" class="mt-10">Employee image:</label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary btn-block">Store employee</button>
                        </div>
                    </form>
                </div>
</div>
</div>



</div>

</body>

</html>