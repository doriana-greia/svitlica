/**
 * JAVASCRIPT -UPLOAD-IMAGES
 */
jQuery(function($){
    /*
     * action at pressure on the button of load of image
     */
    $('.upload_image_button').click(function(){
        var send_attachment_bkp = wp.media.editor.send.attachment;
        var button = $(this);
        wp.media.editor.send.attachment = function(props, attachment) {
            $(button).parent().prev().attr('src', attachment.url);
            $(button).prev().val(attachment.id);
            wp.media.editor.send.attachment = send_attachment_bkp;
        }
        wp.media.editor.open(button);
        return false;
    });
    /*
     * delete the value of the arbitrary field if to be exact, we simply delete value at input type="hidden"
     */
    $('.remove_image_button').click(function(){
        var r = confirm("Уверены?");
        if (r == true) {
            var src = $(this).parent().prev().attr('data-src');
            $(this).parent().prev().attr('src', src);
            $(this).prev().prev().val('');
        }
        return false;
    });
});
