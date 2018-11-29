
<?php
switch ($_SERVER["SCRIPT_NAME"]) {
    case "/contact.php":
        $CURRENT_PAGE = "Contact";
        $PAGE_TITLE = "Contact Us";
        break;
    case "/about.php":
        $CURRENT_PAGE = "About";
        $PAGE_TITLE = "About Us";
        break;
    case "/exhibitions.php":
        $CURRENT_PAGE = "Exhibitions";
        $PAGE_TITLE = "Our Exhibitions";
        break;
    case "/involvement.php":
        $CURRENT_PAGE = "Involvement";
        $PAGE_TITLE = "Get Involved";
        break;
    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "Welcome to my homepage!";
}
?>
