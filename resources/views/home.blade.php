@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a>
                        {{ Auth::user()->name }}
                    </a>
                    <a>
                        {{ Auth::user()->last_name }}
                    </a>
                    <a>
                        {{ Auth::user()->age }}
                    </a>
                    <a>
                        {{ Auth::user()->gender }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
