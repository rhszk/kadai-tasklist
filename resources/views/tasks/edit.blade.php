@extends('layouts.app')

@section('content')

	<h1>id: {{ $task->id }} のタスク編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

	<div class="row">
    	<div class="col-lg-offset-3 col-lg-6 col-sm-offset-2 col-sm-8 col-xs-12">

		<div class="form-group">
        	{!! Form::label('content', 'タスク') !!}
        	{!! Form::text('content', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
        	{!! Form::label('name', '匿名') !!}
        	{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>
			{!! Form::label('status', 'ステータス') !!}
		<div class="form-group">
            {!! Form::label('status','高') !!}
            {!! Form::radio('status', '高') !!}
            {!! Form::label('status','中') !!}
            {!! Form::radio('status', '中', true) !!}
            {!! Form::label('status','低') !!}
            {!! Form::radio('status', '低') !!}
        </div>
			{!! Form::label('progress', '進捗') !!}
		<div class="form-group">
            {!! Form::label('progress','未完了') !!}
            {!! Form::radio('progress', '未完了') !!}
            {!! Form::label('progress','進行中') !!}
            {!! Form::radio('progress', '進行中') !!}
            {!! Form::label('progress','完了') !!}
            {!! Form::radio('progress', '完了') !!}
        </div>

        {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}

    	{!! Form::close() !!}

		</div>
	</div>

@endsection
