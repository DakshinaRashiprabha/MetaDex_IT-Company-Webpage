<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <style>
     /* Default styles */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 2rem;
    background-color: gray;
    color: white;
    z-index: 1000;
}

.logo {
    font-size: 1.5rem;
    text-decoration: none;
    color: white;
}

.menu-toggle {
    display: none; 
    cursor: pointer;
    justify-content: left;
    align-items: left;
    order:1;
    z-index: 1000;
}

.bar {
    width: 25px;
    height: 3px;
    background-color: white;
    margin: 4px 0;
}

.navbar {
    display: flex;
    justify-content: left;
    align-items: left;
}

.navbar ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: row;
}

.navbar ul li {
    margin: 0 1rem;
}

.navbar ul li a {
    text-decoration: none;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 5px;
}

/* Responsive design */
@media screen and (max-width: 800px) {
    .menu-toggle {
        display: block; 
        z-index: 1000;
    }

    .navbar {
        flex-direction: column;
        position: absolute;
        top: 50px; 
        left: 0;
        width: 50%;
        background-color:  purle-white;
        text-align: left;
        display: none; 
    }

    .navbar.active {
        display: flex; 
    }

    .navbar ul {
        flex-direction: column;
    }

    .navbar ul li {
        margin: 1rem 0;
    }

    .navbar ul li a {
        padding: 0.5rem 1rem;
    }
}
 
    

    </style>
</head>
<body>
    <!-- navbar starts -->
<header>
        <a href="/" class="logo"> 
          MetaDex</a>
       
    <div id="menu-toggle" class="menu-toggle">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
            <li><a class="" href="view.php">View user</a></li>
            <li><a href="create.php">Add User</a></li>
          
    
            <li><a href="../index.html" class="admin">Logout</a></li>
          
       
            </ul>
        </nav>
</header>
<!-- navbar ends -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.getElementById("menu-toggle");
    const navbar = document.querySelector(".navbar");

    menuToggle.addEventListener("click", function() {
        navbar.classList.toggle("active");
    });
});

</script>
</body>
</html>