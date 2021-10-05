<template>
	<div>
		<div class="woocommerce">
			<div class="woocommerce-order">
				<ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

					<li class="woocommerce-order-overview__order order">
						Order number:<strong>{{ order.order_no }}</strong>
					</li>

					<li class="woocommerce-order-overview__date date">
						Date:<strong>{{ order.order_date }}</strong>
					</li>


					<li class="woocommerce-order-overview__total total">
						Total:<strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ cart.totalPrice }}</span></strong>
					</li>

					<li class="woocommerce-order-overview__payment-method method">
						Payment method: <strong>{{ capitalize(order.payment_type) }}</strong>
					</li>

				</ul>
				<!-- .woocommerce-order-overview -->


				<section class="woocommerce-order-details">
					<h2 class="woocommerce-order-details__title">Order details</h2>

					<table class="woocommerce-table woocommerce-table--order-details shop_table order_details">

						<thead>
							<tr>
								<th class="woocommerce-table__product-name product-name">Product</th>
								<th class="woocommerce-table__product-table product-total">Total</th>
							</tr>
						</thead>

						<tbody>
							<tr class="woocommerce-table__line-item order_item" v-for="item in cart.items">

								<td class="woocommerce-table__product-name product-name">
									<a :href="'/view/' + item.product.slug">{{ item.product.product }}</a> 
									<strong class="product-quantity"> × {{ item.qty }}</strong>
								</td>

								<td class="woocommerce-table__product-total product-total">
									<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ item.regular_price }}</span>  
								</td>

							</tr>
						</tbody>

						<tfoot>
							<tr>
								<th scope="row">Subtotal:</th>
								<td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ cart.totalPrice }}</span></td>
							</tr>
							<tr>
								<th scope="row">Shipping:</th>
								<td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>100.00</span>&nbsp;<small class="shipped_via">via Normal Delivery</small></td>
							</tr>
							<tr>
								<th scope="row">Payment method:</th>
								<td>{{ capitalize(order.payment_type) }}</td>
							</tr>
							<tr>
								<th scope="row">Total:</th>
								<td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ cart.totalPrice + 100 }}</span></td>
							</tr>
						</tfoot>
					</table>
					<!-- .woocommerce-table -->
				</section>
				<!-- .woocommerce-order-details -->
			</div>
			<!-- .woocommerce-order -->
		</div>
	</div>
</template>

<script>
export default
{
	props: ['order_info'],
	data()
	{
		return {
			order: {},
			cart: {}
		}
	},
	created()
	{
		this.order = JSON.parse(this.order_info);
		this.cart = JSON.parse(this.order.cart);
	},
	methods:
	{
		capitalize(string)
		{
			return string.charAt(0).toUpperCase() + string.slice(1);
		}
	}
};
</script>