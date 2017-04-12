@extends('layouts.app')

@section('content')

	<h1>id: {{ $task->id }} のタスク編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        <br>
        {!! Form::label('status', 'ステータス:') !!}
        高{!! Form::radio('status', '高') !!}
        中{!! Form::radio('status', '中') !!}
        低{!! Form::radio('status', '低') !!}
        <br>
        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

 	{!! link_to_route('tasks.index', '一覧へ') !!}

@endsection
