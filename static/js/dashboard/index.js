console.log("bonjour");

var cliqueme = document.getElementById('clickme');
cliqueme.addEventListener('click', function(event){
    console.log("bjr")
    var id = document.getElementById("idU").innerHTML;
    // console.log(id.innerHTML);
    $.ajax({
        url : "../BDD/mongo/conso.php",
        type : "GET",
        data : "idU=" + id,
        dataType : 'json',
        success: function(data, status){
            console.log(data);
            
            var main = document.getElementById("main");
            // je vide la div main
            while (main.firstChild) {
                main.removeChild(main.firstChild);
            }
            for(var i = 0; i< data.length; i++){
                var card = new Carte("tele", data[i].idU, data[i].idA, data[i].dateD, data[i].dateF, data[i].conso);
                // console.log(card.toHTML());
                main.appendChild(card.toHTML());
            }
        }
    })
})