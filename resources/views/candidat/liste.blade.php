@extends('layouts.app')

@section('content')
    <div class="container mt-3">
    @if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
    @endif
        <div class="card">
            <div class="card-header bg-info text-white">
                Liste des Candidats
            </div>
            <div class="card-body">
            <table class="table">
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date de naissance</th>
                <th>Parti</th>
                <th>Ation</th>
            </tr>
            @if(!empty($candidat)&& $candidat->count())
            @foreach ($candidat as $candidats)
                <tr>
                    <td>{{ $candidats->id }}</td>
                    <td>{{ $candidats->nom }}</td>
                    <td>{{ $candidats->prenom }}</td>
                    <td>{{ $candidats->dateNaissance }}</td>
                    <td>{{ $candidats->parti }}</td>

                    

                    </td>
                    <td>
                        <a href="{{ route('edit-candidat', $candidats->id) }}" class="btn btn-warning">Editer</a>
                        <a onClick="return confirm('do you wish to delete it !!')" href="{{ route('delete-candidat', $candidats->id) }}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$candidat->links()}}
        @else
        <tr>
            <td colspan = "6">there are no data</td>
        @endif
            </div>
        </div>
    </div>
@endsection