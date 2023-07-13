@extends('layout.master')
@section('tab')
<table>
   <thead>
       <th>Student no</th>
       <th>Name</th>
       <th>Date of Birth</th>
       <th>Course</th>
       <th>Year</th>
       <th>Cp Number</th>
       <th>Gender</th>
       <th>Email</th>
       <th>Action</th>
   </thead>
   <tbody>
       @foreach($cars as $car)
       <tr>
           <td class="border px-4 py-2">{{$car->studentNumber}}</td>
           <td class="border px-4 py-2">{{$car->Name}}</td>
           <td class="border px-4 py-2">{{$car->dob}}</td>
           <td class="border px-4 py-2">{{$car->course}}</td>
           <td class="border px-4 py-2">{{$car->year}}</td>
           <td class="border px-4 py-2">{{$car->cpNumber}}</td>
           <td class="border px-4 py-2">{{$car->gender}}</td>
           <td class="border px-4 py-2">{{$car->email}}</td>
           <td class="border px-4 py-2">
               <a href="/name-form/{{$car->id}}" class = "rounded bg blue-500 py-2 px-2 mr-2" onclick="submitName ('{{$car->id}}')"> Edit </a> 
               <button class = "rounded bg blue-500 py-2 px-4" onclick="deleteName ('{{$car->id}}')"> Delete </button> </td>
       </tr>
       @endforeach
   </tbody>
</table>
@endsection

@section('delete_script')
    <script>
        function deleteName(id){
            let data ={
                _token:'{{csrf_token()}}',
                id:id
            }
            if(confirm("Are you sure to delete this name?"))
            $.post('/delete-name',data,function(result){
                if(result){
                    alert('Delete Successful');
                    window.location.reload();
                }
            })
        }
    </script>
@endsection
