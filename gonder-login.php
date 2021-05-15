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
    <!--  
     <div id="social">
         <font>Sumeyye Almas |<span>jdnvn</span></font>

         
        <i class="fas fa-search"></i>
        <i class="far fa-user"></i> </div> -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Sümeyye Almas | </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Hakkımda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sehrimiz.html">Şehrimiz</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">Mirasımız</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">Ilgi Alanları</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="iletisim.html">Iletişim</a> 
                  </li>
                  
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Log in</button>
                  </form>
                </div></div></nav>
    <div id="container">
     <header>
        <img id= "headerResim" src="img/1.jpg" alt=""> 
          <div id="centered">Sümeyye Almas</div>
    </header> 
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
			            header("Refresh: 1; url=login.php");
			    }
			
			?>
			
		</div>
    </main>
     </section>     
      <footer>Tüm Hakları Saklıdır &copy;| 2020</footer>

    </div> 


</body>
</html>