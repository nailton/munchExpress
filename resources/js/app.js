require('./bootstrap');

require('alpinejs');

import Vue  from 'vue'
import MenuContainer from "./modules/menu/MenuContainer";

const app = new Vue({
  el: '#app',
  components: {
    MenuContainer
  }
});
