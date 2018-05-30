<script>
    import Graph from './GraphComponent.vue';

    export default Graph.extend({

        props: ['keys', 'values'],

        mounted() {
            this.render({
                    type:'line',
                    labels: this.keys,
                    datasets: [
                        {
                            label: 'Revenue',
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',


                            ],
                            // fill: true,
                            borderColor: [
                                'rgba(255, 99, 132, 0.2)',
                            ],
                            borderWidth: 1,
                            data: this.values
                        }]
                }
            );

        }
    });


</script>
