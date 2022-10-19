<?php
    include("connection.php");

    if(isset($_POST['addfeedback']))
    {
        if(!empty($_FILES['photo']['name']))
        {
            $photo = htmlspecialchars($_FILES['photo']['name']);
        }

        $place_name = htmlspecialchars($_POST['placename']);
        $place_description = htmlspecialchars($_POST['placedescription']);

        $change_name=md5(rand()).'.'.$photo;
        $place_photo="upload/".$change_name;
        move_uploaded_file($_FILES['photo']['tmp_name'],$place_photo);

        $sql = "insert into feedback(image,placename,placedescription) values(?,?,?)";
        $query = $conn->prepare($sql);
        $query->bind_param("sss",$place_photo,$place_name,$place_description);
        $query->execute();
        $query->close();

        header("location:index.php");
    }
?>