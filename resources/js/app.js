/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
Vue.component('chat-component', require('./components/ChatComponent.vue'));
Vue.component('user-component', require('./components/UserComponent.vue'));
Vue.component('chat-messages-component', require('./components/ChatMessageComponent.vue'));
Vue.component('chat-form-component', require('./components/ChatFormComponent.vue'));
Vue.component('message-component', require('./components/MessageComponent.vue'));
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/chatComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('chat-component', require('./components/ChatComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    data: {
        all:[],
        name:'',
        nameUpdate:'',
        vue:[],
        id:'',
        nameSearch:'',
        hasError:true,
        hasDeleted:true,
    },
    mounted() {
        this.alluser();
    },
    methods: {
        alluser: function () {
            axios.get('/allVue').then(response=> {
                    this.all = response.data;
                }
            )
        },
        storeVue:function () {
            var testName=this.name;
            if(testName === ''){
                this.hasError = false;
                this.hasDeleted = true;
            }else {
                this.hasError = true;
                axios.post('/storeVue',{
                    name:this.name,
                }).then(response=>{
                    this.alluser();
                    this.name="";
                })
            }
        },
        deleteVue:function (index) {
            axios.post('/deleteVue/'+index.id).then(response=>{
                this.alluser();
                this.hasError = true;
                this.hasDeleted = false;
            })
        },
        Updatevue:function (index) {
            axios.post('/ShowUpdate/'+index.id).then(response=>{
                this.vue=response.data;
                $("#edit").fadeIn(1000);
            })
        },
        saveEdit:function (vue) {
            axios.put('/saveEdit/'+vue.id,{
                name:vue.name,
            }).then(response=>{
                $("#edit").fadeOut(1000);
                this.alluser()
            })
        },
        vueSearch:function () {
            axios.post('/vueSearch',{
                name:this.nameSearch
            }).then(response=>{
                this.hasError=true;
                this.hasDeleted=true;
                this.all=response.data
            })
        },
        onclick:function () {
            this.hasError=true;
            this.hasDeleted=true;
        }
    }
});





























