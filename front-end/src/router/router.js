import { createRouter, createWebHistory } from 'vue-router'

import FormPage from "@/pages/FormPage"
import PostsPage from '@/pages/PostsPage'
const routes = [{
        path: '/',
        name: 'Formpage',
        component: FormPage
    },
    {
        path: '/posts',
        name: 'PostsPage',
        component: PostsPage
    },


]

const router = createRouter({
    routes,
    history: createWebHistory(process.env.BASE_URL)
})
export default router