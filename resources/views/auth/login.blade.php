    @extends('layout')
    
    @section('content')
    <main class="my-form">
        <div class="container">
            <img src="{{ asset('img/media/univalle_logo.jpg') }}" alt="Logo Univalle" style="width: 30%; height: 50%;">

            <div class="row justify-content-center">
                <div class="col-md-8">

                    
                    <div class="card">
                        <div class="card-header">Login</div>
                        
                        <div class="card-body">
                            
                            
                            
                            <form action="{{ route('login.post') }}" method="POST">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-end">Usuario</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" required autofocus>
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
                                            Login
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