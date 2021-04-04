function changeTextOnSearch(){
    let x = document.getElementById("marketSearch").value;

    let text = "";

    if(x == ""){
        text = "Résultats de la recherche";
    }else{
        text = "Résultats pour: " + x;
    }

    document.getElementById("searchMessage").innerHTML = text;
}