{{-- resources/views/filament/widgets/camiones-widget.blade.php --}}
<div class="p-4 bg-white dark:bg-gray-800 text-black dark:text-white rounded-lg shadow">
    <h2 class="text-lg font-semibold">Estadísticas de Camiones</h2>
    </ul class="mt-2">
        <li>Total de Camiones: {{ $this->getCamionesData()['total'] }}</li>
        {{--<li>Camiones Disponibles: {{ $this->getCamionesData()['disponibles'] }}</li>
        <li>Camiones No Disponibles: {{ $this->getCamionesData()['no_disponibles'] }}</li>--}}
    </ul>
</div>

