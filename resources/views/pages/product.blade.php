@extends('layout.layoutdashboard')

@section('title', 'Dashboard Admin')

@section('content')
    @include('components.table_edit', ['produks' => $produks])
@endsection
