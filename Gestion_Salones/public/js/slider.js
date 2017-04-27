$( function(){
    var arrImagenes = [ 'img1.jpg','img2.jpg', 'img3.jpg' , 'img4.jpg', 'img5.jpg', 'img6.jpg', 'img7.jpg', 'img8.jpg'];
    var imagenActual = 'img1.jpg';
    var tiempo = 3000;
    setInterval( function(){
        do{
            var randImage = arrImagenes[Math.ceil(Math.random()*(arrImagenes.length-1))];
        }while( randImage == imagenActual )
        imagenActual = randImage;
        cambiarImagenFondo(imagenActual);
    }, tiempo)
})
 
function cambiarImagenFondo(nuevaImagen){
    //cargar imagen primero
    var tempImagen = new Image();
    $(tempImagen).load( function(){
        $('#body').css('background-image', 'url('+tempImagen.src+')');
    });
    tempImagen.src = 'public/img/' + nuevaImagen;
    
}