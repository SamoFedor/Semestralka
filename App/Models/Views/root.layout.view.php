<!DOCTYPE html>
<html lang="sk">
<head>
    <title>NBA-FRI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/css.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end">
    <div class="container">
        <a class="navbar-brand" href="#">NBA-FRI </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?c=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=players&a=player">Players</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?c=home&a=post">Pridaj hraca</a>
                </li>
                <?php if (\App\Prihlasenie::isLogged()) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=Prihlasenie&a=logout">Logout</a>
                    </li>
                <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= \App\Config\Configuration::LOGIN_URL ?>">Login</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= \App\Config\Configuration::REG_URL ?>">Registration</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row mt-2">
        <div class="col">
                <?= $contentHTML ?>
        </div>
    </div>
</div>
</body>
</html>

