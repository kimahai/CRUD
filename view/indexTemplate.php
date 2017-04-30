<!DOCTYPE html>
<html lang="en">
<head>
    <title>MVC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container col-md-5">
    <h2 class="text-center">hello world</h2>
    <form method="post" action="index.php">
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="name" name="name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="description" name="description">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="created_at" name="created_at">
        </div>
        <button type="submit" class="btn btn-default">Submit Query</button>
    </form>
</div>
</body>