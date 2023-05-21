//cambiando textos y html
let parrafo = document.getElementById("paragraph");
parrafo.innerText = "Este es un oárrafo modificado";

let parrafo2 = document.querySelector("p");
parrafo2.textContent = "Párrafo cambiado otra vezz";

let parrafo3 = document.querySelector("p");
parrafo3.innerHTML = "<b>Este es un bold dentro del parrafo</b>"; //si se usa outerHTML, este reemplaza al elemento padre también eliminando todo
//acceso a hijos
let principal = document.querySelector(".contenedor");
let hijos = principal.children;
alert('texo del primer hijo: ' + hijos.item(0).innerText + ' y el texto del segundo elemento: ' + hijos.item(1).innerText);
//seleccionando elementos con misma clase (innerText tambien sirve aca para mostrar el texto)
let titulos = document.querySelectorAll(".clase");
alert("mostrando cantidad de titulos con las clases 'clase': " + titulos.length);
//creando elementos
let contenedor = document.querySelector("h3");
let item = document.createElement('div');
let texto = document.createTextNode('Este es el DIV con el texto del div creado dentro de H3 y agregado al final');
item.appendChild(texto);
//creando varios elementos a la vez
contenedor.appendChild(item);
const container = document.querySelector("h4");
const item2 = document.createElement("li");
const subItem = document.createElement("ul");
item2.append("Categorias", subItem);
container.append(item2);
//obteniendo propiedades de atributos
let cabecera = document.querySelector("#cabecera-h3");
alert('valor de attributo id de H3: ' + cabecera.id  + ', valor de atributo class de H3: ' + cabecera.className);
//Eliminando elementos
let eliminar = document.getElementById("eliminar");
let padre = document.querySelector(".contenedor");
let hijo = document.querySelector("#eliminar");
eliminar.onclick = function(){
  padre.removeChild(hijo); 

}
//reemplazando elementos
let referencia = document.querySelector("#tituloH2");
let reemplazar = document.getElementById("reemplazo");
reemplazar.onclick = function(){
    padre.replaceChild(referencia, reemplazar);
}
//Array de elementos del DOM
let parrafos = document.querySelectorAll("p");
let array = Array.from(parrafos);
if (confirm("presioná para ver la cantidad de elementos p del array"));{
alert(array.length);
}
//cambiar estilos css
let parrafos2 = document.getElementById("tituloH2");
parrafos2.setAttribute("style","background-color:red");

//Practicando con metodos de Array
let numbers = document.getElementsByClassName("box");
let buttons = document.getElementsByTagName("button");

let arrayNumbers = Array.from(numbers);

buttons[0].onclick = function () {
    let first = arrayNumbers.shift();
  
    arrayNumbers.push(first);
      alert(arrayNumbers[0].innerHTML);
    for (let i=0;i<=numbers.length-1;i++){
    numbers[i].innerHTML = arrayNumbers[i].innerHTML;
   
    }
}