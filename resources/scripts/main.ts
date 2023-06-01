import { createApp, h } from "vue"
// @ts-ignore

import { InertiaProgress } from '@inertiajs/progress'
import "../scss/soft-ui-dashboard.scss"
import "bootstrap"

import {createInertiaApp} from "@inertiajs/inertia-vue3";

function resolvePageComponent(name: string, pages: Record<string, any>) {
    for (const path in pages) {
        if (path.endsWith(`${name.replace('.', '/')}.vue`)) {
            return typeof pages[path] === 'function'
                ? pages[path]()
                : pages[path]
        }
    }

    throw new Error(`Page not found: ${name}`)
}

InertiaProgress.init()

// Creates the Inertia app, nothing fancy.
createInertiaApp({
    // @ts-ignore
    resolve: (name) => resolvePageComponent(name, import.meta.glob('../views/pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        createApp({ render: () => h(app, props) })
            .use(plugin)
            .mount(el)
    },
})
