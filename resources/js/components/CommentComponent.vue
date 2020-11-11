<template>
    <div class="card my-4">
        <h5 class="card-header">Lascia un Commento:</h5>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <textarea class="form-control" ref="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" @click.prevent="addComment()">
                    Commenta
                </button>
            </form>
        </div>
        <p class="border p-3" v-for="comment in comments" :key="comment.id">
                <strong>{{ comment.user.name}}</strong>:
                <span>{{comment.body}}</span>
        </p>
    </div>
</template>
<script>
export default {
    props:{
        userName:{
            type:String,
            required: true
        },
        postId:{
            type:Number,
            required: true
        },
        comment:{type: String}
    },

    data(){
        return {
            comments: []
        };
    },

    created(){
        this.fetchComments();

        Echo.private("comment").listen("CommentSent" , e =>{

            this.comments.push({
                user:{name: e.user.name},
                body: e.comment.body,
            });
        });
    },

    methods:{
        fetchComments(){
            axios.get('/' + this.postId + '/comments').then(response =>{

                this.comments = response.data;
            });
        },

        addComment(){

            let body = this.$refs.body.value;
            axios.post('/' + this.postId + '/comments' , { body }).then(response => {

                this.comments.push({
                    user:{name: this.userName},
                    body: this.$refs.body.value
                });

                this.$refs.body.value = "";
            });
        }
    }
};
</script>
