<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9074ead361.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>upload</title>
</head>
<body>
  <header>
         <div class="mycontainer">
            <h1 class="mytittle">Upload Photo</h1>
         </div>
  </header>


         <div class="mycontainer">
             <form  class="myform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" enctype="multipart/form-data">

             <label for="photo"> select your photo</label>
             <input type="file" id="photo" name="photo">

             <label for="tittle">photo's tittle</label>
             <input type="text" id="tittle" name="tittle" >

             <label for="text"> Description</label>
             <textarea name="text" id="text" placeholder="put a description"></textarea>

             <?php if(isset($error)):?>
             <p><?php echo $error;?></p>
             <?php endif?>

             <input type="submit" class="submit" value="upload photo">

             </form>
             <a href="index.php" class="goback"><i class="fa fa-long-arrow-left"></i> Go Back</a>


         </div>


  <footer>
    <p class="copyright"> galery made by- Jorge Polanco</p>


  </footer>

</body>
</html>
