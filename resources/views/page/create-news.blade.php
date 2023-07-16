@include('constant.header')
<div id="content" class="site-content wrapper" style="padding-top: 260px; padding-bottom:30px;">
    {!! Form::open([
            'url' => url('news_create'),
            'method' => 'post',
            'id'    => 'news-create-form'
        ]) !!}
        <div class="ns-news-crate-title">
            {!! Form::label('news_title', 'News Title') !!}
            {!! Form::text('news_title', null,[
                'placeholder' => 'Please enter your news title..............'
            ]) !!}
        </div>
        <div class="ns-news-create-category">
            {!! Form::label('news_cat', 'News Category') !!}
            {!! Form::select('news_cat',[
                    'latest' => 'Latest', 
                    'breaking_news' => 'Breaking News',
                    'top'           => 'Top News',
                    'feature_news'  => 'Featur News',
                    'hot_news'      => 'Hot Topic',
                    'popular_news'  => 'Popular'
            ], null, [
                'placeholder' => 'Select you news category',
                'class' => 'ns-news-select-cat'
            ] ) !!}
        </div>

        <br />
        <div class="ns-news-create-sub-category">
            {!! Form::label('news_sub_cat', 'News Sub Category') !!}
            {!! Form::select('news_sub_cat',[
                'bussiness' => 'Bussiness', 
                'Health' => 'Health',
                'marketting'           => 'Marketting',
                'study'  => 'Study',
                'transportation'      => 'transportation',
                'politician'  => 'Politician'
            ], null, [
                'placeholder' => 'Select you news sub category',
                'class' => 'ns-news-select-sub-cat'
            ] ) !!}
        </div>
        <br />
        <div class="ns-new-create-location">
            {!! Form::label('news_location', 'Location') !!}
            {!! Form::select('news_location',[
                'nepal' => 'Nepal', 
                'india' => 'India',
                'america'           => 'America',
                'france'  => 'France',
                'mexico'      => 'Mexico',
                'world'  => 'World'
            ], null, [
                'placeholder' => 'Select you news location',
                'class' => 'ns-news-select-location'
            ] ) !!}
        </div>
        <br />
        <div class="ns-news-create-status">
            {!! Form::label('news_status', 'News Status') !!}
            {!! Form::select('news_status',[
                'publish' => 'Publish', 
                'draft' => 'Draft',
            ], null, [
                'placeholder' => 'Select you news status',
                'class' => 'ns-news-select-status'
            ] ) !!}
        </div>
        <br/>
        <div class="ns-news-create-description">
            {!! Form::label('news_desc', 'News Description',['class' => 'ns-news-discription'] ) !!}
            {!! Form::textarea('news_desc', null, [
                'placeholder' => 'Please enter news description..................'
            ]) !!}
        </div>
    {!! Form::close() !!}

</div>

@include('constant.footer')