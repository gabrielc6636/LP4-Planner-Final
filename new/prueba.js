$(function() {
    var $form = $("#my-dynamic-form");

    $('#add-field-button').click( function(){
        var $fieldset = $('<fieldset>');
        
        $('<input type="text" name="field[]">').appendTo($fieldset);
        $('<input type="number" name="value[]">').appendTo($fieldset);
        
        $fieldset.appendTo($form);
    });
    
});