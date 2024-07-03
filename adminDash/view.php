<?php 
include "config.php";
include "nav.php"; 

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
 <title>View Page</title>

<style>
    body{
        margin-top:10rem;
        text-align: center;
  align-items: center;
    }

 table {
  text-align: center;
  align-items: center;
  margin: 0rem 8rem;
  
  width: 90%;
  align-items: center;
}

th, td {
  padding: 8px;
  text-align: center;
  align-items: center;
  border-bottom: 1px solid #DDD;
  font-size: 1.5rem;
}

tr:hover {
    cursor: pointer;
    background-color: #D6EEEE;
    }
.btnEdit{
    background:blue;
    padding:0.7rem 1.5rem;
    border-radius:5rem;
    margin-right:0.5rem;
    color:white;
}
.btnDelete{
    background:red;
    padding:0.7rem 1.5rem;
    border-radius:5rem;
    /* margin-right:0.5rem; */
    color:white;

}
a{
    text-decoration: none; 
}

@media screen and (max-width: 1250px) and (min-width: 800px) {
    table {
        font-size: 1rem;
    }
    th, td {
        font-size: 0.5rem;
        
    }
}

@media screen and (max-width: 800px) and (min-width: 600px) {
    table {
        font-size: 0.1rem;
    }
    th, td {
        font-size: 0.5rem;
        
    }
}

@media screen and (max-width: 600px) {
    table {
        font-size: 0.01rem;
    }
    th, td {
        font-size: 0.25rem;
    }

   
}

</style>
</head>
<body>
 <div class="container">
 <h1>Admin users</h1>
 <br><br>
 <div style="text-align: center;">
<table class="table" style="text-align: center;">
 <thead>
 <tr>
 
 <th>First Name</th>
 <th>Last Name</th>
 <th>Username</th>
 <th>Email</th>
 <th>Mobile</th>
 <th>Gender</th>
 <th>Action</th>
 </tr>
 </thead>
 <tbody> 
    <?php
    if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
        
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td><?php echo $row['gender']; ?></td>

        <td><a class="btnEdit" href="update.php?id=<?php echo $row['user_id']; 
        ?>">Edit</a>&nbsp;<a class="btnDelete" href="delete.php?id=<?php echo $row['user_id']; 
        ?>">Delete</a>
        </td>
    </tr> 
 <?php 
 }
 }
 ?> 
 </tbody>
</table>
</div>
</div> 


</body>
</html>
