import Chart from 'chart.js/auto';

const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
      label: 'نمرات شما',
      borderRadius: 20,
      borderColor: 'rgb(74, 74, 74)',
      data: [12, 19, 3, 5, 2, 3],
      borderWidth: 2
    }, {
      label: 'میانگین نمرات کلاس',
      borderRadius: 20,
      borderColor: 'rgb(0, 187, 255)',
      data: [15, 17, 5, 4, 3, 2],
      borderWidth: 2
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
        grid: {
          display: false
        }
      }
    },
    tension: 0.3
  },
});