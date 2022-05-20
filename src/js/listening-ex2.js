let words_div = $("#words");
let words;
let words1 = [];
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
    $.getJSON('./src/data/listening-ej2.json', function(data) {

        words = data;

        for (let x = 0; x < words.length; x++) {
            const wordGroup = words[x];
            for (let y = 0; y < wordGroup.length; y++) {
                const word = wordGroup[y].toLowerCase();

                let repetitions = 0;
                let newword = "";
                for (let z = 0; z < word.length; z++) {
                    const letter = word[z];
                    if (z != 0) {
                        const nletter = word[z + 1];
                        if (letter == nletter) {
                            repetitions++;
                            newword += "<b>" + letter + letter + "</b>";
                            z++;
                        } else {
                            newword += letter;
                        }
                    } else {
                        newword += letter;
                    }
                }


                if (repetitions != 0) {
                    words1.push(newword)
                }

            }
        }


        build();

    });
}

function build() {
    let html = "";

    for (let x = 0; x < words1.length; x++) {
        let filter = words1[x].toLowerCase().indexOf(search.val().toLowerCase());
        if (filter != -1) {
            html += "<p class='fs-4 col-12 col-md-6 col-lg-4 mx-auto text-center'>" + words1[x] + "</p>";
        }
    }

    words_div.html(html);
}