<section class="alike">
    <div class="container">
        <div class="row pt-4">
            <div class="col-sm-12 text-center">
                <h2 class="font-weight-bold text-uppercase">
                    You might also like
                </h2>
            </div>
        </div>
        <div class="row py-4">
            @foreach($mightLike as $alike)
            <div class="col-sm-12 col-md-6 col-lg-3 mb-sm-5">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="{{ route('shop.show', $alike->slug) }}">
                            {{-- <img src="{{ asset('img/products/'.$alike->slug. '.png') }}" style='height: 70%; width: 70%; object-fit: contain' alt="product"> --}}
                            {{-- <img src="{{ asset('storage/'.$alike->image) }}" style='height: 70%; width: 70%; object-fit: contain' alt="product"> --}}
                            <img src="{{ productImage($alike->image) }}" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                        </a>
                        <a href="{{ route('shop.show', $alike->slug) }}"><p class="product name font-weight-bold mb-0 my-0 text-dark">{{ $alike->name }}</p></a>
                        <p class="product price ">{{ $alike->formatPrice() }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end alike section -->
