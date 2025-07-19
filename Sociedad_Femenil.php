<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/libro.png">
    <title>Himnario Presbiteriano </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">
        <?php
        include 'src/header.php';
        ?>
        <div class="main-content">
            <div class="sticky-nav">
                <div class="nav-icons">
                    <img src="images/backward_icon.png">
                    <img src="images/forward_icon.png" class="hide">    
                </div>
               
           </div>
           <?php
             include 'public/Sociedad_Fem.php';
            ?>
            
            <div class="footer">
                <div class="line"></div>
            </div>
        </div>
    </div>
        <?php
        include 'src/flooter.php';
        ?>
<script src="./components/script.js"></script>
</body>
</html>