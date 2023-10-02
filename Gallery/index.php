<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../Assets/Icons/White-1024.png" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/x-icon" href="../Assets/Icons/Black-1024.png" media="(prefers-color-scheme: light)">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../Assets/style.css">
    <title>XYZ</title>
</head>
<body>
    <div class="nav-list mobile" id="nav-list-mobile">
        <a href="../#"><div class="nav-items active" id="nav-items">Home</div></a>
        <a href="../#about-us"><div class="nav-items" id="nav-items">About Us</div></a>
        <a href="#"><div class="nav-items" id="nav-items">Gallery</div></a>
        <a href="../Events/"><div class="nav-items" id="nav-items">Events</div></a>
        <a href=""><div class="nav-items" id="nav-items">Contact Us</div></a>
    </div>
    <nav class="navbar" id="navbar">
        <a class="nav-brand" id="nav-brand" href="../">
            <div class="brand-logo" id="brand-logo">
                <img src="../Assets/Icons/White-1024.png" alt="XYZ-Logo">
            </div>
            <div class="brand-name" id="brand-name">
                XYZ
            </div>
        </a>
        <a class="material-icons nav-icon mobile" id="nav-icon" onclick="navbarExpand()">
            menu
        </a>
        <div class="nav-list mobile-not" id="nav-list">
            <a href="../#"><div class="nav-items active" id="nav-items">Home</div></a>
            <a href="../#about-us"><div class="nav-items" id="nav-items">About Us</div></a>
            <a href="#"><div class="nav-items" id="nav-items">Gallery</div></a>
            <a href="../Events/"><div class="nav-items" id="nav-items">Events</div></a>
            <a href=""><div class="nav-items" id="nav-items">Contact Us</div></a>
        </div>
    </nav>
    <span style="display: none;" id="down-button"></span> <!-- To avoid js error -->
    <div class="background" id="background"></div>
    <div class="gallery" id="gallery">
    <?php
    $dir = "../Assets/Gallery-Images/";
    if (is_dir($dir)){
      if ($dh = opendir($dir)){
        $i=0;
        while (($file = readdir($dh)) !== false){
          if (preg_match("/\.(jpg|jpeg|png|gif)$/", $file)){
            $name = pathinfo($file,PATHINFO_FILENAME);
            echo "<div class='animate-in' caption='$name'><img src='$dir$file' alt='$file'></div>";
            $i+=1;
          }
        }
        closedir($dh);
      }
    }
    ?>    
    </div>
    <footer class="footer" id="footer">
        <div>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-threads"></i></a>
            <a href=""><i class="bi bi-youtube"></i></a>
            <a href=""><i class="bi bi-discord"></i></a>
        </div>
        <p>
            EULA goes here. Website by <a href="http://anshumangarg.com">Anshuman Garg</a>
        </p>
    </footer>
    <script src="../Assets/script.js"></script>    
</body>
</html>