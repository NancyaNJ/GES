@extends('blank')

@section('page-title', 'Modifier un poste');
@section('page-description', 'Gestion des postes');

@section('main-content')

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="br-section-label">Modifier le poste</h6>


        <form action="{{ route('postes.update', $poste->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-lg-4">
                    <input class="form-control" name="nom" type="text" value="{{ $poste->nom }}">
                </div><!-- col -->
            </div><!-- row -->
            <div class="row mt-2 mx-auto">
                <button type="submit" class="btn btn-success">Mettre à jour le poste</button>
            </div>
        </form>
    </div>
</div>

@endsection