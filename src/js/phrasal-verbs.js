let search = $("#search");
let div_irregularVerbs = $("#phrasal-verbs");
let irregularVerbs;

// let search_ = document.getElementById("search");
let search__ = document.getElementById("search_");
search.click(function() {
    search__.scrollIntoView(false);
})


getIrregularVerbs();


function getIrregularVerbs() {

    $.getJSON(url1 + "?v=9", function(data) {

        irregularVerbs = data;

        build();
    });


    // $.ajax({
    //     type: "POST",
    //     url: "./src/php/get_phrasalverbs.php",
    //     success: function(data) {

    //         console.log(data);

    //     },
    // });

}



search.keyup(function() {
    build();
})

function build() {

    if (filter) {
        groupedTable();
    } else {
        table();
    }

}

function groupedTable() {
    let groups = null;
    let hr = "";
    let ese1 = "";
    let guion = "";
    let beerre = "";

    if (filter == "0") {
        irregularVerbs.sort(function(a, b) {
            return a.root.localeCompare(b.root);
        });
        groups = groupBy(irregularVerbs, "root");
    } else if (filter == "1") {
        irregularVerbs.sort(function(a, b) {
            return a.addon.localeCompare(b.addon);
        });
        groups = groupBy(irregularVerbs, "addon");
    }

    let html = "";

    let acceptFilter;
    let grouphtml = "";
    let acceptedAmount = 0;
    Object.keys(groups).forEach(function(key) {
        let group = groups[key];

        grouphtml += "<div class='group mb-5'>";
        grouphtml += "<h3 class='fw-bold mb-3'> " + key.toUpperCase() + " </h3>";
        grouphtml += "<div class='row'>";

        // CADA PHRASAL VERB
        acceptedAmount = 0;
        for (let x = 0; x < group.length; x++) {
            let pharsal = group[x];
            acceptFilter = pharsal.infinitive.toLowerCase().indexOf(search.val().toLowerCase());
            if (acceptFilter != -1) {
                acceptedAmount++;
                let cols = (group.length <= 2) ? "col-md-6 col-xl-4" : "col-md-6 col-xl-4";
                grouphtml += '<div class="col-12 ' + cols + ' p-0 mb-3">';
                grouphtml += '   <div class="shadow-sm h-100 p-1 phrasalverb mx-1 pb-4">';
                grouphtml += '       <p class="text-center fs-4 mb-2 py-1 bg-light infinitive"> ' + pharsal.infinitive + ' </p>';

                // CADA SIGNIFICADO
                for (let y = 0; y < pharsal.meanings.length; y++) {

                    let meaning = pharsal.meanings[y];
                    let examples = "";
                    // por cada ejemplo
                    for (let z = 0; z < meaning.example.length; z++) {
                        const example = meaning.example[z];
                        examples += "<span> <b>Examples</b> " + guion + " " + example + "</span> </br>";
                    }

                    let meaning_text = (meaning.english) ? meaning.english : meaning.spanish;
                    grouphtml += hr + `<div class="px-2">
                                        <div class="">
                                            <p class="m-0"> <b>Meaning: </b><span class="text-black">` + meaning_text + `</span></p>
                                        </div>
                                        <div class=""> <b>Example` + ese1 + `: ` + beerre + ` </b>` + examples + `</div>

                                    </div>`;
                }


                grouphtml += '   </div>';
                grouphtml += '</div>';
            }


        }

        grouphtml += "</div>"
        grouphtml += "</div>"

        if (acceptedAmount != 0) {
            html += grouphtml;
        }
        grouphtml = "";
    });
    div_irregularVerbs.html(html);
}

let type_filter = 0;
let hardbutton = $("#hardway");
hardbutton.click(function() {

    if (type_filter == 0) type_filter = 1
    else if (type_filter == 1) type_filter = 0

    if (!hardway) {
        hardbutton.text("Switch to extended list");
    } else {
        hardbutton.text("Come back to basic list");
    }
    build();
})

