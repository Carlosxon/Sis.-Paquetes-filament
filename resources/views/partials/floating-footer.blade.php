<div id="floating-footer" style="display: none; background-color: #28a745; border-radius: 20px; padding: 10px; position: fixed; bottom: 40px; right: 20px; z-index: 1050;">
    <strong style="color: white;">MiniTrack v3.0</strong>
    <a href="https://wa.me/50251802332" target="_blank" rel="noopener noreferrer" style="color: white; text-decoration: underline;">
        <i class="fab fa-whatsapp"></i> Contactar Soporte
    </a>
</div>

<button id="toggle-footer" title="Información y Soporte" style="position: fixed; bottom: 40px; right: 20px; background-color: #28a745; color: white; border: none; border-radius: 50%; width: 50px; height: 50px; font-size: 24px; cursor: pointer; z-index: 1051; animation: pulse 2s infinite;">
    <i class="fab fa-whatsapp"></i>
</button>

<style>
@keyframes pulse {
    0% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.7);
    }
    70% {
        transform: scale(1.1);
        box-shadow: 0 0 0 10px rgba(40, 167, 69, 0);
    }
    100% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(40, 167, 69, 0);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var footer = document.getElementById('floating-footer');
    var toggleButton = document.getElementById('toggle-footer');
    
    toggleButton.addEventListener('click', function(e) {
        e.stopPropagation(); // Previene que el clic se propague al documento
        if (footer.style.display === 'none' || footer.style.display === '') {
            footer.style.display = 'block';
            toggleButton.style.display = 'none';
        } else {
            footer.style.display = 'none';
            toggleButton.style.display = 'block';
        }
    });

    footer.addEventListener('click', function(e) {
        e.stopPropagation(); // Previene que el clic en el footer lo cierre inmediatamente
    });

    document.addEventListener('click', function() {
        footer.style.display = 'none';
        toggleButton.style.display = 'block';
    });
});
</script>