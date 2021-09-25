<template>
  <ul id="site-header-cart" class="site-header-cart menu">
    <li class="animate-dropdown dropdown">
      <a
        class="cart-contents"
        href="javascript:void(0)"
        data-toggle="dropdown"
        title="View your shopping cart"
      >
        <i class="tm tm-shopping-bag"></i>
        <span class="count" v-if="getCart.TotalItems">{{
          getCart.TotalItems
        }}</span>
        <span class="amount">
          <span class="price-label">Cart</span>
          <span v-if="getCart.SubTotal">&#036;{{ getCart.SubTotal }}</span>
        </span>
      </a>
      <ul class="dropdown-menu dropdown-menu-mini-cart py-0">
        <li v-if="getCart.Products">
          <div class="widget woocommerce widget_shopping_cart">
            <div class="widget_shopping_cart_content">
              <ul class="woocommerce-mini-cart cart_list product_list_widget">
                <li
                  class="woocommerce-mini-cart-item mini_cart_item"
                  v-for="(item, index) in getCart.Products"
                  :key="index"
                >
                  <a href="">
                    <img
                      :src="item.thumbnail"
                      class="
                        attachment-shop_thumbnail
                        size-shop_thumbnail
                        wp-post-image
                      "
                      alt=""
                    />
                    {{ item.Title }}&nbsp;
                  </a>
                  <span class="quantity"
                    >{{ item.Quantity }} ×
                    <span class="woocommerce-Price-amount amount">
                      <span class="woocommerce-Price-currencySymbol">$</span
                      >{{ item.Price }}</span
                    >
                  </span>
                </li>
              </ul>
              <!-- .cart_list -->
              <div class="d-table w-100">
                <p
                  class="
                    woocommerce-mini-cart__total
                    total
                    border-bottom-0
                    d-table-cell
                    text-left
                    mini-font
                  "
                >
                  <a
                    href="javascript:void(0)"
                    class="text-primary"
                    @click="viewCart"
                  >
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;
                    View Cart
                  </a>
                </p>
                <p
                  class="
                    woocommerce-mini-cart__total
                    total
                    border-bottom-0
                    text-right
                    d-table-cell
                    mini-font
                  "
                >
                  Subtotal:
                  <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">$</span>
                    {{ getCart.SubTotal }}
                  </span>
                </p>
              </div>
            </div>
            <!-- .widget_shopping_cart_content -->
          </div>
          <!-- .widget_shopping_cart -->
        </li>

        <li class="text-center py-2" v-else>Your cart is empty!</li>
      </ul>
      <!-- .dropdown-menu-mini-cart -->
    </li>
  </ul>
</template>
<script>
export default {
  created() {
    this.$store.dispatch("loadCartItems");
  },
  methods: {
    viewCart() {
      window.location.href = "/cart";
    },
  },
  computed: {
    getCart() {
      return this.$store.getters.getCart;
    },
  },
};
</script>
<style scoped>
.mini-font {
  font-size: 14px;
}
</style>