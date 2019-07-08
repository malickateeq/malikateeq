@extends('layouts.master')

@section('content')
<div class="container">

    <div class="card-body">
        {{ $settings }} <br>
        {{ $user }}
    </div>

</div>

@endsection
