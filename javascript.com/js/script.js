/*var marsouins=["VERROUX","RENAY","VITULIN","TERRINE","ROBINEL","MAXIMIN" ,"MARIE-LUCE","RENARD-VATON","NEY","THOME"];
var copie= [];

console.log(marsouins);
console.log(marsouins);[4];
console.log(marsouins.length);
var nbr=marsouins.length;
for(var i=0; < nbr; i++) {
(copie.push (marsouins[i]);
(copie.log (copie);
}
var last=marsouins[marsouins.length-1];
document.write(last);

marsouins.forEach(function(item,index,array){
console.log(item,index);
document.write(item,index);
});
var addNewMarsouin = marsouins.push("POPOTTE");
//document.write(marsouins);
document.write(marsouins);
var deleteLastMarsouin = marsouins.pop();
//document.write(marsouins);
document.write(marsouins);
var deleteFirstMarsouin = marsouins.shift();
document.write(marsouins);*/

var question = prompt("Est-ce que Monsieur RENARD-VATON, a compris le cour ?");
if(question != null){
    document.getElementById("reponse").innerHTML = question;
}
var question = prompt("Est-ce que Monsieur Renay est normal ?");
if (question!=null){
    document.getElementById("reponse").innerHTML = question;
}

var genre =("");
//afficher les instructions suivantes
/*
-Poser la question sur le type de genre 
-Tester que la réponse "genre" ne soit pas vide
-Afficher dans une fenetre modale la réponse
*/
var question= prompt(" Est-ce que mon genre est masculin ou féminin ?");
 
if (question !=null){
    document.getElementById("reponse").innerHTML = question;
}
