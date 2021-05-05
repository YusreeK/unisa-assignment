<html>
 <head>
 <meta charset="UTF-8">
  <title>Competitions</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
              .bs-example{
    	margin: 20px;
    }
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }

    </style>

 </head>
 <body>
 <div class="bs-example">
    <table class="table table-bordered">
        <thead>
            <tr>
              
                <th>Competition</th>
                <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>Team A</td>
                <td>Edit  Delete</td>
            </tr>
            <tr>
                
                <td>Team B</td>
                <td>Edit  Delete</td> 
            </tr>
         
        </tbody>
    </table>
</div>

<?php
$servername = "localhost";
$username = "project";
$password = "wawasan";
$dbname = "Comp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Competition (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
teamname VARCHAR(30) NOT NULL,

reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 

 
<form method="POST" action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" accept-charset="UTF-8">
Add competition <input type="text" name="name">
  <br><br>
<input type="submit" name="submit" value="Submit"> 
</form>

 </body>

  

  </html>  