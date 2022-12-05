<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>

  <!-- Main style -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Axios -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.min.js' integrity='sha512-OdkysyYNjK4CZHgB+dkw9xQp66hZ9TLqmS2vXaBrftfyJeduVhyy1cOfoxiKdi4/bfgpco6REu6Rb+V2oVIRWg==' crossorigin='anonymous'></script>

  <!-- Vue Js -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <!-- Main js -->
  <script defer src="js/main.js"></script>

  <title>PHP Dischi JSON</title>

</head>
<body>

  <div id="app">

    <header class="d-flex align-items-center">
      <div class="container-lg">
        <img src="assets/img/logo.png" alt="logo">
      </div>
    </header>

    <main>
      <div class="container-lg py-5">

        <div class="row">

          <div class="col-4 d-flex justify-content-center mb-5" v-for="(disk, index) in disks" :key="index">

            <div class="card card-rc pt-3 border-0" style="width: 18rem;">
              <div class="px-5">
                <img :src="disk.poster" class="card-img-top rounded-0" :alt="disk.title">
              </div>
              <div class="card-body text-center text-white px-3">
                <h5 class="fs-5">{{disk.title}}</h5>
                <p class="mb-2 fs-6">{{disk.author}}</p>
                <h5 class="fs-5">{{disk.year}}</h5>
              </div>
            </div>
            
          </div>

        </div>
        
      </div>

    </main>

  </div>
  
</body>
</html>