<template>
    <div>
        <div v-for="(author,index) in authors" class="row" :key="index">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h6 v-if="authors.length>1"><b>Автор №{{(index+1)}}</b>
                        <button v-if="index!=0" type="button" class="btn btn-outline-danger mt-0 pt-0 pb-0 pl-2 pr-2" @click="delete_list(index)">
                            <span class="fa fa-trash mr-2"></span>удалить
                        </button></h6>
                </div>
            </div>

            <div class="col-lg-4 form-group has-feedback">
                <input type="text"
                       class="form-control has-feedback-left"
                       name="surname[]"
                       v-model="author.surname"
                       :class="{'error':errors['surname.'+index]}"
                       placeholder="Фамилия">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-lg-4 form-group has-feedback">
                <input type="text"
                       class="form-control has-feedback-left"
                       name="name[]"
                       v-model="author.name"
                       :class="{'error':errors['name.'+index]}"
                       placeholder="Имя">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-lg-4 form-group has-feedback">
                <input type="text"
                       class="form-control has-feedback-left"
                       name="patronymic[]"
                       v-model="author.patronymic"
                       placeholder="Отчество">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-lg-12 form-group has-feedback">
                <input type="text"
                       class="form-control has-feedback-left"
                       name="work[]"
                       v-model="author.work"
                       :class="{'error':errors['work.'+index]}"
                       placeholder="Название организации">
                <span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-lg-12 form-group has-feedback">
                <input type="text"
                       class="form-control has-feedback-left"
                       name="adress[]"
                       v-model="author.adress"
                       :class="{'error':errors['adress.'+index]}"
                       placeholder="Адрес организации">
                <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-lg-4 form-group has-feedback">
                <input type="text"
                       class="form-control has-feedback-left"
                       name="status[]"
                       v-model="author.status"
                       :class="{'error':errors['status.'+index]}"
                       placeholder="Должность">
                <span class="fa fa-star form-control-feedback left" aria-hidden="true"></span>
            </div>
            <div class="col-lg-4 form-group">
                    <select class="form-control"
                            name="degree[]"
                            :class="{'error':errors['degree.'+index]}"
                            placeholder="ученая степень">
                        <option value="">ученая степень</option>
                        <option v-for="(deg,i) in degree" :value="deg.id">{{ deg.name}}</option>
                    </select>
            </div>
            <div class="col-lg-4 form-group">
                    <select class="form-control"
                            name="rank[]"
                            :class="{'error':errors['rank.'+index]}"
                            placeholder="ученое звание">
                        <option value="">ученое звание</option>
                        <option v-for="(rank,i) in ranks" :value="rank.id">{{ rank.name}}</option>
                    </select>

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
        name: "ChildAuthorsComponent",
        data: function(){
            return{
                authors:[{'surname': '',
                    'name':'',
                    'patronymic':'',
                    'work':'',
                    'adress':'',
                    'status':'',
                    'degree':'',
                    'rank':'',
                    'surname_en': '',
                    'name_en':'',
                    'patronymic_en':'',
                    'work_en':'',
                    'adress_en':'',
                    'status_en':''}]
            }
        },
        props:{
            button: {
                type: String,
                default:'добавить'
            },
            degree:{
                type:Array,
                default:[]
            },
            ranks:{
                type:Array,
                default:[]
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
                this.authors.splice(i,1);
            },
            add_list: function () {
                this.authors.push({'surname': '',
                    'name':'',
                    'patronymic':'',
                    'work':'',
                    'adress':'',
                    'status':'',
                    'degree':'',
                    'rank':'',
                    'surname_en': '',
                    'name_en':'',
                    'patronymic_en':'',
                    'work_en':'',
                    'adress_en':'',
                    'status_en':''});
            }
        }
    }
</script>

<style scoped>

</style>
