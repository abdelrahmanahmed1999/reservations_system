import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/theme.scss', 
                'resources/scss/user.scss', 
                'resources/js/config.js',
                "resources/js/theme.js",
            ],
            refresh: true,
        }),
    ],
});
