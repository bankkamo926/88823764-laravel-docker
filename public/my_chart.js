Chart.defaults.font.family = 'Noto Sans Thai';


const ctx = document.getElementById('myChart');
const earning = document.getElementById('earning');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      datasets: [{
        label: 'ตารางงาน',
        data: [2, 15, 30],
        borderWidth: 1,
        backgroundColor: ["rgba(255, 138, 0, 1)", "rgba(105, 55, 170, 1)", "rgba(247, 186, 30, 1)"], 
      }]
    },
    options: {
      plugin: {
        legend:{
          position: 'bottom'
        }
      }
    }
  });

  