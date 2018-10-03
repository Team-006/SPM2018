@extends('layouts.forms')

@section('content')

{!! Form::open(['action'=>'ProgressController@store','method'=>'POST']) !!}
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">INTERN’S  DIARY</div>
                    <div class="card-body">
                        <b>Submit The Monthly Tasks Completed By The Intern</b>
                        <br/>
                        <br/> 
                        <div class="form-group">
                         <br/>
                         {{Form::textarea('body','',[ 'rows'=>'10' ,'cols'=>'80', 'placeholder'=>'Type Your Monthly Progress And The Date Will Be Taken As The Date This Has Been Submitted'])}}
                         <br/> 
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                       <h2> <b>Previous Progress</b></h2>
                       @if(count($progress)>0)
                       @foreach ($progress as $progressItem)
                           <div class="well">
                            <p>{{$progressItem->body}}</p>
                            <hr>
                            <small>Added on {{$progressItem->created_at}}</small> 
                           </div>
                       @endforeach
                       @else
                       <p>There Is No Reported Progress Yet</p>
                       @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection