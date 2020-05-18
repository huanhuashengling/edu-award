<template>
    <div>
      <div class="col-4">
        <img class='award-img img-thumbnail' src=/images/{{$award->img_url}}></img>
        {{$award->award_level}}
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
                imgUrl: this.data.imgUrl,
                awardLevel: this.data.awardLevel
            }
        }
    }
</script>