// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from "vue";
import VueRouter from "vue-router";
import routes from "./routes";
import Master from "./components/layouts/Master.vue";
import { store } from "./store/store";

window.eventBus = new Vue();

/* Initialization Event Bus */
Vue.config.productionTip = false;
/* ----------------------- */
Vue.use(VueRouter);

const router = new VueRouter({
  routes,
  mode: "history"
});

/* eslint-disable no-new */
new Vue({
  el: "#app",
  store: store,
  router: router,
  components: { Master },
  template: "<Master/>"
});
