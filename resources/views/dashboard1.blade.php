@extends('layout_app')

@section('content')



<div class="contenido">
    <!-- Contenido de la página aquí -->
    <h1 style="color: #C20E1A">Disponibles</h1>
    <hr style="height: 3px; border: none; background-color: #C20E1A; opacity:unset !important">

    <div class="row mb-3">
        <div class="col-4">
            <div class="card" >
                <div class="card-body">
                    <div class="row align-items-center"> <!-- Agregamos align-items-center aquí -->
                        <div class="col-2"> <!-- Agregamos text-center aquí -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pc-display-horizontal custom-icon" viewBox="0 0 16 16">
                                <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
                            </svg>
                        </div>
                        
                        <div class="col-10">
                            <p class="ml-3 text-center" style="color: rgba(0, 0, 0, 0.75);
                            font-size: 24px;
                            font-family: Arial;
                            font-weight: 700;
                            word-wrap: break-word">Computador 1</p>
                        </div>
                    </div>
                    <div style="width: 100%; height: 100%; border: 3px #DC911B solid"></div>
                    <br>
                    <div class="d-flex flex-column">
                        <button class="btn btn-success">Asignar</button>
                        <button class="btn btn-danger mt-2">Reportar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card" >
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pc-display-horizontal custom-icon" viewBox="0 0 16 16">
                                <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
                            </svg>
                        </div>
                        <div class="col-10">
                            <p class="ml-3">Computador 2</p>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex flex-column">
                        <button class="btn btn-success">Asignar</button>
                        <button class="btn btn-danger mt-2">Reportar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card" >
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pc-display-horizontal custom-icon" viewBox="0 0 16 16">
                                <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
                            </svg>
                        </div>
                        <div class="col-10">
                            <p class="ml-3">Computador 3</p>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex flex-column">
                        <button class="btn btn-success">Asignar</button>
                        <button class="btn btn-danger mt-2">Reportar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <h1 style="color: #C20E1A">En uso</h1>
    <hr style="height: 3px; border: none; background-color: #C20E1A; opacity:unset !important">

    <div class="row mb-3">
        <div class="col-4">
            <div class="card" >
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pc-display-horizontal custom-icon" viewBox="0 0 16 16">
                                <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
                            </svg>
                        </div>
                        <div class="col-10">
                            <p class="ml-3">Computador 1</p>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex flex-column">
                        <button class="btn btn-success">Asignar</button>
                        <button class="btn btn-danger mt-2">Reportar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    
</div>



@endsection