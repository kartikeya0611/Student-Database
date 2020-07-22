<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    <div class="heading" >
        <h1>SInsert Student Data</h1>
    </div>
    
    <br>
    
    <div class="heading">
        <h2>Academic Details</h2>
    </div>
    
    <br>
    
    <div class="form">
        <form action="insert_db.php" method="post">
            
            <table class="table" style="margin-left:120px;" cellspacing="5" cellpadding="5">
               
               <input type="hidden" name="Name" value="<?php echo $_POST['Name']; ?>">
               <input type="hidden" name="RollNo" value="<?php echo $_POST['RollNo']; ?>">
               <input type="hidden" name="Class" value="<?php echo $_POST['Class']; ?>">
               <input type="hidden" name="Address" value="<?php echo $_POST['Address']; ?>">
               <input type="hidden" name="Pincode" value="<?php echo $_POST['Pincode']; ?>">
                
                <tr>
					<td>Physics</td>
					<td><input  type = "number" name = "Physics" required min="0" max="100" /> / 100</td>
				</tr>
				
				<tr>
					<td>Biology</td>
					<td><input type = "number" name = "Biology" required min="0" max="100" /> / 100</td>
				</tr>
               
               <tr>
					<td>Chemistry</td>
					<td><input type = "number" name = "Chemistry" required min="0" max="100"/> / 100</td>
				</tr>
                
                <tr>
					<td>Maths</td>
					<td><input type = "number" name = "Maths" required min="0" max="100"/> / 100</td>
				</tr>
				
				
				<tr>
					<td>Marathi</td>
					<td><input type = "number" name = "Marathi" required min="0" max="100" /> / 100</td>
				</tr>
				
				<tr>
					<td>English</td>
					<td><input type = "number" name = "English" required min="0" max="100" /> / 100</td>
				</tr>
               
                <tr>
					<td><button onclick = "window.location.href='insert_personal.php'" >Back</button></td>
					<td><input type = "Submit" name="Submit1"></td>
				</tr>
                 
            </table>
            
        </form>
        
        <table style="font-size: 20px;margin-top: 30px;margin-left:210px;font-family: sans-serif;">
        <tr>
            <td><button style="font-size: 20px; border-radius: 7px; background-color: #e7e7e7;" onclick = "window.location.href='homepage.html'" >Home-Page</button></td>
            
        </tr>
    </table>
        
    </div>
   