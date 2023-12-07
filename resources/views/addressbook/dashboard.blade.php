@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<ul class="list-group">
    <li class="list-group-item"><a href="{{ route('address.index') }}">View All Contacts</a></li>
    <li class="list-group-item"><a href="{{ route('address.create') }}">Add New Contact</a></li>
    <li class="list-group-item">Search Contacts</li>
    <li class="list-group-item">Exit</li>
</ul>
@endsection