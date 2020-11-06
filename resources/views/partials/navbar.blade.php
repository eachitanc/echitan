<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark info-color">
    <a class="navbar-brand" href="{{url('/')}}">Hotel La Rivera</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-5">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-hotel fa-lg amber-text pr-3"></i> Hotel </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                    <a class="dropdown-item" href="{{url('hotel/historia')}}">Historia</a>
                    <a class="dropdown-item" href="{{url('hotel/mision-vision')}}">Misión y Visión</a>
                    <a class="dropdown-item" href="{{url('hotel/ubicación')}}">Ubicación</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-clipboard-check fa-lg red-text pr-3"></i> Servicios </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                    <a class="dropdown-item" href="{{url('servicios/habitaciones')}}">Habitaciones</a>
                    <a class="dropdown-item" href="{{url('servicios/eventos')}}">Eventos</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('contactos')}}"> 
                    <i class="fas fa-phone-square-alt fa-lg green-text pr-3"></i>Contactos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('reservas')}}">
                    <i class="fas fa-calendar-alt fa-lg indigo-text pr-3"></i> Reservas
                </a>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->