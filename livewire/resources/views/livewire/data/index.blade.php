@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-primary mt-4">Data List</h1>
        <hr>

        <div class="row">
            <div class="col-md-8">
                <div class="card-body">
                    <button class="btn btn-sm btn-success">
                        Create 
                    </button>
                    <br>
                    <table class="table table-dark mt-3">
                        <thead class="thead-dark">
                            <tr>
                                <td scope="col">#No</td>
                                <td scope="col">Name</td>
                                <td scope="col">Age</td>
                                <td scope="col">Gender</td>
                                <td scope="col">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection