<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once "resources.php"; ?>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-4 pt-3">
            <div class="text-center">
                <h4> <?php 
                echo "$message";
                ?></h4>
                <a href="http://localhost/getapi-php" class="btn btn-outline-success mt-3 pt-2">Regresar</a>
            </div>
        </div>
    </div>
</body>

</html>