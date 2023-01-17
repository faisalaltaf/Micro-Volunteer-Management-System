@extends('dashboard.charity.layout.main')


@section('content')


 <div class="content">
        <div class="container-fluid">
        <!-- style="display:inline-table;" -->
          <div class="custom row" >
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Charity Profile</h4>
                  <p class="card-category">                      <td>{{Auth::guard('charity')->user()->name}}</td>
</p></div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Phone No
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                        Location
                        </th>
                      </tr></thead>
                      <tbody>
                        <tr>
                     <td>{{Auth::guard('charity')->user()->id}}</td>
                     <td>{{Auth::guard('charity')->user()->name}}</td>
                     <td>{{Auth::guard('charity')->user()->phone}}</td>
                     <td>{{Auth::guard('charity')->user()->email}}</td>
                     <td>{{Auth::guard('charity')->user()->location}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
         
          </div>
        </div>
      </div>

        @endsection