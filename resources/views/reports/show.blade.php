@extends('layouts.fasilitasqu')

@php
    $pageCode = match (auth()->user()->role) {
        'masyarakat' => 'PEL-08',
        'admin' => 'ADM-03a',
        'petugas' => 'PTG-02',
        'koordinator' => 'KRD-02',
        default => 'PEL-08',
    };
@endphp

@section('title', 'Detail & Status Laporan — FasilitasQu')
@section('page-code', $pageCode)

@section('content')
    @include('reports.detail-content')
@endsection
