<?php
    // evitando erro - Document Expired
    ini_set('session.cache_limiter','public');
    session_cache_limiter(false);
?>

<a href="system_visit.php" class="logo">
    <!-- logo for regular state and mobile devices -->
    <span class="logo-mini">SAFS</span>
    <span class="logo-lg">SAFSB</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"></span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Visitante<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="destroi_sessao.php"> Sair </a></li> 
                </ul>
            </li>
        </ul>
    </div>
</nav>
