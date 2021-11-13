@extends('layouts.app')

<style>
  input[type="date"] {
    width: 200px;
  }
</style>

@section('content')

<h1>タスクを新規追加</h1>

@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<ul>
  <li>{{ $error }}</li>
  </ul>
  @endforeach
@endif

<form action="{{ route('tasks.store') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="title">タイトル</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
  </div>
  <div class="form-group">
    <label for="expiration_date">期限日</label>
    <input type="date" name="expiration_date" id="expiration_date" class="form-control"
      value="{{ old('expiration_date') }}">
  </div>
  <div class="form-group">
    <label for="completion_date">完了日</label>
    <input type="date" name="completion_date" id="completion_date" class="form-control"
      value="{{ old('completion_date') }}">
  </div>
  <div class="form-group">
    <label for="description">説明</label>
    <textarea name="description" id="descriptin" rows="5" class="form-control">{{ old('descripution') }}</textarea>
  </div>
  <button class="btn btn-primary" type="submit">送信</button>
  <a href="{{ route('tasks.index') }}" class="btn btn-secondary">戻る</a>
</form>

@endsection