<template>
  <div>
    <h3>Profile</h3>
    <hr>

    <p>You can update your profile information here.</p>

    <form @submit.prevent="onUpdate">
      <div class="d-flex  justify-content-end">
        <button class="btn btn-primary" :disabled="isUpdating">
          {{ isUpdating ? "Saving" : "Save" }}
        </button>
      </div>
      <div class="alert alert-success mt-2" v-if="success_text">
        {{ success_text }}
      </div>
      <div class="form-group row">
        <div class="col-md-6">
          <label>First Name</label>
          <input type="text" name="firstname" class="form-control" v-model="user.info.firstname">
          <p class="text-danger" v-if="errors.firstname">{{ errors.firstname }}</p>
        </div>
        <div class="col-md-6">
          <label>Last Name</label>
          <input type="text" name="lastname" class="form-control" v-model="user.info.lastname">
          <p class="text-danger" v-if="errors.lastname">{{ errors.lastname }}</p>
        </div>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" v-model="user.email">
        <p class="text-danger" v-if="errors.email">{{ errors.email }}</p>
      </div>

      <h4>Billing Information</h4>
      <div class="form-group">
        <label>Country</label>
        <input type="text" name="country" class="form-control" v-model="user.info.country">
      </div>
      <div class="form-group">
        <label>State</label>
        <input type="text" name="state" class="form-control" v-model="user.info.state">
      </div>
      <div class="form-group">
        <label>Town / City</label>
        <input type="text" name="city" class="form-control" v-model="user.info.city">
      </div>
      <div class="form-group">
        <label>Street Address</label>
        <input type="text" name="street_address" class="form-control" v-model="user.info.street_address" placeholder="Street address">
        <input type="text" name="street_address_optional" class="form-control mt-2" v-model="user.info.street_address_optional" placeholder="Apartment, suite, unit etc. (optional)">
      </div>
      <div class="form-group">
        <label>Postcode / Zip</label>
        <input type="text" name="country" class="form-control" v-model="user.info.postcode">
      </div>
      <div class="form-group">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" v-model="user.info.phone">
      </div>

      <div class="alert alert-success mb-2" v-if="success_text">
        {{ success_text }}
      </div>

      <div class="d-flex  justify-content-end">
        <button class="btn btn-primary" :disabled="isUpdating">
          {{ isUpdating ? "Saving" : "Save" }}
        </button>
      </div>
    </form>
  </div>
</template>

<script>
  import axios from 'axios';

  export default
  {
    props: ['user_info'],
    data()
    {
      return {
        user: {},
        isUpdating: false,
        errors: {
          firstname: '',
          lastname: '',
          email: ''
        },
        success_text: ''
      }
    },
    created()
    {
      this.user = JSON.parse(this.user_info);
    },
    methods:
    {
      onUpdate()
      {
        this.isUpdating = true;
        this.success_text = '';
        this.errors = {};

        let request = this.user;
        request.firstname = request.info.firstname;
        request.lastname = request.info.lastname;

        axios.post('/profile', {
          ...request,
          _method: 'PATCH'
        }).then(res => {
          this.success_text = res.data.message
        }).catch(err => {
          let errors = err.response.data.errors;
          this.errors.firstname = errors.firstname ? errors.firstname[0] : '';
          this.errors.lastname = errors.lastname ? errors.lastname[0] : '';
          this.errors.email = errors.email ? errors.email[0] : '';
        }).finally(() => {
          this.isUpdating = false;
        })
      }
    }
  };
</script>