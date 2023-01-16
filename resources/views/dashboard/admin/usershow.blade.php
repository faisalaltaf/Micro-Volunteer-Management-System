@extends('dashboard.admin.layout.main')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css" type="text/css" />

@section('content')
<h3>User List</h3>
<div class="container">
                    <table id="example" class="table">
<thead>
    <tr>
      <!-- <th scope="col">#ID</th> -->
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone </th>
      <th scope="col">charirty Found Total</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
 

    @foreach($user as $Key=>$user)
   
  
            
    <tr>
      <th scope="row">{{++$Key}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->phone}}</td>
      <!-- <td><span class="btn btn-block btn-danger" >No Add</span></td> -->

      <td>
                            
                                <div class="mt-3">
                                        @if($user->status == 1)
                                    <button  class="btn btn-block btn-success" onclick="checkfuncdelete()">Enable</button>
                                @else
                                <button  class="btn btn-block btn-danger" onclick="checkfuncdelete()">Disable</button>
                                @endif
                                </div>
                        </td>
    </tr>
 
  
    @endforeach
  </tbody>
</table>
</div>
@endsection


