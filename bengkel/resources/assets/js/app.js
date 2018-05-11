require('./bootstrap');

window.Vue = require('vue');

window.VueRouter=require('vue-router').default;

window.VueAxios=require('vue-axios').default;

window.Axios=require('axios').default;

let AppLayout= require('./components/App.vue');

const List = Vue.component('List',require('./components/List.vue'));


//registring Modules
Vue.use(VueRouter,VueAxios,axios);



//variabel utnuk penampung dekalrasi
const routes = [
	{
		name : 'List',
		path : '/',
		component : List
	}
]

//belum bisa manggil navbar nya
/*const navbar = Vue.component('Navbar', require('./components/Navbar.vue'))
const routes = [
	{
		name : 'Navbar',
		path : '/',
		component : Navbar
	}
]*/


const router = new VueRouter({ mode: 'history', routes: routes});


new Vue(
 Vue.util.extend(
 { router },
 AppLayout
 )
).$mount('#app');

