
      var mediaUploader;

      jQuery('#upload-button').click(function(e) {
        e.preventDefault();
        // If the uploader object has already been created, reopen the dialog
         if (mediaUploader) {
            mediaUploader.open();
            return;
        }
      // Extend the wp.media object
       mediaUploader = wp.media.editor.send.attachment = wp.media({ 
        // another funtion for upload image from media
        // wp.media.frames.file_frame
          title: 'Choose Logo',
          button: {
          text: 'Choose Logo'
       }, multiple: false });

      // When a file is selected, grab the URL and set it as the text field's value
      mediaUploader.on('select', function() {
        attachment = mediaUploader.state().get('selection').first().toJSON();
        jQuery('#image-url').val(attachment.url);
      });
      // Open the uploader dialog
      mediaUploader.open();
      });
      

      

