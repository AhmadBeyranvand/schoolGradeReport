import axios from 'axios';
import Chart from 'chart.js/auto';

axios.get("/api/studentAndAverageGrades")
    .then(res=>{
      const data = res.data
      const ctx = document.getElementById('myChart')
      
      new Chart(ctx, {
        type: 'line',
        data: {
          labels: data.labels,
          datasets: [{
            label: 'نمره‌ی شما',
            borderRadius: 20,
            borderColor: 'gray',
            data: data.studentGrades,
            borderWidth: 2,
            pointBackgroundColor: 'white', 
            pointBorderWidth:3
          }, {
            label: 'میانگین نمرات کلاس',
            borderRadius: 20,
            borderColor: 'rgb(0, 187, 255)',
            data: data.averageGrades,
            borderWidth: 2,
            pointBorderWidth:3
          }]
        },
        options: {
          scales: {
            x: {
              grid: {
                display: false
              }
            },
            y: {
              min:0,
              max:20,
              grid: {
                display: false
              }
            }
          },
          tension: 0.3
        },
      });

    })