@extends('layouts.forms')

@section('content')
<script>
    function check1a(){
        if(document.getElementById('check1').checked == true){
            document.getElementById('check2').disabled = true;
            document.getElementById('check3').disabled = true;
        }
        if(document.getElementById('check1').checked == false){
            document.getElementById('check2').disabled = false;
            document.getElementById('check3').disabled = false;
        }        
    }

    function check1b(){
        if(document.getElementById('check2').checked == true){
            document.getElementById('check1').disabled = true;
            document.getElementById('check3').disabled = true;
        }
        if(document.getElementById('check2').checked == false){
            document.getElementById('check1').disabled = false;
            document.getElementById('check3').disabled = false;
        }        
    }

    function check1c(){
        if(document.getElementById('check3').checked == true){
            document.getElementById('check1').disabled = true;
            document.getElementById('check2').disabled = true;
        }
        if(document.getElementById('check3').checked == false){
            document.getElementById('check1').disabled = false;
            document.getElementById('check2').disabled = false;
        }        
    }
   
</script>
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
                    
                    <form action="mailto:you@yourdmainhere.com" method="post">
                            {{ csrf_field() }}
                        
                            <table>
                            <tbody>
                                <tr>
                                    <td width="250px"> <input type="idno" class="form-control" id="inputStudenId" placeholder="Student ID"  value="IT16120280"  required></td>
                                    <td width="60px"></td>
                                    <td width="250px"><input type="idno" class="form-control" id="inputStudenId" placeholder="Student Name"  value="N.P.Seneviratne"  required></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                
                                <tr>
                                    <td width="250px"> <input type="idno" class="form-control" id="inputStudenId" placeholder="Employer's Name"  value="Mr Perera"  required></td>
                                    <td width="60px"></td>
                                    <td width="250px"><input type="idno" class="form-control" id="inputStudenId" placeholder="Supervisor's Name"  value="Mr Ruwan"  required></td>
                                </tr>

                            </tbody>
                        </table>   <br/><br/>                    
                       

                        <div class="form-group">
                          <label for="textarea">Describe the differences, if any, between student's initial contract and actual assignment which developed
                          </label>
                          <textarea class="form-control" id="exampleFormControlTextarea3" name="company"
                          required rows="7"></textarea>
                        </div>
                        
                        <div><br/>
                        <b><u>PERFORMANCE OF STUDENT</u></b> <br/>
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
                                    <td style="text-align: center;"> <input id="check1" type="checkbox" onclick="check1a()"> </td>
                                    <td style="text-align: center;"> <input id="check2" type="checkbox" onclick="check1b()"> </td>
                                    <td style="text-align: center;"> <input id="check3" type="checkbox" onclick="check1c()"> </td>
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
                        <b>Note: Please make sure to tick only one check box for each category</b>


                        <div><br/>
                        <b><u>WORK HABITS OF STUDENT</u></b> <br/>
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
                        <b>Note: Please make sure to tick only one check box for each category</b>
                        <br/><br/>

                        <div>
                        <b><u>OVERALL STUDENT PERFORMANCE</u></b><br/><br/>
                        <table width="700">
                            <tbody>
                                <td><input type="checkbox"> Outstanding</td>
                                <td><input type="checkbox"> Very Good</td>
                                <td><input type="checkbox"> Good</td>
                                <td><input type="checkbox"> Marginal</td>
                                <td><input type="checkbox"> Unsatisfactory</td>
                            </tbody>
                        </table>
                        <b>Note: Please make sure to tick only one check box</b>
    
                        </div><br/><br/>

                        This report has been discussed with the  student<br/><br/>

                        <table>
                            <tbody>
                                <td width="250px"> <input type="idno" class="form-control" id="inputStudenId" placeholder="External Supervisor's Name" value="Mr Gamage"  required></td>
                                <td width="30px"><input type="date" class="form-control" id="inputStudenId" placeholder="Date" value="<?php echo date('Y-m-d'); ?>" required></td>
                            </tbody>
                        </table>
                        

                        <br/><br/><button onclick="location.href='mailto:em@i.l';" type="submit" class="btn btn-primary">Email The Form</button>
      
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
