confirmation = false;

$(document).ready(function() {
    $("#dialog-confirm").dialog({
      autoOpen: false,
      resizable: true,
      height: "auto",
      width: 300,
      modal: true,
    });
    $('button[name="login"]').on('click', function(e){
        if (! confirmation)
            e.preventDefault();

        $("#dialog-confirm").dialog({
            buttons : {
                "OK" : function() {
                    $(this).dialog("close");
                }
            }
        });

        $("#dialog-confirm").dialog("open");
    });
});


