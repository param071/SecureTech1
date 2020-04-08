<template>
    <table class="table table-striped w-100" id="mobile_table">
        <thead class="thead-dark">
        <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Brand</th>
            <th class="text-center">Price</th>
            <th class="text-center">Quantity</th>
            <th class="text-center">User</th>
            <th>Order</th>
        </tr>
        </thead>
        <tbody>
            <mobile-row v-for="mobile in mobiles_list" :mobile="mobile" :key="mobile.id"></mobile-row>
        </tbody>
    </table>
</template>

<script>
    import MobileRow from "./MobileRow";
    export default {
        components: {MobileRow},
        data() {
            return {
                mobiles_list: {}
            }
        },
        props: ['mobiles'],
        created() {
            this.mobiles_list = JSON.parse(this.$props.mobiles);
            console.log(this.mobiles);
        }
    }
</script>
