<template>
  <div class="py-12">
    <div class="flex sm:px-8 lg:px-8">
      <div class="w-2/3 mr-1">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <slot name="title"></slot>
            <slot name="body"></slot>
          </div>
        </div>
      </div>
      <div class="w-1/3">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <slot name="body"></slot>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Card"
}
</script>

<style scoped>

</style>
