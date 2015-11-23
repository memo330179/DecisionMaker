$(document).ready(function(){
    var max_fields          = 10; //maximum number of fields
    var wrapper             = $(".input_field_wrap");
    var add_button          = $(".add_field_button");
    
    var x = 2; //we already have two options in there
    $(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fields){
            x++; //add the number of textboxes
            $(wrapper).append('<div>option: <input type="text" name="option[]" /><a href="#" class="remove_field">Remove</a></div>');
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){
        e.preventDefault(); $(this).parent('div').remove(); x--;
    });
});