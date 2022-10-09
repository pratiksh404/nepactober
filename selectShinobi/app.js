const app = Vue.createApp({
    data(){
        return {
            favs: [],
            shinobies: [
                {name: "Kakashi", age: "10", isFavorite: true,img: "https://cdn.dsmcdn.com/mnresize/500/-/ty123/product/media/images/20210603/9/95349482/182310802/2/2_org.jpg"},
                {name: "Naruto", age: "12", isFavorite: true, img: "https://wallpapercave.com/wp/wp6539078.png"},
                {name: "Sasuke", age: "13", isFavorite: false, img: "https://w0.peakpx.com/wallpaper/238/843/HD-wallpaper-sasuke-anime-naruto.jpg"},
                {name: "Sakura", age: "14", isFavorite: false, img: "https://www.teahub.io/photos/full/62-620605_sakura-phone-wallpaper-naruto.jpg"},
            ]
        }
    },
    methods: {
        setFav(index){
           var favs = this.favs;
           favs.includes(index) ? favs.splice(favs.indexOf(index), 1) : favs.push(index);
           this.favs = [...new Set(favs)];
        }
    },
})

app.mount('#app')