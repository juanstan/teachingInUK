import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/register.css', 'resources/css/contact.css', 'resources/css/aboutus.css'],
            refresh: true,
        }),
    ],
});
