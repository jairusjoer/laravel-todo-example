import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

// PostCSS plugins
import tailwindcss from "tailwindcss";
import autoprefixer from "autoprefixer";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/globals.css", "resources/js/globals.js"],
            refresh: true,
        }),
    ],
    css: {
        postcss: {
            plugins: [tailwindcss, autoprefixer],
        },
    },
});
