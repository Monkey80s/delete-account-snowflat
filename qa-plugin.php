<?php
/*
    Plugin Name: Eliminar Mi Cuenta (Compatible con SnowFlat)
    Plugin URI: https://routters.vip
    Plugin Description: Agrega un botón moderno para eliminar la cuenta con un modal de confirmación en la página de ajustes del usuario.
    Plugin Version: 1.0
    Plugin Date: 2026-03-12
    Plugin Author: Monkey–🐒
    Plugin Author URI: https://routters.vip
    Plugin License: GPLv2
    Plugin Minimum Question2Answer Version: 1.7
    Plugin Minimum PHP Version: 5.4
*/

if (!defined('QA_VERSION')) {
    header('Location: ../../');
    exit;
}

// Registro de la capa para inyectar el botón en la página de cuenta
qa_register_plugin_layer(
    'qa-delete-account-layer.php',
    'Capa de Eliminación de Cuenta'
);

// Registro del módulo de página para procesar la eliminación
qa_register_plugin_module(
    'page',
    'qa-delete-account-page.php',
    'qa_delete_account_page',
    'Página de Eliminación de Cuenta'
);

/*
    Se omite la etiqueta de cierre de PHP para evitar errores de cabecera (Error 500).
*/
