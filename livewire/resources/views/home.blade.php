@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Hello World</h1>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h2>Laravel 9 Livewire Crud - Tutsmake.com</h2>
                        </div>
                        <div class="card-body">
                            @livewire('index')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection