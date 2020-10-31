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

            <div class="custom-file mb-3">
                <input type="file" ref="image" name="image" id="imageFile" class="custom-file-imput" style="opacity:0" required>
                <label class="custom-file-label" for="imageFile">Scegli File...</label>

            </div>

            <button type="submit" class="btn btn-primary block" for="imageFile"  @click.prevent="create">
                INVIA
            </button>
        </form>
    </div>
</template>
<script>
export default {

        props: {
            userId:{
                type:       Number,
                required:   true
            },
            body:{type: String},
            image:{type: File}
        },

        data(){

            return{

                error:      false,
                successful: false,
                errors:     []

            };

        },

        methods:{

            create(){

                const formData = new FormData();

                formData.append("title",this.$refs.title.value);
                formData.append("body",this.$refs.body.value);
                formData.append("user_id",this.userId);
                formData.append("image",this.$refs.image.files[0]);

                axios.post('/api/posts',formData)
                     .then(response=> {

                         this.successful = true;
                         this.error = false;
                         this.errors = [];

                     })

                     .catch(error =>{

                         if(!_.isEmpty(error.response)){
                             if((error.response.status = 422)) {
                                 this.errors = error.response.data.errors;
                                 this.successful = false;
                                 this.error = true;
                             }
                         }

                     });

                     this.$refs.title.value = "";
                     this.$refs.body.value = "";

                }
        }
};

</script>


