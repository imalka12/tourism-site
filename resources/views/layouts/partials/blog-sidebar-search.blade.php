<!-- Search Widget -->
<div class="card my-4">
    <h5 class="card-header">Search</h5>
    <div class="card-body">
    <form action="{{route('site.blog-search-posts')}}" method="get">
        @csrf

        <div class="input-group">
            <input type="text" id="search_text" name="search_text" class="form-control" placeholder="Search for..." required>
            <div class="input-group-append">
                <button class="btn btn-secondary input-group-btn" type="submit">Search</button>            
            </div>
        </div>
    </form>
    </div>
</div>