function table() {

    let htmls = "";
    let separationIndex = 0;
    let separationAmount = 10;
    let phrasalAmount = 0;

    for (let x = 0; x < irregularVerbs.length; x++) {
        const irregularVerb = irregularVerbs[x];
        let meanings_ = "";

        let hr = "";
        let ese1 = "";
        let guion = "";
        let beerre = "";

        let acceptFilter = irregularVerb.infinitive.toLowerCase().indexOf(search.val().toLowerCase());
        if (acceptFilter != -1) {
            if (irregularVerb.type == type_filter || irregularVerb.type == 0) {
                if (phrasalAmount % separationAmount == 0) {
                    separationIndex++;
                    htmls += "<h2 class='mt-5 mb-2 ps-2 fs-3 grouptext'>Phrasal verbs. Group " + separationIndex + " (" + (phrasalAmount + 1) + "-" + ((phrasalAmount) + separationAmount) + ") </h2>";
                    if (x != 1) {
                        htmls += "<div class='border-bottom mb-2'> </div>";
                    }
                }
                phrasalAmount++;

                for (let y = 0; y < irregularVerb.meanings.length; y++) {
                    // console.log(irregularVerb);
                    const meaning = irregularVerb.meanings[y];
                    let examples = "";
                    guion = (meaning.example.length == 1) ? "" : "-";
                    for (let z = 0; z < meaning.example.length; z++) {
                        let example = meaning.example[z];
                        example = example.trim();
                        if (example[example.length - 1] != ".") {
                            if (example[example.length - 1] != "?") {
                                if (example[example.length - 1] != "!") {
                                    // console.log(example[example.length - 1]);
                                    example += ".";
                                }
                            }
                        }
                        examples += "<span> " + guion + " " + example + "</span> </br>"
                    }

                    if (y != 0) hr = "<div class='linea'> </div>";

                    let meaning_text = (meaning.english) ? meaning.english : meaning.spanish;
                    meaning_text = meaning_text.trim();
                    if (meaning_text[meaning_text.length - 1] != ".") {
                        if (meaning_text[meaning_text.length - 1] != "?") {
                            if (meaning_text[meaning_text.length - 1] != "!") {
                                // console.log(meaning_text[meaning_text.length - 1]);
                                meaning_text += ".";
                            }
                        }
                    }



                    ese1 = (meaning.example.length == 1) ? "" : "s";
                    beerre = (meaning.example.length == 1) ? "" : "</br>";

                    meanings_ += hr + `<div class="px-2">
                                        <div class="">
                                            <div class="m-0"> 
                                                <div><b>Meaning: </b></div> 
                                                <div class='mb-2'><span class="text-dark">` + meaning_text + `</span></div>
                                            </div>
                                        </div>
                                        <div class=""> 
                                            <div><b>Example` + ese1 + `: ` + beerre + ` </b></div>
                                            <div><span class="text-dark">` + examples + `</span></div>
                                        </div>
                                        
                                    </div>`;
                }

                // console.log(irregularVerb.type);
                let difficult = (irregularVerb.type == 0) ? "" : "<sup class='fs-6'> (hard)</sup>"
                htmls += `  <div class="col-12 col-md-6 col-xl-6 p-0 mb-3 mb-4">
                            <div class="shadow-sm h-100 p-1 phrasalverb mx-2 pb-4"> 
                                <div class="text-center fs-3 mb-2 py-1 bg-light infinitive">` + irregularVerb.infinitive + difficult + `</div>
                                <div class="fs-6">` + meanings_ + `</div>
                            </div>
                        </div>`;
            }
        }
    }

    div_irregularVerbs.html(htmls);

}

function groupBy(objectArray, property) {
    return objectArray.reduce((acc, obj) => {
        const key = obj[property].toUpperCase();
        if (!acc[key]) {
            acc[key] = [];
        }
        // Add object to list for given key's value
        acc[key].push(obj);
        return acc;
    }, {});
}