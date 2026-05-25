<?php
include './php/header.php';
?>

<div class="col-6">
    <?php
    //echo "<p>".$GET['nome']."</p>";
    //echo "<p>".$GET['nome']."</p>";
    echo "<p>".$POST['nome']."</p>";
    echo "<p>".$POST['email']."</p>";
    echo "<p>".$POST['telefone']."</p>";
    ?>
</div>
<?php
include './php/footer.php';
?>