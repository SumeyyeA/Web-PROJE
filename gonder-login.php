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
</head>
<body>

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
    
    <h2 style="font-family: 'Roboto', sans-serif;"></h2>
  </div>

</div>

</div>
     <section>
         
         
         <main><div class="container">
			
			<?php 

				include("kullanici.php");


				if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
			
			       echo("HOŞGELDİNİZ G201210063");
			
				}
			
				else 
				{
			            echo "Kullancı Adı veya Şifre Yanlış.<br>";
			            echo "!TEKRAR DENEYİN!";
			            header("Refresh: 3; url=login.php");
			    }
			
			?>
			
		</div>
    </main>
     </section>     
      <footer>Tüm Hakları Saklıdır &copy;| 2020</footer>

    </div> 

<!-- BOOTSTRAP -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>