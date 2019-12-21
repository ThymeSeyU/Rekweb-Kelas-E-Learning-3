$('#search-button').on('click', function() {

    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': '2d88592a',
            's': $('#search-input').val()
        },
        success: function (result) {
            if (result.Response == "True") {
                
            } else {
                $('#movie-list').html(`
                    <div class="col">
                        <h1 class="text-center"> ` + result.Error + ` </h1>
                    </div>
                `)
            }
        }
    });

});