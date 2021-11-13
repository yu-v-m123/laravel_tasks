@extends('layouts.app')

<style>
  .complete {
    text-decoration: line-through double;
  }
</style>

@section('content')

<h1>タスク一覧</h1>
<table class="table">
  <a href="{{ route('tasks.create') }}" class="btn btn-success">新規追加</a>
  <tr>
    <th>登録日</th>
    <th>タイトル</th>
    <th>期限日</th>
    <th>完了日</th>
  </tr>

  @foreach ($tasks as $task)
  <tr class="
  @if (!is_null($task->completion_date))
  complete
  @elseif ($task->expiration_date < date('Y-m-d'))
  bg-danger
  @endif
  ">
    <td>{{ $task->registration_date }}</td>
    <td>{{ $task->title }}</td>
    <td>{{ $task->expiration_date }}</td>
    <td>{{ $task->completion_date }}</td>
    <td>
      <form action="{{ route('tasks.destroy', $task) }}" method='post' class="form-inline">
        @method('DELETE')
        @csrf
        <a href="{{ route('tasks.show', $task) }}" class="btn btn-primary mr-2">詳細</a>
        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning mr-2">修正</a>
        <button type="submit" class="btn btn-danger" onclick="return confirm('本当に削除しますか？');">削除</button>
      </form>
    </td>
  </tr>
  @endforeach

</table>
{{ $tasks->links() }}

@endsection