<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ICON -->
    <link rel="icon" href="...">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/layout.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="..."></script>

    <!-- MORE -->

    <title>Always Sporting</title>
</head>

<body>

    <header>
        <?php require_once "menu.php" ?>
        <?php require_once "menu2.php" ?>
    </header>

    <?php
    $section = (isset($section)) ? $section : 'home';
    require_once $section . ".php";
    ?>


    <br><br>
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top border-info">
            <p class="col-md-4 mb-0 text-info title">&copy; 2023 Only Sports</p>

            <ul class="nav col-md-4 justify-content-end title">
                <li class="nav-item"><a href="index.php" class="nav-link px-2 link-info">INICIO</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 link-info">FEATURS</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 link-info">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 link-info">ABOUT</a></li>
            </ul>
        </footer>
    </div>

</body>

</html>