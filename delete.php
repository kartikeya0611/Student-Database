<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
   <h1 class="heading"> Delete a record </h1>
    
    
    <form action="delete.php" method="post">
    
    <table style="font-size: 20px;margin-top: 30px;margin-left: auto;margin-right: auto;font-family: sans-serif;" >
        <tr>
			<td>Roll Number</td>
        	<td><input  type = "number" name = "SearchRoll" required size = "5"/></td>
        	<td><input type="submit" style="font-size: 15px; border-radius: 7px; background-color: #e7e7e7;" value="Delete Record"></td>
        </tr>
    </table>
    
    
    </form>
   
<?php
    $host = 'localhost';
    $dbUsername='root';
    $dbPassword='';
    $dbname='school';
    $SearchRoll = filter_input(INPUT_POST, 'SearchRoll');
    
    $conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname); 
    
    if($conn ==false){ 
    echo "Error in connection",mysqli_connect_error() ; 
    }
    
    $query="SELECT * FROM student_info where RollNo=$SearchRoll ;";
    
    $result=mysqli_query($conn,$query);  
    
    $rows=mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0){
    
        $sql="DELETE FROM student_info WHERE RollNo=$SearchRoll;";
        mysqli_query($conn,$sql);
        $delete="Data of Roll Number $SearchRoll deleted Successfully!";
    }
    
    else{
        $delete="Could'nt Delete, Please enter a valid Roll Number";
    }
    
    mysqli_close($conn);
    ?>
    
    <table style="font-size: 20px;margin-top: 30px;margin-left: auto;margin-right: auto;font-family: sans-serif;">
        <tr>
            <td><?php echo $delete; ?></td>
        </tr>
    </table>
    
   <table style="font-size: 20px;margin-top: 30px;margin-left: auto;margin-right: auto;font-family: sans-serif;">
        <tr>
            <td><button style="font-size: 20px; border-radius: 7px; background-color: #e7e7e7;" onclick = "window.location.href='homepage.html'" >Home-Page</button></td>
            
        </tr>
    </table> 
    
    
</body>
</html>