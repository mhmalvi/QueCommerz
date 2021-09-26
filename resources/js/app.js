import { createApp } from "vue";
import store from "./store";
import axios from "axios";
import NewArrivals from "./components/NewArrivals.vue";
import MiniCart from "./components/cart/MiniCart.vue";
import CartComponent from "./components/cart/CartComponent.vue";
import SingleProduct from "./components/product/SingleProduct.vue";

const app = createApp({});

axios.defaults.baseURL = document.head.querySelector(
    'meta[name="api-base-url"]'
).content;

app.component("new-arrivals", NewArrivals);
app.component("mini-cart", MiniCart);
app.component("cart-component", CartComponent);
app.component("single-product", SingleProduct);

app.use(store).mount("#page");

require("./bootstrap");

require("alpinejs");
