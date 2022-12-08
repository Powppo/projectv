@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <div>

        <head>
            <style>
                body {
                    background-color: lightblue;
                }
            </style>
        </head>
<center>
    <div class="d-flex flex-column text-center mb-5">
        <h3>
			RT-PCR Negative Test Report
			Or Two Dose Of Vaccine Certificate
		</h3>
		
		<h3>***Result***</h3>
        <br>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
              </div>
              @foreach ($input as $item)
              <h5>Customer</h5>
              <div class="row">
                <div class="col-sm-3">
                  <p>Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="mb-0" >{{$item['name']}}</p>
                </div>
              </div>
          <div class="row">
            <div class="col-sm-3">
              <p>Number</p>
            </div>
            <div class="col-sm-9">
              <p class="mb-0" >{{$item['number']}}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <p>Time</p>
            </div>
            <div class="col-sm-9">
              <p class="mb-0" >{{$item['time']}}</p>
            </div>
          </div>
          <hr>
              @endforeach
        </div>
        <br>
    <br>
</div>
</html>
@endsection
