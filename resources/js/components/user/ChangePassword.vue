<template>
    <div>
        <h3>Change password</h3>
        <hr>

        <p>Want to change password? Enter your new password here.</p>

        <form class="col-md-8">
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
</template>

<script>
    export default {

    };
</script>