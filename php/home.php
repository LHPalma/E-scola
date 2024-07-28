<!DOCTYPE html>
<html lang="Pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <!-- css customizado -->
  <link rel="stylesheet" href="../css/style.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <!-- Início cabeçalho -->
  <header class="header">

    <section class="flex">

      <a href="home.php" class="logo">E-scola</a>

      <!-- .search-form --------------------------------------------->
      <form action="" method="post" class="search-form">
        <input type="text" class="search_box" placeholder="procurar cursos..." required maxlength="100">

        <button type="submit" class="fas fa-search" name="search_box"></button>
      </form>
      <!-- /.search-form --------------------------------------------->

      <!-- Icones --------------------------------------------->
      <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <div id="user-btn" class="fas fa-user"></div>
        <div id="toggle-btn" class="fas fa-sun"></div>
      </div>
      <!-- Icones --------------------------------------------->

      <!-- Perfil ----------------------------------------------------->
      <div class="profile">
        <img src="../images/pic-1.jpg" alt="">
        <h3>nome</h3>
        <span>cargo: estudante</span>
        <a href="profile.php" class="btn">Abrir perfil</a>
        <div class="flex-btn">
          <a href="login.php" class="option-btn">Login</a>
          <a href="register.php" class="option-btn">Registrar</a>
        </div>
      </div>
      <!-- /Perfil ---------------------------------------------------->

    </section> <!-- /.flex -->
  </header>
  <!-- /Fim cabeçalho  -->


  <!-- Início Barra lateral (sidebar) -->
  <div class="side-bar">

  <div class="close-side-bar">
    <i class="fas fa-times"></i>
  </div>


    <!-- Perfil Sidebar----------------------------------------------------->
    <div class="profile">
      <img src="../images/pic-1.jpg" alt="">
      <h3>nome</h3>
      <span>cargo: estudante</span>
      <a href="profile.php" class="btn">Abrir perfil</a>
    </div>
    <!-- /Perfil Sidebar ---------------------------------------------------->

    <!-- navbar ---------------------------------------------------->
    <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>sobre nós</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>cursos</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>professores</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>contato</span></a>
    </nav>
    <!-- /navbar ---------------------------------------------------->

  </div>
  <!-- /Fim Barra lateral (sidebar) -->




  <!-- Ínicio rodapé -->

  <footer class="footer">

    &copy copyright @ 2024 feito por <span>Mr. Web Designer</span> e reproduzido por <span>Luiz Palma</span>

  </footer>


  <!-- /Fim rodapé -->





  <!-- arquivo js customizado -->
  <script src="../js/script.js"></script>
</body>

</html>