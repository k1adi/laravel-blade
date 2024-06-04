@extends('parent-template')

@section('title', 'Child Title')

@section('header')
    <p>Child Header</p>    
@endsection

@section('content')
    @parent
    <p>Child Content</p>
@endsection

@section('info')
    <p>Info from child</p>    
@endsection
    