@extends('adminlte::page')

@section('title', 'Home Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <a href="{{route('deposit.store')}}">
        <div class="col-lg-3">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row text-center">
                        <i class="fa fa-money fa-5x"></i>
                    </div>
                </div>

                <div class="panel-footer announcement-bottom">
                    <div class="row text-center">
                        <h3>Recarregar</h3>
                    </div>
                </div>

            </div>
        </div>
    </a>

    <a href="{{route('withdraw.store')}}">
        <div class="col-lg-3">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row text-center">
                        <i class="fa fa-cart-arrow-down fa-5x"></i>
                    </div>
                </div>

                <div class="panel-footer announcement-bottom">
                    <div class="row text-center">
                        <h3>Sacar</h3>
                    </div>
                </div>

            </div>
        </div>
    </a>

    <a href="{{route('transfer.store')}}">
        <div class="col-lg-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row text-center">
                        <i class="fa fa-exchange fa-5x"></i>
                    </div>
                </div>

                <div class="panel-footer announcement-bottom">
                    <div class="row text-center">
                        <h3>Transferir</h3>
                    </div>
                </div>

            </div>
        </div>
    </a>

    <a href="{{route('admin.historic')}}">
        <div class="col-lg-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row text-center">
                        <i class="fa fa-history fa-5x"></i>
                    </div>
                </div>

                <div class="panel-footer announcement-bottom">
                    <div class="row text-center">
                        <h3>Histórico</h3>
                    </div>
                </div>

            </div>
        </div>
    </a>
@stop