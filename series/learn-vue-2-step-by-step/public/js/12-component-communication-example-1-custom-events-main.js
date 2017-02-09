Vue.component('acme-coupon', {
    template: '<input placeholder="Enter your coupon code" @blur="onLocalCouponApplied">',
    methods: {
        onLocalCouponApplied() {
            this.$emit('coupon-was-applied');
        }
    }
});

new Vue({
    el: '#root',
    data: {
        couponApplied: false
    },
    methods: {
        onCouponApplied() {
            this.couponApplied = true
        }
    }
});