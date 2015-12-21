@extends('app')

@section('content')
    <h1>{{ $article->title }}</h1>

    <article>
        {{ $article->body }}
    </article>

    @unless($article->tags->isEmpty())
        <h4>Tags:</h4>
        <ul>
            @foreach($article->tags as $tag)
                <li><a href="/tags/{{ $tag->name }}">{{ $tag->name }}</a></li>
            @endforeach
        </ul>
    @endunless

    <div class="row" style="margin-top: 30px;">
        <div class="col-md-12">
            <a href="{{ $article->id }}/edit" class="btn btn-info pull-left" style="margin-right: 10px">Edit Article</a>
            {!! Form::open(['method' => 'DELETE', 'route' => ['articles.destroy', $article->id]]) !!}
                {!! Form::submit('Delete Article?', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
