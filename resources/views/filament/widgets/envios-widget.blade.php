{{-- resources/views/filament/widgets/envios-widget.blade.php --}}

<div class="p-4 bg-white dark:bg-gray-800 text-black dark:text-white rounded-lg shadow">
    <h2 class="text-lg font-semibold">Estadísticas de Envíos</h2>
    <ul class="mt-2">
        <li>Total de Envíos: {{ $this->getEnviosData()['total'] }}</li>
        <li>Envíos Pendientes: {{ $this->getEnviosData()['pendientes'] }}</li>
        <li>Envíos en Tránsito: {{ $this->getEnviosData()['en_transito'] }}</li>
        <li>Envíos Entregados: {{ $this->getEnviosData()['entregados'] }}</li>
        <li>Envíos Cancelados: {{ $this->getEnviosData()['cancelados'] }}</li>
    </ul>
</div>
