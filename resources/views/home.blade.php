@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Personal information') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Age</th>
                                <th scope="col">Created date</th>
                                <th scope="col">Updated date</th>
                            </tr>
                        </thead>
                        <tbody>
                         
                            <tr>
                                <td>{{ Auth::user()->id }}</td>
                                <td>{{ Auth::user()->name }}</td>
                                <td>{{ Auth::user()->last_name }}</td>
                                <td>{{ Auth::user()->gender }}</td>
                                <td>{{ Auth::user()->age }}</td>
                                <td>{{ Auth::user()->created_at }}</td>
                                <td>{{ Auth::user()->updated_at }}</td>
                            </tr>
                       
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
