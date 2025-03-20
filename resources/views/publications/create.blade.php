<!-- resources/views/publications/create.blade.php -->
@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <h1 class="mb-4">Add New Publication</h1>
    <form action="{{ route('publications.store') }}" method="POST">
        @csrf <!-- Add CSRF token -->
        <div class="mb-3">
            <label for="titre" class="form-label">Title</label>
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>
        <div class="mb-3">
            <label for="annee" class="form-label">Year</label>
            <input type="number" class="form-control" id="annee" name="annee" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <div class="mb-3">
            <label for="sujet" class="form-label">Subject</label>
            <input type="text" class="form-control" id="sujet" name="sujet" required>
        </div>
        <div class="mb-3">
            <label for="lien" class="form-label">Link</label>
            <input type="url" class="form-control" id="lien" name="lien" required>
        </div>
        <div class="mb-3">
            <label for="cours_id" class="form-label">Course ID</label>
            <input type="number" class="form-control" id="cours_id" name="cours_id" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection