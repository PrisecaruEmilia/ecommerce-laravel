@extends('master')

@section('featured')
            <div class="thank-you-section text-center mt-5" style="color:rgb(0, 0, 0);min-height: calc(100vh - 250px);">
                <h2>Thank you for Your Order!</h2>
                <p>A confirmation email was sent</p>
                <div class="mt-3">
                    <a href="{{ url('/') }}" class="btn btn-outline-primary">Home Page</a>
                </div>
            </div>
@endsection
