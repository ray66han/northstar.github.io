<?php
    // Header goes here
    include 'header.php';
?>
<?php
    // Get the current page
    $page = $_GET['page'];

    // Include the appropriate snippets based on the current page
    switch ($page) {
        // Main body snippets goes here(Draw)
        case 'draw-signature':
            include 'snippets/navbar.php';
            include 'snippets/draw-signature.php';
            include 'snippets/footer-main.php';
            break;

        // Auto generate a signature
        case 'auto-signature':
            include 'snippets/navbar.php';
            include 'snippets/auto-signature.php';
            include 'snippets/footer-main.php';
            break;
            
        // Upload a signature
        case 'upload-signature':
            include 'snippets/navbar.php';
            include 'snippets/upload-signature.php';
            include 'snippets/footer-main.php';
            break;

        // Default case
        default:
            include 'snippets/navbar.php';
            include 'snippets/draw-signature.php';
            include 'snippets/footer-main.php';
            break;
    }
?>
<?php
    // Footer goes here
    include 'footer.php';
?>
