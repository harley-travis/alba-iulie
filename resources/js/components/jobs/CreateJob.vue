<template>
  <div class="form-wrapper">
    
   <h2>Add Job</h2>
    
    <form action="" method="post">

     <md-field>
      <label>Job Title</label>
      <md-input v-model="jobTitle"></md-input>
    </md-field>

    <md-field>
    <!-- todo: set this up to loop through customer data -->
        <label for="location">Location</label>
        <md-select v-model="location" name="location" id="location">
          <md-option value="fight-club">California</md-option>
          <md-option value="godfather">Utah</md-option>
          <md-option value="godfather-ii">Arizona</md-option>
          <md-option value="godfather-iii">Romania</md-option>
        </md-select>
    </md-field>

    <md-field>
    <!-- todo: set this up to loop through customer data -->
        <label for="department">Department</label>
        <md-select v-model="location" name="department" id="department">
          <md-option value="fight-club">Marketing</md-option>
          <md-option value="godfather">Engineering</md-option>
          <md-option value="godfather-ii">Tech Support</md-option>
        </md-select>
    </md-field>

    <md-field>
    <!-- todo: set this in the database -->
        <label for="duration">Duration</label>
        <md-select v-model="location" name="duration" id="duration">
          <md-option value="fight-club">Full-Time</md-option>
          <md-option value="godfather">Part-Time</md-option>
          <md-option value="godfather-ii">Contract</md-option>
          <md-option value="godfather-ii">Seasonal</md-option>
          <md-option value="godfather-ii">Internship</md-option>
        </md-select>
    </md-field>

     <md-switch v-model="array" value="1">Array</md-switch>
    <md-switch v-model="array" value="2">Array</md-switch>
    <md-switch v-model="boolean">Boolean</md-switch>
    <md-switch v-model="string" value="my-switch">String</md-switch>
    <md-switch v-model="novalue">No Value</md-switch>
    <md-switch v-model="disabled" disabled>Disabled</md-switch>

    <!-- <md-switch v-model="string">Hourly</md-switch>
    <md-switch v-model="novalue" true>Boolean</md-switch> -->

    <md-field>
      <label>Compensation</label>
      <md-input v-model="compensation"></md-input>
    </md-field>


    <md-button class="md-raised md-primary">Add Job</md-button>
        
      
        
    </form> 
  </div>
</template>

<script>
  export default {
    name: 'AddJob',
    data: () => ({
      array: [],
      boolean: false,
      string: null,
      novalue: null,
      disabled: true
    })
  }
</script>

<style lang="scss">
  .form-wrapper {
    max-width: 70%;;
  }
   .md-switch {
    display: flex;
  }
</style>