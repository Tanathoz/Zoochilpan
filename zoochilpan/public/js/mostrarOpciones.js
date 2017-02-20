/**
 * Created by Gilberto Alcocer on 18/02/2017.
 */


var orden_1=new Array("-","Anura","Caudata","Gymnophiona","Mugiliformes")

var orden_2=new Array("-","Accipitriformes","Anseriformes","Apodiformes","Bucerotiformes","Charadriiformes","Ciconiiformes",
    "Coliiformes","Columbiformes","Coraciiformes", "Craciformes","Cuculiformes"," Falconiformes","Galbuliformes","Galliformes","Gaviiformes",
    "Gruiformes"," Musophagiformes","Passeriformes","Pelecaniformes","Phaethontiformes", "Phoenicopteriformes","Piciformes","Podicipediformes",
    "Procellariiformes","Psittaciformes","Pteroclidiformes","Sphenisciformes","Strigiformes", "Struthioniformes"," Suliformes","Tinamiformes",
    "Trogoniformes","Upupiformes")

var orden_3=new Array("-","Artiodáctilos","Carnívoros","Cetáceos","Dermapteros","Desdentados","Escandentios",
    "Folidotos","Hiracoideos","Insectívoros","Lagomorfos","Macroscelídos","Marsupiales","Monotremas","Perisodáctilos",
    "Pinnípedos","Primates","Proboscídeos","Quirópteros ","Roedores","Sirénidos","Tubulidentados","Xenarthra")


var orden_4=new Array("-","Bericiformes","Escorpeniformes","Lofiformes","Mugiliformes","Tetraodontiformes","Zeiformes")

var orden_5=new Array("-","Crocodylia","Rhynchocephalia","Squamata","Testudines")
$(function(){
    $('clase').change(function(e) {
        //tomo el valor del select del pais elegido
        var clase2
        clase2 = document.f1.clase[document.f1.clase.selectedIndex].value
        //miro a ver si el pais está definido
        if (clase2 != 0) {
            //si estaba definido, entonces coloco las opciones de la provincia correspondiente.
            //selecciono el array de provincia adecuado
            mis_ordenes=eval("Ordenes_" + clase2)
            //calculo el numero de provincias
            num_ordenes = mis_ordenes.length
            //marco el número de provincias en el select
            document.f1.orden.length = num_ordenes
            //para cada provincia del array, la introduzco en el select
            for(i=0;i<num_ordenes;i++){
                document.f1.orden.options[i].value=mis_ordenes[i]
                document.f1.orden.options[i].text=mis_ordenes[i]
            }
        }else{
            //si no había provincia seleccionada, elimino las provincias del select
            document.f1.orden.length = 1
            //coloco un guión en la única opción que he dejado
            document.f1.orden.options[0].value = "-"
            document.f1.orden.options[0].text = "-"
        }
        //marco como seleccionada la opción primera de provincia
        document.f1.orden.options[0].selected = true
    });
});


function cambia_orden(){
    //tomo el valor del select del pais elegido
    var clase2
    clase2 = document.f1.clase[document.f1.clase.selectedIndex].value
    //miro a ver si el pais está definido
    if (clase2 != 0) {
        //si estaba definido, entonces coloco las opciones de la provincia correspondiente.
        //selecciono el array de provincia adecuado
        mis_ordenes=eval("Ordenes_" + clase2)
        //calculo el numero de provincias
        num_ordenes = mis_ordenes.length
        //marco el número de provincias en el select
        document.f1.orden.length = num_ordenes
        //para cada provincia del array, la introduzco en el select
        for(i=0;i<num_ordenes;i++){
            document.f1.orden.options[i].value=mis_ordenes[i]
            document.f1.orden.options[i].text=mis_ordenes[i]
        }
    }else{
        //si no había provincia seleccionada, elimino las provincias del select
        document.f1.orden.length = 1
        //coloco un guión en la única opción que he dejado
        document.f1.orden.options[0].value = "-"
        document.f1.orden.options[0].text = "-"
    }
    //marco como seleccionada la opción primera de provincia
    document.f1.orden.options[0].selected = true
}