import axios from 'axios';
import Chart from 'chart.js/auto';

if(document.getElementById('adminChart')){
  const ctx = document.getElementById('adminChart')
  axios.get("/admin/api/getAverageOfCourses")
      .then(res=>{
        const data = res.data
        
        new Chart(ctx, {
          type: 'line',
          data: {
            labels: data.labels,
            datasets: [{
              label: 'میانگین نمرات',
              borderRadius: 20,
              borderColor: 'gray',
              data: data.values,
              borderWidth: 2,
              pointBackgroundColor: 'white', 
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

}