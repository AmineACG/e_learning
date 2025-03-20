@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Edit Publication</h1>
    <form action="{{ route('publications.update', $publication->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titre" class="form-label">Title</label>
            <input type="text" class="form-control" id="titre" name="titre" value="{{ $publication->titre }}" required>
        </div>
        <div class="mb-3">
            <label for="annee" class="form-label">Year</label>
            <input type="number" class="form-control" id="annee" name="annee" value="{{ $publication->annee }}" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $publication->type }}" required>
        </div>
        <div class="mb-3">
            <label for="sujet" class="form-label">Subject</label>
            <input type="text" class="form-control" id="sujet" name="sujet" value="{{ $publication->sujet }}" required>
        </div>
        <div class="mb-3">
            <label for="lien" class="form-label">Link</label>
            <input type="url" class="form-control" id="lien" name="lien" value="{{ $publication->lien }}" required>
        </div>
        <div class="mb-3">
            <label for="cours_id" class="form-label">Course ID</label>
            <input type="number" class="form-control" id="cours_id" name="cours_id" value="{{ $publication->cours_id }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection