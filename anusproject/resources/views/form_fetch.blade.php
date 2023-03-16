<?php
use App\Models\feedback_form;

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


  <br>
      <div class="container">
        <h1 class="text-center">FeedBack Form</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hovered table-bordered table-responsive table-striped">
                        <tr>
                            <th>ID</th>
                            <th>MONTH</th>
                            <th>FACULTY BATCH</th>
                            <th>SUBJECT</th>
                            <th>PUNCTUALITY</th>
                            <th>COURSE COVERAGE</th>
                            <th>TECHNICAL SUPPORT</th>
                            <th>CLEARING DOUBT</th>
                            <th>EXAM ASSIGNMENT</th>
                            <th>BOOK UTILIZATION</th>
                            <th>STUDENT APPRAISAL</th>
                            <th>COMPUTER UPTIME</th>
                            <th>REMARK</th>
                            <th>DATE SIGNATURE</th>


                        </tr>

                        @foreach($string as $feedback)
                        <tr>
                            <td >{{$feedback->id}}</td>
                            <td>{{$feedback->month}}</td>
                            <td>{{$feedback->faculty_batch}}</td>
                            <td>{{$feedback->subject}}</td>
                            <td>{{$feedback->punctuality}}</td>


                            <td>

    

                            @if(isset($feedback->course_coverage[4]) != "")
                              @foreach (json_decode($feedback->course_coverage) as $member)
                                  {{$member}}
                                @endforeach 
                            @endif
                              
                            </td>
                            <td>
                              @if(isset($feedback->technical_support[4]) != "")
                                @foreach (json_decode($feedback->technical_support) as $member)
                                    {{$member}}
                                  @endforeach 
                              @endif
                              <!-- {{$feedback->technical_support}} -->
                            </td>
                            <td>
                              @if(isset($feedback->clearing_doubt[4]) != "")
                                @foreach (json_decode($feedback->clearing_doubt) as $member)
                                    {{$member}}
                                  @endforeach 
                              @endif 
                              <!-- {{$feedback->clearing_doubt}} -->
                            </td>
                            <td>
                              @if(isset($feedback->exam_assignment[4]) != "")
                                @foreach (json_decode($feedback->exam_assignment) as $member)
                                    {{$member}}
                                  @endforeach 
                              @endif 
                              <!-- {{$feedback->exam_assignment}} -->
                            </td>
                            <td>
                              @if(isset($feedback->book_utilization[4]) != "")
                                @foreach (json_decode($feedback->book_utilization) as $member)
                                    {{$member}}
                                  @endforeach 
                              @endif 
                              <!-- {{$feedback->book_utilization}} -->
                            </td>
                            <td>
                              @if(isset($feedback->student_appraisal[4]) != "")
                                @foreach (json_decode($feedback->student_appraisal) as $member)
                                    {{$member}}
                                  @endforeach 
                              @endif 
                              <!-- {{$feedback->student_appraisal}} -->
                            </td>
                            <td>
                              @if(isset($feedback->computer_uptime[4]) != "")
                                @foreach (json_decode($feedback->computer_uptime) as $member)
                                    {{$member}}
                                  @endforeach 
                              @endif 
                              <!-- {{$feedback->computer_uptime}} -->
                            </td>
                            <td>{{$feedback->remark}}</td>
                            <td>{{$feedback->date_signature}}</td>


                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>