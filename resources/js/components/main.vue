<template lang="">
    <div>
        <div>
            <Form @submitted ="getter" v-if="!is_edit"/>
            <Edit @submitted ="getter" :car="car" @cancelEdit="cancelEdit" v-else/>
        </div>
        
        <div>
            <Table :cars ="cars" @successful = "getter" @edit="editCar" />
        </div>
    </div>
</template>
<script>
import Form from './form.vue';
import Table from './table.vue';
import Edit from './edit.vue';
import Sell from './sell.vue';
export default {
    components:{
        Form,
        Table,
        Edit,
        Sell
    },
    data(){
        return{
            cars:[],
            is_edit: false,
            cars:[],
        };

    },
    mounted(){
        this.getter();
    },
    methods:{
        getter(){
            axios.get("/table").then(({data})=>{
                console.log(data);
                this.cars = data;
            });
            this.cancelEdit();
        },
        editCar(car){
            this.is_edit= true;
            this.car = car;
        },
        cancelEdit(){
            this.is_edit = false;
            this.car = [];
        }
    }
    
}
</script>
<style >
    
</style>