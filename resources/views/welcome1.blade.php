<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}">
		<style type="text/css">
			li.completed{
				text-decoration: line-through;
			}
	
			.margin-right-10{
				margin-right: 10px;
			}
	
		</style>
        <title>Laravel</title>


    </head>
    <body>
		<div class="container" id="vue-app">
	<div class="row">
		<div class="col-sm-12">
		<h1>My Todo</h1>
		<todo-item :todos='todos'></todo-item>
		<addtodo-item :newtodo.sync='newTodo'></addtodo-item>
			
		</div>
	</div>

</div>


		
		<script type="text/javascript" src="{{elixir('js/app.js')}}"></script>
    </body>
</html>
