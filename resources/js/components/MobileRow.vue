<template>
    <tr>
        <td class="text-center">
            <a :href="'/mobiles/' + mobile.id" class="text-decoration-none">
                {{ mobile.name }}
            </a>
        </td>
        <td>
            {{mobile.brand}}
        </td>
        <td>
            &#8377;{{ mobile.price }}
        </td>
        <td>
            <i class="large material-icons btn" @click="decreaseCount">remove_circle_outline</i>
            &nbsp;  {{ mobile_quantity }}&nbsp;
            <i class="large material-icons btn" @click="increaseCount">add_circle_outline</i>
        </td>
        <td>
            <select-user></select-user>
        </td>
        <td class="text-center">
            <button class="btn btn-outline-dark" @click="createOrder">Complete Order</button>
        </td>
    </tr>
</template>
<script>
    import SelectUser from "./SelectUser";
    export default {
        props:['mobile'],
        created() {
          console.log(this.$props.mobile);
        },
        data() {
            return {
                mobile_quantity: 1,
                selected_user: null
            }
        },
        methods: {
            increaseCount() {
                this.mobile_quantity++;
            },
            decreaseCount() {
                if(this.mobile_quantity >1)
                    this.mobile_quantity--;
            },
            createOrder() {
                var order = {
                    user_id: this.selected_user.id,
                    mobile_id: this.$props.mobile.id,
                    quantity: this.mobile_quantity,
                };
                axios.post('/orders', order)
                    .then(function (response) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Order has been processed!',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        console.log(response.data);
                    }).catch(function (error) {
                        console.log(error);
                    })
            }
        }
    }
</script>
