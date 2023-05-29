@extends('layouts.app')

@section('content')
<div class="container pt-3">
   <div class="card">
      <div class="card-header" style="text-align:right">
         <a class="navbar-brand" href="{{ route('home') }}">
            <h5>Back</h5>
         </a>
      </div>
      <div class="card-header">Contact Informations</div>
      <div class="card-body">
         <form method="" action="">
            <div class=" row align-items-center">
               <div class="form-group col-sm-9">
                  <label for="fname">Name:</label>
                  <input type="text" class="form-control" id="fname" name="name" value="{{$contact->name}}" readonly>
               </div>
               <div class="form-group col-sm-9">
                  <label for="fcontact">Contact:</label>
                  <input type="text" class="form-control" id="fcontact" name="contact" value="{{$contact->contact}}" readonly>
               </div>
               <div class="form-group col-sm-9">
                  <label for="femail">Email:</label>
                  <input type="email" class="form-control" id="femail" name="email" value="{{$contact->email}}" readonly>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
</div>
@endsection