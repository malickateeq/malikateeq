@extends('layouts.app')

@section('content')

<div class="container">
    <h4> Update Site Settings </h4>
    <form id="logout-form" action="{{ route('update-site-settings') }}" method="POST">
        @csrf
    </form>
</div>

@endsection