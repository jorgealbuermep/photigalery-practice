<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9074ead361.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Galery</title>
</head>
<body>
  <header>
         <div class="mycontainer">
            <h1 class="mytittle"> my awsome  galery</h1>
         </div>
         <a href="upload.php"> upload photos</a>
  </header>

  <section class="photos">
                     <div class="mycontainer">
                       <?php foreach($photos as $photo):?>
                       <div class="thumb">
                          <a href="photo.php?id=<?php echo $photo['id'];?>">
                          <img src="destinyFolder/<?php echo $photo['image']?>" alt="">
                          </a>
                       </div>
                       <?php endforeach;?>


                        </div>
                        <div class="paginacion">
                        <?php if($current_page >1):?>
                         <a  class="left" href="index.php?p=<?php echo  $current_page -1;?>" ><i class="fa fa-long-arrow-left"></i> Back</a>
                        <?php endif?>
                        <?php if($total_pages != $current_page):?>
                          <a href="index.php?p=<?php echo $current_page+1?>" class="right">Next <i class="fa fa-long-arrow-right"></i></a>

<?php endif?>
                        </div>
                    </div>

  </section>
  <footer>
    <p class="copyright"> galery made by- Jorge Polanco</p>


  </footer>

 </body>
</html>
