<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-black bg-primary mb-3">
                    <div class="card-header"><h2>Header Example</h2></div>
                        <div class="card bg-light mb-3">
                            <h5 class="card-title">Example card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</template>

<!-- console log = untuk hasil respon pesan lewat inspecte elemen web browser -->
<script>
    export default {
        mounted() {
            console.log('Example Component mounted.')
        }
    }
</script>
<style type="text/css" scoped>
    h2{
        color: rgb(0, 0, 0);
    }
</style>