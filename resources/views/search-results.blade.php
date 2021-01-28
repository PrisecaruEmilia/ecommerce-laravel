@extends('master')

@section('breadcrumbs')
    <section class="breadSearch pt-5 pb-3">
        <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <nav>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Search</li>
                            </ul>
                        </nav> <!-- end nav -->
                    </div>
                    @include('partials.search')
                </div>
            </div>
    </section>
@endsection
@section('featured')
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

    <section class="my-5 search-container" style="min-height: calc(100vh - 450px);">
        <div class="container">
           <h1>Search Results</h1>
           <p>{{ $products->total() }} result(s) for '{{ request()->input('query') }}'</p>

           <div class="row text-center">
                @forelse ($products as $product)
                        <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                            <a href="{{ route('shop.show', $product->slug) }}">
                                {{-- <img src="{{ asset('img/products/'.$product->slug. '.png') }}" style='height: 70%; width: 70%; object-fit: contain' alt="product"> --}}
                                <img src="{{ productImage($product->image) }}" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                            </a>
                            <a href="{{ route('shop.show', $product->slug) }}"><p class="product name font-weight-bold my-0">{{ $product->name }}</p></a>
                            <p class="product price">{{ $product->formatPrice()}}</p>
                        </div>
                    @empty
                        <div>
                            <h2>No items found</h2>
                        </div>
                    @endforelse

                    {{-- {{ $products->links() }} --}}
                    {{ $products->appends(request()->input())->links() }}
           </div>

        </div>
    </section> <!-- end search-container -->
@endsection

@section('extra-js')
@endsection
