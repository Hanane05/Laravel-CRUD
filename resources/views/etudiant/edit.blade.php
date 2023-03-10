@extends('layouts.app')
@section('title', 'Modifier Étudiant info')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-2">
            <div class="display-5 mt-2">
                {{ config('app.name')}}
            </div>
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>
                    {{session('success')}}
                </strong>
                <button type="button
                " class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">

                <form method="POST" action="{{route('etudiant.update', $etudiant->id)}}" class="mt-5 w-50">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom:</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{$etudiant->nom}}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Courriel:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$etudiant->email}}">
                    </div>

                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse:</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" value="{{$etudiant->adresse}}">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Téléphone:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" value="{{$etudiant->phone}}">
                    </div>

                    <div class="mb-3">
                        <label for="date_de_naissance" class="form-label">Date de naissance:</label>
                        <input type="date" class="form-control" id="date_de_naissance" name="date_de_naissance" value="{{$etudiant->date_de_naissance}}">
                    </div>

                    <div class="mb-3">
                        <label for="ville" class="form-label">Ville:</label>
                        <select class="form-control" id="ville" name="ville_id">
                            <option value="" disabled>Choississez une ville</option>
                            @foreach($villes as $ville)
                            <option value="{{$ville->id}}" {{$ville->id==$etudiant->ville_id ? "selected" : ""}}>{{$ville->nom}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Sauvegarder</button>

                </form>
            </div>


            @endsection