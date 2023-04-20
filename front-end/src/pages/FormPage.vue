<template>
    <div>
        <h1>Form page</h1>
        <router-link to="/posts">posts</router-link>


        <div>
            <form class="form">
                <label for="">Name</label>
                <input type="text" v-model.trim="name">
                <label for="">Description</label>
                <textarea name="" id="" cols="30" rows="10"  v-model="description"></textarea>
                <button @click="create_post">Save</button>
            </form>
        </div>
    </div>
</template>
  
<script>

    export default {
        data(){
            return {
                name: null,
                description: null

            }
        },
        methods:{

            create_post(e){
                e.preventDefault();
                let  posts = [];
                posts = JSON.parse(localStorage.getItem("posts"));
                posts.push({name:this.name,description:this.description})
                localStorage.setItem("posts", JSON.stringify(posts));
                
                this.$store.dispatch('SAVE_TODO', posts);
            },
        }
    }
</script>
  
<style>
.form{
    margin-top: 30px;
    display: flex;
    flex-direction: column;
    align-content: center;
    align-items: center;
    justify-content: center;
    gap: 10px;
}
</style>
  