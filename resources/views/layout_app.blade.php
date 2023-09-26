<!DOCTYPE html>
<html>
<head>
    <title>FAYOL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style type="text/css">
        /* @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600); */
        
        body{
            /* margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left; */
            background-color: #f5f8fa;
            font-family: Arial, Helvetica, sans-serif;
        }




/* Estilos para el menú lateral */
.menu {
            width: 250px;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #C20E1A;
            color: #fff;
            padding: 20px;
        }

        .menu ul {
            list-style: none;
            padding: 0;
        }

        .menu ul li {
            margin-bottom: 10px;
            display: flex;
            /* Para alinear elementos en fila */
            align-items: center;
            /* Para centrar verticalmente */
        }

        .menu ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            display: flex;
            /* Para alinear elementos en fila */
            align-items: center;
            /* Para centrar verticalmente */
        }

        .menu ul li svg {
            width: 50px;
            /* Tamaño fijo para los iconos */
            height: 20px;
            margin-right: 10px;
            /* Espacio entre icono y texto */
        }

        /* Estilos para el contenido principal */
        .contenido {
            margin-left: 270px;
            /* Deja espacio para el menú lateral */
            padding: 20px;
        }


        /* main{
            padding: 20px;
        } */
        
        /* .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        } */
        
        
    </style>
