@extends('layouts.forms')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>INTERNSHIP REPORT</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="post" action="{{url('submitForm')}}">
                            {{ csrf_field() }}
                        <b>1 INTRODUCTION</b> 
                        <div class="form-group">
                          <label for="textarea">Company Overview</label>
                          <textarea class="form-control" id="exampleFormControlTextarea3" name="company"
                          placeholder="Please give a brief description of the organisation and the department you carried out your internship" 
                          required rows="7"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="textarea">Project Overview</label>
                            <textarea class="form-control" id="exampleFormControlTextarea3" name="project"
                            placeholder="Please give an overview of the project(s) that you worked during your internship period" 
                            required rows="7"></textarea>
                        </div>
                        {{-- <div class="form-group">
                            <label for="textarea">Sample</label>
                            <textarea class="form-control" id="exampleFormControlTextarea3" 
                            placeholder="" 
                            required rows="7"></textarea>
                        </div> --}}
                        <b> 2 INTERNSHIP INSIGHT</b>
                        <div class="form-group">
                            <label for="textarea">Objectives</label>
                            <textarea class="form-control" id="exampleFormControlTextarea3" name="objectives"
                            placeholder="Please describe the company's objectives for the internship" 
                            required rows="7"></textarea>
                        </div> 
                        <div class="form-group">
                          <label for="textarea">Procedures</label>
                          <textarea class="form-control" id="exampleFormControlTextarea3" name="procedures"
                            placeholder="Please describe the procedures followed during the internship" 
                            required rows="7"></textarea>
                        </div>
                        <div class="form-group">
                                <label for="textarea">Methodology</label>
                                <textarea class="form-control" id="exampleFormControlTextarea3" name="methodology"
                                placeholder="Please describe the methodology you used during the internship" 
                                required rows="7"></textarea>
                        </div>
                        <b>3 LEARNING OUTCOME</b>
                        <div class="form-group">
                          <label for="textarea">Learning</label>
                          <textarea class="form-control" id="exampleFormControlTextarea3" name="learning"
                          placeholder="Please describe what student learned during the internship period" 
                          required rows="7"></textarea>
                        </div>

                        <div class="form-group">
                                <label for="textarea">Measurable Outcome</label>
                                <textarea class="form-control" id="exampleFormControlTextarea3" name="measurable_outcome"
                                placeholder="Please describe the measurable outcomes of the project" 
                                required rows="7"></textarea>
                        </div>
                        <div class="form-group">
                                <label for="textarea">Effectiveness of the Effort</label>
                                <textarea class="form-control" id="exampleFormControlTextarea3" name="effectiveness"
                                placeholder="Student should describe how effective was the effort he spent by drawing the analysis of the experience gained during the internship period with classroom material he studied" 
                                required rows="7"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
