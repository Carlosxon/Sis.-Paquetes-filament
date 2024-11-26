{{-- resources/views/filament/widgets/sucursales-widget.blade.php --}}
<div class="p-4 bg-white dark:bg-gray-800 text-black dark:text-white rounded-lg shadow">
    <h2 class="text-lg font-semibold">Estadísticas de Sucursales</h2>
    <ul class="mt-2">
        <li>Total de Sucursales: {{ $this->getSucursalesData()['total'] }}</li>
        {{--<li>Sucursales Activas: {{ $this->getSucursalesData()['activas'] }}</li>
        <li>Sucursales Inactivas: {{ $this->getSucursalesData()['inactivas'] }}</li>--}}
    </ul>
</div>

