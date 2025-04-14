@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Profile') }}</div>

                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="created_at" class="col-md-4 col-form-label text-md-right">{{ __('Account Created At') }}</label>

                            <div class="col-md-6">
                                <input id="created_at" type="text" class="form-control" name="created_at" value="{{ $user->created_at->format('d-m-Y H:i') }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="updated_at" class="col-md-4 col-form-label text-md-right">{{ __('Last Updated At') }}</label>

                            <div class="col-md-6">
                                <input id="updated_at" type="text" class="form-control" name="updated_at" value="{{ $user->updated_at->format('d-m-Y H:i') }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('profile.edit') }}" class="btn btn-primary">{{ __('Edit Profile') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
