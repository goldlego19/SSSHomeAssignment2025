@extends('layouts.main')

@section('content')
                <form action="{{ route('colleges.store') }}" method="POST">
                  @csrf
                  @include('colleges._form')
                </form>
@endsection