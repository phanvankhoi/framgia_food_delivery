$("#search_food").keyup(function() {
var key = $(this).val();
    setTimeout(function() {
        $.ajax({
            url: 'search/food',
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
