<template>
    <div class="container">
        <form>
            <div :class="['form-group m-1 p-2' ,(successful ? 'alert-success' : '')]">
                <span v-if="successful"  class="label label-success">
                        Nuovo Post Pubblicato!!!
                </span>
            </div>

            <div :class="['form-group m-1 p-2' , error ? 'alert-danger' : '']">
                <span v-if="errors.title" class="label label-danger">

                        {{ errors.title[0] }}

                </span>

                <span v-if="errors-body" class="label label-danger" >

                        {{ errors.body[0] }}

                </span>

                <span v-if="errors-image" class="label label-danger" >

                        {{ errors.image[0] }}

                </span>
            </div>

            <div class="form-group">
                <input type="title" ref="title" class="form-control" id="title" placeholder="Inserisci il Titolo del Post" required>
            </div>

            <div class="form-group">
                <textarea ref="body" id="body"  rows="20" class="form-control" placeholder="Inserisci Corpo del post" required>

                </textarea>
            </div>



            <button type="submit" class="btn btn-primary block" for="imageFile"  @click.prevent="update">
                INVIA
            </button>
        </form>
    </div>
</template>

<script>
export default {
    mounted(){
        this.getPosts();
    },

    props:{
        body:{type: String},
        image:{type: File},
        postId:{
            type: Number,
            required: true
        }
    },

    data(){
        return {
            error: false,
            successful: false,
            errors:[]
        };

    },

    methods: {

        update(){
            let title = this.$refs.title.value;
            let body = this.$refs.body.value;

            axios.put('/api/posts/' + this.postId, {title,body})
                 .then(response =>{

                     this.successful =  true;
                     this.error = false;
                     this.errors = [];
                 })

                 .catch(error => {

                     if (!_isEmpty(error.response)) {
                         if ((error.response.status = 422)) {

                             this.errors = error.response.data.errors;
                             this.successful = false;
                             this.error = true;

                         }

                     }

                 });
        },

        getPosts(){

            axios.get('/api/posts/' + this.postId).then(response =>{
                this.$refs.title.value = response.data.data.title;
                 this.$refs.body.value = response.data.data.body;
            });
        }
    }
};
</script>
