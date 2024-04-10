const showCharts = (sales,nbOrders) => {
    const labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  
    let ctx1 = document.getElementById('myChart1');
  
  
  
    const ctx = document.getElementById('myChart');
  
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: '# of Orders',
          data:nbOrders,
          borderWidth: 1,
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
          },
        
        title:{
          display: true,
          text: 'Number of Orders'
        }
      },
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  
  
    
    const data = {
      labels: labels,
      datasets: [
        {
          label: '$ per month',
          data: sales,
          borderColor: 'blue',
        }
      ]
    };
  
  
    const config = {
      type: 'line',
      data: data,
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
          },
          title: {
            display: true,
            text: 'Sales/Revenues',
          }
        }
      },
    };
  
  
    new Chart(ctx1, config);
  }
  