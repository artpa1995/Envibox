<template>
    <div>
        <h1>Posts page</h1>
        <router-link to="/">form</router-link>
        <div class="posts_table">
            <table>
                <tr>
                    <th>name</th>
                    <th>descriptiom</th>
                </tr>
                <tr v-for="posts_item in this.posts" :key="posts_item">
                    <td>
                        {{posts_item.name }}
                    </td>
                    <td>
                        {{posts_item.description }}
                    </td>
                </tr>
              
            </table>
        </div>
    </div>
</template>
  
<script>

    export default {
    data(){
        return {
            posts: []
        }
    },
    mounted(){
        this.get_posts();
    },
    methods: {
        get_posts(){
            let posts_data = JSON.parse(localStorage.getItem("posts"));
            this.posts = posts_data;
        }
    },
    }
</script>
  
<style>
.posts_table{
    display: flex;
    justify-content: center;
    margin-top: 30px;
}
</style>
  