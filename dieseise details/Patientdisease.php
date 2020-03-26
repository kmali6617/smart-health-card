<?php
$date = $_POST['date'];
$time = $_POST['time']; 
$docid = $_POST['docid'];
$name = $_POST['name'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$diseasetype = $_POST['diseasetype'];
$diseasedescription = $_POST['diseasedescription'];
$reporttype = $_POST['reporttype'];
$reportname = $_POST['reportname'];
$bloodpress = $_POST['bloodpress'];
$Diabetes= $_POST['Diabetes'];
// $myfile1 = $_POST['myfile'];


if (!empty($date) || !empty($time) || !empty($docid) || !empty($name) || !empty($height) || !empty($weight)|| !empty($diseasetype)|| !empty($diseasedescription)|| !empty($reporttype)|| !empty($reportname) || !empty($bloodpress)|| !empty($Diabetes)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbregdate = "";
    $dbname = "ssip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbregdate, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
        if (isset($_POST['save'])) { // if save button on the form is clicked
            // name of the uploaded file
            $filename = $_FILES['myfile']['name'];
        
            // destination of the file on the server
            $destination = 'uploads_report/' . $filename;
        
            // get the file extension
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
        
            // the physical file on a temporary uploads directory on the server
            $file = $_FILES['myfile']['tmp_name'];
            $size = $_FILES['myfile']['size'];

            $extarr = array("zip", "pdf", "docx", "png", "jpg", "jpeg", "doc", "ppt", "pptx", "ppts", "txt");
        
            if (!in_array($extension, $extarr)) {
                echo "You file extension must be zip, pdf, docx, png, jpg, jpeg, doc, ppt, pptx, ppts, txt";
            } elseif ($_FILES['myfile']['size'] > 50000000) { // file shouldn't be larger than 1Megabyte
                echo "File too large!";
            } else {
                // move the uploaded (temporary) file to the specified destination
                if (move_uploaded_file($file, $destination)) {
                    $SELECT = "SELECT date From disease Where date = ? Limit 1";
                    $INSERT = "INSERT Into disease values('$date','$time','$docid','$name','$height','$weight','$diseasetype','$diseasedescription ','$reporttype','$reportname','$bloodpress','$Diabetes','$file')";
                    //Prepare bdatement
                    $stmt = $conn->prepare($SELECT);
                    $stmt->bind_param("i", $date);
                    $stmt->execute();
                    $stmt->bind_result($height);
                    $stmt->store_result();
                    $rnum = $stmt->num_rows;
                    if ($rnum>=0) {
                        $stmt->close();
                        $stmt = $conn->prepare($INSERT);
                        $stmt->execute();
                        // $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
                        //if (mysqli_query($conn, $sql)) {
                            echo "File uploaded successfully";
                        //}
                } 
                else {
                    echo "Failed to upload file.";
                }
            }
        }
    //  $SELECT = "SELECT date From disease Where date = ? Limit 1";
    //  $INSERT = "INSERT Into disease (date, time, docid, name,height,weight,diseasetype,diseasedescription,reporttype,reportname,bloodpress,Diabetes,myfile) values('$date','$time','$docid','$name','$height','$weight','$diseasetype','$diseasedescription ','$reporttype','$reportname','$bloodpress','$Diabetes','$myfile')";
    //  //Prepare bdatement
    //  $stmt = $conn->prepare($SELECT);
    //  $stmt->bind_param("i", $date);
    //  $stmt->execute();
    //  $stmt->bind_result($height);
    //  $stmt->store_result();
    //  $rnum = $stmt->num_rows;
    //  if ($rnum==0) {
    //   $stmt->close();
    //   $stmt = $conn->prepare($INSERT);

           
    //   $stmt->execute();
    //   echo "New employee inserted sucessfully";
    //  } else {
    //   echo "Someone is already registered already register using this id";
    //  }
    //  $stmt->close();
     $conn->close();
    }
}
} 
else {
 echo "All field are required";
 die();
}
header("location: ../home.html")
?> 