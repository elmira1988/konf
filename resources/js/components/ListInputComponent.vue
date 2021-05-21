<template>
    <div>
        <div v-for="(word,i) in data" class="row row-15 form-group status" >
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                <div class="form-group">
                    <input type="text"
                           :name="input_name+'[]'"
                           :placeholder="placeholder"
                           :class="{'error':all_errors[i]}"
                           v-model="data[i]"
                           class="form-control">
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <div class="float-right">
                    <button class="btn btn-danger" type="button" @click="delete_list(i)">
                        <span class="fa fa-close"></span></button>
                </div>
            </div>
        </div>

        <div class="panel-footer">
            <button type="button" class="btn btn-outline-secondary mt-2 pt-0 pb-0 pl-2 pr-2 pull-right"  @click="add_list">
                <span class="fa fa-plus mr-2"></span>{{ button }}
            </button>
        </div>
    </div>

</template>

<script>
    export default {
        name: "ListInputComponent",
        data: function(){
            return{
                data:[]
            }
        },
        props:{
            input_name:{
                type:String,
                default:''
            },
            placeholder:{
                type:String,
                default:''
            },
            obj: {
                type: Array,
                default() {
                    return ['']
                }
            },
            button: {
                type: String,
                default:'добавить'
            },
            errors:{
                type:Object,
                default:{}
            }
        },
        computed: {
            all_errors:function () {
                let arr=[];

                for (let key in this.errors){
                    let d=key.split('.');
                    if(d.length>1){
                        if(d[0]==this.input_name){
                            arr[d[1]]=1;
                        }
                    }
                };
                return arr;
            }
        },
        mounted() {
            if(this.obj===null)
            {
                this.data = [];
            }
            else
            {
                this.data = this.obj;
            }

        },
        methods:{
            delete_list: function (i) {
                this.data.splice(i,1);
            },
            add_list: function () {
                this.data.push('');
            }
        }
    }
</script>

<style scoped>

</style>
