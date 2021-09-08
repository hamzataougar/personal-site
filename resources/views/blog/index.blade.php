<!-- Blog Subpage -->
<section data-id="blog" class="animated-section">
<div class="page-title">
    <h2>Blog</h2>
</div>

<div class="section-content">
    <div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="blog-masonry two-columns clearfix">
            @foreach ($posts as $post)
                <div class="item post-1">
                    <div class="blog-card">
                        <div class="media-block">
                            <div class="category">
                            <a href="#" title="View all posts in Design">{{$post->category->name}}</a>
                            </div>
                            <a href="{{ route('posts.show',$post->id) }}">
                            <img src="{{ Voyager::image( $post->image ) }}" class="size-blog-masonry-image-two-c" alt="Why I Switched to Sketch For UI Design" title="{{$post->title}}" />
                            <div class="mask"></div>
                            </a>
                        </div>
                        <div class="post-info">
                            <div class="post-date">{{$post->created_at->diffForHumans();}}

                                </div>
                            <a href="{{ route('posts.show',$post->id) }}">
                            <h4 class="blog-item-title">{{$post->title}}</h4>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</div>


</section>
<!-- End of Blog Subpage -->