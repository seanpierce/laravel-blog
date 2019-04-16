<template>
    <div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="New Post Title" v-model="title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" rows="3" placeholder="New Post Content" v-model="content"></textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input
                type="file"
                @change="handleFile($event)">
        </div>
        <button
            class="btn btn-primary"
            @click="createPost">
            Submit
        </button>
    </div>
</template>

<script>
import axios from 'axios'

    export default {
        mounted() {
        },
        data: function() {
            return {
                file: null,
                title: null,
                content: null,
            }
        },
        methods: {
            handleFile(e) {
                this.file = e.target.files[0];
            },
            getImagePreview() {
            },
            removeFile(key) {
            },
            createPost() {
                let payload = new FormData();
                payload.append('file', this.file);
                payload.append('title', this.title);
                payload.append('content', this.content);

                axios.post('/api/post',
                    payload,
                    {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    })
                    .then(res => {
                        console.log(res)
                        if (res.data === true)
                            this.createPostSuccess();
                    })
                    .catch(err => {
                        console.log(err);
                        this.createPostErr(err);
                    })
            },
            createPostSuccess() {
                this.$root.popSuccess("New post created", this.redirectToPosts);
            },
            createPostError(err) {
                this.$root.popError("An error ocurred while creating a new post: " + err);
            },
            redirectToPosts() {
                window.location.href = "/admin/posts";
            }
        }
    }
</script>

<style scoped>
</style>
