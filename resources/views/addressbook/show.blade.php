@extends('layouts.app')

@section('title', 'Show')

@section('content')
<div class="row">
    <div class="col-12">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $name }}</li>
            <li class="list-group-item">{{ $address }}</li>
            <li class="list-group-item">{{ $phone_number }}</li>
        </ul>
        <a href="{{ route('address.edit', ['address' => $id]) }}" class="btn btn-secondary" role="button">Edit</a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModalLabel">Confirm Deletion</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete "{{ $name }}" from your contacts?</p>
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('address.destroy', [$id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('address.index') }}" class="btn btn-primary" role="button">Back</a>
    </div>
</div>
@endsection