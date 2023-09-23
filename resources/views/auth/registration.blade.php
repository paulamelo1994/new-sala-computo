@extends('layout')

@section('content')
<main class="my-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        
                        <form action="{{ route('register.post') }}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>
                                <div class="col-md-6">
                                    <input type="text" id="name" class="form-control" name="name" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="mb-3 row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-end">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="email" id="email_address" class="form-control" name="email" required>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="mb-3 row">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="mb-3 row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                        <label class="form-check-label" for="remember">
                                            Recordarme
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3 row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrar
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
