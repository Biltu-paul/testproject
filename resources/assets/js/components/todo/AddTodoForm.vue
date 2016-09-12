<script>
export default{
	props :['newtodo'],
	
	data: function(){
		return {
			temptodo:{id:null,title:'',completed:false}
		}

	},
	methods:{
		addnewTodo: function(){
				this.newtodo = this.temptodo;
				this.temptodo = {id:null,title:'',completed:false};

			}
		
	}
	


	}


</script>

<template>
	      <form  @submit.prevent='addnewTodo()'>
				<div class="form-group">
					<input type="text" v-model="temptodo.title"class="form-control" placeholder="Add a new">
				</div>
				<div class="form-group">
					<button class="btn btn-success">Add Todo</button>
				</div>				

			</form>


</template>