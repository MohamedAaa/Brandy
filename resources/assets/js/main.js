import Vue from 'vue';
var Test = require('../../views/test.vue');

var VueResource = require('vue-resource');
var VueValidator = require('vue-validator')

Vue.use(VueValidator)
Vue.use(VueResource);

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector("meta[name=csrf-token]").getAttribute('content');

new Vue({
	 http: {
      root: '/root',
      headers: {
        Authorization: 'Basic YXBpOnBhc3N3b3Jk'
      }
    },
	el:'#Add',
	data:{
		name:'',
		email:'',
		password:'',
		token: document.querySelector("meta[name=csrf-token]").getAttribute('content'),
		status : false,
		showErrors: false

	},
	components:{
		test : Test
	}
	,
	methods:{
		add:function () {
			console.log(this.$userValid);
			var postData = {name:this.name,email:this.email,password:this.password,_token:this.token};
			// if (this.$userValid.valid) {
				this.$http.post('/admins/users',postData).then((response) => {
					alert("Done Add!");
					this.name = '';
					this.email = '';
					this.password = '';
					this.status = true;
					this.showErrors = false;
		     		console.log("added",response);
					
		     	}).catch((response)=>{
		     		console.log("error",response);
		     	});

			// }else{
				this.showErrors = true;
			// }
		}
	}
});