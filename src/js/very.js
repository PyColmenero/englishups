let search = $("#search");
let search__ = document.getElementById("search_");
search.click(function() {
    search__.scrollIntoView();
})
search.keyup(function() {
    build();
});

let input_verywords = $("#input_verywords");
let tbody_verywords = $("#tbody_verywords");
let datalist_verywords = $("#verywords");
let span_solution = $("#solution");
let verywords = {};

getVeryWords();

function getVeryWords() {

    $.getJSON('./src/data/very.json', function(data) {

        verywords = data;

        build();

    });
}

function build() {
    let html = "";
    let index = 0;
    for (const key in verywords) {
        if (Object.hasOwnProperty.call(verywords, key)) {

            let veryword = verywords[key];
            let lis = "";
            if (Array.isArray(veryword)) {
                console.log(veryword.length);
                for (let x = 0; x < veryword.length; x++) {
                    lis += "<span class='m-0'> - " + veryword[x] + " </span> <br/>";
                }
                veryword = "";
            }

            let acceptFilter1 = key.toLowerCase().indexOf(search.val().toLowerCase());
            let acceptFilter2 = veryword.toLowerCase().indexOf(search.val().toLowerCase());
            let filaclass = (index % 4 == 1 || index % 4 == 0) ? "filaeven" : "filaeven";
            if (acceptFilter1 != -1 || acceptFilter2 != -1) {
                index++;
                html += '<div class="col-12 col-md-6 fila border-bottom">';
                html += '<div class="d-flex p-2 w-100 ' + filaclass + '"><p class="w-100">Very ' + key + '</p> <p class="w-100">' + veryword + lis + '</p></div>';
                html += '</div>';
            }
        }
    }
    tbody_verywords.html(html);
}