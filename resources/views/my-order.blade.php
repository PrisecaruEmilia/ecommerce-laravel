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
    <section class="featureProducts">
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
                                <li class="nav-item border border-secondary rounded-pill mb-2">
                                    <a class="nav-link" href="{{ route('users.edit') }}">My Profile</a>
                                </li>
                                <li class="nav-item border border-secondary rounded-pill mb-2 active">
                                    <a class="nav-link" href="{{ route('orders.index') }}">My Orders</a>
                                </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-9">
                        <div class="row font-weight-bold">
                            <div class="col-sm-6">
                                <h1>Order ID: {{ $order->id }}</h1>
                            </div>
                        </div>
                        <div class="container">
                            <div class="my-orders-page">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card mb-5">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="font-weight-bold">ORDER ID</p>
                                                        <p>{{ $order->id }}</p>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <p class="font-weight-bold">TOTAL</p>
                                                        <p>{{ $order->billing_total }} Lei</p>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <p class="font-weight-bold">ORDER PLACED</p>
                                                        <p>{{ $order->created_at }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12 border-top border-secondary"><p class="font-weight-bold">Name:</p> {{ auth()->user()->name}}</div>
                                                    <div class="col-sm-12 border-top border-secondary"><p class="font-weight-bold">Address:</p> {{ $order->billing_address }}</div>
                                                    <div class="col-sm-12 border-top border-secondary"><p class="font-weight-bold">City:</p> {{ $order->billing_city }}</div>
                                                    <div class="col-sm-12 border-top border-secondary"><p class="font-weight-bold">Subtotal:</p> {{ $order->billing_subtotal }}</div>
                                                    <div class="col-sm-12 border-top border-secondary"><p class="font-weight-bold">Tax:</p> {{ $order->billing_tax }}</div>
                                                    <div class="col-sm-12 border-top border-secondary"><p class="font-weight-bold">Total:</p> {{ $order->billing_total }}</div>
                                                </div>
                                            </div>
                                          </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="card p-5">
                                            <h5 class="card-title text-cener font-weight-bold">The products of the order:</h5>
                                                <div class="row mt-3">
                                                    @foreach ($order->products as $product)
                                                        <div class="col-sm-12 col-md-6 col-lg-4 pb-3 border-left border-secondary">
                                                            <a href="{{ route('shop.show', $product->slug) }}">
                                                                <img src="{{ productImage($product->image) }}" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                                                            </a>
                                                            <a href="{{ route('shop.show', $product->slug) }}"><p class="product name text-center font-weight-bold my-0">{{ $product->name }}</p></a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
@endsection
