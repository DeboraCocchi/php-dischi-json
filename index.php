<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <link rel="stylesheet" href="./css/style.css">
  <title>Php-Dischi</title>
</head>
<body>
  <div id="app" class="dc-cont">
    <div class="container-fluid">
      <div class="row flex-wrap position-relative">
        <h1 class="mt-3">Choose an Album</h1>
            <div class="col-4 text-center dc-card" 
              v-for="(disk, index) in disks"
              :key="index">
              <div class="dc-card-content" @click.stop="hasBeenClicked(index)">
              <div class="img-dc-cont">
              <img :src="disk.poster" :alt="disk.title">
              </div>
              <h4>{{disk.title}}</h4>
              <h6>{{disk.author}}</h6>

              <div class="dc-details position-absolute" v-show="isClicked">
              <div class="dc-card-details">
              <i class="fa-solid fa-xmark" @click.stop="closeDetails()"></i>
                <img :src="details.poster" alt="details.title">
                <h4>{{details.title}}</h4>
                <h3>{{details.author}}</h3>
                <h5>{{details.year}}</h5>
                <h6>{{details.genre}}</h6>
              </div>
            </div>
            </div>
            
      </div>       
      </div>
    </div>
  </div>
</body>
<script src="main.js"></script>
</html>