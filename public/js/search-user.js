$("#search_user").keyup(function() {
var key = $(this).val();
    setTimeout(function() {
        $.ajax({
            url: 'search',
            type: 'GET',
            data: {
                name : key,
            },
            success: function(response) {
                $('tbody').html(response);
            }   
        })  
    },1000);
});
