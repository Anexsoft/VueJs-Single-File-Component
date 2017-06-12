<template>
    <div class="row">
        <div class="col-sm-8">
        <!-- 16:9 aspect ratio -->
        <div class="embed-responsive embed-responsive-16by9">
            <iframe 
                class="embed-responsive-item"
                :src="'https://www.youtube.com/embed/' + videoSelected.id"
                frameborder="0"
                allowfullscreen></iframe>
        </div>
        <hr>
        <p class="text-justify">{{ videoSelected.description }}</p>
        </div>
        <div class="col-sm-4">
        <ul class="list-group">
            <li class="list-group-item">
                <select class="form-control" v-model="categorySelected">
                    <option value="all" selected>Todas las categorías</option>
                    <option value="games">Videojuegos</option>
                    <option value="music">Música</option>
                    <option value="anime">Animes</option>
                </select>
            </li>
            <li class="list-group-item" v-for="video, index in getVideoList()">
                #{{index + 1}} 
                <a href="#" @click="selectVideo(video)">
                    {{ video.title }}
                </a><br>
                <small>{{ video.description }}</small>
            </li>
        </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'youtube',
        props: ['url'],
        data() {
            return {
                videoList: [],
                categorySelected: 'all',
                videoSelected: {
                    id: 'fDzQJ4xccC8',
                    description: 'Bills intenta asesinar a Goku'
                }
            }
        },
        mounted() {
            this.getVideos();
        },
        methods: {
            getVideos() {
                let self = this;
                $.post(this.url, function(x) {
                    self.videoList = x;
                }, 'json')
            },
            getVideoList() {
                let self = this;
                return this.videoList.filter(x => {
                    if(self.categorySelected === 'all') {
                        return x;
                    } else {
                        return x.category === self.categorySelected;
                    }
                });
            },
            selectVideo(video) {
                this.videoSelected.id = video.videoId;
                this.videoSelected.description = video.description;
            }
        }
    }
</script>