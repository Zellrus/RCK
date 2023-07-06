<template>
    <div class="parallax-container">
        <div class="parallax-image" :style="imageStyle"></div>
    </div>
</template>

<script>
export default {
    name: 'ParallaxImage',
    props: {
        imageUrl: String,
        parallaxSpeed: {
            type: Number,
            default: 0.5
        }
    },
    computed: {
        imageStyle() {
            return {
                backgroundImage: `url(${this.imageUrl})`,
                transform: `translateY(${window.pageYOffset * this.parallaxSpeed}px)`
            };
        }
    }
};
</script>

<style scoped>
.parallax-container {
    height: 400px; /* Высота контейнера, в котором будет отображаться картинка */
    overflow: hidden;
    position: relative;
}

.parallax-image {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-size: cover;
    background-position: center;
    background-position-y: 50%;
}
</style>
