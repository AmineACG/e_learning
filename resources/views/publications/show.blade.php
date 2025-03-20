@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Publication Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $publication->titre }}</h5>
            <p class="card-text"><strong>Year:</strong> {{ $publication->annee }}</p>
            <p class="card-text"><strong>Type:</strong> {{ $publication->type }}</p>
            <p class="card-text"><strong>Subject:</strong> {{ $publication->sujet }}</p>
            <p class="card-text"><strong>Link:</strong> <a href="{{ $publication->lien }}" target="_blank">{{ $publication->lien }}</a></p>
            <p class="card-text"><strong>Course ID:</strong> {{ $publication->cours_id }}</p>
            <a href="{{ route('publications.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection