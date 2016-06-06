(function() {
    tinymce.PluginManager.add('shortcode_buttons', function( editor, url ) {
        editor.addButton('shortcode_buttons', {
            text: 'Formatted Text',
            icon: false,
            onclick: function() {
          		
            	var url =window.location.origin+'/genesetheme/wp-content/themes/genesetheme/functions.php';
            	data = {'action':'FormattedText'};
            	jQuery.get(url, data, function(response) {editor.insertContent(response.FormattedText())});

                
            }


        });
    });
})();
