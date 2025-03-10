@extends('layouts.app')

@section('template_title')
    {{ $persona->name ?? __('Show') . " " . __('Persona') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('personas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Condiciones:</strong>
                                    {{ $persona->condicione->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $persona->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellidos:</strong>
                                    {{ $persona->apellidos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Dni:</strong>
                                    {{ $persona->dni }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $persona->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $persona->direccion }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
