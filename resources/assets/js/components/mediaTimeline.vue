<template> 
    <div class="media">
      <div class="media-left">
        <img src="http://www.newsshare.in/wp-content/uploads/2017/04/Miniclip-8-Ball-Pool-Avatar-15.png" class="media-object" style="width:60px">
    </div>
    <div class="media-body">
        <h4 class="media-heading">{{ user }}</h4>
        <slot></slot>
    </div>
    </div>
</template>

<script>
    export default {
        props:[

            'color',
            'user',
        ],

        computed:{

        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
