const caja = document.getElementById("traduccionInversa")

const imagenes = []
for (let i = 0; i < 28; i++) {
    const imgID = "img"+(i+1)
    imagenes[i] = document.getElementById(imgID)
}

imagenes.forEach(x => {
    x.addEventListener('click', () => Escribir(x.src, x.id))
});

let orden = []
let y = 0;

function Escribir(fuente, nombre){
    orden[y] = nombre
    caja.innerHTML += "<img src='"+fuente+"' class='imgSeñashow' id='"+nombre+"'>"
    y++;
}

const Traducir = document.getElementById("traducI")
const resultado = document.getElementById("traductorInverso")

Traducir.addEventListener('click', () => TraduccionInversa(orden))

function TraduccionInversa(arreglo){
    let cadena = ""
    console.log(orden)
    
    orden.forEach(z => {
        console.log(z)
        switch (z) {
            case "img1":
                cadena += "a"
                break;
            case "img2":
                cadena += "b"
                break;
            case "img3":
                cadena += "c"
                break;
            case "img4":
                cadena += "d"
                break;
            case "img5":
                cadena += "e"
                break;
            case "img6":
                cadena += "f"
                break;
            case "img7":
                cadena += "g"
                break;
            case "img8":
                cadena += "h"
                break;
            case "img9":
                cadena += "i"
                break;
            case "img10":
                cadena += "j"
                break;
            case "img11":
                cadena += "k"
                break;
            case "img12":
                cadena += "l"
                break;
            case "img13":
                cadena += "m"
                break;
            case "img14":
                cadena += "n"
                break;
            case "img15":
                cadena += "ñ"
                break;
            case "img16":
                cadena += "o"
                break;
            case "img17":
                cadena += "p"
                break;
            case "img18":
                cadena += "q"
                break;
            case "img19":
                cadena += "r"
                break;
            case "img20":
                cadena += "s"
                break;
            case "img21":
                cadena += "t"
                break;
            case "img22":
                cadena += "u"
                break;
            case "img23":
                cadena += "v"
                break;
            case "img24":
                cadena += "w"
                break;
            case "img25":
                cadena += "x"
                break;
            case "img26":
                cadena += "y"
                break;
            case "img27":
                cadena += "z"
                break;
            case "img28":
                cadena += " "
                break;
        }
    });
    resultado.innerText = cadena
}

const btnborrar = document.getElementById("btnborrar")
btnborrar.addEventListener('click', () => location.reload())