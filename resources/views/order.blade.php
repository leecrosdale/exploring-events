@extends('layouts.app')

@section('content')
    <order-component :new="{{$order}}"></order-component>
@endsection
