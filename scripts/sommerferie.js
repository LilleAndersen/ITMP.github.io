// Sett tidspunkt som vi teller ned til
const countDownDate = new Date("Jun 18, 2021 12:00:00").getTime();

// Oppdater nedtellingen hvert sekund
const x = setInterval(function ()
{
    // Hent nåværende tidspunkt
    var now = new Date().getTime();

    // Finn tid fra nåværende tidspunkt til satt tidspunkt
    var distance = countDownDate - now;

    // Regn ut tidselementer
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Vis resultat i element med ID 'nedtelling'
    document.getElementById("nedtelling").innerHTML = "Antall dager til sommerferien: " + days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

    // Vis 'EXPIRED' om resultat er negativt
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("nedtelling").innerHTML = "EXPIRED";
    }
}, 1000);