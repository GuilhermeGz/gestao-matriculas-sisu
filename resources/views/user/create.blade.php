<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar analista') }}
        </h2>
    </x-slot>
    <div class="container" style="padding-top: 5rem; padding-bottom: 8rem;">
        <div class="form-row justify-content-center">
            <div class="col-md-10">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-8">
                                <h5 class="card-title">Cadastrar um novo analista</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Analistas > Criar analista</h6>
                            </div>
                        </div>
                        <form method="POST" id="cria-analista" action="{{route('usuarios.store')}}">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input id="name" class="form-control apenas_letras @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}" required autofocus autocomplete="name">

                                    @error('name')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="email">

                                    @error('email')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autofocus autocomplete="new-password">

                                    @error('password')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="form-row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6" style="text-align: right">
                                <button type="submit" class="btn btn-success" form="cria-analista" style="width: 100%">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
