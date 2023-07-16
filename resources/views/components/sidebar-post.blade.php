<article>
    <div class="{{$classes}}">
        <div class="featured-image" style="background-image: url({{url($image)}});">
        </div>
        <div class="entry-container">
            <header class="entry-header">
                <h2 class="entry-title"><a href="#">{{$titles}}</a></h2>
            </header>
            <div class="entry-meta">
                <span class="posted-on">
                    <span class="screen-reader-text">Posted on</span>
                    <a href="#" rel="bookmark" tabindex="0"><time
                            class="entry-date published"
                            datetime="2018-10-24T08:24:51+00:00">{{$dates}}</time><time
                            class="updated" datetime="2018-10-26T11:02:04+00:00">{{$dates}}</time></a>
                </span><!-- .posted-on -->
                <span class="tag-links"><a class="url fn n" href="#"
                        tabindex="0">{{$category}}</a></span>
            </div>
        </div><!-- .entry-container -->
    </div>
</article>