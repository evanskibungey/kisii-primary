<?php


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mtt</title>
    <link rel="stylesheet" href="bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="flex/flexslider.css">
    <link rel="stylesheet" href="lightbox/css/lightbox.min.css">
    <link rel="stylesheet" href="skl,tt.css">
    <script type="text/javascript" src="fontawesome/svg-with-js/js/fontawesome-all.min.js"></script>
    <script src="bootstrap/4.0.0/js/jquery.min.js"></script>
    <script src="bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="bootstrap/4.0.0/js/bootstrap.js"></script>
    <script src="lightbox/js/lightbox.min.js"></script>
    <script src="flex/js/jquery.flexslider.js"></script>
</head>
</html>
<body>
<form method="post" enctype="multipart/form-data" action="uploaded.php">
    <input type="file" name="file">
    <input type="submit" value="upload">
</form>
<?php
//creating file to upload


//creating file to upload files
//displaying all uploaded files

$files=scandir("uploads");
for ($a=2; $a < count($files); $a++) {
    //Display links to Download
    ?>
    <p class="text-left">
        <a href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
    </p>
    <?php
}
?>




</body>