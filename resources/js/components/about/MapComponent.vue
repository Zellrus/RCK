<template>

</template>

<script>
 import "./leaflet.js";

export default {
    name: 'MapComponent',
    data () {
        return {
            mymap :null,
            L : new L,
            mymapMarker: null
        }
    },
    mounted() {
        this.initMap();
    },
    methods: {
        initMap() {
            this.mymap = L.map('mapid').setView([47.780934, 29.020672], 14)

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                { subdomains: ['a', 'b', 'c'] })
                .addTo(this.mymap)
            this.mymapMarker = L.marker([47.782899, 29.017392]).addTo(this.mymap);
        },
    },
}
</script>

<style scoped>
@import "./leaflet.css";
</style>
