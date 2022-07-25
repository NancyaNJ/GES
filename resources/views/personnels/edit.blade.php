@extends('blank')

@section('page-title', 'Modifier personnel');
@section('page-description', 'Gestion de client');

@section('main-content')

<div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="br-section-label">Basic Form Input</h6>
      <p class="br-section-text">A basic form control with disabled and readonly mode.</p>

      <form action="{{ route('personnels.update', $personnel->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-lg-4">
            {{-- <input class="form-control"  name="nom"  type="text" value="{{ $personnel->nom }}" > --}}
            </div><!-- col -->
            <div class="col-lg-8">
                <input class="form-control" name="description"  type="text" value="{{ $personnel->poste->nom }}">
            </div><!-- col -->
        </div><!-- row -->
        <div class="row mt-2 mx-auto">
            <button type="submit" class="btn btn-success">Mettre à jour le client</button>
        </div>
     </form>
    </div>
</div>

@endsection