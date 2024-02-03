import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import path from 'path';


export default defineConfig({
    plugins: [
        viteStaticCopy({
            targets: [
                {src: path.join(__dirname, '/resources/images'), dest: path.join(__dirname, '/public')},
                {src: path.join(__dirname, '/resources/fonts'), dest: path.join(__dirname, '/public')}
            ],
        }),
        laravel({
            input: [
                'resources/scss/site.scss',
                'resources/js/site.js',
            ],

            refresh: true,
        }),
    ],
});
