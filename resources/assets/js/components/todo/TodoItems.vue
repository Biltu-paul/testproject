
<script>

export default{
	
	created: function(){
			this.$http.get('api/v1/todos').then(function(response){
			console.log(response);
				if(response.status == 200){
					this.todos = response.data;
				}
			
    			});
		},
		
	data: function(){
		return {
			todos:{}
		
		}
		
	},	
	

	
		methods:{
		todoCompleted: function(todo){
				
				todo.completed =! todo.completed;

			},

		deleteTodo: function(todo){
				this.todos.$remove(todo);

			}


	}
}

</script>

<template>
		
		<pre>{{$data | json}}</pre>
		<ul class="list-group" v-if="todos.length > 0">
				<li class="list-group-item"
				 v-bind:class="{'completed':todo.completed}"
				 v-for="todo in todos | orderBy 'title' 1">

					{{todo.title}}
					<button class="btn btn-danger btn-xs pull-right" @click="deleteTodo(todo)">
					Delete
					</button>

					<button class="btn btn-xs pull-right margin-right-10"
					 v-bind:class="{'btn-success':todo.completed, 'btn-warning': !todo.completed}"
					 @click="todoCompleted(todo)">{{todo.completed ?'completed':'pending'}}</button>
				</li>
			</ul>

			<div v-else> <p>You don't have any Todo</p></div>		

</template>