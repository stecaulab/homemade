
<template>
    <div id="posts">
        <div  v-for="post in posts" :key="post.id"  class="border p-3 postLoop">
            {{ post.title }}
            <span class="float-right">
             <router-link :to="{ name: 'update', params: { postId : post.id }}">
                <button type="button" class="p-1 mx-3  btn btn-light"> Update </button>
            </router-link>
                 <button type="button" @click="deletePost(post.id)" class="p-1 mx-3  btn btn-danger"> Delete </button>

            </span>

        </div>
        <div>
            <button v-if="next" type="button" @click="navigate(next)" class="m-3 btn btn-primary">Next </button>
            <button v-if="prev" type="button" @click="navigate(prev)" class="m-3 btn btn-primary">Previous </button>
        </div>
    </div>
</template>


<script>
// import axios from 'axios';

export default {


  mounted() {
    this.getPosts();
  },
  data() {
    return {
      posts: [],
      next: null,
      prev: null,
    };
  },
  methods: {
    getPosts() {
      axios.get('/api/posts').then((response) => {

        this.posts = (response.data.data);
        this.prev = response.data.links.prev;
        this.next = response.data.links.next;
        console.log(response.data);
         }
      );
    },
    deletePost(id) {
      axios.delete("/api/posts/" + id).then(response => {
        console.log(response.data);
        this.getPosts();
      });
    },
    navigate(address) {
      this.getPosts(address);
    }
  }
};
</script>
<style>
.postLoop{
    margin-bottom: 10px;
}


</style>
