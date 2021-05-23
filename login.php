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
  
     <section>
         
         
         <main>
             <div class="container">
			
             <header style="background-color: #8D9CF4;"> 
          <div id="centered"></div>
          <div id="log-centered">Giriş Yap</div>
    </header> 
     <section style="background-color: #8D9CF4;" class="log-section">
                 
         <main  class="log-main">
          <h2 class="log-h2" style="text-align: center;">Eposta ve şifrenle giriş yap</h2><br>
             <div class="log-container">
			
			<form class="log-form" action="gonder-login.php" method="POST">
				<div class="log-form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" placeholder="Email 'G201210063@sakarya.edu.tr'" required="required">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Şifre 'G201210063'" required="required">
				</div>
				<button class="btn btn-success" type="submit">Giriş yap</button>
				<br><br><br>
                <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color: #8D9CF4;">
    
    <span class="psw">Forgot <a href="iletisim.html">password?</a></span>
  </div>
			</form>
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