<template>
	<div class="dashboard-sidebar">
		<li><a href="/dashboard" :class="[isActive('/dashboard') ? 'text-primary' : '']">Dashboard</a></li>
		<li><a href="/profile" :class="[isActive('/profile') ? 'text-primary' : '']">Profile</a></li>
		<li><a href="/track-orders" :class="[isActive('/track-orders') ? 'text-primary' : '']">Track your orders</a></li>
	</div>
</template>

<script>
	export default
	{
		data()
		{
			return {

			}
		},
		methods:
		{
			isActive(link)
			{
				return link == window.location.pathname;
			}
		}
	};
</script>

<style scoped>
	.dashboard-sidebar li
	{
		padding: 10px 20px;
		list-style-type: none;
	}

	.dashboard-sidebar li a
	{
		font-weight: bold;
	}
</style>