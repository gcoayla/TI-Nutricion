import { post } from "jquery";

$(document).ready(function () {
    $('#send-btn').click(function () {
        var alim = $('.busqueda').val();

        $.ajax({
            type: "POST",
            url: "welcome",
            data: alim,
            success: function (data) {
                
            }
        })
    })
})