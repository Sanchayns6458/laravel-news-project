<li data-tab="header-post-01" class="active">
    <article>
        <div class="entry-container">
            <span class="cat-links">
                <ul class="post-categories">
                    <li><a href="#" tabindex="0">{{$category}}</a></li>
                </ul>
            </span>

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
                <span class="min-read">{{$postTime}}</span>
            </div>
        </div>

        <div class="featured-image" style="background-image: url({{url($image)}});">
            <a href="#" class="post-thumbnail-link"></a>
        </div>
    </article>
</li>