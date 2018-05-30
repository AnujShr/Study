<script>
    import Graph from './GraphComponent.vue';

    export default Graph.extend({

        props: ['player', 'opponent'],

        mounted() {
            this.render({
                    labels: ['Wins'],
                    datasets: [
                        {
                            label: this.player.name,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',

                            ],
                            // fill: true,
                            borderColor: [
                                'rgba(255,99,132,1)',
                            ],
                            borderWidth: 1,
                            data: [this.player.wins]
                        }, {
                            label: this.opponent.name,
                            backgroundColor: [
                                'rgba(255,99,132,1)',

                            ],
                            fill: true,
                            borderColor: [
                                'rgba(255, 99, 132, 0.2)',
                            ],
                            borderWidth: 1,
                            data: [this.opponent.wins]
                        }]
                },
            );


        }


    });


</script>
