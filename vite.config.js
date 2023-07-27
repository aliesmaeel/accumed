import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

const host = 'accumed.aratech.co';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
    server: {
        hmr: {
            host,
            hmr: {
                host
            }
        },
    },
});