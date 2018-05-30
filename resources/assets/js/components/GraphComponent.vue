<template>
    <div style="width: 600px; height: 600px;">
        <canvas id="graph"></canvas>
    </div>

</template>

<script>
    export default Vue.extend({
        methods: {
            render(data) {
                let ctx = document.getElementById("graph").getContext('2d');
                let myBarChart = new Chart(ctx, {
                    type: 'line',
                    data: data,
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            }
        }
    });


</script>
