@extends('layouts.app')

@section('content')

<div class="container">
    @if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header bg-info text-white">Ajouter un Electeur</div>
        <div class="card-body">
            <form action="{{ route('store.electeur') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nom:</label>
                    <input type="text" value="" name="nom" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Prenom:</label>
                    <input type="text" value="" name="prenom" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">cni:</label>
                    <input type="text" value="" name="cni" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Voter pour:</label>
                    <select name="candidat_id" id="" class="form-control">
                        <option value="">Selectioner le candidat</option>
                        @foreach ($candidat as $candidats)
                        <option value="{{ $candidats->id }}" name="candidat_id">{{ $candidats->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Enregistrer</button>
                </div>
                
            </form>
        </div>
    </div>
</div>

@endsection