@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="card">
        <div class="card-header bg-info text-white">Editer un Electeur</div>
        <div class="card-body">
            <form action="{{ route('update.electeur', $electeur->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nom:</label>
                    <input type="text" value="{{ $electeur->nom }}" name="nom" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Prenom:</label>
                    <input type="text" value="{{ $electeur->prenom }}" name="prenom" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">cni:</label>
                    <input type="text" value="{{ $electeur->cni }}" name="cni" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Voter pour:</label>
                    <select name="candidat_id" id="" class="form-control">
                        <option value="{{ $electeur->candidat_id }}">{{ $electeur->candidat_id }}</option>
                        @foreach ($candidat as $candidats)
                        <option value="{{ $candidats->id }}" name="candidat_id">{{ $candidats->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Modifier</button>
                </div>
                
            </form>
        </div>
    </div>
</div>

@endsection