$(function() {
    $("#cal").click(function() {
       if($("#n1").val()==="" || $("#n2").val()==="")
           {
               window.alert("Enter The Name");
           }
        else{
            $("#para").html("Ghanta Pyaar Hai....Sab Moh Maya Hai !!!");
        }
    });
    $("#n1").focus(function() {
        $("#para").html("");
    });
    $("#n2").focus(function() {
        $("#para").html("");
    });
});