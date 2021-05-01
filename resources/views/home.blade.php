@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
         <div class="col-md-2">
              <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12">                           
                        </div>                        
                    </div>
                </div>
                 <ul class="list-group list-group-flush">
                     <li class="list-group-item"><a href="{{route('home')}}" style="color:black;font-size:16px;text-decoration: none;" class="">Dashboard</a></li>
                    <li class="list-group-item"><a href="{{route('departments.index')}}" style="color:black;font-size:16px;text-decoration: none;" class="">Departments</a></li>
                     <li class="list-group-item"><a href="{{route('employees.index')}}" style="color:black;font-size:16px;text-decoration: none;" class="">Employees</a></li>                    
                  </ul>

                <div class="card-body">
                </div>
            </div>
         </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
