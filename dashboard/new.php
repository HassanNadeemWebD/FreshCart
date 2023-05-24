<?php
include 'config.php';
if (isset($_POST['create'])) {

    $name = $_POST['name'];
    $date = $_POST['date'];
    $desc = $_POST['description'];
    $status = $_POST['status'];
    $fileName = $_FILES['icon']['name'];
    $tmpName = $_FILES['icon']['tmp_name'];
    $fileType = $_FILES['icon']['type'];

    print_r($_FILES['icon']);
    if ($fileType == "image/svg+xml" || $fileType == 'image/png') {




        if (move_uploaded_file($tmpName, "../assets/images/icons/" . $fileName)) {
            $query = "INSERT INTO `category` ( `icon`, `name`, `status`, `description`, `date`) 
            VALUES ( '$fileName', '$name', '$status', '$desc', '$date')";
            $res = mysqli_query($conn, $query);
            if ($res) {
                // echo "<script> alert('Image uploaded') </script>";
                echo "<script>window.location.href = 'categories.php'</script>";
            }

        }


    } else {

        echo "<script> alert('Image is Not Uploaded , Please use SVG or PNG file ') </script>";

        // header('location: form.php');
        // echo "<script>window.location.href = 'form.php'</script>";

    }


    echo "<script> alert('Category Added !') </script>";


}

// print_r($_POST);





?>