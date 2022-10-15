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

                        {{ __('You are logged in!') }}

                        @if ($google2fa_enable === 1)
                            <a href="/2fa" class="float-end">Disable 2 Factor Authentication.</a>
                        @else
                            <a href="/2fa" class="float-end">Enable 2 Factor Authentication.</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
