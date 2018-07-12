var p = $("p");
// p.css({
//    "color":"red"
// });

$("h1").css({
    "color":"blue"
}).text("this is selected ");

p.filter(function (i)  {
    return(i  % 3);
}).css({"color":"orange"});

