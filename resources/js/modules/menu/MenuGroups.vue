<template>
  <div class="section">
    <table class="table-auto border-separate border border-green-800">
      <thead>
      <tr>
        <th>Nome & Descrição</th>
        <th>Preço</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="(item, key) in currentMenuItems"
          :key="key"
          :class="key % 2 == 0 ? 'bg-blue-100': ''">
        <td>
          <strong v-text="item.nome"></strong>
          <p v-text="item.description"></p>
        </td>
        <td><span v-text="item.price"></span></td>
      </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
export default {
  name: 'menu-groups',
  props: {
    currentMenuItems: {}
  }
}
</script>
