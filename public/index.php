<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once "resources.php"; ?>
</head>

<body>
    <div class="container my-2 py-2">
        <div class="row justify-content-center mt-4 pt-3">
            <div class="col-md-12 text-align-center justify-content-center">
                <form action="http://localhost/getapi-php/app/saveData.php" method="post">
                    <h4 class="text-center">Contries API</h4>
                    <?php include_once "./app/getData.php"  ?>

                    <input type="submit" value="Save" name="Save" id="Save"
                        class="btn btn-outline-success col-md-4 offset-md-4 mt-3">
                    <input type="submit" value="See the chart" name="Show" id="Show"
                        class="btn btn-outline-primary col-md-4 offset-md-4 mt-3">
                </form>
            </div>
        </div>


    </div>
</body>

</html>