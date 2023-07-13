@extends('layout.master')

@section('form')
  <style>
    body {
      font-family: Arial;
    }

    .container {
      max-width: 200px;
      margin: 0 auto;
    }

    h1 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group input[type="email"],
    .form-group select {
      width: 100%;
      padding: 8px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group input[type="radio"] {
      margin: 5px;
    }

    .form-group button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #545754;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: #b0abab;
    }
  </style>

    <a href="/table" class="underlined">See Names</a>
    <form id="name-form">
        @csrf
        <input name="id" value="{{$data['id']}}"hidden type="text">
      <div class="form-group">
        <label for="studentNumber">Student Number:</label>
        <input type="text" id="studentNumber" name="studentNumber" value="{{$data['studentNumber']}}" >
      </div>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"  value="{{$data['name']}}" placeholder="FirstName, MiddleName, LastName">
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" value="{{$data['dob']}}" >
      </div>
      <div class="form-group">
        <label for="course">Course:</label>
        <input type="text" id="course" name="course" value="{{$data['course']}}" >
      </div>
      <div class="form-group">
        <label for="year">Year:</label>
        <input type="number" id="year" name="year" value="{{$data['year']}}" >
      </div>
      <div class="form-group">
        <label for="cpNumber">CP Number:</label>
        <input type="text" id="cpNumber" name="cpNumber" value="{{$data['cpNumber']}}" >
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" value="{{$data['gender']}}" >
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{$data['email']}}" >
      </div>
      <div class="form-group">
        <button type="submit" onclick="submitName(event)" >Submit</button>
      </div>
    </form>


@endsection

@section('script')
<script>
  function submitName(event){
    event.preventDefault();
    $.post('/submitName', $('#name-form').serializeArray(),function(result){
      if(result){
        alert("Save Succesfully");
        window.location.href = '/table';
      }

    });
  }
</script>


@endsection