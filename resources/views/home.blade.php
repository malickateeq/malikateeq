@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-12">
            <div class="card">

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="active nav-link"> Home </a>
                </li>
                <li class="nav-item">
                <a href="{{ route('site-settings') }}" class="nav-link"> Site Settings </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile-settings') }}" class="nav-link"> Profile Settings </a>
                </li>

            </ul>

                <div class="card-body">
                    {{ $settings }} <br>
                    {{ $user }}
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
