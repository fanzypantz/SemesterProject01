<?php require_once 'ti.php' ?>
<?php include("includes/_config.php");?>
<!DOCTYPE html>
<html>
    <head>

        <?php include("includes/head.php");?>

    </head>
    <body>
        <header>

            <div class="hero-img">

            </div>

            <div class="nav-container">
                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($CURRENT_PAGE == "Exhibitions") {?>active<?php }?>" href="exhibitions.php">Exhibitions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($CURRENT_PAGE == "Involvement") {?>active<?php }?>" href="involvement.php">Get Involved</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($CURRENT_PAGE == "Visit Us") {?>active<?php }?>" href="visit.php">Visit Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="hero-banner">
                <h1>Community Science Museum</h1>
                <h2>Explore Together</h2>
            </div>
        </header>



        <?php startblock('content') ?>
        <?php endblock() ?>

        <footer>
            <span>
                <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
                <a class="nav-link <?php if ($CURRENT_PAGE == "Exhibitions") {?>active<?php }?>" href="exhibitions.php">Exhibitions</a>
                <a class="nav-link <?php if ($CURRENT_PAGE == "Involvement") {?>active<?php }?>" href="involvement.php">Get Involved</a>
                <a class="nav-link <?php if ($CURRENT_PAGE == "Visit Us") {?>active<?php }?>" href="visit.php">Visit Us</a>
                <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php">Contact</a>
            </span>
        </footer>
    </body>
</html>
