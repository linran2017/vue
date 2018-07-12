let goods={
    state:{
        goods:[
            {title:'衣服'},
            {title:'鞋子'}
        ]
    },
    getters:{
        newGoods(state){
            return state.goods;
        }
    }
}

export default goods;