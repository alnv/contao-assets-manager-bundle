const AlertComponent = Vue.component('alert', {
    data: function () {
        return {
            timeoutId: null,
            alert: this.$parent.alert
        }
    },
    methods: {
        getCssClasses: function () {
            var objClass = {};
            objClass['active'] = this.alert.active;
            if (this.alert.type) {
                objClass[this.alert.type] = this.alert.type
            }
            if ( this.alert.component ) {
                objClass[this.alert.component] = this.alert.component
            }
            return objClass;
        },
        clearAlert: function () {
            if ( this.alert.type === 'error' ) {
                this.$parent.clearAlert();
                if (this.timeoutId) {
                    this.timeoutId = null;
                }
            }
        }
    },
    watch: {
        alert: {
            handler: function (alert) {
                if ( alert.type === 'error' && !this.timeoutId ) {
                    this.timeoutId = setTimeout(function () {
                        this.$parent.clearAlert();
                        this.timeoutId = null;
                    }.bind(this),1000)
                }
            },
            deep: true
        }
    },
    mounted: function () {},
    props: {},
    template:
        '<div v-if="alert.active" class="alert-component" v-bind:class="this.getCssClasses()" @click="clearAlert()">' +
            '<div class="alert-container">' +
                '<slot>' +
                    '<loading></loading>' +
                    '<p v-if="alert.message">{{ alert.message }}</p>' +
                '</slot>' +
            '</div>' +
        '</div>'
});