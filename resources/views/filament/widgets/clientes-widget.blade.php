{{-- resources/views/filament/widgets/clientes-widget.blade.php --}}
<div class="p-4 bg-white dark:bg-gray-800 text-black dark:text-white rounded-lg shadow">
    <h2 class="text-lg font-semibold">Estadísticas de Clientes</h2>
    <ul class="mt-2">
        <li>Total de Clientes: {{ $this->getClientesData()['total'] }}</li>
       {{--<li>Clientes Activos: {{ $this->getClientesData()['activos'] }}</li>
        <li>Clientes Inactivos: {{ $this->getClientesData()['inactivos'] }}</li>--}}
    </ul>
</div>

