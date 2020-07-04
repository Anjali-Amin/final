@extends('layouts.app')
@section('content')
        @include('include.navbar')
        <br><br><br>
        <div class="container box">
            <div class="panel panel-default">
             <div class="panel-heading">Submitted Wishes</div>
             <div class="panel-body">
              <div class="form-group">
               <input type="text" name="search" id="search" class="form-control" placeholder="Search using Favourable City or Location" />
              </div>
              <div class="table-responsive">
               <h3 align="center">Total Number of wishes : <span id="total_records"></span></h3>
               <table class="table table-striped table-bordered">
                <thead>
                 <tr>
                  <th>Name</th>
                  <th>Contact</th>
                  <th>Age</th>
                  <th>City</th>
                  <th>Wish</th>
                 </tr>
                </thead>
                <tbody>

                </tbody>
               </table>
              </div>
             </div>    
            </div>
           </div>

@include('include.footer')
        </body>
        </html>
<script>
    $(document).ready(function(){
    
     fetch_submitted_data();
    
     function fetch_submitted_data(query = '')
     {
      $.ajax({
       url:"{{ route('viewwish.action') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       success:function(data)
       {
        $('tbody').html(data.table_data);
        $('#total_records').text(data.total_data);
       }
      })
     }
    
     $(document).on('keyup', '#search', function(){
      var query = $(this).val();
      fetch_submitted_data(query);
     });
    });
    </script>
    
    @endsection