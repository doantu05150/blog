<?php require('partials/head.php'); ?>
<?php
//die(var_dump($_SESSION['user_id']));
     if (!isset($_SESSION['user_id'])) {
        require('login_form.php');
    } else {
        require('user.view.php');
    }
        
?>

<?php require('partials/footer.php'); ?>
