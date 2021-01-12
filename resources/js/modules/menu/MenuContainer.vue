<template>
  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="bg-white border-b border-gray-200">
      <h1 class="p-6 bg-blue-300 rounded">Menu</h1>
      <div class="section mt-2">
        <multiselect
          v-model="menu"
          :options="categories"
        ></multiselect>
      </div>

      <menu-group :current-menu-items="currentMenuItems"/>
    </div>
  </div>
</template>

<script>
import _ from 'lodash'
import Multiselect from 'vue-multiselect'
import MenuGroup from "./MenuGroups";

export default {
  props: ['items'],
  components: {
    MenuGroup,
    Multiselect
  },

  created() {
    _.forEach(this.items, (items, key) => {
      this.categories.push(key)
    });
    this.menu = this.categories[0];
  },

  data() {
    return {
      menu: '',
      categories: []
    }
  },

  computed: {
    currentMenuItems() {
      return this.items[this.menu];
    }
  }
}
</script>

