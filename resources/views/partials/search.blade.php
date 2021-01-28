<div class="col-sm-12 col-md-6">
    <!-- Search form -->
    <form action="{{ route('search') }}" method="GET" class="d-flex">
        <i class="fa fa-search mr-2 mt-2" aria-hidden="true"></i>
        <input class="form-control" name="query" value="{{ request()->input('query') }}" id="query" type="text" placeholder="Search"
        aria-label="Search">
    </form>
</div>
