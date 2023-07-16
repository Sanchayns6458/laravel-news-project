{{-- @include('constant.header') --}}
@extends( 'index' )
@section( 'createNewsForm' )
    <div id="content" class="site-content wrapper" style="padding-top: 260px; padding-bottom:30px;">
        {{-- Open form for create news--}}
        {!! Form::open([
                'url' => route( 'newsCreate' ),
                'method'    => 'post',
                'id'        => 'news-create-form',
                'enctype'   => 'multipart/form-data'
            ]) !!}
            <div class="ns-news-crate-title">
                {!! Form::label('news_title', 'News Title') !!}
                {!! Form::text('news_title', null,[
                    'placeholder' => 'Please enter your news title..............'
                ]) !!}
                @error( 'news_title' ) 
                    {{ $message }}
                @enderror
            </div>
            {{-- <pre> --}}
            {{-- @php 
                print_r( $errors->all() );
            @endphp --}}
            {{-- </pre> --}}
            <div class="ns-news-create-category">
                {!! Form::label('news_cat', 'News Category') !!}
                {!! Form::select('news_cat',[
                        'latest' => 'Latest', 
                        'breaking_news' => 'Breaking News',
                        'top'           => 'Top News',
                        'feature_news'  => 'Featur News',
                        'hot_news'      => 'Hot Topic',
                        'popular_news'  => 'Popular'
                ], 'latest', [
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
                ], 'bussiness', [
                    'placeholder' => 'Select you news sub category',
                    'class' => 'ns-news-select-sub-cat'
                ] ) !!}
            </div>
            <br />
            <div class="ns-new-create-location">
                {!! Form::label('news_location', 'Location') !!}
                {!! Form::select('news_location',[
                    'nepal'         => 'Nepal', 
                    'india'         => 'India',
                    'america'       => 'America',
                    'france'        => 'France',
                    'mexico'        => 'Mexico',
                    'world'         => 'World'
                ], 'nepal', [
                    'placeholder'   => 'Select you news location',
                    'class'         => 'ns-news-select-location'
                ] ) !!}
            </div>
            <br />
            <div class="ns-news-create-status">
                {!! Form::label('news_status', 'News Status') !!}
                {!! Form::select('news_status',[
                    'publish'       => 'Publish', 
                    'draft'         => 'Draft',
                ], 'draft', 
                [
                    'placeholder'   => 'Select you news status',
                    'class'         => 'ns-news-select-status'
                ] ) !!}
            </div><br/>
            <div class="ns-news-image">
                {!! Form::label('news_desc', 'News Description',['class' => 'ns-news-discription'] ) !!}
                {!! Form::file('news_image', [
                    'class'     => 'ns-news-file-uploading',
                    'accept'    =>"image/*"
                ]) !!}
            </div>
            <br/>
            <div class="ns-news-create-description">
                {!! Form::label('news_desc', 'News Description',['class' => 'ns-news-discription'] ) !!}
                {!! Form::textarea('news_desc', null, [
                    'placeholder' => 'Please enter news description..................',
                    'id'            => 'news-description'
                ]) !!}
                {{-- <textarea name="news_desc" id="news-Descrip" cols="30" rows="10"></textarea> --}}
            </div> <br>
            {!! Form::submit('Create') !!}
        {!! Form::close() !!}
        {{-- Close form for create news--}}

    </div>
@endsection
{{-- @include('constant.footer') --}}