<template lang="">
    <div>   
        <table style="width: 80%" class="center">
            <thead>
                <th>Brand</th>
                <th>Model</th>
                <th>Date Purchased</th>
                <th>Previous owner</th>
                <th>CP Number</th>
                <th>Status</th>
                <th>Ownership</th>
                <th>Action</th>
            </thead>    
            <tbody>
                <tr v-for="(car,index) in getCars" :key="index">
                    <td>{{car.brand}}</td>
                    <td>{{car.model}}</td>
                    <td>{{car.dop}}</td>
                    <td>{{car.po}}</td>
                    <td>{{car.cpnumber}}</td>
                    <td>{{car.status}}</td>
                    <td>{{car.own}}</td>
                    <td> <button @click="$emit('edit',car)">Edit</button>
                        <button @click="deleteCar(car.id)">Delete</button>
                        <button @click="(car.id)">Sell</button>
                    </td>
                </tr>
            </tbody>
        </table>    
    </div>
</template>
<script>
import axios from 'axios';

export default {
    props:["cars"],
    data(){
        return{
            getCars:[]
        }
    },
    watch:{
        cars(New, Old){
            this.getCars = New;
        }
    },
    methods:{
        deleteCar(id){
            if(confirm("are you sure you want to delete?")){
                axios.post("/delete-name",{id}).then(({data})=>{
                    if(data){
                        alert("deleted");
                        this.$emit("Successful");
                    }
                });
                }
            }
        },
        watch:{
            cars(New, Old){
                this.getCars = New;
                


            },
        }
    }
</script>
<style>
table {
    border-collapse: collapse;
    border: 1px solid black;
    text-align: center;
    vertical-align: middle;
}
caption {
  font-weight: bold;
  font-size: 24px;
  text-align: left;
  color: #333;
  margin-bottom: 16px;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
thead th {
  width: 10%;
}
th,td{
    padding: 8px;

}
thead {
  background-color: #333;
  color: white;
  font-size: 0.875rem;
	text-transform: uppercase;
	letter-spacing: 2%;
}
tbody tr:nth-child(odd) {
  background-color: #fff;
}

tbody tr:nth-child(even) {
  background-color: #eee;
}

</style>