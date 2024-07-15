import { defineConfig } from 'vite';
import path from 'path';
import laravel from 'laravel-vite-plugin';

// PostCSS plugins
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';

export default defineConfig({
    resolve: {
        alias: {
            '@': path.resolve(__dirname, './'),
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/globals.css', 'resources/js/globals.ts'],
            refresh: true,
        }),
    ],
    css: {
        postcss: {
            plugins: [tailwindcss, autoprefixer],
        },
    },
});
