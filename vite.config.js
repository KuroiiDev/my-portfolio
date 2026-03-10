import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/layout.page.css',
                'resources/css/pages/home.page.css',
                'resources/css/pages/project.page.css',
                'resources/css/pages/about.page.css',
                'resources/css/pages/contact.page.css',
                'resources/css/components/project.modal.css',
                'resources/js/app.js',
                'resources/js/layout.page.js',
                'resources/js/pages/home.page.js',
                'resources/js/components/project.modal.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});