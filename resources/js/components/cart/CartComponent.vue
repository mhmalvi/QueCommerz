<template>
  <div class="cart-wrapper" v-if="getCartItems.Products">
    <form method="post" action="#" class="woocommerce-cart-form">
      <table class="shop_table shop_table_responsive cart">
        <thead>
          <tr>
            <th class="product-remove">&nbsp;</th>
            <th class="product-thumbnail">&nbsp;</th>
            <th class="product-name">Product</th>
            <th class="product-price">Price</th>
            <th class="product-quantity">Quantity</th>
            <th class="product-subtotal">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(item, index) in getCartItems.Products" :key="index">
            <td class="product-remove">
              <a class="remove" href="#">×</a>
            </td>
            <td class="product-thumbnail">
              <a href="">
                <img
                  alt=""
                  class="wp-post-image cart-img"
                  :src="item.thumbnail"
                />
              </a>
            </td>
            <td data-title="Product" class="product-name">
              <div class="media cart-item-product-detail">
                <a href="">
                  <img
                    alt=""
                    class="wp-post-image cart-img"
                    :src="item.thumbnail"
                  />
                </a>
                <div class="media-body align-self-center">
                  <a href="">{{ item.Title }}</a>
                </div>
              </div>
            </td>
            <td data-title="Price" class="product-price">
              <span class="woocommerce-Price-amount amount">
                <span class="woocommerce-Price-currencySymbol"
                  >${{ item.Price }}</span
                >
              </span>
            </td>
            <td class="product-quantity" data-title="Quantity">
              <div class="quantity">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button
                      class="btn btn-sm btn-outline-secondary"
                      type="button"
                      @click="decrease(item.Id)"
                    >
                      -
                    </button>
                  </div>
                  <input
                    type="text"
                    class="
                      input-text
                      border-secondary
                      input-height
                      qty
                      rounded-0
                    "
                    min="1"
                    minlength="1"
                    max="5"
                    maxlength="5"
                    :value="item.Quantity"
                    readonly
                    @input="updateMyProp(index)"
                  />
                  <div class="input-group-append">
                    <button
                      class="btn btn-sm btn-outline-secondary"
                      type="button"
                      @click="increase(item.Id)"
                    >
                      +
                    </button>
                  </div>
                </div>
              </div>
            </td>
            <td data-title="Total" class="product-subtotal">
              <span class="woocommerce-Price-amount amount">
                <span class="woocommerce-Price-currencySymbol">$</span>
                {{ item.TotalPrice }}
              </span>
              <a
                title="Remove this item"
                class="remove"
                href="javascript:void(0)"
                @click="removeFromCart(item.Slug)"
                >×</a
              >
            </td>
          </tr>
          <tr>
            <td class="actions" colspan="6">
              <div class="coupon">
                <label for="coupon_code">Coupon:</label>
                <input
                  type="text"
                  placeholder="Coupon code"
                  value=""
                  id="coupon_code"
                  class="input-text"
                  name="coupon_code"
                />
                <input
                  type="submit"
                  value="Apply coupon"
                  name="apply_coupon"
                  class="button"
                />
              </div>
              <input
                type="submit"
                value="Update cart"
                name="update_cart"
                class="button"
              />
            </td>
          </tr>
        </tbody>
      </table>
      <!-- .shop_table shop_table_responsive -->
    </form>
    <!-- .woocommerce-cart-form -->
    <cart-totals></cart-totals>
    <!-- .cart-collaterals -->
  </div>
  <!-- .cart-wrapper -->
  <div v-else>
    <h3 class="text-center py-3">Your cart is empty!</h3>
    <div class="d-flex justify-content-center">
      <img
        src="../../../../public/assets/empty.png"
        alt=""
        style="width: 500px"
      />
    </div>
  </div>
</template>
<script>
import axios from "axios";
import CartTotals from "./CartTotals.vue";
export default {
  components: {
    CartTotals,
    btnIncrease: true,
    btnDecrease: true,
  },
  methods: {
    increase(id) {
      let product = this.getCartItems.Products.find(
        (product) => product.Id == id
      );
      product.Quantity++;

      axios
        .put("update-cart-item", {
          sku: id,
          qty: 1,
          action: "plus",
        })
        .then((res) => {
          this.$store.dispatch("loadCartItems");
        })
        .catch((error) => {
          console.error(error.res);
        });
    },
    decrease(id) {
      let product = this.getCartItems.Products.find(
        (product) => product.Id == id
      );
      product.Quantity--;

      axios
        .put("update-cart-item", {
          sku: id,
          qty: 1,
          action: "minus",
        })
        .then((res) => {
          this.$store.dispatch("loadCartItems");
        })
        .catch((error) => {
          console.error(error.res);
        });
    },
    removeFromCart(slug) {
      axios
        .delete(`remove/${slug}`)
        .then((res) => {
          this.$store.dispatch("loadCartItems");
        })
        .catch((error) => {
          console.error(error);
        });
    },
  },
  computed: {
    getCartItems() {
      return this.$store.state.cart;
    },
  },
};
</script>
<style scoped>
.input-height {
  height: 35px !important;
}

.cart-img {
  width: 80px !important;
}
</style>