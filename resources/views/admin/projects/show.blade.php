@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="container">
        <div class="mt-5">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Torna alla lista Progetti</a>
            <a href="#"> prova</a>
        </div>

        <div class="row mt-5">
            <h2>{{ $project->title }}</h2>
            <p> {{ $project->content }} </p>
        </div>
        <div class="d-flex flex-column align-items-end">
            <p><b>Ultima Modifica: </b>{{ $project->updated_at }}</p>
            <p><b>Creazione Progetto: </b>{{ $project->created_at }}</p>
        </div>
    </div>
@endsection
