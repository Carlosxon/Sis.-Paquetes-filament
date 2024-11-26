{{-- resources/views/filament/widgets/paquetes-widget.blade.php --}}

<div class="p-4 bg-white dark:bg-gray-800 text-black dark:text-white rounded-lg shadow">
    <h2 class="text-lg font-semibold">Estadísticas de Paquetes</h2>
    <ul class="mt-2">
        <li>Total de Paquetes: {{ $this->getPaquetesData()['total'] }}</li>
        {{--<li>Paquetes Disponibles: {{ $this->getPaquetesData()['disponibles'] }}</li>
        <li>Paquetes No Disponibles: {{ $this->getPaquetesData()['no_disponibles'] }}</li>--}}
    </ul>
</div>

