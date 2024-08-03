<!-- Categories Widget -->
<div class="card my-4">
    <h5 class="card-header">Categories</h5>
    <div class="card-body">
        <div class="row">
            @php
                $max = 3;
                $count = 1;
            @endphp
            <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                    @foreach ($categories as $category)
                    @if ($count > 3)
                        </ul>
                        </div>
                        <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                        @php
                            $count = 1;
                        @endphp
                    @endif
                    
                    <li><a href="{{route('site.blog-category-posts', $category->slug)}}">{{$category->name}}</a></li>
                    @php
                        $count++;
                    @endphp
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>