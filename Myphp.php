 <?php


    $conn = mysqli_connect("localhost",'root','','form');
    if (!$conn){ echo "connection failed"; }
    
    $myNumber = $_GET['myNumber'];

    $qry = "INSERT INTO `table`(myNumber) VALUES ('$myNumber')";

    $sendData  = mysqli_query($conn,$qry);

    if (!$sendData){
        echo "There were some problems while inserting data  (X_X)  ";
    }
    else{
        
        echo "DATA ",$myNumber, " have been inserted into DATABASE";
    }
?>
   

