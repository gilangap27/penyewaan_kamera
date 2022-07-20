<?php require '../functions.php' ?>

<?php require './template/header.php' ?>

<?php $user = query('SELECT * FROM user WHERE id = ' . $_SESSION['id_user'])[0] ?>


<?php require './template/footer.php' ?>