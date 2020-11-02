<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'id'
        ],
        mounted() {
            console.log('Component mounted.')

            let channel = Echo.private('user.'+this.id);
            channel.listen('.UserEvent', function (data){
                console.log(data);
            });
        }
    }
</script>
