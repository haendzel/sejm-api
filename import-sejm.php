<?php
/*
Plugin Name: Import SejmAPI
Description: Plugin do importowania danych posłów z API Sejmu.
Version: 1.0
Author: handzel.dev
*/


function ip_add_admin_menu() {
    add_menu_page(
        'Import SejmAPI',
        'Import SejmAPI',
        'manage_options',
        'import-sejmapi',
        'ip_admin_page',
        'dashicons-download',
        6
    );
}
add_action('admin_menu', 'ip_add_admin_menu');


function ip_admin_page() {
    ?>
    <div class="wrap">
        <h1>Import Posłów</h1>
        <p>Kliknij przycisk poniżej, aby rozpocząć import:</p>
        <button id="import-button" class="button button-primary">Importuj</button>
        <p id="import-message" style="display: none; color: green; font-weight: bold;">Trwa import... proszę czekać.</p>
    </div>

    <script>
        document.getElementById('import-button').addEventListener('click', function() {
            // Pokaż komunikat
            document.getElementById('import-message').style.display = 'block';

            // Przekieruj po 2 sekundach (symulacja czasu importu)
            setTimeout(function() {
                window.location.href = "<?php echo home_url(); ?>?import_poslowie";
            }, 2000); // 2000 ms = 2 sekundy
        });
    </script>
    <?php
}