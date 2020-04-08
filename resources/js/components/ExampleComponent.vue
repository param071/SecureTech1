<template>
  <div>
    <button @click="decreaseCount()" class="btn btn-outline-primary" v-if="count > 0">-</button>
    <span class="p-1 shadow">
      <input type="range" name id value="count" />
      {{ count }}
    </span>
    <button @click="increaseCount()" class="btn btn-outline-primary">+</button>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {
      count: 0
    };
  },
  methods: {
    decreaseCount() {
      this.count--;
    },
    increaseCount() {
      this.count++;
    }
  }
};
</script>
