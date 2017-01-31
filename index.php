<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title>Wireout</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font-Awesome Core CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header class="card card-info">
    <div class="card-block text-white">
        Lägg till data
    </div>
</header>

<main class="card mt-3">
    <div class="card-block">
        <form action="index.php" method="post">
            <div class="form-group row">
                <label for="firstname" class="col-md-1 col-form-label">
                    Firstname
                </label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="firstname">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-md-1 col-form-label">
                    Lastname
                </label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="lastname">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-1 col-form-label">
                    Email
                </label>
                <div class="col-md-4">
                    <input type="email" class="form-control" id="email">
                </div>
            </div>
            <button type="submit" class="btn btn-warning">
                Registrera <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </button>
        </form>
    </div>
</main>
    
<footer class="card mt-3">
    <div class="card-block">
        &copy; 2016 Montathar Faraon
    </div>
</footer>

    <!-- First JQuery, then Bootstrap -->
    <script src="assets/js/jquery-3.1.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
