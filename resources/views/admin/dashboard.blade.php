@extends('layouts.app')

@section('content')
<div class="Dashboard-heading">
    <div class='row rowBlogWrapper'>
        <div class='col-6'>
            <div class="chart1Holder">
            <canvas id="myChart" width="400" height="400"></canvas>
            </div>
        </div>
        <div class='col-6'>
            <div class="chart2Holder">
            <canvas id="myDoughnutChart" width="400" height="400"></canvas>
            </div>
        </div>

    </div>

</div>

<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Canvas for the chart -->

<!-- JavaScript code for the line chart -->
<script>
    var dataLine = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [{
            label: "My First Dataset",
            data: [65, 59, 80, 81, 56],
            fill: false,
            borderColor: "rgb(75, 192, 192)",
            tension: 0.1
        }]
    };

    var configLine = {
        type: 'line',
        data: dataLine,
        options: {
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    };

    var ctxLine = document.getElementById('myChart').getContext('2d');
    var myLineChart = new Chart(ctxLine, configLine);
</script>

<!-- JavaScript code for the doughnut chart -->
<script>
    var dataDoughnut = {
        labels: ["Red", "Blue", "Yellow"],
        datasets: [{
            data: [300, 50, 100],
            backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"],
            hoverBackgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"]
        }]
    };

    var configDoughnut = {
        type: 'doughnut',
        data: dataDoughnut,
        options: {
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    };

    var ctxDoughnut = document.getElementById('myDoughnutChart').getContext('2d');
    var myDoughnutChart = new Chart(ctxDoughnut, configDoughnut);
</script>


<!-- Dashboard specific content goes here -->
@endsection