if ( AjaxRequest && AjaxRequest.hasOwnProperty( 'toggleSubpalette' ) ) {
    window.addEvent( 'ajax_change', function () {
        var arrVuesDocuments = document.querySelectorAll('.v-component');
        if ( !arrVuesDocuments.length ) {
            return null;
        }
        for ( var i = 0; i < arrVuesDocuments.length; i++ ) {
            if (!isVueInstance(arrVuesDocuments[i])) {
                window.addVueInstance(arrVuesDocuments[i]);
            }
        }
    });
    function isVueInstance(el) {
        for ( var i = 0; i < window.VueInstances.length; i++ ) {
            if ( window.VueInstances[i]['$el'] === el ) {
                return true;
            }
        }
        return false;
    }
}