@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="card">
        <div class="card-header bg-info text-white">Editer un Candidat</div>
        <div class="card-body">
            <form action="{{ route('update.candidat', $candidat->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nom:</label>
                    <input type="text" value="{{ $candidat->nom }}" name="nom" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Prenom:</label>
                    <input type="text" value="{{ $candidat->prenom }}" name="prenom" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Date de nassance:</label>
                    <input type="date" value="{{ $candidat->dateNaissance }}" name="dateNaissance" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Parti:</label>
                    <select name="parti" id="" class="form-control">
                        <option value="{{ $candidat->parti }}">{{ $candidat->parti }}</option>
                        <option value="Parti_1" name="parti">Parti_1</option>
                        <option value="Parti_2" name="parti">Parti_2</option>
                        <option value="Parti_3" name="parti">Parti_3</option>
                        <option value="Parti_4" name="parti">Parti_4</option>
                        <option value="Parti_5" name="parti">Parti_5</option>
                        
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