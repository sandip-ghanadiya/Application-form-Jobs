<?php

include 'conn.php';

if (isset($_POST['done'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $exp = $_POST['exp'];
    $skil = $_POST['skill'];

    #Technical Method
    // $files = $_POST['file'];

    //     $filename = $files['name'];
    //     $fileerror = $files['error'];
    //     $filetmp = $files['tmp_name'];

    //     $fileext = explode('.', '$filename');
    //     $filechack = strtolower(end($fileext));

    // $filestored = array('pdf', 'doc', 'png', 'jpg', 'jpeg');

    // if (in_array($filechack, $filestored)) {

    //     $destinationfile = '/upload'.$filename;
    //     move_uploaded_file($filetmp, $destinationfile);

    //     $q = " INSERT INTO `aplform` (`name`, `email`, `phone`, `age`, `exp`, `skill`, `resume`) VALUES ( '$name', '$email', '$phone', '$age', '$exp', '$skil', '$filename');";

    //     $query = mysqli_query($con, $q);
    // }







    //$filename = $_FILES['myfile'];
    //$resume = $_POST['resume'];

    #file name with a random number so that similar dont get replaced
    $pname = rand(1000, 10000) . "-" . $_FILES["file"]["name"];


    //  #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];

    //   #upload directory path
    $uploads_dir = 'upload';
    //  #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir . '/' . $pname);


    #SQL query fire for insert data
    $q = " INSERT INTO `aplform` (`name`, `email`, `phone`, `age`, `exp`, `skill`, `resume`) VALUES ( '$name', '$email', '$phone', '$age', '$exp', '$skil', '$pname');";

    $query = mysqli_query($con, $q);

    header('location:display.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="col-lg-6 m-auto">

        <form method="post" enctype="multipart/form-data">

            <br><br>
            <div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Job Application Form </h1>
                </div><br>

                <label> Enter Your Name: </label>
                <input type="text" name="name" class="form-control"> <br>

                <label> Email: </label>
                <input type="text" name="email" class="form-control"> <br>

                <label for="phone">Enter a phone number:</label>
                <input type="tel" class="form-control id=" phone" name="phone" placeholder="1234567890" pattern="[0-9]{10}" required>
                <br>

                <label for="age">Age (between 18 and 45):</label>
                <input type="number" class="form-control id=" quantity" name="age" min="18" max="45">

                <label for="Experience">Experience(in year):</label>
                <input type="number" class="form-control id=" quantity" name="exp">

                <label for="exampleFormControlSelect1">Apply For:</label>
                <select class="form-control" name="skill" id="exampleFormControlSelect1">
                    <option>Data Scientist</option>
                    <option>Php Developer</option>
                    <option>Graphic Designer/UI/UX</option>
                    <option>Project Manager</option>
                    <option>Team Leader</option>
                    <option>HR-Exucutive</option>
                </select><br>
                <label for="resume">Resume:</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="file" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>



                <br>
                <button class="btn btn-success" type="submit" name="done" onclick="show_alert();"> Submit </button><br>


                <button class="btn-primary btn"> <a href="display.php" class="text-white"> Display All Data </a> </button>

                <br> <br>

            </div>
        </form>

    </div>
    </div>
</body>
<script>
    function show_alert() {
        alert("Are you sure to submit form ?");
    }
</script>

</html>