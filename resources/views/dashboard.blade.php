{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    @livewire('envios-widget') {{-- Asegúrate de que Livewire esté configurado si usas Livewire --}}
</div>
@endsection

