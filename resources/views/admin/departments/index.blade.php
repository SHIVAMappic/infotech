@extends('layouts.app')

@section('content')
<div class="container">
     @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            {{ __('Departments') }}
                        </div>
                         <div class="col-md-3"></div>
                        <div class="col-md-3">
                             <a class="btn btn-primary " href="{{ route('departments.create') }}">Add</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                     <table class="table table-bordered table-responsive-lg">
                        <tr>
                            <th>Sr No</th>
                            <th>Name</th>                            
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                        <?php $i = 1;?>
                        @foreach ($departments as $department)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$department->name}}</td>
                                <td><?php echo $newDate = date("F j, Y", strtotime($department->created_at));  ;?></td>  
                                <td>
                                      <form action="{{ route('departments.destroy',$department->id) }}" method="POST">                                                   
                                        <a class="btn btn-primary" href="{{ route('departments.edit',$department->id) }}">Edit</a>                       
                                        @csrf
                                        @method('DELETE')
      
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                </td>                              
                            </tr>
                            <?php $i++;?>
                         @endforeach   
                    </table>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
