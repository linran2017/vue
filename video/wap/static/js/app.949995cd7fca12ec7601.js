webpackJsonp([1],{"1S6g":function(t,e){},"2RuM":function(t,e,s){"use strict";var a=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("swiper",{ref:"mySwiper",attrs:{options:t.swiperOption,"not-next-tick":t.notNextTick}},[t._l(t.sildes,function(t){return s("swiper-slide",{key:t.id},[s("router-link",{attrs:{to:"/video"}},[s("img",{attrs:{src:t.preview}})])],1)}),t._v(" "),s("div",{staticClass:"swiper-pagination",attrs:{slot:"pagination"},slot:"pagination"}),t._v(" "),s("div",{staticClass:"swiper-button-prev",attrs:{slot:"button-prev"},slot:"button-prev"}),t._v(" "),s("div",{staticClass:"swiper-button-next",attrs:{slot:"button-next"},slot:"button-next"}),t._v(" "),s("div",{staticClass:"swiper-scrollbar",attrs:{slot:"scrollbar"},slot:"scrollbar"})],2),t._v(" "),s("h2",[t._v("推荐视频")]),t._v(" "),s("div",{attrs:{id:"recommend"}},t._l(t.commendLesson,function(e){return s("router-link",{key:e.id,attrs:{to:{params:{lessonId:e.id},name:"Page"}}},[s("img",{attrs:{src:e.preview}}),t._v(" "),s("i",{staticClass:"iconfont icon-bofang"}),t._v(" "),s("span",{staticClass:"time"},[t._v(t._s(e.created_at))]),t._v(" "),s("span",{staticClass:"title"},[t._v(t._s(e.title))])])})),t._v(" "),s("a",{staticClass:"more",attrs:{href:""}},[t._v("MORE >")]),t._v(" "),s("h2",[t._v("热门视频")]),t._v(" "),s("div",{staticClass:"today"},[s("div",{staticClass:"pic"},t._l(t.hotLesson,function(t){return s("router-link",{key:t.id,attrs:{to:{params:{lessonId:t.id},name:"Page"}}},[s("img",{attrs:{src:t.preview}})])}))]),t._v(" "),s("div",{staticStyle:{height:"50px"}}),t._v(" "),s("ul",{attrs:{id:"bottom"}},[s("li",{staticClass:"cur"},[s("router-link",{attrs:{to:"/"}},[s("i",{staticClass:"iconfont icon-shouyeshouye"}),t._v(" "),s("span",[t._v("首页")])])],1),t._v(" "),s("li",[s("router-link",{attrs:{to:"/video"}},[s("i",{staticClass:"iconfont icon-icon02"}),t._v(" "),s("span",[t._v("视频")])])],1)])],1)},n=[],i={render:a,staticRenderFns:n};e.a=i},"4JxU":function(t,e,s){"use strict";var a=function(){var t=this,e=t.$createElement;t._self._c;return t._m(0)},n=[function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"hello"},[s("h2",[t._v("Essential Links")]),t._v(" "),s("ul",[s("li",[s("a",{attrs:{href:"https://vuejs.org",target:"_blank"}},[t._v("Core Docs")])]),t._v(" "),s("li",[s("a",{attrs:{href:"https://forum.vuejs.org",target:"_blank"}},[t._v("Forum")])]),t._v(" "),s("li",[s("a",{attrs:{href:"https://chat.vuejs.org",target:"_blank"}},[t._v("Community Chat")])]),t._v(" "),s("li",[s("a",{attrs:{href:"https://twitter.com/vuejs",target:"_blank"}},[t._v("Twitter")])]),t._v(" "),s("br"),t._v(" "),s("li",[s("a",{attrs:{href:"http://vuejs-templates.github.io/webpack/",target:"_blank"}},[t._v("Docs for This Template")])])]),t._v(" "),s("h2",[t._v("Ecosystem")]),t._v(" "),s("ul",[s("li",[s("a",{attrs:{href:"http://router.vuejs.org/",target:"_blank"}},[t._v("vue-router")])]),t._v(" "),s("li",[s("a",{attrs:{href:"http://vuex.vuejs.org/",target:"_blank"}},[t._v("vuex")])]),t._v(" "),s("li",[s("a",{attrs:{href:"http://vue-loader.vuejs.org/",target:"_blank"}},[t._v("vue-loader")])]),t._v(" "),s("li",[s("a",{attrs:{href:"https://github.com/vuejs/awesome-vue",target:"_blank"}},[t._v("awesome-vue")])])])])}],i={render:a,staticRenderFns:n};e.a=i},"750o":function(t,e,s){"use strict";var a=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("swiper",{attrs:{options:t.swiperOption}},t._l(t.tags,function(e){return s("swiper-slide",{key:e.id},[s("router-link",{attrs:{to:{params:{tid:e.id},name:"Video"}}},[t._v("\n          "+t._s(e.name)+"\n        ")])],1)})),t._v(" "),s("ul",{attrs:{id:"videolist"}},t._l(t.lesson,function(e){return s("li",{key:e.id},[s("router-link",{staticClass:"pic",attrs:{to:{params:{lessonId:e.id},name:"Page"}}},[s("img",{attrs:{src:e.preview}}),t._v(" "),s("span",[t._v(t._s(e.cerated-t.at))]),t._v(" "),s("i",{staticClass:"iconfont icon-bofang"})]),t._v(" "),s("router-link",{staticClass:"title",attrs:{to:{params:{lessonId:e.id},name:"Page"}}},[t._v(t._s(e.title))])],1)})),t._v(" "),s("ul",{attrs:{id:"bottom"}},[s("li",[s("router-link",{attrs:{to:"/"}},[s("i",{staticClass:"iconfont icon-shouyeshouye"}),t._v(" "),s("span",[t._v("首页")])])],1),t._v(" "),s("li",{staticClass:"cur"},[s("router-link",{attrs:{to:"/video"}},[s("i",{staticClass:"iconfont icon-icon02"}),t._v(" "),s("span",[t._v("视频")])])],1)])],1)},n=[],i={render:a,staticRenderFns:n};e.a=i},"7DSs":function(t,e,s){"use strict";var a=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("video",{attrs:{src:t.current.path,controls:"controls",poster:"static/images/510.jpg"}}),t._v(" "),s("ul",{attrs:{id:"list"}},t._l(t.videos,function(e){return s("li",[s("a",{attrs:{href:""},on:{click:function(s){s.preventDefault(),t.play(e)}}},[t._v(t._s(e.title))])])})),t._v(" "),s("a",{staticClass:"iconfont back",on:{click:function(e){e.preventDefault(),t.back(e)}}},[t._v("")])])},n=[],i={render:a,staticRenderFns:n};e.a=i},"7Q2j":function(t,e,s){"use strict";var a=function(){var t=this,e=t.$createElement;return(t._self._c||e)("div",{class:t.slideClass},[t._t("default")],2)},n=[],i={render:a,staticRenderFns:n};e.a=i},HUbK:function(t,e,s){"use strict";e.a={name:"swiper-slide",data:function(){return{slideClass:"swiper-slide"}},ready:function(){this.update()},mounted:function(){this.update(),this.$parent.options.slideClass&&(this.slideClass=this.$parent.options.slideClass)},updated:function(){this.update()},attached:function(){this.update()},methods:{update:function(){this.$parent&&this.$parent.swiper&&this.$parent.swiper.update&&(this.$parent.swiper.update(!0),this.$parent.options.loop&&this.$parent.swiper.reLoop())}}}},Jd3k:function(t,e,s){"use strict";function a(t){s("cchq")}var n=s("mX8q"),i=s("750o"),r=s("o7Pn"),o=a,c=r(n.a,i.a,o,"data-v-2ef1c85e",null);e.a=c.exports},M93x:function(t,e,s){"use strict";function a(t){s("ck0Z")}var n=s("ajUD"),i=s("ueSh"),r=s("o7Pn"),o=a,c=r(n.a,i.a,o,null,null);e.a=c.exports},NHnr:function(t,e,s){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var a=s("2HEv"),n=s("ucRj"),i=s.n(n),r=s("M93x"),o=s("YaEn"),c=s("BMa3"),u=s.n(c),l=s("MqOw"),p=s.n(l);a.a.use(p.a,u.a),a.a.config.productionTip=!1,a.a.use(i.a),new a.a({el:"#app",router:o.a,template:"<App/>",components:{App:r.a}})},QQaT:function(t,e){},SW1d:function(t,e,s){"use strict";var a="undefined"!=typeof window;a&&(window.Swiper=s("Bnvi")),e.a={name:"swiper",props:{options:{type:Object,default:function(){return{autoplay:3500}}},notNextTick:{type:Boolean,default:function(){return!1}}},data:function(){return{defaultSwiperClasses:{wrapperClass:"swiper-wrapper"}}},ready:function(){!this.swiper&&a&&(this.swiper=new Swiper(this.$el,this.options))},mounted:function(){var t=this,e=function(){if(!t.swiper&&a){delete t.options.notNextTick;var e=!1;for(var s in t.defaultSwiperClasses)t.defaultSwiperClasses.hasOwnProperty(s)&&t.options[s]&&(e=!0,t.defaultSwiperClasses[s]=t.options[s]);var n=function(){t.swiper=new Swiper(t.$el,t.options)};e?t.$nextTick(n):n()}}(this.options.notNextTick||this.notNextTick)?e():this.$nextTick(e)},updated:function(){this.swiper&&this.swiper.update()},beforeDestroy:function(){this.swiper&&(this.swiper.destroy(),delete this.swiper)}}},TY8s:function(t,e,s){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var a=s("HUbK"),n=s("7Q2j"),i=s("o7Pn"),r=i(a.a,n.a,null,null,null);e.default=r.exports},YaEn:function(t,e,s){"use strict";var a=s("2HEv"),n=(s("qSdX"),s("lO7g")),i=s("Jd3k"),r=s("pMNZ"),o=s("u28b");a.a.use(o.a),e.a=new o.a({routes:[{path:"/",name:"Home",component:n.a},{path:"/video/:tid?",name:"Video",component:i.a},{path:"/page/:lessonId",name:"Page",component:r.a}]})},ajUD:function(t,e,s){"use strict";e.a={name:"app"}},by5r:function(t,e,s){"use strict";e.a={name:"page",mounted:function(){var t=this,e=this.$route.params.lessonId;this.axios.get("http://laravel.linran136.com/api/videos/"+e).then(function(e){console.log(e),200!==e.status&&e.data.code?alert("获取视频失败，请稍后再试"):(t.videos=e.data.date,t.current=t.videos[0])})},data:function(){return{videos:[],current:{}}},methods:{play:function(t){this.current=t},back:function(){this.$router.back()}}}},cchq:function(t,e){},ck0Z:function(t,e){},gPoK:function(t,e){},lO7g:function(t,e,s){"use strict";function a(t){s("QQaT")}var n=s("sRaZ"),i=s("2RuM"),r=s("o7Pn"),o=a,c=r(n.a,i.a,o,"data-v-6c05d5f9",null);e.a=c.exports},mX8q:function(t,e,s){"use strict";e.a={name:"video",watch:{$route:function(t,e){this.dataLoad()}},mounted:function(){this.dataLoad()},data:function(){return{tags:[],lesson:[],swiperOption:{pagination:".swiper-pagination",slidesPerView:3,paginationClickable:!0,spaceBetween:30,freeMode:!0}}},methods:{dataLoad:function(){var t=this;this.axios.get("http://laravel.linran136.com/api/tags").then(function(e){t.tags=e.data.date});var e=this.$route.params.tid;this.axios.get("http://laravel.linran136.com/api/lesson/"+(e||0)).then(function(e){console.log(e),t.lesson=e.data.date})}}}},pMNZ:function(t,e,s){"use strict";function a(t){s("gPoK")}var n=s("by5r"),i=s("7DSs"),r=s("o7Pn"),o=a,c=r(n.a,i.a,o,"data-v-878a28ae",null);e.a=c.exports},q6Np:function(t,e,s){"use strict";e.a={name:"hello",data:function(){return{msg:"Welcome to Your Vue.js App"}}}},qSdX:function(t,e,s){"use strict";function a(t){s("1S6g")}var n=s("q6Np"),i=s("4JxU"),r=s("o7Pn"),o=a,c=r(n.a,i.a,o,"data-v-3f2fc6b0",null);c.exports},sRaZ:function(t,e,s){"use strict";e.a={name:"home",mounted:function(){var t=this;this.axios.get("http://laravel.linran136.com/api/commendLesson/4").then(function(e){t.commendLesson=e.data.date}),this.axios.get("http://laravel.linran136.com/api/hotLesson/3").then(function(e){t.hotLesson=e.data.date}),this.axios.get("http://laravel.linran136.com/api/sildesLesson/4").then(function(e){console.log(e),t.sildes=e.data.date})},data:function(){return{commendLesson:[],hotLesson:[],sildes:[],notNextTick:!0,swiperOption:{autoplay:3e3,grabCursor:!0,setWrapperSize:!0,autoHeight:!0,pagination:".swiper-pagination",paginationClickable:!0,prevButton:".swiper-button-prev",nextButton:".swiper-button-next",scrollbar:".swiper-scrollbar",mousewheelControl:!0,observeParents:!0,debugger:!0,onTransitionStart:function(t){console.log(t)}}}}}},slUF:function(t,e,s){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var a=s("SW1d"),n=s("ttff"),i=s("o7Pn"),r=i(a.a,n.a,null,null,null);e.default=r.exports},ttff:function(t,e,s){"use strict";var a=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"swiper-container"},[t._t("parallax-bg"),t._v(" "),s("div",{class:t.defaultSwiperClasses.wrapperClass},[t._t("default")],2),t._v(" "),t._t("pagination"),t._v(" "),t._t("button-prev"),t._v(" "),t._t("button-next"),t._v(" "),t._t("scrollbar")],2)},n=[],i={render:a,staticRenderFns:n};e.a=i},ueSh:function(t,e,s){"use strict";var a=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{attrs:{id:"app"}},[s("transition",{attrs:{"enter-active-class":"animated fadeInDown"}},[s("router-view")],1)],1)},n=[],i={render:a,staticRenderFns:n};e.a=i}},["NHnr"]);
//# sourceMappingURL=app.949995cd7fca12ec7601.js.map