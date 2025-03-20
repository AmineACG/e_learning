@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Publications</h1>
    <a href="{{ route('publications.create') }}" class="btn btn-primary mb-3">Add New Publication</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Year</th>
                <th>Type</th>
                <th>Subject</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publications as $publication)
                <tr>
                    <td>{{ $publication->id }}</td>
                    <td>{{ $publication->titre }}</td>
                    <td>{{ $publication->annee }}</td>
                    <td>{{ $publication->type }}</td>
                    <td>{{ $publication->sujet }}</td>
                    <td><a href="{{ $publication->lien }}" target="_blank">View Link</a></td>
                    <td>
                        <a href="{{ route('publications.edit', $publication->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('publications.destroy', $publication->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection