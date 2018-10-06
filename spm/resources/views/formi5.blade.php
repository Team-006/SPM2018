@extends('layouts.forms')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>FINAL EVALUATION OF THE INTERNSHIP STUDENT</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="post" action="{{url('submitForm')}}">
                            {{ csrf_field() }}
                        
                        
                        <div class="col-sm-4">
                            <input type="idno" class="form-control" id="inputStudenId" placeholder="Student ID"  required>
                        </div><br/>

                        <div class="col-sm-4">
                            <input type="idno" class="form-control" id="inputStudenId" placeholder="Student Name"  required>
                        </div><br/>

                        <div class="col-sm-4">
                            <input type="idno" class="form-control" id="inputStudenId" placeholder="Employer's Name"  required>
                        </div><br/>

                        <div class="col-sm-4">
                            <input type="idno" class="form-control" id="inputStudenId" placeholder="Supervisor's Name"  required>
                        </div><br/>

                        <div class="form-group">
                          <label for="textarea">Describe the differences, if any, between student's initial contract and actual assignment which developed
                          </label>
                          <textarea class="form-control" id="exampleFormControlTextarea3" name="company"
                          required rows="7"></textarea>
                        </div>
                        
                        <div><br/>
                        <b>PERFORMANCE OF STUDENT</b> <br/>
                        <br/><table border  width="700">
                            <thead>
                                <tr>
                                    <th> Category</th>
                                    <th> Above Average</th>
                                    <th> Average  </th>
                                    <th> Below Average </th>
                                    <th> Comments, Examples, Observations</th>
                                    
                                </tr>
                            </thead>
                            <tbody>                                
                                <tr>
                                    <td> Volume of work </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>        

                                <tr>
                                    <td> Quality of work </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>  

                                <tr>
                                    <td> Analytical ability </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>  

                                <tr>
                                    <td> Ability to resolve problems </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>    

                                <tr>
                                    <td> Accurancy and thouroughness </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>    

                                <tr>
                                    <td> Ability to work under pressure </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>     

                                <tr>
                                    <td> Oral communications </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>        

                                <tr>
                                    <td> Written communications </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>     

                                <tr>
                                    <td> Original and critical thinking </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>         

                                <tr>
                                    <td> Ability to learn</td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>     


                            </tbody>
                        </table>
                        </div>


                        <div><br/>
                        <b>WORK HABITS OF STUDENT</b> <br/>
                        <br/><table border  width="700">
                            <thead>
                                <tr>
                                    <th> Category</th>
                                    <th> Above Average</th>
                                    <th> Average  </th>
                                    <th> Below Average </th>
                                    <th> Comments, Examples, Observations</th>
                                    
                                </tr>
                            </thead>
                            <tbody>                                
                                <tr>
                                    <td> Effective in organizing work </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>        

                                <tr>
                                    <td> Takes the initiative </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>  

                                <tr>
                                    <td> Flexible to non-routine work </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>  

                                <tr>
                                    <td> Active and alert </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>    

                                <tr>
                                    <td> Attitude to organization </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>    

                                <tr>
                                    <td> Team player </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>     

                                <tr>
                                    <td> Dilligence and perseverance </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>        

                                <tr>
                                    <td> Accepts responsibility </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td style="text-align: center;"> <input type="checkbox"> </td>
                                    <td> <input type="idno" class="form-control" id="inputStudenId"> </td>                                   
                                </tr>  

                            </tbody>
                        </table>
                        </div>

                        <br/><button type="submit" class="btn btn-primary">Submit</button>
      
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
