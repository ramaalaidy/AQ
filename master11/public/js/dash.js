  // Chart Example
  const ctx = document.getElementById('revenueChart').getContext('2d');
  new Chart(ctx, {
      type: 'line',
      data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June'],
          datasets: [{
              label: 'Monthly Revenue',
              data: [6500, 8900, 12000, 10500, 9800, 12500],
              borderColor: '#2A5D8A',
              tension: 0.4
          }]
      },
      options: {
          responsive: true,
          plugins: {
              legend: {
                  position: 'top',
              }
          }
      }
  });