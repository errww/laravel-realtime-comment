
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.component('timeline', require('./components/mediaTimeline.vue'));

 const app = new Vue({
    el: '#app',
    data:{
    	
    	message:'',
    	timeline:{

    		message:[],
            user:[]
        }
    },

    methods:{
    	send(){

    		if(this.message.length !=0){
    			
    			this.timeline.message.push(this.message);
                this.timeline.user.push('You');

                axios.post('/send', {

                    message : this.message

                })
                .then(response => {
                    console.log(response);
                    this.message = ''
                })
                .catch(error => {
                    console.log(error);
                });
            }

        },

    },

    mounted(){

        Echo.private('timeline')
        .listen('TimelineEvent', (e) => {

            this.timeline.message.push(e.message);
            this.timeline.user.push(e.user);

            //console.log(e);
        });
    }
});
