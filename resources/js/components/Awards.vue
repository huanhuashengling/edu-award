<template>
    <div>
        <div v-for="award in awards">
            <award :data="award"></award>
        </div>
    </div>
</template>
 
<script>
    import Award from './Award.vue';
 
    export default {
        props: ['data'], // accepts data for replies
 
        components: {Award},
 
        data() {
            return {
                awards: this.data
            }
        }
    }
</script>