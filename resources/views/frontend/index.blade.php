@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard</div>
                <div class="card-body">
                    <!-- Your content here -->
                    <p>Welcome, {{ Auth::user()->name }}</p>
                    <!-- Logout form is handled in the navbar dropdown -->
                </div>
            </div>
        </div>
    </div>
@endsection
