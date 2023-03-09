<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Add Items</title>
    </head>

    <body>
        <div class="container">
            <header class="mt-3">
                <h1>Add new Items</h1>

                <p>
                    <a href="./index.php">Back to Home</a>
                </p>
            </header>

            <hr>

            <form class="mt-5" action="./create.php" method="post" novalidate>
                <div class="form-group mb-3">
                    <label for="item_name">Name:</label>
                    <input type="text" name="item_name" required max="30" class="form-control" >
                </div>

                <div class="form-group mb-3">
                    <label for="description">Descriptiion:</label>
                    <input type="text" name="description" required max="30" class="form-control" >
                </div>

                <div class="form-group mb-3">
                    <label for="value">Value: </label>
                    <input type="text" name="value" required max="30" class="form-control" >
                </div>

                <div class="form-group mb-3">
                    <label for="quantity">Quantity:</label>
                    <input type="text" name="quantity" required max="30" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <button class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </body>
</html>