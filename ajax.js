$(document).ready(function() {
    $('#form').on("submit", function(event) {
       event.preventDefault();
        var cardno = $("#cardno").val();

        $.ajax({
            url:"atm.php",
            method:"POST",
            data: {
                atm: cardno
            },
            success: function (data) {
                if (data != "") {
                    $("#form")[0].reset();
                    $("#status").html(data);
                }
            }
        })
    })
});