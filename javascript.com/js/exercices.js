// jquery

// jquery c'est une librairie qui contient un ensemble de function

// en javascript
let listItems = document.querySelectorAll("li");
for(let i=0; i < listItems.length; i++);


$("body") . css("background-color" , "blue");
$("body") . css("color" , "yellow");
$("ul  li") . css("color" , "yellow");
$("a") . css("color" , "red");
// mettre un background green pour tout les li qui ont 
// la classe nav-item
$(".nav-item").css("background-color", "green");
$(" li list-group-item").css("background-color" , "red");

// height()
document.getElementById("info").innerHTML = $(".nav").innerHeight();

// width
document.getElementById("info").innerHTML = $(".nav").innerWidth();

//addClass
$("p").addClass("dweb");