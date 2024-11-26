{{-- resources/views/filament/widgets/metodos-pago-widget.blade.php --}}
<div class="p-4 bg-white dark:bg-gray-800 text-black dark:text-white rounded-lg shadow">
    <h2 class="text-lg font-semibold">Estadísticas de Métodos de Pago</h2>
    <ul class="mt-2">
        <li>Total de Métodos de Pago: {{ $this->getMetodosPagoData()['total'] }}</li>
    </ul>
</div>

