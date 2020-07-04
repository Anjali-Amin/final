<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViewWish extends Controller
{
    function index()
    {
     return view('viewwish');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('statewishes')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('contact', 'like', '%'.$query.'%')
         ->orWhere('age', 'like', '%'.$query.'%')
         ->orWhere('city', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('statewishes')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->name.'</td>
         <td>'.$row->contact.'</td>
         <td>'.$row->age.'</td>
         <td>'.$row->city.'</td>
         <td>'.$row->wish.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}