@extends('layouts.forms')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>INTERNSHIP REPORT</b></div>
                <table class="table table-striped">
                        <thead>
                          <th>ID</th>
                          <th>Company Overview</th>
                          <th>Project Overview</th>
                          <th>objectives</th>
                          <th>procedures</th>
                          <th>methodology</th>
                        </thead>
                        <tbody>
                          @foreach($formi6 as $form)
                          <tr>
                            <td>{{$form->id}}</td>
                            <td>{{$form->company}}</td>
                            <td>{{$form->project}}</td>
                            <td>{{$form->objectives}}</td>
                            <td>{{$form->procedures}}</td>
                            <td>{{$form->methodology}}</td>
                            <button type="submit" class="btn btn-success"><a href="{{action('Formi6Controller@downloadPDF',$form->id)}}">PDF</a></button>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
              
            </div>
        </div>
    </div>
</div>
@endsection
