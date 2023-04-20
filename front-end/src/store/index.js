import { createStore } from 'vuex'
import { postModule } from "@/store/postModule";

export default createStore({
    state: {
        posts: JSON.parse(localStorage.getItem("posts")),
    },
    mutations: {

    },
    actions: {

    },
    modules: {
        post: postModule
    }
})