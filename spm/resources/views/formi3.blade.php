@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">INTERN’S DAILY DIARY</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <b>Intern’s Information </b> 
                    <form>
                        <div class="form-group">
                          <label for="name">Intern’s Name</label>
                          <input type="text" class="form-control" id="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="sid">Student ID</label>
                            <input type="text" class="form-control" id="sid" placeholder="Enter id">
                        </div>
                        <div class="form-group">
                            <label for="address">Intern’s Private Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Enter address">
                        </div>

                        <div class="form-group">
                            <label for="sid">Student ID</label>
                            <input type="text" class="form-control" id="sid" placeholder="Enter id">
                        </div> 
                        <div class="form-group">
                          <label for="number">Contact Number </label>
                          <input type="number" class="form-control" id="number" placeholder="Contact Number">
                        </div>
                        <div class="form-group">
                          
                          <label for="email">E-mail Addresses</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter id">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection