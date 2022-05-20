$.ajax({
    url: './src/php/spy.php',
    data: { "url": url },
    type: 'post',
    success: function(response) {

        console.log(response);

    }
});