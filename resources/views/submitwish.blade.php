@extends('layouts.app')
@section('content')
@include('include.navbar')
<br><br><br>
<h2>State Your Wish ! </h2>
<div class="col-lg-6">
<form method="post" action="{{url('statewish')}}">
    {{csrf_field()}}
    <div class="form-group">
     Enter Name :<input type="text" name="name" class="form-control" placeholder="eg.Rahul" />
    </div>
    <div class="form-group">
     Enter Contact Number :<input type="number" name="contact" class="form-control" placeholder="eg.1234567890" />
    </div>
    <div class="form-group">
       Enter Age :<input type="number" name="age" class="form-control" placeholder="eg.10" />
   </div>
    <div class="form-group">
     Enter City :<input type="text" name="city" class="form-control" placeholder="eg.Mumbai" />
    </div>
    <div class="form-group">
     Enter Wish :<input type="text" name="wish" class="form-control" placeholder="eg:I wish to be a police-officer" />
    </div>
    <div class="form-group">
     <input type="submit" class="btn btn-primary" />
    </div>
   </form>
</div>
@include('include.footer')
@endsection
