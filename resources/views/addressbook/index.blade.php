@extends('layouts.app')

@section('title', 'Index')

@push('scripts')

@endpush

@section('content')
<div class="row">
    <div class="col-12">
        <h1>All Contacts</h1>
        <ul class="list-group">
            @foreach($addresses as $address)
            <li class="list-group-item"><a href="{{ route('address.show', ['address' => $address->id]) }}">{{ $address->name }}</a></li>
            @endforeach
        </ul>
        <a href="{{ url('/') }}" class="btn btn-primary my-2" role="button">Back</a>
    </div>
</div>
@endsection