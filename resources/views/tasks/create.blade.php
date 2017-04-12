@extends('layouts.app')

@section('content')

	<h1>タスク新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
		<br>
        {!! Form::label('status', 'ステータス:') !!}
        高{!! Form::radio('status', '高') !!}
        中{!! Form::radio('status', '中', true) !!}
        低{!! Form::radio('status', '低') !!}
		<br>
        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

	{!! link_to_route('tasks.index', '一覧へ') !!}

@endsection
