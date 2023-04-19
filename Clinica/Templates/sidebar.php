<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<a class="sidebar-brand d-flex align-items-center justify-content-center" href="Home.php">
    <div class="sidebar-brand-text mx-3">
        <img src="img/casaverde.png" class="mt-2" width="75" heigth="75">
    </div>
</a>

<hr class="sidebar-divider my-0">

<li class="nav-item">
    <a class="nav-link" href="index.html">
        <i class="fas fa-laptop-medical"></i>
        <span>Historial clinico</span>
    </a>
</li>

<hr class="sidebar-divider">

<div class="sidebar-heading">
    CRUD
</div>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-user"></i>
        <span>Pacientes</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Mantenimiento pacientes:</h6>
            <a class="collapse-item" href="buttons.html">Listado de pacientes</a>
            <a class="collapse-item" href="cards.html">Agregar paciente</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
        aria-expanded="true" aria-controls="collapseUsers">
        <i class="fas fa-users"></i>
        <span>Usuarios</span>
    </a>
    <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Mantenimiento usuarios:</h6>
            <a class="collapse-item" href="buttons.html">Listado de usuarios</a>
            <a class="collapse-item" href="cards.html">Agregar paciente</a>
        </div>
    </div>
</li>

<hr class="sidebar-divider">

<div class="sidebar-heading">
    Citas
</div>

<li class="nav-item">
    <a class="nav-link" href="SolicitudCitas.php">
        <i class="fas fa-calendar-plus"></i>
        <span>Solicitud de citas</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-calendar-alt"></i>
        <span>Calendario</span></a>
</li>

<hr class="sidebar-divider d-none d-md-block">

<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>