</head>
<body>
    <div class="menu">
        <ul>
            <li class="d-flex align-items-center">
                <div class="row">
                    <div class="col-6">

                <a href="#"><img src="{{ asset('img/media/logo-univalle.png') }}" alt="" width="60%"></a>
            </div>

                    <div class="col-6">
                        <span class="text-white font-weight-bold">FAYOL</span><br>
                        <span class="text-white font-weight-bold">App de Gestión Interna</span><br>
                        <span class="text-white font-weight-normal small">Facultad de Ciencias de la Administración</span>
                    </div>
                </div>
            </li>
            
            <div style="width: 100%; height: 0px; left: 0px; top: 119px; border: 1px rgba(255, 255, 255, 0.35) solid">
            </div>
            <li>
                <a href="#"><svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4_74)">
                            <path
                                d="M24.8889 3.55554H39.111V49.7776H24.8889V3.55554ZM17.7778 17.7777H3.55557V49.7776H17.7778V17.7777ZM64 56.889H0V60.8H64V56.889ZM60.4443 24.8889H46.2223V49.7776H60.4443V24.8889Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_4_74">
                                <rect width="64" height="64" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    </span>Dashboard
                </a>
            </li>
            <div style="width: 100%; height: 0px; left: 0px; top: 119px; border: 1px rgba(255, 255, 255, 0.35) solid">
            </div>
    
            <li>
                <a href="#"><svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4_36)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14 18.6667C14 10.9347 20.268 4.66669 28 4.66669C35.732 4.66669 42 10.9347 42 18.6667C42 26.3987 35.732 32.6667 28 32.6667C20.268 32.6667 14 26.3987 14 18.6667Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12.6722 39.4392C16.4637 37.8497 21.521 37.3334 28 37.3334C34.4657 37.3334 39.5152 37.8476 43.3034 39.4289C47.3695 41.1262 49.8652 44.0097 51.1957 48.2037C51.6899 49.7623 50.5209 51.3334 48.9048 51.3334H7.0807C5.47124 51.3334 4.30917 49.7693 4.79943 48.2193C6.12585 44.0256 8.61277 41.1409 12.6722 39.4392Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_4_36">
                                <rect width="56" height="56" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    Usuarios
                </a>
            </li>
            <div style="width: 100%; height: 0px; left: 0px; top: 119px; border: 1px rgba(255, 255, 255, 0.35) solid">
            </div>
            <li>
                <a href="#"><svg width="53" height="53" viewBox="0 0 53 53" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4_44)">
                            <path
                                d="M52.8243 3.52716V24.6939C52.8243 25.2966 52.3369 25.7859 51.7323 25.7859H22.9426C22.3399 25.7859 21.8506 25.2966 21.8506 24.6939V23.022L24.0346 21.5578V23.6019H50.6385V4.61724H24.0327V12.6067C23.9363 12.6804 23.8324 12.7446 23.7417 12.8278L23.4357 13.0394C23.0673 12.0759 22.5062 11.3164 21.8506 10.6929V3.52716C21.8506 2.9245 22.3418 2.4352 22.9426 2.4352H51.7323C52.3369 2.4352 52.8243 2.92261 52.8243 3.52716ZM27.046 17.8738L28.3533 16.9973H28.3514C28.3533 16.9897 28.3571 16.9897 28.3609 16.984C29.0259 16.3247 29.1279 15.3442 28.716 14.5715L39.2937 7.39438L38.8139 6.68593L28.1474 13.9216C27.813 13.6798 27.4389 13.5268 27.046 13.5135C26.4868 13.4947 25.9181 13.6836 25.4911 14.1124C25.4911 14.1124 25.4817 14.1238 25.4779 14.1238L25.2172 14.3051L22.8481 15.9223V15.2346C22.4079 10.0034 16.3455 10.0808 16.3455 10.0808H13.7195L11.5128 13.7119L9.29491 10.0827H6.77659C-0.0642517 10.2112 0.177568 15.2346 0.177568 15.2346V26.9591H0.181346C0.183236 26.9893 0.177568 27.0252 0.177568 27.0498C0.177568 28.1663 1.07872 29.0637 2.19147 29.0637C3.30044 29.0637 4.20159 28.1625 4.20159 27.0498C4.20159 27.0252 4.20159 26.9893 4.19781 26.9591H4.20159V16.115H5.45981L5.4447 50.2776C5.4447 51.7796 6.66513 53 8.16138 53C9.66331 53 10.88 51.7796 10.88 50.2776V28.2305H12.0909V50.3022L12.1136 50.3268C12.1325 51.8022 13.3341 53 14.819 53C16.3096 53 17.5224 51.7852 17.5224 50.2946L17.5149 16.0583H18.8241V19.6251C18.8241 19.6289 18.8241 19.6384 18.8241 19.6422C18.8241 20.7511 19.7253 21.6542 20.8323 21.6542C21.1592 21.6542 21.452 21.5616 21.7297 21.418L21.7392 21.4312L25.2153 19.0999L27.046 17.8738ZM11.4732 9.20803C14.0161 9.20803 16.0772 7.14689 16.0772 4.60401C16.0772 2.06113 14.0161 0 11.4732 0C8.93029 0 6.86916 2.06302 6.86916 4.60401C6.86916 7.14501 8.93029 9.20803 11.4732 9.20803Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_4_44">
                                <rect width="53" height="53" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    Salas Informática
                </a>
            </li>
            <div style="width: 100%; height: 0px; left: 0px; top: 119px; border: 1px rgba(255, 255, 255, 0.35) solid">
            </div>
            <li>
                <a href="#"><svg width="97" height="85" viewBox="0 0 97 85" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M30.0914 11.7172H71.5554C73.8429 11.7172 75.7156 13.521 75.7156 15.8085V42.296C75.7156 44.5835 73.8429 46.5249 71.5554 46.5249H55.4007V53.3897H67.1889C68.9217 53.3897 69.0615 59.0764 69.2701 59.2827H32.4521C32.4521 59.2827 32.4521 53.3897 34.5333 53.3897H46.3216V46.5249H30.0958C27.8083 46.5249 26.0045 44.5835 26.0045 42.296V15.8085C26.0045 13.521 27.8083 11.7172 30.0958 11.7172H30.0914ZM30.0914 42.296H71.5554V15.8085H30.0914V42.296Z"
                            fill="white" />
                        <g clip-path="url(#clip0_0_1)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12.75 51C12.75 43.9584 18.4584 38.25 25.5 38.25C32.5416 38.25 38.25 43.9584 38.25 51C38.25 58.0416 32.5416 63.75 25.5 63.75C18.4584 63.75 12.75 58.0416 12.75 51Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.5407 69.9178C14.9937 68.4703 19.5995 68 25.5 68C31.3884 68 35.9871 68.4683 39.437 69.9085C43.14 71.4542 45.4129 74.0803 46.6246 77.8997C47.0747 79.3192 46.0101 80.75 44.5383 80.75H6.4485C4.98273 80.75 3.92442 79.3256 4.3709 77.914C5.5789 74.0947 7.84377 71.4676 11.5407 69.9178Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_0_1">
                                <rect width="51" height="51" fill="white" transform="translate(0 34)" />
                            </clipPath>
                        </defs>
                    </svg>
                    Asignar Equipo
                </a>
            </li>
            <div style="width: 100%; height: 0px; left: 0px; top: 119px; border: 1px rgba(255, 255, 255, 0.35) solid">
            </div>
            <li>
                <a href="#"><svg width="51" height="51" viewBox="0 0 51 51" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4_29)">
                            <path
                                d="M0 41.463C0 44.115 0.935 46.359 2.805 48.195C4.675 50.031 6.936 50.966 9.588 51H41.463C44.081 51 46.325 50.065 48.195 48.195C50.065 46.325 51 44.081 51 41.463V9.588C51 7.514 50.405 5.661 49.215 4.029C48.025 2.397 46.495 1.258 44.625 0.612V4.794C44.625 6.12 44.166 7.259 43.248 8.211C42.33 9.163 41.191 9.622 39.831 9.588C38.471 9.554 37.349 9.095 36.465 8.211C35.581 7.327 35.122 6.188 35.088 4.794V0H15.963V4.794C15.963 6.12 15.487 7.259 14.535 8.211C13.583 9.163 12.461 9.622 11.169 9.588C9.877 9.554 8.738 9.095 7.752 8.211C6.766 7.327 6.307 6.188 6.375 4.794V0.612C4.505 1.292 2.975 2.431 1.785 4.029C0.595 5.627 0 7.48 0 9.588L0 41.463ZM6.375 41.463V15.963H44.625V41.463C44.625 42.347 44.319 43.095 43.707 43.707C43.095 44.319 42.347 44.625 41.463 44.625H9.588C8.704 44.625 7.939 44.319 7.293 43.707C6.647 43.095 6.341 42.347 6.375 41.463ZM9.588 4.794C9.588 5.236 9.741 5.61 10.047 5.916C10.353 6.222 10.727 6.375 11.169 6.375C11.611 6.375 11.985 6.222 12.291 5.916C12.597 5.61 12.75 5.236 12.75 4.794V0H9.588V4.794ZM12.75 38.25H19.125V31.875H12.75V38.25ZM12.75 28.713H19.125V22.338H12.75V28.713ZM22.338 38.25H28.713V31.875H22.338V38.25ZM22.338 28.713H28.713V22.338H22.338V28.713ZM31.875 38.25H38.25V31.875H31.875V38.25ZM31.875 28.713H38.25V22.338H31.875V28.713ZM38.25 4.794C38.25 5.236 38.403 5.61 38.709 5.916C39.015 6.222 39.389 6.375 39.831 6.375C40.273 6.375 40.647 6.222 40.953 5.916C41.259 5.61 41.429 5.236 41.463 4.794V0H38.25V4.794Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_4_29">
                                <rect width="51" height="51" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    Reservas
                </a>
            </li>
            <div style="width: 100%; height: 0px; left: 0px; top: 119px; border: 1px rgba(255, 255, 255, 0.35) solid">
            </div>
            <li>
                <a href="#">
                    <svg width="71" height="71" viewBox="0 0 71 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.09139 11.7172H45.5554C47.8429 11.7172 49.7156 13.521 49.7156 15.8085V42.296C49.7156 44.5835 47.8429 46.5249 45.5554 46.5249H29.4007V53.3897H41.1889C42.9217 53.3897 43.0615 59.0764 43.2701 59.2827H6.45214C6.45214 59.2827 6.45214 53.3897 8.53333 53.3897H20.3216V46.5249H4.09583C1.8083 46.5249 0.00445557 44.5835 0.00445557 42.296V15.8085C0.00445557 13.521 1.8083 11.7172 4.09583 11.7172H4.09139ZM4.09139 42.296H45.5554V15.8085H4.09139V42.296Z"
                            fill="white" />
                    </svg>
                    Equipos
                </a>
            </li>
            <div style="width: 100%; height: 0px; left: 0px; top: 119px; border: 1px rgba(255, 255, 255, 0.35) solid">
            </div>
            <li>
                <a href="#">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.5 28C17.5 27.5359 17.6844 27.0908 18.0126 26.7626C18.3408 26.4344 18.7859 26.25 19.25 26.25H35V14.875C35 11.375 31.3042 8.75 28 8.75H11.375C9.75108 8.75174 8.19417 9.39761 7.04589 10.5459C5.89761 11.6942 5.25174 13.2511 5.25 14.875V41.125C5.25174 42.7489 5.89761 44.3058 7.04589 45.4541C8.19417 46.6024 9.75108 47.2483 11.375 47.25H28.875C30.4989 47.2483 32.0558 46.6024 33.2041 45.4541C34.3524 44.3058 34.9983 42.7489 35 41.125V29.75H19.25C18.7859 29.75 18.3408 29.5656 18.0126 29.2374C17.6844 28.9093 17.5 28.4641 17.5 28Z"
                            fill="white" />
                        <path
                            d="M50.237 26.763L41.487 18.013C41.1562 17.6987 40.7156 17.526 40.2593 17.5319C39.8029 17.5377 39.3669 17.7216 39.0442 18.0443C38.7215 18.367 38.5377 18.803 38.5318 19.2593C38.526 19.7157 38.6986 20.1562 39.013 20.4871L44.7748 26.2501H35V29.7501H44.7748L39.013 35.513C38.8436 35.6739 38.7082 35.8671 38.6147 36.0811C38.5212 36.2952 38.4715 36.5258 38.4685 36.7593C38.4655 36.9929 38.5093 37.2247 38.5973 37.4411C38.6853 37.6574 38.8157 37.854 38.9809 38.0192C39.1461 38.1843 39.3426 38.3148 39.559 38.4028C39.7754 38.4908 40.0072 38.5346 40.2407 38.5316C40.4743 38.5286 40.7049 38.4789 40.9189 38.3854C41.133 38.2919 41.3261 38.1564 41.487 37.9871L50.237 29.2371C50.565 28.9089 50.7492 28.464 50.7492 28.0001C50.7492 27.5361 50.565 27.0912 50.237 26.763Z"
                            fill="white" />
                    </svg>
                    Cerrar sesión
                </a>
            </li>
    
        </ul>
    
    
    
    </div>
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-1 mb-5">
        <div class="container">
            <a class="navbar-brand" href="{{ route('login') }}">Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse show" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Salir</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav> --}}

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>