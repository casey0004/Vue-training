<template>
    <div class="center">
        <h4>Sell Car</h4>
        <form @submit.prevent="submitForm" >
            <div class="">
            <div>
                <label for="brand">Brand</label>
                <input type="text" v-model="brand">
            </div>
            <div>
                <label for="model">Model</label>
                <input type="text" v-model="model">
            </div>
            <div>
                <label for="dop">Date Purchased</label>
                <input type="date" v-model="dop">
            </div>
            <div>
                <label for="po">Previous Owner</label>
                <input type="text" v-model="po">
            </div>
            <div>
                <label for="cpnumber">CP Number</label>
                <input type="text" v-model="cpnumber">
            </div>
            <div>
                <label for="status">Status</label>
                <textarea v-model="status" name="field5" id="field5" class="field-long field-textarea"></textarea>
            </div>
            <div>
                <label for="own">Ownership</label>
                <select name="field4" class="field-select" v-model="own">
        <option value="First">First</option>
        <option value="Second">Second</option>
        <option value="Third">Third</option>
        <option value="Fourth">Fourth</option>
        </select>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>

        </div>


        </form>
        
    </div>
</template>
<script>
import axios from 'axios';
export default{
    components:{
    },  
    data(){
        return{
            id: 0,
            brand:'',
            model:'',
            dop:'',
            po:'',
            cpnumber:'',
            status:'',
            own:''
        };

    },
    methods:{
        submitForm(){
        let{id,brand,model,dop,po,cpnumber,status,own}=this;
        alert("Submitting");

        axios.post('/submitName',{id,brand,model,dop,po,cpnumber,status,own})
        .then(({data})=>{
            this.id=0;
            this.brand = "";
            this.model = ""
            this.dop = ""
            this.po = ""
            this.cpnumber = ""
            this.status = ""
            this.own = "";
            this.$emit('submitted')
        });
    },
    submitFormAlt(){
        alert("Submitting");
        axios.post("/submitName",{
            id:this.id,
            brand:this.brand,
            model:this.model,
            dop:this.dop,
            po:this.po,
            cpnumber:this.cpnumber,
            status:this.status,
            own:this.own

        });
        
    }
    }
   
}

</script>
<style>


</style>