//traer el div en donde se hará el texto
const app = document.getElementById('typewriter');

const typewriter = new Typewriter(app,{
    loop:true,
    delay:75
});

//metodos
typewriter
 .typeString('La Ciudad de la Eterna Primavera.')
 .pauseFor(200)
 .start();