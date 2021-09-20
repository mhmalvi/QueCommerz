import { createApp } from "vue";
import NewArrivals from "./components/NewArrivals.vue";

const app = createApp({});

app.component("new-arrivals", NewArrivals);

app.mount("#page");

require("./bootstrap");

require("alpinejs");
