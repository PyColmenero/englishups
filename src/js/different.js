let differents_div = $("#differents_div");
let differents = {};

getVeryWords();

function getVeryWords() {

    $.getJSON('./src/data/different-ways.json?v=1', function(data) {

        differents = data;
        // console.log(different_arr);
        build();

    });
}

function build() {
    let html = "";
    for (const key in differents) {
        if (Object.hasOwnProperty.call(differents, key)) {

            let different_arr = differents[key];
            let listt = "<div class='px-2'>";
            console.log(different_arr);

            for (let x = 0; x < different_arr.length; x++) {
                const different = different_arr[x];
                listt += "<p class='m-0 fs-6'>" + different + "</p>"
            }
            listt += "</div>";

            html += "<div class='col-12 col-md-6 col-lg-4 p-3'> <div class='shadow-sm h-100 p-2'><p class='bg-light py-2 mb-1 text-center fw-bold fs-4'>" + key.toUpperCase() + "</p> " + listt + "</div> </div>";

        }
    }
    differents_div.html(html);
}