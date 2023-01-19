@extends('dashboard.user.home')
@section('content')
<div class="header pb-4 pt-5 pt-md-7" >

    <div class="container-fluid">
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Charity Data
                </h4>
            </div><!--col-->
            <div class="col-sm-7">
                Note: This is is only active charity. If you need to view a Charity not on subscription, use the Search page.
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="index-table" class="table">
                        <thead>

                            <!-- set this table up however I want -->
                            <!-- clean up the extra files, remove them -->
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Total Expenses</th>
                            <th>Total Child</th>
                            <th>Created</th>
                         
                        </tr>
                        </thead>
                        <tbody>
                           
                                @foreach($Charity as $charity)
                                    <tr>
                                       @if($charity->status ==1)
                                        <td>{{ $charity->id }}</td>
                                        <td>{{ $charity->email }}</td>
                                        <td>{{ $charity->name }}</td>
                                        <td>{{ $charity->phone }}</td>
                                        <td>${{ $charity->expenses }}</td>
                                        <td>{{ $charity->total_child }}</td>
                                        <td>{{ $charity->created_at }}</td>
                                     
                                        @else
                                        
                                        @endif
                                       
                                     
                                    </tr>
                                @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
    </div></div>
@endsection