import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

const host = "localhost:8000";

export default defineConfig({
    host,
    hmr: { host },
    plugins: [
        laravel({
            input: [
                // css files
                "resources/css/icomoon.css",
                "resources/scss/preload.scss",
                "resources/scss/libs.scss",
                "resources/scss/preload.scss",
                "resources/scss/about.scss",
                "resources/scss/contacts.scss",
                "resources/scss/error.scss",
                "resources/scss/faq.scss",
                "resources/scss/gallery.scss",
                "resources/scss/news.scss",
                "resources/scss/post.scss",
                "resources/scss/room.scss",
                "resources/scss/rooms.scss",
                // js files
                "resources/js/app.js",
                "resources/js/common.js",
                "resources/js/error.js",
                "resources/js/faq.js",
                "resources/js/gallery.js",
                "resources/js/index.js",
                "resources/js/post.js",
                "resources/js/room.js",
            ],
            refresh: true,
        }),
    ],
});
