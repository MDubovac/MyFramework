<?php 
    $title_ext = "About";
    require APP_ROOT . "/views/inc/header.php";
?>

<h3>Hi, my name is <?php echo $data['name']; ?>, and i am <?php echo $data['age']; ?> years old.</h3>
<p><?php echo APP_ROOT; ?></p>

<?php require APP_ROOT . "/views/inc/footer.php"; ?>