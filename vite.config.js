import { defineConfig, loadEnv } from 'vite'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'

export default defineConfig(({ command, mode }) => {
    const env = loadEnv(mode, process.cwd(), '')

    const config = {
        plugins: [
            laravel({
                input: 'resources/js/app.js',
                refresh: true
            }),
            vue({
                template: {
                    transformAssetUrls: {
                        base: null,
                        includeAbsolute: false
                    }
                }
            })
        ],
    }

    if (env.USING_SAIL) {
        config.server = {
            https: false,
            host: true,
            port: 3009,
            hmr: {
                host: '0.0.0.0',
                protocol: 'ws'
            }
        }
    }

    return config
})
