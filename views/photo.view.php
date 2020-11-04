<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9074ead361.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Photo</title>
</head>
<body>
  <header>
         <div class="mycontainer">
            <h1 class="mytittle"> photo:<?php if(!empty($photo['tittle'])){
               echo $photo['tittle'];
            }else{
                echo $photo['image'];
            }
            ?></h1>
         </div>
  </header>


         <div class="mycontainer">
             <div class="photo">
                 <img src="destinyFolder/<?php echo $photo['image'];?>" alt="">
                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                 <a href="index.php" class="goback"><i class="fa fa-long-arrow-left"></i> Go Back</a>
             </div>

         </div>


  <footer>
    <p class="copyright"> galery made by- Jorge Polanco</p>


  </footer>

</body>
</html>
