@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Partner Preference') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    @foreach($matches as $per)
                    <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $per->first_name." ".$per->last_name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$per->annual_income}}</h6>
                        <p class="card-text">{{ $per->family_type }}</p>
                        <a href="#" class="card-link">More link...</a>
                        <!-- <a href="#" class="card-link">Another link</a> -->
                    </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
