@extends('layouts.forms')

@section('content')

<div class="container">
  
<form>

        <div class="form-group row">
    
                <h2 class="col-sm-8">To be filled by the student</h2>

            </div>
        
    <div class="form-group row">

      <label for="inputStudenId" class="col-sm-2 col-form-label">Student ID No</label>
      <div class="col-sm-10">
        <input type="idno" class="form-control" id="inputStudenId" placeholder="Student ID N"  required>
      </div>


      <label for="inputName" class="col-sm-2 col-form-label">Student's Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName" placeholder="Name" required>
      </div>


      <label for="address" class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="address" placeholder="Address" required>
      </div>


      <label for="homephone" class="col-sm-2 col-form-label">Home Phone</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="homephone" placeholder="Home Phone" required>
      </div>


      <label for="mobilephone" class="col-sm-2 col-form-label">Mobile Phone</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mobilephone" placeholder="Mobile Phone" required>
      </div>


      <label for="email" class="col-sm-2 col-form-label">E-mail Address</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="E-mail Address" required>
      </div>


      
        <div class="form-row">
    
                <div class="col-md-4" >
                        <label for="semester" class="col-sm-8">City</label>
                        <input type="text" class="form-control" id="semester" required>
                      </div>

                      <div class="form-group col-md-4">
                            <label for="year">Year</label>
                            <input type="text" class="form-control" id="year" required>
                          </div>
                     
                      <div class="form-group col-md-4">
                        <label for="cgpa">CGPA</label>
                        <input type="text" class="form-control" id="cgpa" required>
                      </div>

        </div>

     

    </div>
    



    <div class="form-group row">
    
            <h2 class="col-sm-8">To be filled by the Employer</h2>

    </div>


    
    <div class="form-group row">
    

            <label for="ename" class="col-sm-2 col-form-label">Employer's Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="ename" placeholder="Employer's Name">
            </div>
      
      
            <label for="eaddress" class="col-sm-2 col-form-label">Employer's Address</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="eaddress" placeholder="Employer's Address">
            </div>
           

    </div>

    <div class="row">

            <div class="col-sm-5">
            <label >Supervisor's name</label>
              <input type="text" class="form-control" placeholder="Supervisor's name">
            </div>

            <div class="col-sm-5">
                <label >Supervisor's Phone</label>
              <input type="text" class="form-control" placeholder="Supervisor's Phone">
            </div>


          </div>

          <div class="row">

                <div class="col-sm-5">
                <label >Internship Start Date</label>
                  <input type="text" class="form-control" placeholder="Internship Start Date">
                </div>
    
                <div class="col-sm-5">
                    <label >Internship End Date</label>
                  <input type="text" class="form-control" placeholder="Internship End Date">
                </div>
    
    
              </div>

              <div class="row">

                    <div class="col-sm-5">
                    <label >Supervisor's Title</label>
                      <input type="text" class="form-control" placeholder="Supervisor's Title">
                    </div>
        
                    <div class="col-sm-5">
                        <label >Supervisor's E-mail</label>
                      <input type="text" class="form-control" placeholder="Supervisor's E-mail">
                    </div>
        
        
                  </div>


                  <div class="row">
    

                        
                        <div class="col-sm-10">
                                <label for="worl" class="col-sm-2 col-form-label">No of Hours/week</label>
                          <input type="text" class="form-control" id="work" placeholder="No of Hours/week">
                        </div>
                  
            
                </div>

                <div class="row">
   
                    <div class="col-md-10">
                        <label for="worl" class="col-md-20 col-form-label"></label>
                    </div>
                  
                  </div>
                <div class="row">
   
      <div class="col-md-10">
          <label for="worl" class="col-md-20 col-form-label"> </label>
        <button type="submit" class="btn btn-primary">Genarate Form i-1</button>
      </div>
    
    </div>
  </form>
</div>

@endsection