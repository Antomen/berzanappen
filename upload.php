<?php

//$target_dir = "img/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//$uploadOk = 1;
//$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
//// Check if image file is a actual image or fake image
//if (isset($_POST["submit"])) {
//    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//    if ($check !== false) {
//        echo "File is an image - " . $check["mime"] . ".";
//        $uploadOk = 1;
//    } else {
//        echo "File is not an image.";
//        $uploadOk = 0;
//    }
//}
//if ($uploadOk == 0) {
//    echo"Sorry, fil inte uppladdad";
//} else {
//    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//        echo "Filen " . basename($_FILES["fileToUpload"]["name"]) . " har laddats upp till " . $target_dir;
////        header("Location: index.php");
//        echo "<form action='index.php'>";
//        echo "<input type='submit' value='Done'>";
//        echo "</form>";
//    } else {
//        echo "ERROR";
//    }
//}
        