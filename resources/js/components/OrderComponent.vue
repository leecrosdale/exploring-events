<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Thanks for your order!</div>

                    <div class="card-body">
                        <h1>

                            Thanks for your order {{ order.id }} <br/><br/>

                            Order Status: {{ order.status }}

                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {

            Echo.channel(`order.${this.order.id}`)
                .listen('OrderStatus', (e) => {
                    console.log(e.order);
                    this.order = e.order;
                });

        },
        data() {
            return {
                order: { ...this.new}
            }
        },
        props: ['new'],

    }
</script>
