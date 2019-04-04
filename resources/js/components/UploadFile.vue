<template>
    <div class="container">
    </div>
</template>

<script>
import axios from 'axios'

    export default {
        mounted() {
        },
        data: function() {
            return {
                file: null
            }
        },
        methods: {
            handleFile(e) {
            },
            getImagePreview(){
            },
            removeFile(key) {
            },
            submitFiles() {
                console.log('uploading files...')
                console.log(this.file)
                axios.post('/api/files/upload-file', 
                    formData,
                    {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    })
                    .then(res => {
                        file.id = res.data.id;
                        this.files.splice(i, 1, file);
                    })
                    .catch(err => {
                        console.log(err);
                    })
            }
        }
    }
</script>

<style scoped>
</style>
