<?php 
include "config.php";
include "nav.php";
 
if (isset($_POST['update'])) {
$firstname = $_POST['firstname'];
 $user_id = $_POST['user_id'];
 $lastname = $_POST['lastname'];
 $username = $_POST['username'];  //username
 $email = $_POST['email'];
 $mobile = $_POST['mobile']; //mobile
 $password = $_POST['password'];
 $gender = $_POST['gender']; 
 
 $sql = "UPDATE `users` SET
`firstname`='$firstname',`lastname`='$lastname',`username`='$username',`email`='$email',`mobile`='$mobile',`password`='$password',`gender`='$gender' WHERE `user_id`='$user_id'"; 
 $result = $conn->query($sql); 
 if ($result == TRUE) {
 echo "Record updated successfully.";
//  header('Location: view.php');
 }else{
 echo "Error:" . $sql . "<br>" . $conn->error;
 }
 } 
if (isset($_GET['id'])) {
 $user_id = $_GET['id']; 
 $sql = "SELECT * FROM `users` WHERE `user_id`='$user_id'";
 $result = $conn->query($sql); 
 if ($result->num_rows > 0) { 
 while ($row = $result->fetch_assoc()) {
 $first_name = $row['firstname'];
 $lastname = $row['lastname'];

 $username = $row['username']; //username

 $email = $row['email'];

 $mobile = $row['mobile']; //mob

 $password = $row['password'];
 $gender = $row['gender'];
 $id = $row['user_id'];

 } 
 ?>

 <Html>
    <head>

    
<style>
    <style>

$yellow:#f5ba1a;
$black:#000000;
$grey:#cccccc;


body {
font-family: Verdana, Geneva, sans-serif;
font-size: 14px;
background: #f2f2f2;
z-index: 1000;
}
.clearfix {
&:after {
    content: "";
    display: block;
    clear: both;
    visibility: hidden;
    height: 0;
}
}
.form_wrapper {
background: #fff;
width: 400px;
max-width: 100%;
box-sizing: border-box;
padding: 25px;
margin: 8% auto 0;
position: relative;
z-index: 1;
border-top: 5px solid $yellow;
-webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
-moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
-webkit-transform-origin: 50% 0%;
transform-origin: 50% 0%;
-webkit-transform: scale3d(1, 1, 1);
transform: scale3d(1, 1, 1);
-webkit-transition: none;
transition: none;
-webkit-animation: expand 0.8s 0.6s ease-out forwards;
animation: expand 0.8s 0.6s ease-out forwards;
opacity: 0;
h2 {
    font-size: 1.5em;
    line-height: 1.5em;
    margin: 0;
}
.title_container {
    text-align: center;
    padding-bottom: 15px;
}
h3 {
    font-size: 1.1em;
    font-weight: normal;
    line-height: 1.5em;
    margin: 0;
}
label {
    font-size: 12px;
}
.row {
    margin: 10px -15px;
    >div {
        padding: 0 15px;
        box-sizing: border-box;
    }
}
.col_half {
    width: 50%;
    float: left;
}
.input_field {
    position: relative;
    margin-bottom: 20px;
    -webkit-animation: bounce 0.6s ease-out;
       animation: bounce 0.6s ease-out;
    >span {
        position: absolute;
        left: 0;
        top: 0;
        color: #333;
        height: 100%;
        border-right: 1px solid $grey;
        text-align: center;
        width: 30px;
        >i {
            padding-top: 10px;
        }
    }
}
.textarea_field {
    >span {
        >i {
            padding-top: 10px;
        }
    }
}
input {
&[type="text"], &[type="email"], &[type="password"] {
  width: 100%;
  padding: 8px 10px 9px 35px;
  height: 35px;
  border: 1px solid $grey;
  box-sizing: border-box;
  outline: none;
  -webkit-transition: all 0.30s ease-in-out;
  -moz-transition: all 0.30s ease-in-out;
  -ms-transition: all 0.30s ease-in-out;
  transition: all 0.30s ease-in-out;
}
&[type="text"]:hover, &[type="email"]:hover, &[type="password"]:hover {
  background: #fafafa;
}
&[type="text"]:focus, &[type="email"]:focus, &[type="password"]:focus {
  -webkit-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
  -moz-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
  box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
  border: 1px solid $yellow;
  background: #fafafa;
}
&[type="submit"] {
    background: $yellow;
    height: 35px;
    line-height: 35px;
    width: 100%;
    border: none;
    outline: none;
    cursor: pointer;
    color: #fff;
    font-size: 1.1em;
    margin-bottom: 10px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    transition: all 0.30s ease-in-out;
    &:hover {
        background: darken($yellow,9%);
    }
    &:focus {
        background: darken($yellow,9%);
    }
}    
 /* &[type="radio"] {
    border: 0;
  
    height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px; */
} 
}
} 
.form_container {
.row {
    .col_half.last {
        border-left: 1px solid $grey;
    }
}
}

/* .radio_option {
label {
  margin-right: 1em;
&:before {
  content: "";
  display: inline-block;
  width: 0.5em;
  height: 0.5em;
  margin-right: 0.5em;
  border-radius: 100%;
  vertical-align: -3px;
  border: 2px solid $grey;
  padding: 0.15em;
  background-color: transparent;
  background-clip: content-box;
  transition: all 0.2s ease;
}
}
input {
&:hover + label:before {
  border-color: $black;
}
&:checked + label:before {
  background-color: $black;
  border-color: $black;
}
}
}
.select_option {
position: relative;
width: 100%;
select {
display: inline-block;
width: 100%;
height: 35px;
padding: 0px 15px;
cursor: pointer;
color: #7b7b7b;
border: 1px solid $grey;
border-radius: 0;
background: #fff;
appearance: none;
-webkit-appearance: none;
-moz-appearance: none;
transition: all 0.2s ease;
&::-ms-expand {
  display: none;
}
&:hover, &:focus {
  color: $black;
  background: #fafafa;
  border-color: $black;
  outline: none;
}
}
} 
.select_arrow {
position: absolute;
top: calc(50% - 4px);
right: 15px;
width: 0;
height: 0;
pointer-events: none;
border-width: 8px 5px 0 5px;
border-style: solid;
border-color: #7b7b7b transparent transparent transparent;
}

.select_option select {
&:hover + .select_arrow, &:focus + .select_arrow {
border-top-color: $black;
}
}
.credit {
position: relative;
z-index: 1;
text-align: center;
padding: 15px;
color: $yellow;
a {
    color: darken($yellow,7%);
}
}*/
@-webkit-keyframes check {
0% { height: 0; width: 0; }
25% { height: 0; width: 7px; }
50% { height: 20px; width: 7px; }
}

@keyframes check {
0% { height: 0; width: 0; }
25% { height: 0; width: 7px; }
50% { height: 20px; width: 7px; }
}

@-webkit-keyframes expand { 
0% { -webkit-transform: scale3d(1,0,1); opacity:0; }
25% { -webkit-transform: scale3d(1,1.2,1); }
50% { -webkit-transform: scale3d(1,0.85,1); }
75% { -webkit-transform: scale3d(1,1.05,1); }
100% { -webkit-transform: scale3d(1,1,1);  opacity:1; }
}

@keyframes expand { 
0% { -webkit-transform: scale3d(1,0,1); transform: scale3d(1,0,1);  opacity:0; }
25% { -webkit-transform: scale3d(1,1.2,1); transform: scale3d(1,1.2,1); }
50% { -webkit-transform: scale3d(1,0.85,1); transform: scale3d(1,0.85,1); }
75% { -webkit-transform: scale3d(1,1.05,1); transform: scale3d(1,1.05,1); }
100% { -webkit-transform: scale3d(1,1,1); transform: scale3d(1,1,1);  opacity:1; }
}


@-webkit-keyframes bounce { 
0% { -webkit-transform: translate3d(0,-25px,0); opacity:0; }
25% { -webkit-transform: translate3d(0,10px,0); }
50% { -webkit-transform: translate3d(0,-6px,0); }
75% { -webkit-transform: translate3d(0,2px,0); }
100% { -webkit-transform: translate3d(0,0,0); opacity: 1; }
}

@keyframes bounce { 
0% { -webkit-transform: translate3d(0,-25px,0); transform: translate3d(0,-25px,0); opacity:0; }
25% { -webkit-transform: translate3d(0,10px,0); transform: translate3d(0,10px,0); }
50% { -webkit-transform: translate3d(0,-6px,0); transform: translate3d(0,-6px,0); }
75% { -webkit-transform: translate3d(0,2px,0); transform: translate3d(0,2px,0); }
100% { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0); opacity: 1; }
}
@media (max-width: 600px) {
.form_wrapper {
    .col_half {
        width: 100%;
        float: none;
    }
}
.bottom_row {
    .col_half {
        width: 50%;
        float: left;
    }
}
.form_container {
    .row {
        .col_half.last {
            border-left: none;
        }
    }
}
.remember_me {
    padding-bottom: 20px;
}
}

