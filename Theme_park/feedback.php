<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">  
        <link rel="stylesheet" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="jquery/jquery.js"></script>
        <title>feedback</title>
    </head>

    <body>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Feedback</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Back to Home Page <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="main_form">
            <form method="post" action="addfeedback.php" enctype="multipart/form-data">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="photo" accept="image/*" required>
                    <label class="custom-file-label" for="customFile">Upload place image</label>
                </div>
                <div class="form-group">
                    <br>
                    <label for="placename" class="label_text">place name</label>
                    <input type="text" class="form-control" placeholder="Enter Place Name" id="placename" name="placename" required>
                </div>
                <div class="form-group">
                    <label for="comment" class="label_text">write something about place</label>
                    <textarea class="form-control" rows="5" id="comment" name="placedescription" required></textarea>
                </div> 
                <button type="submit" class="btn btn-dark" name="addfeedback">add feedback</button>
            </form>
        </div> 

        <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() 
            {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
</script>

    </body>
</html>