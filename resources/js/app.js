/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    mounted: function() {
        console.log('123');

    },
    data: function(){
        return{
            errors: {}
        }
    },
    mounted:function (){
    },
    methods:{
        send_form:function (e) {
            console.log('send form!');
            e.preventDefault();
            let form = $(e.target);
            let url = form.attr('action');
            let formData = new FormData(form[0]);

            $('body').append('<div class="modal-backdrop show"></div>');
            $('.modal-preloader').addClass('d-block');

            axios.post( url,
                formData,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then((response) =>{
                console.log('SUCCESS!!');
                console.log(response);

                //Не прошла проверка форма с данными
                if(response.data.errors){
                    console.log(response.data.errors);
                    this.errors = response.data.errors;

                    $('body').find(".modal-backdrop.show").remove();
                    $('.modal-preloader').removeClass('d-block');

                    if (!$.isEmptyObject(this.errors)) {
                        console.log('он не пустой');
                        PNotify.alert({
                            title: 'Ошибка в данных',
                            text: "Пожалуйста, проверьте вводимые данные!",
                            type: 'error',
                            hide: true,
                            animation: 'fade',
                            animateSpeed: '250ms',
                            delay: 400000,
                            remove: true,
                            width:700,
                            styling: 'bootstrap4',
                            buttons: {closer: false,sticker: false}
                        });
                    }

                }
                else {
                    $('body').find(".modal-backdrop.show").remove();
                    $('.modal-preloader').removeClass('d-block');

                    if(response.data.status=='error'){
                        PNotify.alert({
                            title: 'Ошибка!',
                            text: "Ошибка при работе с базой данных!",
                            type: 'danger',
                            hide: true,
                            animation: 'fade',
                            animateSpeed: '250ms',
                            delay: 4000,
                            remove: true,
                            width:700,
                            styling: 'bootstrap4',
                            buttons: {closer: false,sticker: false}
                        });
                    }
                    else {
                        document.getElementById('sendokbtn').click();
                    }

                }
            })
                .catch((error) =>{
                    console.log('FAILURE!!');
                });
        },
        removeErrors: function (el) {
            let obj={};
            let name = $(el).attr('name');
            for(let key in this.errors){
                if(key!=name){
                    obj[key]=this.errors[key];
                }
            }
            this.errors=obj;
        },
        reload_page: function () {
            window.location.reload()
        }
    }
});
