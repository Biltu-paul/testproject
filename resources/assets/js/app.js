import Vue from 'vue';

//import VueResource from 'vue-resource'
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */
var VueResource = require('vue-resource')

Vue.use(VueResource);

Vue.component('todo-item', require('./components/todo/TodoItems.vue'));
Vue.component('addtodo-item',require('./components/todo/AddTodoForm.vue'));


Vue.http.headers.common['X-CSRF-TOKEN']= document.querySelector("meta[name=csrf-token]").getAttribute('content');

new Vue({
	el:'#vue-app',

	data:{
		
		newTodo:{}

	},

	watch:{
		newTodo: function(newvalue, oldvalue){
			this.todos.push({
				id:Math.floor(Date.now()),
				title:newvalue.title,
				completed:false
			});

		}	

	}

});	