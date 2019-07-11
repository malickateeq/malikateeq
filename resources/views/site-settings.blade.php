@extends('layouts.master')

@section('content')

<div class="container">
    <h4 class="text-center mb-4"> Update Site Settings </h4>

    <form id="logout-form" action="{{ route('update-site-settings') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Site Title') }}</label>

            <div class="col-md-6">
                <input id="title" type="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $settings->title }}" required autocomplete="title">

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $settings->name }}" required autocomplete="name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

            <div class="col-md-6">
                <input id="description" type="textarea" class="form-control @error('description') is-invalid @enderror" value="{{ $settings->description }}" name="description" required autocomplete="description">

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="one_liner" class="col-md-4 col-form-label text-md-right">{{ __('One liner') }}</label>

            <div class="col-md-6">
                <input id="one_liner" type="one_liner" class="form-control @error('one_liner') is-invalid @enderror" value="{{ $settings->one_liner }}" name="one_liner" required autocomplete="one_liner">

                @error('one_liner')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

            <div class="col-md-6">
                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $settings->phone }}" name="phone">

                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

            <div class="col-md-6">
                <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" value="{{ $settings->address }}" name="address">

                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>



        
        <div class="form-group row">
            <label for="fb_link" class="col-md-4 col-form-label text-md-right">{{ __('Facebook Link') }}</label>

            <div class="col-md-6">
                <input id="fb_link" type="fb_link" class="form-control @error('fb_link') is-invalid @enderror" value="{{ $settings->fb_link }}" name="fb_link" >

                @error('fb_link')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="insta_link" class="col-md-4 col-form-label text-md-right">{{ __('Instagram Link') }}</label>

            <div class="col-md-6">
                <input id="insta_link" type="insta_link" class="form-control @error('insta_link') is-invalid @enderror" value="{{ $settings->insta_link }}" name="insta_link">

                @error('insta_link')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="youtube_link" class="col-md-4 col-form-label text-md-right">{{ __('Youtube link') }}</label>

            <div class="col-md-6">
                <input id="youtube_link" type="youtube_link" class="form-control @error('youtube_link') is-invalid @enderror" value="{{ $settings->youtube_link }}" name="youtube_link">

                @error('youtube_link')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="twitter_link" class="col-md-4 col-form-label text-md-right">{{ __('Twitter link') }}</label>

            <div class="col-md-6">
                <input id="twitter_link" type="twitter_link" class="form-control @error('twitter_link') is-invalid @enderror" value="{{ $settings->twitter_link }}" name="twitter_link"">

                @error('twitter_link')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>



        <h3 class="text-center mt-5"> Buttons Settings </h3>

        <div class="form-group row">
            <label for="btn1_text" class="col-md-4 col-form-label text-md-right">{{ __('Button1 Text') }}</label>

            <div class="col-md-6">
                <input id="btn1_text" type="text" class="form-control @error('btn1_text') is-invalid @enderror" value="{{ $settings->btn1_text }}" name="btn1_text">

                @error('btn1_text')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="btn1_link" class="col-md-4 col-form-label text-md-right">{{ __('Button1 Link') }}</label>

            <div class="col-md-6">
                <input id="btn1_link" type="text" class="form-control @error('btn1_link') is-invalid @enderror" value="{{ $settings->btn1_link }}" name="btn1_link">

                @error('btn1_link')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group row">
            <label for="btn2_text" class="col-md-4 col-form-label text-md-right">{{ __('Button2 Text') }}</label>

            <div class="col-md-6">
                <input id="btn2_text" type="text" class="form-control @error('btn2_text') is-invalid @enderror" value="{{ $settings->btn2_text }}" name="btn2_text">

                @error('btn2_text')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="btn2_link" class="col-md-4 col-form-label text-md-right">{{ __('Button2 Link') }}</label>

            <div class="col-md-6">
                <input id="btn2_link" type="text" class="form-control @error('btn2_link') is-invalid @enderror" value="{{ $settings->btn2_link }}" name="btn2_link">

                @error('btn2_link')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="btn3_text" class="col-md-4 col-form-label text-md-right">{{ __('Button3 Text') }}</label>

            <div class="col-md-6">
                <input id="btn3_text" type="text" class="form-control @error('btn3_text') is-invalid @enderror" value="{{ $settings->btn3_text }}" name="btn3_text">

                @error('btn3_text')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="btn3_link" class="col-md-4 col-form-label text-md-right">{{ __('Button3 Link') }}</label>

            <div class="col-md-6">
                <input id="btn3_link" type="text" class="form-control @error('btn3_link') is-invalid @enderror" value="{{ $settings->btn3_link }}" name="btn3_link">

                @error('btn3_link')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>



        <div class="form-group row my-5">
            <label for="bg_image" class="col-md-4 col-form-label text-md-right">{{ __('Background Image') }}</label>

            <div class="col-md-6">
                <input id="bg_image" type="file" class="form-control @error('bg_image') is-invalid @enderror" value="{{ $settings->bg_image }}" name="bg_image">

                @error('bg_image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <!-- <div class="form-group row">
            <label for="favicon" class="col-md-4 col-form-label text-md-right">{{ __('Favicon Image') }}</label>

            <div class="col-md-6">
                <input id="favicon" type="file" class="form-control @error('favicon') is-invalid @enderror" value="{{ $settings->favicon }}" name="favicon" required autocomplete="favicon">

                @error('favicon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div> -->


        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Update Info') }}
                </button>
            </div>
        </div>

    </form>
</div>

@endsection