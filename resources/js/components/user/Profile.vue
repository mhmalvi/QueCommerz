<template>
	<div>
		<h3>Profile</h3>
		<hr>

		<p>You can update your profile information here.</p>

		<form class="col-md-6">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" v-model="user.name">
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" v-model="user.email">
			</div>

			<button class="btn btn-primary float-right">
				Save
			</button>
		</form>

		<div>
			<h3>Update password</h3>
			<hr>

			<p>Want to change password? Enter your new password here.</p>

			<form class="col-md-6">
				<div class="form-group">
					<label>New Password</label>
					<input type="password" v-model="password" class="form-control">
				</div>

				<div class="form-group">
					<label>Password confirmation</label>
					<input type="password" v-model="password_confirmation" class="form-control">
				</div>

				<button class="btn btn-primary float-right">
					Update Password
				</button>
			</form>
		</div>
	</div>
</template>

<script>
	export default
	{
		props: ['user_info'],
		data()
		{
			return {
				user: {}
			}
		},
		created()
		{
			this.user = JSON.parse(this.user_info);
		}
	};
</script>