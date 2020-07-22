<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      
    <div class="heading" >
        <h1>Insert Student Data</h1>
    </div>
    
    <br>
    
    <div class="heading">
        <h2>Personal Details</h2>
    </div>
    
    
    <div class="form">
        <form action="insert_academic.php" method="post">
            
            <table  class="table" cellspacing="5" cellpadding="5">
                
                <tr>
					<td>Name</td>
					<td><input  type = "text" name = "Name" placeholder="(Name)    (Surname)" required size = "50" pattern="[A-Za-z].{2,}" /></td>
				</tr>
				
				<tr>
					<td>Roll No.</td>
					<td><input type = "number" name = "RollNo" placeholder="Ex-503 " required size = "5" min="101" max="999"/></td>
					
				</tr>
               
               <tr>
					<td>Class</td>
					<td><input type = "number" name = "Class" placeholder="1 to 10" required size = "5" min="1" max="10"/></td>
				</tr>
                
                <tr>
					<td>Address</td>
					<td><input type = "text" name = "Address" placeholder="Permanent Address" required size = "50"/></td>
				</tr>
				
				
				<tr>
					<td>Pincode</td>
					<td><input type = "number" name = "Pincode" placeholder="Ex - 445001" min="111111" max="999999" required size = "5"/></td>
				</tr>
                
                <tr>
					<td></td>
					<td><input type = "Submit" value="Next" ></td>
				</tr>
                 
            </table>
            
        </form>
        
        <table style="font-size: 20px;margin-top: 30px;margin-left: auto;margin-right: auto;font-family: sans-serif;">
        <tr>
            <td><button style="font-size: 20px; border-radius: 7px; background-color: #e7e7e7;" onclick = "window.location.href='homepage.html'" >Home-Page</button></td>
            
        </tr>
    </table>
        
    </div>
    
    

    

    
</body>
</html>