let search = $("#search");
let hardbutton = $("#hardway");
let div_irregularVerbs = $("#irregular-verbs");
let irregularVerbs;
getIrregularVerbs();

function getIrregularVerbs() {

    $.getJSON('./src/data/irregular-verbs.json?v=1', function(data) {

        irregularVerbs = data;

        build();

    });
}

let search__ = document.getElementById("search_");
search.click(function() {
    search__.scrollIntoView();
});
hardway = false;
hardbutton.click(function() {
    hardway = !hardway;
    if (!hardway) {
        hardbutton.text("Switch to extended list");
    } else {
        hardbutton.text("Come back to basic list");
    }
    build();
})
search.keyup(function() {
    build();
});

function build() {

    let htmls = "";

    for (let x = 0; x < irregularVerbs.length; x++) {

        const irregularVerb = irregularVerbs[x];
        let acceptFilter1 = irregularVerb.infinitive.toLowerCase().indexOf(search.val().toLowerCase());
        let acceptFilter2 = irregularVerb.pastSimple.toLowerCase().indexOf(search.val().toLowerCase());
        let acceptFilter3 = irregularVerb.pastParticiple.toLowerCase().indexOf(search.val().toLowerCase());
        let acceptFilter4 = irregularVerb.traduction.toLowerCase().indexOf(search.val().toLowerCase());


        if (irregularVerb.level == 1 || hardway) {
            if (acceptFilter1 != -1 || acceptFilter2 != -1 || acceptFilter3 != -1 || acceptFilter4 != -1) {
                htmls += `  <tr class="col-6 mb-5 px-2">
                                    <td class="py-3">` + irregularVerb.infinitive + `</td>
                                    <td class="py-3">` + irregularVerb.pastSimple + `</td>
                                    <td class="py-3">` + irregularVerb.pastParticiple + `</td>
                                    <td class="py-3">` + irregularVerb.traduction + `</td>
                                    <td class="py-3"><img class="sound" src="./src/media/play.png" width="30px" data-id='` + x + `' /></td>
                            </tr>`;
            }
        }
    }

    div_irregularVerbs.html(htmls);
}

$(document).on("click", ".sound", function() {
    let id = $(this).data("id");
    var audio = new Audio(irregularVerbs[id].sound);
    audio.play();
})