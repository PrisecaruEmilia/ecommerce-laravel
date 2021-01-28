{{-- <a href="#" class="fb-ic">
    <i class="fa fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
</a>
<a href="#" class="tw-ic">
    <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
</a>
<a href="#" class="ins-ic">
    <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
</a>
<a href="#" class="pin-ic">
    <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
</a> --}}


@foreach($items as $menu_item)
    <a href="{{ $menu_item->link() }}">
        <i class="{{ $menu_item->title }} fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
    </a>
@endforeach
