@extends('layouts.app')

@section('title', 'Create')

@section('content')
<form action="{{ route('address.store') }}" method="POST">
    @csrf
    <div class="input-group has-validation">
        <div class="form-floating is-invalid">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
            <label for="name">Name:</label>
        </div>
        <div class="invalid-feedback">
            @error('name')
                {{ $message }}
            @enderror
        </div>
    </div>
    <div class="input-group has-validation">
        <div class="form-floating is-invalid">
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address">
            <label for="address">Address:</label>
        </div>
        <div class="invalid-feedback">
            @error('address')
                {{ $message }}
            @enderror
        </div>
    </div>
    <div class="input-group has-validation">
        <div class="form-floating is-invalid">
            <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number">
            <label for="phone_number">Phone Number:</label>
        </div>
        <div class="invalid-feedback">
            @error('phone_number')
                {{ $message }}
            @enderror
        </div>
    </div>
    <input type="submit" class="btn btn-success" value="Save">
    <a href="{{ route('address.index') }}" class="btn btn-danger" role="button">Cancel</a>
</form>
@endsection