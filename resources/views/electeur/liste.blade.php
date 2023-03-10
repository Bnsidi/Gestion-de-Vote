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
                Liste des Electeurs
            </div>
            <div class="card-body">
            <table class="table">
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>cni</th>
                <th>Voter</th>
                <th>Ation</th>
            </tr>
        @if(!empty($electeur)&& $electeur->count())
            @foreach ($electeur as $electeurs)
                <tr>
                    <td>{{ $electeurs->id }}</td>
                    <td>{{ $electeurs->nom }}</td>
                    <td>{{ $electeurs->prenom }}</td>
                    <td>{{ $electeurs->cni }}</td>
                    
                    <td>
                        
                        @foreach ($candidat as $candidats)
                          @if ($candidats->id == $electeurs-> candidat_id)
                               {{ $candidats->nom}} {{ $candidats->prenom}}
                          @endif
                        @endforeach
                    </td>  
                    <td>

                        <a href="{{ route('edit-electeur', $electeurs->id) }}" class="btn btn-warning">Editer</a>
                        <a onClick="return confirm('do you wish to delete it !!')" href="{{ route('delete-electeur', $electeurs->id) }}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$electeur->links()}}
        @else
        <tr>
            <td colspan = "6">there are no data</td>
        @endif
        </tr>
    </div>
        </div>
    </div>
@endsection