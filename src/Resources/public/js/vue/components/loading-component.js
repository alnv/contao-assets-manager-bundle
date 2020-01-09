const LoadingComponent = Vue.component( 'loading', {
    data: function () {
        return {
            mainStyles: {
                background: '#000',
                animation: 'loading 1s infinite ease-in-out',
                width: '1em',
                height: '1em'
            },
            loaderStyles: {
                color: '#000',
                margin: '30px auto',
                position: 'relative',
                fontSize: '11px',
                transform: 'translateZ(0)',
                animationDelay: '-0.16s'
            },
            innerStyles: {
                position: 'absolute',
                top: 0,
                content: ''
            },
            beforeStyles: {
                left: '-1.5em',
                animationDelay: '-0.32s'
            },
            afterStyles: {
                left: '1.5em'
            }
        }
    },
    methods: {
        //
    },
    mounted: function () {
        //
    },
    props: {
        //
    },
    template:
        '<div class="loading-component">' +
            '<slot>' +
                '<div v-bind:style="[mainStyles, loaderStyles]">' +
                    '<span v-bind:style="[mainStyles, innerStyles, beforeStyles]"></span>'+
                    '<span v-bind:style="[mainStyles, innerStyles, afterStyles]"></span>'+
                '</div>' +
            '</slot>' +
        '</div>'
});