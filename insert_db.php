<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
   <h1 class="heading"> Insert Student Data </h1>

<?php

$Name = filter_input(INPUT_POST, 'Name');
$RollNo = filter_input(INPUT_POST, 'RollNo');
$Class = filter_input(INPUT_POST, 'Class');
$Address = filter_input(INPUT_POST, 'Address');
$Pincode = filter_input(INPUT_POST, 'Pincode');
$Physics = filter_input(INPUT_POST, 'Physics');
$Biology = filter_input(INPUT_POST, 'Biology');
$Chemistry = filter_input(INPUT_POST, 'Chemistry');
$Maths = filter_input(INPUT_POST, 'Maths');
$Marathi = filter_input(INPUT_POST, 'Marathi');
$English = filter_input(INPUT_POST, 'English');
$Total=$Physics+$Biology+$Chemistry+$Maths+$Marathi+$English;
$Percentage=$Total*100/600;



if(!empty($Name) || !empty($RollNo) || !empty($Class) || !empty($Address) || !empty($Pincode) || !empty($Physics) || !empty($Biology) || !empty($Chemistry) || !empty($Maths) || !empty($Marathi) || !empty($English) ||!empty($Total) ||!empty(Percentage)){
    $host = 'localhost';
    $dbUsername='root';
    $dbPassword='';
    $dbname='school';
    
    $conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
    
    $query="SELECT * FROM student_info where RollNo=$RollNo ;";
    
    $result=mysqli_query($conn,$query);  
    
    $rows=mysqli_fetch_assoc($result);
    
    if(mysqli_connect_error()){
        die("Connect Error (".mysqli_connect_errno().')'. mysqli_connect_error());
        $err="Error Please check the connection";
        
    }
    
    elseif(mysqli_num_rows($result) == 1){
    
            $err="Roll Number Already exsits";
        }
    
    
    else{
        $sql = "INSERT INTO student_info (Name,RollNo,Class,Address,Pincode,Physics,Biology,Chemistry,Maths,Marathi,English,Total,Percentage) values ('$Name','$RollNo','$Class','$Address','$Pincode','$Physics','$Biology','$Chemistry','$Maths','$Marathi','$English','$Total','$Percentage')";
        
        if($conn->query($sql)){
            $err="The record was successfully added to the database";
           
        }
        else{
            $err="Connection Error"; 
        }
        
    }
}

?>    

    <table style="font-size: 20px;margin-top: 30px;margin-left: auto;margin-right: auto;font-family: sans-serif;">
        <tr>
            <td><?php echo $err; ?></td>
        </tr>
    </table>

    
   <table style="font-size: 20px;margin-top: 30px;margin-left: auto;margin-right: auto;font-family: sans-serif;">
        <tr>
           
           <td><button style="font-size: 20px; border-radius: 7px; background-color: #e7e7e7;" onclick = "window.location.href='insert_personal.php'" >Add New Student</button></td>
          </tr>
           <tr> 
            <td><button style="font-size: 20px; border-radius: 7px; background-color: #e7e7e7;" onclick = "window.location.href='homepage.html'" >Home-Page</button></td>
            
        </tr>
    </table> 

</body>
</html>