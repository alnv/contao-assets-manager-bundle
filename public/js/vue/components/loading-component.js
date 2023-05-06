const LoadingComponent = Vue.component('loading', {
    data: function () {
        return {
            mainStyles: {
                background: '#000',
                animation: 'loading 1.2s infinite ease-in-out',
                width: '.75em',
                height: '24px'
            },
            loaderStyles: {
                color: '#000',
                margin: '15px auto',
                position: 'relative',
                fontSize: '10px',
                transform: 'translateZ(0)',
                animationDelay: '-0.16s'
            },
            innerStyles: {
                position: 'absolute',
                content: '',
                top: 0
            },
            beforeStyles: {
                left: '-1.125em',
                animationDelay: '-0.32s'
            },
            afterStyles: {
                left: '1.125em'
            },
            minHeight: {
                minHeight: '5rem'
            }
        }
    },
    template:
        '<div class="loading-component" v-bind:style="[minHeight]">' +
            '<slot>' +
                '<div v-bind:style="[mainStyles, loaderStyles]">' +
                    '<span v-bind:style="[mainStyles, innerStyles, beforeStyles]"></span>'+
                    '<span v-bind:style="[mainStyles, innerStyles, afterStyles]"></span>'+
                '</div>' +
            '</slot>' +
        '</div>'
});