.button{
background:blue;
font-weight: bold;
font-size:1.2rem;
}
label{
margin-left:2rem;
}

</style>
</head>
<body>


 <div class="form_wrapper">

<div class="form_container">
  <div class="title_container">
    <h2>Update Users</h2>
  </div>
  <div class="row clearfix">
    <div class="">
      <form method="POST">
        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
          <input type="email" name="email" value="<?php echo $email; ?>" />
        </div>
        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
          <input type="password" value="<?php echo $password; ?>" />
        </div>

        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
          <input type="text" name="username" value="<?php echo $username; ?>" />
        </div>
        
        <div class="row clearfix">
          <div class="col_half">
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
              <input type="text" name="firstname" value="<?php echo $first_name; ?>" />
              <input type="hidden" name="user_id" value="<?php echo $id; ?>">
            </div>
          </div>
          <div class="col_half">
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
              <input type="text"  name="lastname" value="<?php echo $lastname; ?>" />
            </div>
          </div>

        </div>
        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
          <input type="text" name="mobile" value="<?php echo $mobile; ?>"/>
        </div>

        <div class="input_field ">




            <input type="radio" name="gender" value="Male" id="rd1" <?php if($gender == 'Male'){ echo 
"checked";} ?> >

            <label for="rd1">Male</label> 
            <br>
              <br>
            <input type="radio" name="gender" value="Female" id="rd2" <?php if($gender == 'Female'){ 
echo "checked";} ?>>
            <label for="rd2">Female</label> 
            
           
            
            
            </div> 

        <input class="button" type="submit" value="Update" name="update" />
      </form>
    </div>
  </div>
</div>
</div>


 </body>
 </html> 
<?php
 } else{ 
 header('Location: view.php');
 } 
}
?>