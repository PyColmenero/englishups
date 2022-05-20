let words_div = $("#words");
let words;
let search = $("#search");
let search__ = document.getElementById("search_");
search.click(function() {
    search__.scrollIntoView();
})
search.keyup(function() {
    build();
});

getWords();

function getWords() {
    $.getJSON('./src/data/reading-ej3.json', function(data) {

        words = data;

        build();

    });
}

function build() {
    let html = "";

    for (let x = 0; x < words.length; x++) {
        for (let y = 0; y < words[x][0].length; y++) {
            let word1 = words[x][0][y];
            let word2 = words[x][1][y];
            let acceptFilter1 = word1.toLowerCase().indexOf(search.val().toLowerCase());
            let acceptFilter2 = word2.toLowerCase().indexOf(search.val().toLowerCase());
            if (acceptFilter1 != -1 || acceptFilter2 != -1) {
                html += "<p class='col-10 col-lg-5 col-xxl-4 mx-auto fs-6'><b class='me-2 fs-6'>" + word1 + ": </b> <span>" + word2.toLowerCase() + "</span> </p>";
            }
        }
    }

    words_div.html(html);
}