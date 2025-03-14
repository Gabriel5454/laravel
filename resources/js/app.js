import './bootstrap';
import { defineConfig } from 'vite';

export default defineConfig({
    server: {
        proxy: {
            '/app': 'http://localhost',
        },
    },
    build: {
        manifest: true,
    },
});
