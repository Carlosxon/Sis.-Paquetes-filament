{{-- resources/views/filament/widgets/tipos-envio-widget.blade.php --}}
<div class="p-4 bg-white dark:bg-gray-800 text-black dark:text-white rounded-lg shadow">
    <h2 class="text-lg font-semibold">Estadísticas de Tipos de Envío</h2>
    <ul class="mt-2">
        <li>Total de Tipos de Envío: {{ $this->getTiposEnvioData()['total'] }}</li>
    </ul>
</div>

