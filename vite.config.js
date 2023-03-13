import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

const host = "localhost:8000";

export default defineConfig({
    host,
    hmr: { host },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
