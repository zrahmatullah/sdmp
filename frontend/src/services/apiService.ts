// src/services/apiService.js
import axios from 'axios';

const apiClient = axios.create({
    baseURL: 'http://localhost:8000', // Updated with your API base URL
    headers: {
        'Content-Type': 'application/json',
    },
    timeout: 10000,
});

export default apiClient;
