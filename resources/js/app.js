import { createApp } from "vue";
import axios from "axios";
import NewArrivals from "./components/NewArrivals.vue";
import MiniCart from "./components/MiniCart.vue";

const app = createApp({});

axios.defaults.baseURL = document.head.querySelector(
    'meta[name="api-base-url"]'
).content;

app.component("new-arrivals", NewArrivals);
app.component("mini-cart", MiniCart);

app.mount("#page");

require("./bootstrap");

require("alpinejs");
