@extends('layouts.app')

@section('title', 'Edit')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Update Contact</h1>
        <form action="{{ route('address.update', [$id]) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="input-group has-validation">
                <div class="form-floating is-invalid">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $name }}" id="name">
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
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ $address }}" id="address">
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
                    <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ $phone_number }}" id="phone_number">
                    <label for="name">Phone Number:</label>
                </div>
                <div class="invalid-feedback">
                    @error('phone_number')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <input type="submit" class="btn btn-success" value="Save Changes">
            <a href="{{ route('address.show', [$id]) }}" class="btn btn-danger" role="button">Cancel</a>
        </form>
    </div>
</div>
@endsection
