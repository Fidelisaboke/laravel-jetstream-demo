,<div class="flex flex-col p-2 mx-auto w-128 h-128">
    <canvas class="items-center" id="bar_graph"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var ctx = document.getElementById('bar_graph').getContext('2d');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Users', 'Tasks'],
        datasets: [{
          label: 'Records Count',
          data:  [@json($usersCount), @json($tasksCount)],
          backgroundColor: ['rgba(255, 205, 86, 0.2)', 'rgba(75, 192, 192, 0.2)'],
          borderColor: ['rgb(255, 205, 86)', 'rgb(75, 192, 192)'],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false
      }
    });
</script>
