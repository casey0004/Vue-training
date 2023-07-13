<template>
    <div>
            App
        <div>
            Count:{{ count }} <button @click="addOne()">+</button>
                            <button @click="minusOne()">-</button>
                            <button @click="addTen()">+10</button>
        </div>
        <div>
            Total: {{agePlusCount}}
        </div>
        <Age v-bind:age="age"></Age>
    </div>
</template>
<script>
import Age from "./age.vue"
    export default{
        //variables
        data(){
            return{
                count:0,
                age:25
            }       
        },
        methods:{
            addOne(){
                this.count += 1;
            },
            addTen(){
                this.count += 10;
            },
            minusOne(){
                this.count -= 1;
            }
        },
        computed:{
            agePlusCount(){
                return this.age + this.count;
            }
        }
    
    }
        
</script>
<style>

</style>