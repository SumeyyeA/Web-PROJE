<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
</head>
<body >

  <nav class="navbar navbar-expand-md fixed-top 
	navbar-dark bg-dark ">
		<div class="container-fluid ">	
			<a href="index.html" class="navbar-brand text-white">Sümeyye Almas | </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto ">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Hakkımda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sehrimiz.html">Şehrimiz</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ilgialanlari.php">İlgi Alanları</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="iletisim.html">İletişim</a> 
                  </li>
                  <li class="nav-item">
                    <a href="login.php" class="nav-link active  text-white">
                        <i  class="fas fa-user"></i>
                        </a></li>
                        	      
                </ul>
                </div></div></nav>
                <br><br>
                <div style="background-color: #212529;" class=" text-light jumbotron">

                  <div style="background-color: #212529;;" class="container">
            
                    <div class="col-md-6 px-0">
                      
                      <h2 style="font-family: 'Roboto', sans-serif;">İlgi Alanlarım</h2>
                    </div>
            
                  </div>
            
                </div>
     <section  >
         <main style="width: 80% ;">
             <br><br>
             <p >Çocukluğumdan beri çizgi roman okumayı, animasyonlarını ve filmlerini izlemekten hep keyif aldım. Bunlardan bazıları:</p>
             <br><br><br><br><h5>Comics</h5><br><br>
         <div class="row">
        <?php
        include_once 'apiMarvel.php';
        $api = new apiMarvel();
        $connect = $api->connect('http://gateway.marvel.com/v1/public/comics');
        //var_dump($connect);
        $datas = json_decode($connect);
        //var_dump($datas);
        foreach ($datas->data->results as $data)
        {
            if ($data->title!='' )
            {
?>
                <div class="col-sm-3">
                    <div class="card" style="border: 1px solid #c6c6c6;">
                        <div class="card-header"><?= $data->title ?></div>
                        <div class="card-body">
                            <?php
                            foreach ($data->images as $image)
                            {
                            ?>
                            <img src="<?= $image->path.'.'.$image->extension ?>" class="img-fluid" />
                                <?php
                                foreach ($data->textObjects as $textObject)
                                {
                                    ?>
                                    <p><?=$textObject->text  ?></p>
                            <?php
                            }
                            ?>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
             <?php
            }
        }
        ?>
             </div>
        </main>
     </section>     
    </div> 
<footer>Tüm Hakları Saklıdır &copy;| 2020</footer>
<!-- BOOTSTRAP -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>