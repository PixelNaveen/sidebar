// Productivity Chart (Chart.js required)
document.addEventListener("DOMContentLoaded", function() {
  if (window.Chart && document.getElementById('productivityChart')) {
    var ctx = document.getElementById('productivityChart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
          label: 'Tasks Completed',
          data: [2, 4, 3, 5, 2, 1, 0],
          backgroundColor: 'rgba(54, 162, 235, 0.7)',
          borderRadius: 6,
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { display: false }
        },
        scales: {
          y: { beginAtZero: true, ticks: { stepSize: 1 } }
        }
      }
    });
  }
});