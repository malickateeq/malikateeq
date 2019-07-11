@extends('layouts.master')

@section('content')
<div class="container">

    <div class="card-body">
        <ul>
            <h1> User Profile </h1>
            <li>  <b>Name: </b> {{$user->name}} </li>
            <li>  <b>Email: </b> {{$user->email}} </li>

            <h1> Site Settings </h1>
            <li>  <b>Title: </b> {{$settings->title}} </li>
            <li>  <b>Description: </b> {{$settings->description}} </li>
            <li>  <b>One liner: </b> {{$settings->one_liner}} </li>
            <li>  <b>Phone: </b> {{$settings->phone}} </li>
            <li>  <b>Address: </b> {{$settings->address}} </li>
            <li>  <b>Facebook link: </b> {{$settings->fb_link}} </li>
            <li>  <b>Instagram link: </b> {{$settings->insta_link}} </li>
            <li>  <b>Twitter link: </b> {{$settings->twitter_link}} </li>
            <li>  <b>Youtube link: </b> {{$settings->youtube_link}} </li>
            <li>  <b>Other links: </b> {{$settings->other_links}} </li>
            <h3> Images </h3>
            <li>  <b>Background Image: </b> {{$settings->bg_image}} </li>
            <li>  <b>Favicon Image: </b> {{$settings->favicon}} </li>

            <h3> Buttons Settings </h3>
            <li>  <b>Button1 Text: </b> {{$settings->btn1_text}} </li>
            <li>  <b>Button1 Link: </b> {{$settings->btn1_link}} </li>
            <li>  <b>Button2 Text: </b> {{$settings->btn2_text}} </li>
            <li>  <b>Button2 Link: </b> {{$settings->btn2_link}} </li>
            <li>  <b>Button3 Text: </b> {{$settings->btn3_text}} </li>
            <li>  <b>Button3 Link: </b> {{$settings->btn3_link}} </li>
        </ul>
    </div>

</div>

@endsection
