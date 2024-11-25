
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="index.php?vista=home">
    <img src="./img/logo.jpeg" alt="logo" width="100" height="50">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div id="navbarBasicExample" class="navbar-menu">
    <div id="navbarBasicExample" class="navbar-start">

    <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">Sesion</a>
          <div class="navbar-dropdown">
              <a href="index.php?vista=login" class="navbar-item" >Iniciar Sesion</a>
              <a href="index.php?vista=registrar_usuario" class="navbar-item ">Registrar</a>
              
          </div>
          </div>

        <a class="navbar-item" href="index.php?vista=clientes">
            Clientes
        </a>
        <a class="navbar-item" href="index.php?vista=usuarios">
            Usuarios
        </a>
        <a class="navbar-item" href="index.php?vista=servicios">
            Servicios
        </a>
        <a class="navbar-item" href="index.php?vista=equipos">
            Equipos
        </a>

    </div>
            
   
  </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary is-rounded">
            mi cuenta
          </a>
          <a class="button is-link is-rounded">
            Salir
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>