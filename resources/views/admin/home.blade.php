@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 pull-left">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Menu</div>

                    <div class="panel-body">
                        <ul class="nav">
                           <li>
                               <a href="/" class="btn-link">Home</a>
                           </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 pull-right">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
