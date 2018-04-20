<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="jumbotron">
        <h1>Heading text</h1>
        <p>Making a form</p>
    </div>
    <form action="form.php" method="post">
    </form>
    <span class="label label-default">Name: </span>
    <input type="text" name="NAME" placeholder="Username"><span class="label label-default">
    Password: </span>
    <input type="password" name="password" placeholder="password">
    <button class="btn btn-success" type="submit" disabled="disabled" id="btn">Button</button>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>