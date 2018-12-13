<?php require_once 'ti.php' ?>
<?php include("includes/_config.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php print $PAGE_TITLE;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php if ($CURRENT_PAGE == "Index") { ?>

        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <?php } ?>

        <link rel="stylesheet" href="https://use.typekit.net/gmx3mnm.css">
        <link rel="stylesheet" href="css/base.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/app.js"></script>

        <?php startblock('head') ?>

        <?php endblock() ?>

    </head>
    <body>
        <header>

            <div class="hero-img"></div>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
                    </li>
                    <li class="svg">
                        <svg height="8" width="80">
                            <line x1="0" y1="0" x2="80" y2="0" />
                        </svg>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Exhibitions") {?>active<?php }?>" href="exhibitions.php">Exhibitions</a>
                    </li>
                    <li class="svg">
                        <svg height="8" width="80">
                            <line x1="0" y1="0" x2="80" y2="0" />
                        </svg>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Involvement") {?>active<?php }?>" href="involvement.php">Get Involved</a>
                    </li>
                    <li  class="svg">
                        <svg height="8" width="80">
                            <line x1="0" y1="0" x2="80" y2="0" />
                        </svg>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Visit Us") {?>active<?php }?>" href="visit.php">Visit Us</a>
                    </li>
                    <li  class="svg">
                        <svg height="8" width="80">
                            <line x1="0" y1="0" x2="80" y2="0" />
                        </svg>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php">Contact</a>
                    </li>
                </ul>
            </nav>


            <div class="hero-banner">
                <h1>Community Science Museum</h1>
                <h2>Explore Together</h2>
            </div>
        </header>



        <?php startblock('content') ?>

        <?php endblock() ?>

        <footer>
            <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
            <a class="nav-link <?php if ($CURRENT_PAGE == "Exhibitions") {?>active<?php }?>" href="exhibitions.php">Exhibitions</a>
            <a class="nav-link <?php if ($CURRENT_PAGE == "Involvement") {?>active<?php }?>" href="involvement.php">Get Involved</a>
            <a class="nav-link <?php if ($CURRENT_PAGE == "Visit Us") {?>active<?php }?>" href="visit.php">Visit Us</a>
            <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php">Contact</a>
        </footer>
    </body>
</html>
