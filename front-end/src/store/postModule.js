import axios from "axios";

export const postModule = {
    state: () => ({
        posts: [],
    }),
    getters: {
        TODOS: state => {
            return state.posts
        }
    },
    mutations: {
        SET_TODO: (state, payload) => {
            state.posts = payload;
        },
        ADD_TODO: (state, payload) => {
            state.posts.push(payload);
        },
    },
    actions: {
        SAVE_TODO: async(posts, payload) => {
            let { data } = await axios.post('http://yourwebsite.com/savePost');
            posts.commit('ADD_TODO', payload);
            console.log(data);
        },

    }
}