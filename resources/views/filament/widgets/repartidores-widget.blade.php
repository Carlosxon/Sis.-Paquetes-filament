{{-- resources/views/filament/widgets/repartidores-widget.blade.php --}}
<div class="p-4 bg-white dark:bg-gray-800 text-black dark:text-white rounded-lg shadow">
    <h2 class="text-lg font-semibold">Estadísticas de Repartidores</h2>
    <ul class="mt-2">
        <li>Total de Repartidores: {{ $this->getRepartidoresData()['total'] }}</li>
        {{--<li>Repartidores Disponibles: {{ $this->getRepartidoresData()['disponibles'] }}</li>
        <li>Repartidores No Disponibles: {{ $this->getRepartidoresData()['no_disponibles'] }}</li>--}}
    </ul>
</div>

