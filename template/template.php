<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <link href="<?php site_url(); ?>/template/style.css" rel="stylesheet" type="text/css" /> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple">
    <link href="https://fonts.googleapis.com/css2?family=Oi&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="p-3 mb-2 bg-secondary text-white">
<main class="container">

    <header>
        <div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="./images/photo.jpeg" alt="photo" class="img-fluid" width="50px" style="border-radius: 5px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <?php nav_menu(); ?>
                    </li>
                </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="search news" aria-label="search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</div>
    </header>

    <article>
        <h2><?php site_name(); ?></h2>
        <?php page_content(); ?>
    </article>
<hr>
    <footer>
    <span class="badge text-bg-secondary">
        Copyright Name <strong>Build by Eric and Xavier</strong>
    </span>
    <span>
        do not touch this web pls
    </span>
    <span class="btn">
        <a class="btn btn-primary" href="https://discord.com/">Join Discord <img style="width: 20px"; src="./images/discord.jpeg" alt="discordlogo"></a>
        <a class="btn btn-primary" href="https://www.youtube.com/">Join youtube <img style="width: 20px;" src="./images/ytb.png" alt="ytblogo"></a>
    </span>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

</main>
</body>
</html>