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
    $.getJSON('./src/data/reading-ej2.json', function(data) {

        words = data;

        build();

    });
}

function build() {
    let html = "";
    Object.keys(words).forEach(function(word) {

        const amount = words[word];
        let fontsize = 16 + (4 * (amount - 1));
        let style = "style='font-size:" + fontsize + "px;'";

        let filter = word.toLowerCase().indexOf(search.val().toLowerCase());

        if (filter != -1) {
            html += "<span class='mx-2 position-relative word'><span " + style + "> " + word + "</span> <span class='subindice'>(" + amount + ")</span> </span>";
        }

        console.log(amount, word);

    });
    words_div.html(html);
}