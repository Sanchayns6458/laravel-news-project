<article>
    <div class="top-politician-wrapper">
        <div class="featured-image" style="background-image: url({{url($image)}});"></div>

        <div class="entry-container">
            <span class="cat-links">
                <ul class="post-categories">
                    <li><a href="#" tabindex="0">{{$category}}</a></li>
                </ul>
            </span>
            <header class="entry-header">
                <h2 class="entry-title"><a href="#">{{$names}}</a></h2>
            </header>
            <div class="entry-content">
                <p>{{$description}}</p>
            </div>
            <div class="know-more">
                <a href="" class="btn">Know More
                    <svg version="1.0" viewBox="0 0 14.000000 15.000000"
                        preserveAspectRatio="xMidYMid meet">

                        <g transform="translate(0.000000,15.000000) scale(0.100000,-0.100000)"
                            stroke="none">
                            <path
                                d="M80 105 l23 -25 -51 0 c-29 0 -52 -4 -52 -10 0 -5 23 -10 52 -10 l51
                        0 -24 -28 c-15 -17 -11 -15 14 7 l37 35 -27 28 c-15 15 -31 28 -37 28 -5 0 1
                        -11 14 -25z" />
                        </g>
                    </svg>
                </a>
            </div>
            <div class="entry-meta">
                <span class="posted-on">
                    <span class="screen-reader-text">Posted on</span>
                    <a href="#" rel="bookmark" tabindex="0"><time
                            class="entry-date published" datetime="2018-10-24T08:24:51+00:00">{{$dates}}</time><time class="updated" datetime="2018-10-26T11:02:04+00:00">{{$dates}}</time></a>
                </span><!-- .posted-on -->
                <span class="min-read">{{$postTime}}</span>
            </div>
        </div>
    </div>
</article>