Pagina de portafolio para el Ing. Hector Ricardo

Aqui voy a escribir pasos extra que se deben tomar para su estilo front end

1) como adaptar SCSS a laravel:
    1.- correr npm add -D sass
    2.- Añadir lo siguiente a vite.config.js en la carpeta raiz:

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.css', 
                'resources/js/app.js', 
                'resources/css/reset.css', 
                'resources/css/scroll.css' 
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});

ahora añade la siguiente linea al archivo blade:
@vite([
    'resources/css/app.css', 
    'resources/js/app.js', 
    'resources/css/reset.css', 
    'resources/css/scroll.css' 
    ])

    fuente: 