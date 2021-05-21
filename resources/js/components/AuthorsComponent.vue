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
            <div class="col-lg-6">
                <div class="col-lg-12 form-group has-feedback">
                    <input type="text"
                           class="form-control has-feedback-left"
                           name="surname_ru[]"
                           v-model="author.surname_ru"
                           :class="{'error':errors['surname_ru.'+index]}"
                           placeholder="Фамилия (на рус. языке)">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-lg-12 form-group has-feedback">
                    <input type="text"
                           class="form-control has-feedback-left"
                           name="name_ru[]"
                           v-model="author.name_ru"
                           :class="{'error':errors['name_ru.'+index]}"
                           placeholder="Имя (на рус. языке)">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-lg-12 form-group has-feedback">
                    <input type="text"
                           class="form-control has-feedback-left"
                           name="patronymic_ru[]"
                           v-model="author.patronymic_ru"
                           placeholder="Отчество (на рус. языке)">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-lg-12 form-group has-feedback">
                    <input type="text"
                           class="form-control has-feedback-left"
                           name="work_ru[]"
                           v-model="author.work_ru"
                           :class="{'error':errors['work_ru.'+index]}"
                           placeholder="Место работы (на рус. языке)">
                    <span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-lg-12 form-group has-feedback">
                    <input type="text"
                           class="form-control has-feedback-left"
                           name="adress_ru[]"
                           v-model="author.adress_ru"
                           :class="{'error':errors['adress_ru.'+index]}"
                           placeholder="Адрес (на рус. языке)">
                    <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-lg-12 form-group has-feedback">
                    <input type="text"
                           class="form-control has-feedback-left"
                           name="status_ru[]"
                           v-model="author.status_ru"
                           :class="{'error':errors['status_ru.'+index]}"
                           placeholder="Должность (на рус. языке)">
                    <span class="fa fa-star form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-lg-12 pr-0 form-group">
                            <select class="form-control"
                                    name="degree[]"
                                    :class="{'error':errors['degree.'+index]}"
                                    placeholder="ученая степень">
                                <option value="">ученая степень</option>
                                <option v-for="(deg,i) in degree" :value="deg.id">{{ deg.name}}</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="col-lg-12 pl-0 form-group">
                            <select class="form-control"
                                    name="rank[]"
                                    :class="{'error':errors['rank.'+index]}"
                                    placeholder="ученое звание">
                                <option value="">ученое звание</option>
                                <option v-for="(rank,i) in ranks" :value="rank.id">{{ rank.name}}</option>
                            </select>
                        </div>

                    </div>
                </div>

            </div>


            <div class="col-lg-6 ">
                <div class="col-lg-12 form-group has-feedback">
                    <input type="text"
                           class="form-control has-feedback-left"
                           name="surname_en[]"
                           v-model="author.surname_en"
                           :class="{'error':errors['surname_en.'+index]}"
                           placeholder="Фамилия (на анг. языке)">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-lg-12 form-group has-feedback">
                    <input type="text"
                           class="form-control has-feedback-left"
                           name="name_en[]"
                           v-model="author.name_en"
                           :class="{'error':errors['name_en.'+index]}"
                           placeholder="Имя (на анг. языке)">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-lg-12 form-group has-feedback">
                    <input type="text"
                           class="form-control has-feedback-left"
                           name="patronymic_en[]"
                           v-model="author.patronymic_en"
                           placeholder="Отчество (на анг. языке)">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-lg-12 form-group has-feedback">
                    <input type="text"
                           class="form-control has-feedback-left"
                           name="work_en[]"
                           v-model="author.work_en"
                           :class="{'error':errors['work_en.'+index]}"
                           placeholder="Место работы (на анг. языке)">
                    <span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-lg-12 form-group has-feedback">
                    <input type="text"
                           class="form-control has-feedback-left"
                           name="adress_en[]"
                           v-model="author.adress_en"
                           :class="{'error':errors['adress_en.'+index]}"
                           placeholder="Адрес (на анг. языке)">
                    <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-lg-12 form-group has-feedback">
                    <input type="text"
                           class="form-control has-feedback-left"
                           name="status_en[]"
                           :class="{'error':errors['status_en.'+index]}"
                           v-model="author.status_en"
                           placeholder="Должность (на анг. языке)">
                    <span class="fa fa-star form-control-feedback left" aria-hidden="true"></span>
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
        name: "AuthorsComponent",
        data: function(){
            return{
                authors:[{'surname_ru': '1',
                    'name_ru':'2',
                    'patronymic_ru':'3',
                    'work_ru':'3',
                    'adress_ru':'4',
                    'status_ru':'5',
                    'degree':'',
                    'rank':'',
                    'surname_en': '4',
                    'name_en':'5',
                    'patronymic_en':'4',
                    'work_en':'4',
                    'adress_en':'5',
                    'status_en':'4'}]
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
                this.authors.push({'surname_ru': '',
                    'name_ru':'',
                    'patronymic_ru':'',
                    'work_ru':'',
                    'adress_ru':'',
                    'status_ru':'',
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
