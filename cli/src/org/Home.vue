<template>
    <div class="home">
        <h1>这是主页</h1>
        <li v-for="v in goods">
            {{v.id}}-{{v.title}}
        </li>
        <li v-for="v in newGoods">
            {{v.id}}-{{v.title}}
        </li>
    </div>
</template>
<script>
    export default{
        name:'Home',
        computed:{
            goods(){
                return this.$store.state.goods.goods;
            },
            newGoods(){
                return this.$store.getters.newGoods;
            }
        }
    }
</script>