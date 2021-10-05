<template>
	<div>
		<h3>Track Your Orders</h3>
		<hr>

		<div>
			<p>All of your orders are listed here.</p>

			<table>
				<thead>
					<th>Order NO.</th>
					<th>Status</th>
					<th>Date</th>
					<th>Payment Status</th>
					<th></th>
				</thead>

				<tbody v-if="isLoading">
					<tr>
						<td>Loading...</td>
					</tr>
				</tbody>

				<tbody v-else>
					<tr v-for="order in orders">
						<td>
							{{ order.order_no }}
							<p class="text-hint">{{ order.cart.totalQty }} product(s)</p>
						</td>
						<td>{{ capitalize(order.order_status) }}</td>
						<td>{{ order.order_date }}</td>
						<td v-if="order.payment_status == 'paid'"><span class="badge badge-success">Paid</span></td>
						<td v-else><span class="badge badge-danger">Unpaid</span></td>
						<td>
							<a :href="'track-orders/view/' + order.order_no" v-if="order.order_status == 'approved'" class="btn btn-primary btn-sm">View Invoice</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</template>

<script>
	import axios from 'axios';

	export default {
		data(){
			return {
				orders: [],
				actionLink: "/track-orders/list",
				items: 5,
				isLoading: false
			}
		},
		created()
		{
			this.getOrders(this.actionLink);
		},
		methods:
		{
			getOrders(link)
			{
				this.isLoading = true;
				axios.get(link, {
					params: {
						items: this.items
					}
				}).then(res => {
					this.orders = res.data.data;
					console.log(this.orders);
					this.isLoading = false;
				}).catch(error => {
					alert('Something went wrong while fetching your orders!');
					console.error(error);
				})
			},
			capitalize(string)
			{
				return string.charAt(0).toUpperCase() + string.slice(1);
			}
		}
	};
</script>

<style scoped>
	.badge
	{
		font-weight: normal;
	}

	.product-list li
	{
		list-style-type: none;
		font-size: 12px;
	}

	.text-hint
	{
		color:  #aaa;
	}
</style>