@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Gender</th>
                            <th>Occupation</th>
                            <th>Family Type</th>
                            <th>Manglik</th>
                        </tr>
                    </thead>
                    @foreach($users as $user)
                    <tr>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->gender}}</td>
                            <td>{{$user->occupation}}</td>
                            <td>{{$user->family_type}}</td>
                            <td>{{$user->annual_income}}</td>
                        </tr>

                    @endforeach
                    
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


