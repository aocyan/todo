@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection


@section('content')
    <div class="todo-form__content">
        <form class="form" action="/contacts/todo" method="post">
            @csrf
        </form>
    </div>
@endsection
