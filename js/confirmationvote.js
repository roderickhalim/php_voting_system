confirmation = false;

$(document).ready(function() {
    $("#dialog-confirm").dialog({
      autoOpen: false,
      resizable: true,
      height: "auto",
      width: 300,
      modal: true,
    });
    $('button[name="vote"]').on('click', function(e){
        if (! confirmation)
            e.preventDefault();

        $("#dialog-confirm").dialog({
            buttons : {
                "Yes" : function() {
                    confirmation = true;
                    //$(this).trigger('click');
                    console.log($(e.target).trigger('click'));
                },
                "No" : function() {
                    $(this).dialog("close");
                }
            }
        });

        $("#dialog-confirm").dialog("open");
    });
});


