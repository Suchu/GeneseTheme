( function() {
    tinymce.create( 'tinymce.plugins.shortcode_button_plugin', {
        init: function( ed, url ) {
            ed.addButton( 'shortcode', {
                title: 'Formatted Text',
                text:'Formatted Text',
               
                onclick: function() {
                    // text = prompt( "Enter text", "" );
                    ed.execCommand( 'mceInsertContent', false, '[Formatted]Content[/Formatted]' );
                }
            });
        },
        createControl: function( n, cm ) { return null; },
    });
    tinymce.PluginManager.add( 'shortcode_button_plugin', tinymce.plugins.shortcode_button_plugin );
})();


