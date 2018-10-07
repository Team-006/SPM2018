@extends('layouts.app')

@section('content')
<script></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('insertUser') }}" aria-label="Register" onsubmit="validat()" novalidate>
                        @csrf

                        <div class="form-group row">
                            <label for="userType" class="col-md-4 col-form-label text-md-right">User Type</label>

                            <div class="col-md-6">
                                <select id="userType" type="userType" class="form-control" name="userType" onchange="update()" required autofocus>
                                <option value="">Select One</option>
                                <option value="1">Student</option>
                                <option value="2">Supervisor</option>
                                </select>
<input type="hidden" id="usertypeValue" name="usertypeValue" value="">
                                @if ($errors->has('usertypeValue'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row" id="stID" style="display: none;" >
                            <label for="studentId" class="col-md-4 col-form-label text-md-right">Studnt ID</label>

                            <div class="col-md-6">
                                <input id="studentId" type="text" class="form-control" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $studentId->first('studentId') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row" id="supervisorId" style="display:none;">
                            <label for="verification" class="col-md-4 col-form-label text-md-right">Verification code</label>

                            <div class="col-md-6">
                                <input id="verification" type="text" class="form-control" required>

                                @if ($errors->has('verification'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('verification') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Username</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"  required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password"  required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" onkeyup='check();' required>
                                <span id='message'></span>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>

function update(){
    var type= document.getElementById('userType').value;
    alert(type);

    if(type == 1){
        document.getElementById("stID").style.display = "";
        document.getElementById("supervisorId").style.display = "none";
    }
    if(type == 2){
        document.getElementById("supervisorId").style.display = "";
        document.getElementById("stID").style.display = "none";
    }
} 


var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('password-confirm').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}


</script>
