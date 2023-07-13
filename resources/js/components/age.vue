<template>
    <div>
        Age: {{ getAge }}
    </div>
</template>
<script>

    export default{
        props:['age'],
        data(){
            return{
                getAge:0
            };
        },
        mounted(){
            this.getAge = this.age;
        },
        watch:{
            age(NewVal, OldVal){
                alert(NewVal, OldVal);
                this.getAge = NewVal;
            },
        },
    }  ;   
        
</script>
<style>

</style>