<template>
    <div class="container">
        <div class="form-group col-6">
            <small id="emailHelp" class="form-text text-muted">Categoría</small>
            <select2 class="form-control form-control-sm" :options="categories" v-model="Category" @input="getCategories">
            </select2>
        </div>
        <div class="form-group col-6">
            <small id="emailHelp" class="form-text text-muted">Subcategoría</small>
            <select2 class="form-control form-control-sm" :options="subCategories" v-model="SubCategory">
            </select2>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import VueAxios from 'vue-axios';
    Vue.use(VueAxios, axios);
    export default {
        mounted() {

            Vue.axios.get('getCategories')
            .then((response)=>{
                this.categories = response.data;    
            })
        },
        data: function(){
            return {
                Category: '0',
                SubCategory: '0',
                categories:[],
                subCategories : [],
            }
        },
        methods: {
            getStates() {

                Vue.axios.get('getSubCategories/'+this.Country)
                .then((response)=>{
                    this.states = response.data;  
                })
            }
        }
    }
</script>