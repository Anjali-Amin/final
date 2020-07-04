@extends('layouts.app')
<html>
    <head>
        <style>
        </style>
    </head>
    <body>
        @include('include.navbar')
        <br><br><br>
        <h1>Your Wish is Our Command!!  :) </h1>
        <table class="table table-striped table-bordered">
            <thead>
             <tr>
              <th>Location</th>
              <th>City</th>
              <th>Description</th>
              <th>Price</th>
              <th>Feedback</th>
             </tr>
            </thead>
            <tbody>
           </table>
        @include('include.footer')
    </body>
</html>