<?php require_once 'ti.php' ?>
<?php include("includes/_config.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Community Science Museum - <?php print $PAGE_TITLE;?></title>
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="museum community science exhibitions robotics AI biology history cosmology" />
        <meta name="description" content="Come see your local community science museum for all we have to offer, we have plenty of exhibitions about fantastic subjects like cosmlogy, biology and robotics" />
        <link rel="stylesheet" href="https://use.typekit.net/gmx3mnm.css">
        <link rel="stylesheet" href="css/base.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php">Contact Us</a>
                    </li>
                    <li  class="svg">
                        <svg height="8" width="80">
                            <line x1="0" y1="0" x2="80" y2="0" />
                        </svg>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Visit Us") {?>active<?php }?>" href="visit.php">Visit Us</a>
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
            <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php">Contact Us</a>
            <a class="nav-link <?php if ($CURRENT_PAGE == "Visit Us") {?>active<?php }?>" href="visit.php">Visit Us</a>
        </footer>

        <?php startblock('scripts') ?>

        <?php endblock() ?>

    </body>
</html>
