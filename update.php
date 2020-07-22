<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="heading"> Update Record </h1>
    
    
    <form action="update.php" method="post">
    
    <table style="font-size: 20px;margin-top: 30px;margin-left: auto;margin-right: auto;font-family: sans-serif;" cellspacing = "8" >
        <tr>
			<td>Roll Number</td>
        	<td><input  type = "number" name = "SearchRoll" required size = "5"/></td>
        	
        </tr>
        
        <tr>
           <td>Select Attribute</td>
            <td>
                <select name="Attr" required >
                  <option value="Class">Class</option>
                  <option value="Pincode">Pincode</option>
                  <option value="RollNo">RollNo</option>
                  <option value="Physics">Physics</option>
                  <option value="Biology">Biology Marks</option>
                  <option value="Chemistry">Chemistry Marks</option>
                  <option value="Maths">Maths Marks</option>
                  <option value="Marathi">Marathi Marks</option>
                  <option value="English">English Marks</option>
                </select>
            </td>
            
        </tr>
        
        <tr>
            <td>New Value</td>
            <td> <input type="text" name="NewValue" required size="20" > </td>
            <td><input type="submit" style="font-size: 15px; border-radius: 7px; background-color: #e7e7e7;"></td>
        </tr>
        
    </table>
    
    
    <?php
    $host = 'localhost';
    $dbUsername='root';
    $dbPassword='';
    $dbname='school';
    $SearchRoll = filter_input(INPUT_POST, 'SearchRoll');
    $Attr = filter_input(INPUT_POST, 'Attr');
    $NewValue = filter_input(INPUT_POST, 'NewValue');
    
    $conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname); 
    
    if($conn ==false){ 
    echo "Error in connection",mysqli_connect_error() ; 
    }
  
    $query="SELECT * FROM student_info where RollNo=$SearchRoll ;";
    
    $result=mysqli_query($conn,$query);  
    
    $rows=mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0){
    
        $sql="UPDATE student_info SET $Attr='$NewValue' WHERE RollNo=$SearchRoll;";
        mysqli_query($conn,$sql);
        $update="$Attr of Roll Number $SearchRoll updated to $NewValue successfully";
    }
    
    else{
        $update="Could'nt update, Please check the entered values";
    }
        
        
    ?>
    
     <table style="font-size: 20px;margin-top: 30px;margin-left: auto;margin-right: auto;font-family: sans-serif;">
        <tr>
            <td><?php echo $update; ?></td>
        </tr>
    </table>
    
    
    <table style="font-size: 20px;margin-top: 30px;margin-left: auto;margin-right: auto;font-family: sans-serif;">
        <tr>
            <td><button style="font-size: 20px; border-radius: 7px; background-color: #e7e7e7;" onclick = "window.location.href='homepage.html'" >Home-Page</button></td>
            
        </tr>
    </table>
    
    </form>
</body>
</html>