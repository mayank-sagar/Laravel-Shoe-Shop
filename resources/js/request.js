import axios from 'axios';


const axiosInstance = axios.create({
    headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    }
  });

export default axiosInstance;