@extends('layouts.app')

@section('template_title')
    {{ $experiencia->name ?? __('Show') . " " . __('Experiencia') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Experiencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('experiencias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Puesto:</strong>
                                    {{ $experiencia->puesto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Empresa:</strong>
                                    {{ $experiencia->empresa }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $experiencia->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Inicio:</strong>
                                    {{ $experiencia->fecha_inicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Fin:</strong>
                                    {{ $experiencia->fecha_fin }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
