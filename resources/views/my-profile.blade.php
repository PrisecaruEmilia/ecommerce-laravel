@extends('master')

@section('breadcrumbs')
    <section class="breadSearch pt-5 pb-3">
        <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <nav>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">My Profile</li>
                            </ul>
                        </nav> <!-- end nav -->
                    </div>
                    @include('partials.search')
                </div>
        </div>
    </section>
@endsection
@section('featured')
    <section class="featureProducts" style="min-height: calc(100vh - 450px);">
        <div class="container">
            @if (session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="container pt-5">
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <ul class="nav flex-column text-center font-weight-bold">
                                <li class="nav-item border border-secondary rounded-pill mb-2 active">
                                    <a class="nav-link active" href="{{ route('users.edit') }}">My Profile</a>
                                </li>
                                <li class="nav-item border border-secondary rounded-pill mb-2">
                                    <a class="nav-link" href="{{ route('orders.index') }}">My Orders</a>
                                </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-9">
                        <div class="row font-weight-bold">
                            <div class="col-sm-6">
                                <h1>My Profile</h1>
                            </div>
                        </div>
                        <div class="container">
                            <div class="my-profile-page">
                                <div class="row">
                                    <div class="col-sm-12">
                                       <form method="POST" action="{{ route('users.update') }}">
                                        @method('patch')
                                        @csrf

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus placeholder="Name">

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email" placeholder="Email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-12">
                                                Leave password blank to keep current password
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary btn-lg">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
@endsection
