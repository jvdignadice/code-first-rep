@extends('customer/customerLayout')

@section('content')

  <body class="bg-dark">
    <form method="POST" action="{{ route('updateCustomer', $id)}}">
      {{ csrf_field() }}
      @method('PUT')
    <div class="container">
      <div class="row justify-content-center m-auto shadow bg-white py-3 mt-3 col-md-8">
       <h3 class="text-center  font-monospace">GENERAL ATTENDANCE</h3>
       <div>
       <h5 class="text-primary">ENTER FIRST NAME</h5>
       <div class="col-8">
        <input type="text" name="fname" class="form-control" placeholder="Enter Name" value="{{ $fname}}">
       </div>
       <div>
       <h5 class="text-primary">ENTER MIDDLE NAME</h5>
       <div class="col-8">
        <input type="text" name="mname" class="form-control" placeholder="Enter Name" value="{{ $mname}}">
       </div>
       <div>
       <h5 class="text-primary">ENTER LAST NAME</h5>
       <div class="col-8">
        <input type="text" name="lname" class="form-control" placeholder="Enter Name" value="{{ $lname}}">
       </div>
       <h5 class="text-primary">ENTER LAST EMAIL</h5>
       <div class="col-8">
        <input type="text" name="email" class="form-control" placeholder="Enter Name" value="{{ $email}}">
       </div>
       <h5 class="text-primary">ENTER GENDER</h5>
       <div class="col-8">
        <input type="text" name="gender" class="form-control" placeholder="Enter Gender" value="{{ $gender}}">
       </div>
       <hr>
       <div class="col-2 " style="padding-top: 10px">
        <button type="submit" name="submit" class="btn btn-outline-primary">Add Attendee</button>
      </div>
       
      </div>
      
    </div>
    

   
 
    
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