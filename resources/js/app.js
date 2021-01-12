require('./bootstrap');
require('vue-multiselect/dist/vue-multiselect.min.css')

require('alpinejs');

import Vue  from 'vue'
import MenuContainer from "./modules/menu/MenuContainer";
/*
Componentes globais
*/
import CardComponent from "./components/Card";

const app = new Vue({
  el: '#app',
  components: {
    MenuContainer,
    CardComponent
  }
});
