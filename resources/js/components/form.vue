<template>
    <div class="center">
        <form @submit.prevent="submitForm">
        <ul class="form-style-1">
        <h1 >Add Car</h1>
        <li>
            <label>Brand <span class="required"></span></label>
            <input type="text" name="field3" class="field-long" v-model="brand"/>
        </li>
        <li>
            <label>Model <span class="required"></span></label>
            <input type="text" name="field3" class="field-long" v-model="model"/>
        </li>
        <li>
            <label>Date Purchased <span class="required"></span></label>
            <input type="date" name="field3" class="field-long" v-model="dop"/>
        </li>
        <li>
            <label>Previous Owner <span class="required"></span></label>
            <input type="text" name="field3" class="field-long" v-model="po"/>
        </li>
        <li>
            <label>CP Number <span class="required"></span></label>
            <input type="text" name="field3" class="field-long" v-model="cpnumber"/>
        </li>
        <li>
            <label>Status<span class="required"></span></label>
            <textarea name="field5" id="field5" class="field-long field-textarea" v-model="status" ></textarea>
        </li>
        <li>
            <label>Ownership</label>
            <select name="field4" class="field-select" v-model="own">
            <option value="First">First</option>
            <option value="Second">Second</option>
            <option value="Third">Third</option>
            </select>
        </li>
        <li>
            <input type="submit" value="Submit" />
        </li>
    </ul>
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
<style type="text/css">
.form-style-1 {
	margin:10px auto;
	max-width: 400px;
	padding: 20px 12px 10px 20px;
	font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    background-color:#333;
}
.form-style-1 li {
	padding: 0;
	display: block;
	list-style: none;
	margin: 10px 0 0 0;
}
.form-style-1 label{
	margin:0 0 3px 0;
	padding:0px;
	display:block;
	font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border:1px solid #000000;
	padding: 7px;
	margin:0px;
	outline: none;	
}
.form-style-1 .field-divided{
	width: 49%;
}

.form-style-1 .field-long{
	width: 100%;
}
.form-style-1 .field-select{
	width: 100%;
}
.form-style-1 .field-textarea{
	height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
	background: #555657;
	padding: 8px 15px 8px 15px;
	border: none;
	color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
	background: #4691A4;
	box-shadow:none;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
}
</style>