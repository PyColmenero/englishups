let inputs1 = $(".input1");
let inputs1max = $(".input1max");
let result1 = $(".result1");
inputs1.keyup(function() {

    let sum1 = 0;
    let sum2 = 0;
    inputs1.each(function() {
        let currentMark = parseInt($(this).val());
        if (!isNaN(currentMark)) {
            sum1 += parseInt($(this).val());
        }
    });

    inputs1max.each(function() {
        sum2 += parseInt($(this).text());
    });

    mark = (10 / (sum2 / sum1));
    mark = mark.toFixed(2)
    result1.text(mark + "/10")
})
let inputs2 = $(".input2");
let inputs2max = $(".input2max");
let result2 = $(".result2");
inputs2.keyup(function() {

    let sum1 = 0;
    let sum2 = 0;
    inputs2.each(function() {
        let currentMark = parseInt($(this).val());
        if (!isNaN(currentMark)) {
            sum1 += parseInt($(this).val());
        }
    });

    inputs2max.each(function() {
        sum2 += parseInt($(this).text());
    });

    mark = (10 / (sum2 / sum1));
    mark = mark.toFixed(2)
    result2.text(mark + "/10")
})