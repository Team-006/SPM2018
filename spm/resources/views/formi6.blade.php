@extends('layouts.forms')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">INTERNSHIP REPORT</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form>
                        <b>1 INTRODUCTION</b> 
                        <div class="form-group">
                          <label for="textarea">Company Overview</label>
                          <input type="textarea" class="form-control" id="name" 
                          placeholder="Please give a brief description of the organisation and the department you carried out your internship" required>
                        </div>
                        <div class="form-group">
                            <label for="textarea">Project Overview</label>
                            <input type="textarea" class="form-control" id="sid" 
                            placeholder="Please give an overview of the project(s) that you worked during your internship period" required>
                        </div>
                        <div class="form-group">
                            <label for="textarea">Sample</label>
                            <input type="textarea" class="form-control" id="address" placeholder="Enter address" required>
                        </div>
                        <b> 2 INTERNSHIP INSIGHT</b>
                        <div class="form-group">
                            <label for="textarea">Objectives</label>
                            <input type="textarea" class="form-control" id="sid" 
                            placeholder="Please describe the company's objectives for the internship" required>
                        </div> 
                        <div class="form-group">
                          <label for="textarea">Procedures</label>
                          <input type="textarea" class="form-control" id="number" 
                          placeholder="Please describe the procedures followed during the internship" required>
                        </div>
                        <div class="form-group">
                                <label for="textarea">Methodology</label>
                                <input type="textarea" class="form-control" id="number" 
                                placeholder="Please describe the methodology you used during the internship" required>
                        </div>
                        <b>3 LEARNING OUTCOME</b>
                        <div class="form-group">
                          <label for="textarea">Learning</label>
                          <input type="textarea" class="form-control" id="email" 
                          placeholder="Please describe what student learned during the internship period" required>
                        </div>

                        <div class="form-group">
                                <label for="textarea">Measurable Outcome</label>
                                <input type="textarea" class="form-control" id="number" 
                                placeholder="Please describe the measurable outcomes of the project" required>
                        </div>
                        <div class="form-group">
                                <label for="textarea">Effectiveness of the Effort</label>
                                <input type="textarea" class="form-control" id="number" 
                                placeholder="Student should describe how effective was the effort he spent by drawing the analysis of the experience gained during the internship period with classroom material he studied" 
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
