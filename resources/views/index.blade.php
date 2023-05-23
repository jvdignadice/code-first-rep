<?php
    $conn = new mysqli ("localhost", "root", "", "crud_db");

    if(!$conn) {
        die(mysqli_query($conn));
    }


?>




@extends('layout')

@section('content')

  <body class="bg-dark">
  <div class="container">
   
    <form method="GET" action="{{ route('add')}}">
      @csrf
      <div class="row justify-content-center m-auto shadow bg-white py-3 mt-3 col-md-8">
       <h3 class="text-center  font-monospace">GENERAL ATTENDANCE</h3>
       <hr>
       <div>
       <h6>ENTER FIRST NAME</h6>
       <div class="col-8">
        <input type="text" name="fname" class="form-control" placeholder="Enter Name">
       </div>

       <div>
       <h6>ENTER MIDDLE NAME</h6>
       <div class="col-8">
        <input type="text" name="mname" class="form-control" placeholder="Enter Name">
       </div>

       <div><h6>ENTER LAST NAME</h6>
       <div class="col-8">
        <input type="text" name="lname" class="form-control" placeholder="Enter Name">
       </div>

      

       <h6>ENTER GENDER</h6>
       <div class="col-8">
        <input type="text" name="gender" class="form-control" placeholder="Enter Gender">
       </div>
       <div class="col-2 " style="padding-top: 10px">
        <button type="submit" name="submit" class="btn btn-outline-primary">Add Attendee</button>
      </div>
       <hr>
       
       
      
    
    </form>
    </div>
<div class="container">
  <div class="col-12 bg-white m-auto mt-6">
  <table class="table">
  <thead>
    <tr class="trow">
      <th scope="col" class="text-center">CLIENTS ID</th>
      <th scope="col" class="text-center">CLIENTS NAME</th>
      <th scope="col"class="text-center">CLIENTS GENDER</th>

      <!-- <th scope="col">DATE</th> -->
      <th scope="col" class="text-center">CLIENTS ADDRESS</th>

        <th scope="col" class="text-center">ACTIONS</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

    @foreach($client as $clients)
  <tr>
      <th scope="row" class="text-center">{{$clients->id}}</th>
      <td class="text-center">{{$clients->fname}} {{$clients->mname[0]}}. {{$clients->lname}}</td>
      
      <td class="text-center">{{$clients->gender}}</td>
      <td class="text-center">{{$clients->address}}</td>
      
      <td class="text-center"><button class="btn btn-dark"><a href="{{route('hide',['id'=>$clients->id])}}" class="text-light">EDIT</a></button>
      <button class="btn btn-danger"><a href="{{route('delete', ['id'=>$clients->id])}}" class="text-light" style="text-decoration: none;">DELETE</button></a></td>
    </tr> 

@endforeach
 
    
  </tbody>
</table>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
  @endsection

  @section('sidenav')

   
@endsection