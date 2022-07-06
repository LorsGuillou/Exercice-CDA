// Constantes de l'affichage HTML
const button = document.getElementById("button");
const songbox = document.getElementById("songbox");
const song = document.getElementById("song");

// Construction des paroles
function lyrics() {

    // Récupération et définition des variables qui construiront la chanson
    var number = document.getElementById("number").value;
    var singular = "bolée";
    var plural = "bolées";
    var cider = " de cidre sur le mur";
    var linejump = " sans alcool.</br>"
    var next = "Bois en un et au suivant ! ";

    // L'entrée est un nombre entier supérieur à 1
    if ((number > 1) && (number <= 99) && ((number % 1) == 0)) {
        var lyrics = '<p id="song">' + number + ' ' + plural + cider + ', ' + number + ' ' + plural + linejump + next + (number - 1) + ' ';
        // Si l'entrée est deux, il nous faudra un singulier
        if (number == 2) {
            return lyrics + singular + cider + '.</p>';
        } else {
            return lyrics + plural + cider + '.</p>';
        }
    // L'entrée est 0
    } else if (number == 0) {
        return '<p id="song">Plus de ' + singular + cider + ', plus de ' + singular + linejump + 'Vas au supermarché pour en acheter, 99 '  + plural + cider + '.</p>';
    // L'entrée est un nombre supérieur à 99
    } else if (number > 99) {
        return '<p id="alert">Il ne faut pas abuser des bonnes choses ! Pensez à votre foie et à votre transit intestinal !</p>';
    // L'entrée est un nombre négatif
    } else if (number < 0) {
        return '<p id="alert">Hein ? Ce n\'est pas très logique...</p>';
    // L'entrée est un nombre décimal
    } else if ((number % 1) != 0) {
        return '<p id="alert">On ne boit que des bolées entières ici !</p>';
    }

    // L'entrée est 1
    return '<p id="song">' + number + ' ' + singular + cider + ', ' + number + ' ' + singular + linejump + next + 'Plus de ' + plural + cider + '.</p>';

}

// Déclenchement et affichage de la chanson
button.addEventListener("click", () => {

    songbox.classList.remove("hidden");
    song.innerHTML = lyrics();

})