@extends('layouts.app')

@section('content')

	<h1>タスク一覧</h1>

    @if (count($tasks) > 0)
		<table class="table table-striped">
			<thead>
				<tr>
					<th>id</th>
					<th>ステータス</th>
					<th>進捗</th>
					<th>タスク</th>
					<th>作成日</th>
					<th>更新日</th>
				</tr>
			</thead>
			<tbody>
            @foreach ($tasks as $task)
<?php
	$c_datetime = $task->created_at;
	$u_datetime = $task->updated_at;
	$c_date = date('Y/m/d', strtotime($c_datetime));
	$u_date = date('Y/m/d', strtotime($u_datetime));
?>
				<tr>
					<td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id])!!}</td>
					<td>{{ $task->status }}</td>
					<td>{{ $task->progress }}</td>
					<td>{{ $task->content }}</td>
					<td>{{ $c_date }}</td>
					<td>{{ $u_date }}</td>
				</tr>
            @endforeach
			</tbody>
		</table>
    @endif

	{!! link_to_route('tasks.create', '新規タスクの作成', null, ['class' => 'btn btn-primary']) !!}

@endsection
