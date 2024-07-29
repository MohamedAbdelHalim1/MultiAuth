@extends('layouts.dashboard.app')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="row justify-content-center mb-4">
        <!-- Card for Number of Users -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Number of Users</h5>
                    <p class="card-text">100</p>
                </div>
            </div>
        </div>

        <!-- Card for Number of Orders -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Number of Orders</h5>
                    <p class="card-text">100</p>
                </div>
            </div>
        </div>

        <!-- Card for Number of Sales -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title">Number of Sales</h5>
                    <p class="card-text">100</p>
                </div>
            </div>
        </div>

        <!-- Card for Number of Categories -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <h5 class="card-title">Number of Categories</h5>
                    <p class="card-text">100</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Static Table 1 -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">Table 1</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Column 1</th>
                                <th>Column 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Data 1</td>
                                <td>Data 2</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Data 3</td>
                                <td>Data 4</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Static Table 2 -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">Table 2</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Column A</th>
                                <th>Column B</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Data A</td>
                                <td>Data B</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Data C</td>
                                <td>Data D</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
