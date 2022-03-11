<template>
    <div>
        <div class="row mb-3">
            <div class="col-lg-6">
                <select class="form-control"
                        name="form"
                        v-model="form"
                        @focus="$emit('update:errors', $root.removeErrors($event.target))"
                        :class="{'error':errors['form']}">
                    <option value="">Форма участия</option>
                    <option v-for="form in forms" :value="form.id">{{ form.id+'.  '+form.name }}</option>
                </select>
            </div>

        </div>

        <div class="row" v-if="form === 4">
            <div class="col-lg-4 form-group has-feedback">
                <input type="text"
                       class="form-control has-feedback-left"
                       name="surname[]"
                       :class="{'error':errors['surname.0']}"
                       placeholder="Фамилия">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-lg-4 form-group has-feedback">
                <input type="text"
                       class="form-control has-feedback-left"
                       name="name[]"
                       :class="{'error':errors['name.0']}"
                       placeholder="Имя">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-lg-4 form-group has-feedback">
                <input type="text"
                       class="form-control has-feedback-left"
                       name="patronymic[]"
                       placeholder="Отчество">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-lg-12 form-group has-feedback">
                <input type="text"
                       class="form-control has-feedback-left"
                       name="adress[]"
                       :class="{'error':errors['adress.0']}"
                       placeholder="Регион/Город/Район">
                <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>

        <div v-if="form!==4 && form!==''">
            <h5 class="text-center">Авторы</h5>
            <child-authors-component :degree="degree"
                                     :ranks="ranks"
                                     :errors="errors"></child-authors-component>

            <h5 class="text-center mt-4">Статья</h5>

            <div class="row">
                <div class="col-lg-12 form-group">
                            <textarea class="form-control"
                                      rows="3"
                                      name="article_name"
                                      :class="{'error':errors['article_name']}"
                                      @focus="$emit('update:errors', $root.removeErrors($event.target))"
                                      placeholder="Название статьи"></textarea>
                </div>
            </div>

            <div class="row mt-3">


                <div class="col-lg-6">
                    <label for="tex">Размещение тезиса доклада в сборнике</label>
                    <select class="form-control"
                            placeholder="секция"
                            name="section"
                            @focus="$emit('update:errors', $root.removeErrors($event.target))"
                            :class="{'error':errors['section']}">
                        <option value="1">да</option>
                        <option value="0">нет</option>
                    </select>
                </div>

                <div class="col-lg-6 form-group">
                    <div class="form-group">
                        <label for="tex">Статья ( *.docx)</label>
                        <input type="file" class="form-control-file" id="tex" name="files" :class="{'error':errors['files']}">
                    </div>
                </div>
            </div>
        </div>

        <div v-if="form!==''" class="row mt-3">
            <div class="col-lg-6">
                <select class="form-control"
                        name="section"
                        @focus="$emit('update:errors', $root.removeErrors($event.target))"
                        :class="{'error':errors['section']}">
                    <option value="">Секция</option>
                    <option v-for="section in sections" :value="section.id">{{ section.id+'.  '+section.name }}</option>
                </select>
            </div>
        </div>


        <div v-show="form!==''">
            <h5 class="text-center mt-4">Контактные данные</h5>

            <div class="row">
                <div class="col-lg-6">
                    <input type="text"
                           class="form-control has-feedback-left"
                           data-masked= "(999)999-9999"
                           :class="{'error':errors['phone']}"
                           @focus="$emit('update:errors', $root.removeErrors($event.target))"
                           name="phone"
                           placeholder="Телефон">
                    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-lg-6">
                    <input type="text"
                           class="form-control has-feedback-left"
                           :class="{'error':errors['email']}"
                           @focus="$emit('update:errors', $root.removeErrors($event.target))"
                           name="email"
                           placeholder="E-mail">
                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <textarea class="form-control"
                              rows="3"
                              name="node"
                              :class="{'error':errors['node']}"
                              @focus="$emit('update:errors', $root.removeErrors($event.target))"
                              placeholder="Комментарий"></textarea>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "ChildRequestComponent",
        data: function(){
            return{
                form: ""
            }
        },
        props: {
            forms: {
                type: Array,
                default: []
            },

            sections: {
                type: Array,
                default: []
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
        }
    }
</script>

<style scoped>

</style>
