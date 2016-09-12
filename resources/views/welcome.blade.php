@extends('master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        @include('partials/top-menu')

       <h1>My Todo</h1>
		<todo-item></todo-item>
		<addtodo-item :newtodo.sync='newTodo'></addtodo-item>
    </div>
</div>
@endsection