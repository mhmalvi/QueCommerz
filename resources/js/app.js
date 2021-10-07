import { createApp } from "vue";
import store from "./store";
import axios from "axios";
import NewArrivals from "./components/NewArrivals.vue";
import MiniCart from "./components/cart/MiniCart.vue";
import CartComponent from "./components/cart/CartComponent.vue";
import SingleProduct from "./components/product/SingleProduct.vue";
import UserSidebar from "./components/user/Sidebar.vue";
import DashboardComponent from "./components/user/DashboardComponent.vue";
import ProfileComponent from "./components/user/ProfileComponent.vue";
import TrackOrders from "./components/user/TrackOrders.vue";
import ViewInvoice from "./components/user/ViewInvoice.vue";
import ChangePassword from "./components/user/ChangePassword.vue";

const app = createApp({});

axios.defaults.baseURL = document.head.querySelector(
    'meta[name="api-base-url"]'
).content;

app.component("new-arrivals", NewArrivals);
app.component("mini-cart", MiniCart);
app.component("cart-component", CartComponent);
app.component("single-product", SingleProduct);
app.component("user-sidebar", UserSidebar);
app.component("dashboard-component", DashboardComponent);
app.component("user-profile", ProfileComponent);
app.component("track-orders", TrackOrders);
app.component("view-invoice", ViewInvoice);
app.component("change-password", ChangePassword);

app.use(store).mount("#page");

require("./bootstrap");

require("alpinejs");
