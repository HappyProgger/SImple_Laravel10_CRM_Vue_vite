import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    server: {
        watch: {
            usePolling: true,
        }
    },
    plugins: [


        laravel({
            input: 'resources/js/app.js',
            refresh: true,
            server: {
                port: 80,
                host: "0.0.0.0"
            },

        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
});
