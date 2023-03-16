<?php
use App\Models\modular;

?>
@extends("dashboardhead_foot")
@section('content')

                    <div class="container text-center">
                        <div class="row">
                            <div class="col-md-12">

               <h1 >Monthly Attendance</h1>
                    
                    <table class="table table-hover table-bordered table-striped table-responsive ">
                        <tr class="heading table-primary">
                            <th>Student Id</th>
                            <th>Attendance Month</th>
                            <th>Classes Held</th>
                            <th>Classes Attended</th>
                            
                        </tr>
                       
      @foreach($attendances as $att)
       <tr>

      <td>{{$att->Std_ID}}</td>
      <td>{{$att->Month}}</td>
      <td>{{$att->Classes_Held}}</td>
      <td>{{$att->Classes_Attended}}</td>
      
    </tr>
      @endforeach
    
    

</table>

</div>
                        </div>
                    </div>

    @endsection