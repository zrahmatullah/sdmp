<script setup lang="ts">
import { ref, computed } from 'vue'

defineProps<{ msg: string }>()

const count = ref(0)
let incrementValue = ref(2);
const isBlocked = computed(() => count.value <= 0)

function decrement() {
  if (count.value > 0) {
    count.value--;
  }
}
function increment() {
  count.value += incrementValue.value;
  incrementValue.value *= 2;
}

</script>

<template>
  <h1>{{ msg }}</h1>

  <div class="card">
    <button type="button" @click="decrement" :disabled="isBlocked">
      - </button>
    <button type="button" @click="increment" :enabled="isBlocked">
      + </button>
    <p>
      Nilainya : {{ count }}
    <p v-if="isBlocked">Sudah Mencapai Batas</p>

    </p>
  </div>


</template>

<style scoped>
.read-the-docs {
  color: #888;
}
</style>
