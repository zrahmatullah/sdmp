<template>
  <h1>Kalender</h1>
  <div id="app">
    <div class="calendar-container">
      <div class="calendar-header">
        <button @click="prevMonth">&lt;</button>
        <h2>{{ currentMonthName }} {{ currentYear }}</h2>
        <button @click="nextMonth">&gt;</button>
      </div>
      <table class="calendar">
        <thead>
          <tr>
            <th v-for="day in daysOfWeek" :key="day">{{ day }}</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(week, index) in weeks" :key="index">
            <td
              v-for="day in week"
              :key="day.date"
              :class="{
                'other-month': day.isOtherMonth,
                selected: day.isSelected,
                hovered: day.isHovered,
                'current-day': day.isCurrentDay,
              }"
              @mouseover="day.isHovered = true"
              @mouseleave="day.isHovered = false"
              @click="selectDay(day)"
            >
              {{ day.date }}
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import { FilterMatchMode } from "primevue/api";
import { useToast } from "primevue/usetoast";
import apiClient from "../services/apiService";
import { ProductService } from "../services/ProductService";

const currentDate = new Date();
const currentMonth = ref(currentDate.getMonth());
const currentYear = ref(currentDate.getFullYear());
const weeks = ref([]);

const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
const currentMonthName = ref(
  currentDate.toLocaleString("default", { month: "long" })
);

const getDaysInMonth = () =>
  new Date(currentYear.value, currentMonth.value + 1, 0).getDate();
const getFirstDayOfMonth = () =>
  new Date(currentYear.value, currentMonth.value, 1).getDay();
const getCurrentDay = () => new Date().getDate();

const prevMonth = () => {
  if (currentMonth.value === 0) {
    currentMonth.value = 11;
    currentYear.value -= 1;
  } else {
    currentMonth.value -= 1;
  }
  updateCalendar();
};

const nextMonth = () => {
  if (currentMonth.value === 11) {
    currentMonth.value = 0;
    currentYear.value += 1;
  } else {
    currentMonth.value += 1;
  }
  updateCalendar();
};

const updateCalendar = () => {
  const daysInMonth = getDaysInMonth();
  const firstDayOfMonth = getFirstDayOfMonth();
  const currentDay = getCurrentDay();

  weeks.value = [];
  let week = [];
  for (let i = 0; i < firstDayOfMonth; i++) {
    week.push({ date: null, isOtherMonth: true });
  }

  for (let day = 1; day <= daysInMonth; day++) {
    let isCurrentDay =
      currentYear.value === currentDate.getFullYear() &&
      currentMonth.value === currentDate.getMonth() &&
      day === currentDay;
    week.push({
      date: day,
      isOtherMonth: false,
      isSelected: false,
      isHovered: false,
      isCurrentDay,
    });
    if (week.length === 7) {
      weeks.value.push(week);
      week = [];
    }
  }

  if (week.length) weeks.value.push(week); // Push the remaining week

  currentMonthName.value = currentDate.toLocaleString("default", {
    month: "long",
  });
};

const selectDay = (day) => {
  if (!day.isOtherMonth) {
    day.isSelected = !day.isSelected;
  }
};

onMounted(() => {
  updateCalendar();
});
</script>

<style scoped>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: "Arial", sans-serif;
  background-color: #080808;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  color: #333; /* Warna teks utama */
}

.calendar-container {
  width: 90%;
  max-width: 800px;
  background: #fff;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  border-radius: 12px;
  overflow: hidden;
  margin-top: 40px;
}

.calendar-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  background-color: #333; /* Latar belakang gelap */
  color: white; /* Teks putih */
  font-size: 18px;
}

.calendar-header button {
  background: none;
  border: none;
  color: white;
  font-size: 20px;
  cursor: pointer;
  padding: 5px;
}

.calendar-header h2 {
  margin: 0;
}

.calendar {
  width: 100%;
  border-collapse: collapse;
}

.calendar th,
.calendar td {
  text-align: center;
  padding: 15px;
  border: 1px solid #ddd; /* Garis pemisah abu-abu */
  font-size: 14px;
  color: white; /* Teks putih di seluruh tabel */
}

.calendar th {
  background-color: #222; /* Latar belakang gelap untuk header */
  font-weight: bold;
}

.calendar td {
  background-color: #000; /* Latar belakang hitam untuk tanggal */
  transition: background-color 0.3s, transform 0.3s;
  cursor: pointer;
}

.calendar td:hover {
  background-color: #070707; /* Efek hover abu-abu */
  transform: scale(1.1);
}

.calendar td.other-month {
  color: #aaa; /* Tanggal di luar bulan aktif lebih pudar */
}

.calendar td.selected {
  background-color: #333; /* Latar belakang hitam untuk tanggal yang dipilih */
  color: white; /* Teks putih */
  border-radius: 50%; /* Membuat lingkaran */
}

.calendar td.hovered {
  background-color: #d0d0d0; /* Warna abu-abu lebih terang saat hover */
}

.calendar td.current-day {
  color: red; /* Teks merah untuk hari ini */
  background-color: #000; /* Menghilangkan latar belakang */
  border-radius: 0; /* Menghilangkan efek bulat */
  font-weight: bold; /* Membuat teks hari ini tebal */
}

@media (max-width: 768px) {
  .calendar-container {
    width: 100%;
    margin: 0;
  }

  .calendar-header h2 {
    font-size: 16px;
  }

  .calendar th,
  .calendar td {
    padding: 10px;
    font-size: 12px;
  }
}
</style>

../services/ProductService
