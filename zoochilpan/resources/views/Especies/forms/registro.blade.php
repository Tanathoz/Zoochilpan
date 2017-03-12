
<div class="form-group clase col-md-6 center-block">


    {!! Form::label('clase a la que pertenece la especie') !!}
    {!! Form::select('clase',['Selecciona Clase'=>'Selecciona Clase','Anfibios'=>'Anfibios','Aves'=>'Aves',
         'Mamiferos'=>'Mamiferos','Peces'=>'Peces','Reptiles'=>'Reptiles'],null,['class'=>'form-control'],array('onchange'=>'cambia_orden()')) !!}



</div>


<div class="form-group col-md-6  align-content-center">
    {!! Form::label('Orden') !!}

    <select name="orden" id="orden" class="form-control">
        <option >Selecciona una opción</option>

    </select>

</div>


<div class="form-group  col-md-6 ">
    {!! Form::label('Familia') !!}

    <select  id="familia" class="form-control" name="familia">
        <option value="0" >Selecciona una opción</option>

    </select>


</div>


<div class="form-group col-md-6">
    {!! Form::label('Nombre de la especie') !!}
    {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Emydidae']) !!}

    <input type="hidden" class="form-control" id="idFamilia" name="idFamilia">


</div>


@section('javascript')

    <script>

        var orden_1=Array("Seleccione orden","Anura","Caudata","Gymnophiona","Mugiliformes");
        //4 ordenes
                <?php $ord1 = array("Seleccione orden","Anura","Caudata","Gymnophiona","Mugiliformes");?>
        var orden_2=new Array("Seleccione orden","Accipitriformes","Anseriformes","Apodiformes","Bucerotiformes","Charadriiformes","Ciconiiformes",
                "Coliiformes","Columbiformes","Coraciiformes", "Craciformes","Cuculiformes"," Falconiformes","Galbuliformes","Galliformes","Gaviiformes",
                "Gruiformes"," Musophagiformes","Passeriformes","Pelecaniformes","Phaethontiformes", "Phoenicopteriformes","Piciformes","Podicipediformes",
                "Procellariiformes","Psittaciformes","Pteroclidiformes","Sphenisciformes","Strigiformes", "Struthioniformes"," Suliformes","Tinamiformes",
                "Trogoniformes","Upupiformes")

        //33 ordenes

        var orden_3=new Array("Seleccione orden","Artiodáctilos","Carnívoros","Cetáceos","Dermapteros","Desdentados","Diprotodontos","Escandentios",
                "Folidotos","Hiracoideos","Insectívoros","Lagomorfos","Macroscelídos","Marsupiales","Monotremas","Perisodáctilos",
                "Pinnípedos","Primates","Proboscídeos","Quirópteros ","Roedores","Sirénidos","Tubulidentados","Xenarthra")
        //23 ordenes

        var orden_4=new Array("Seleccione orden","Bericiformes","Escorpeniformes","Lofiformes","Mugiliformes","Tetraodontiformes","Zeiformes")
        //6 ordenes
        var orden_5=new Array("Seleccione orden","Crocodylia","Rhynchocephalia","Squamata","Testudines")
        //4 ordenes

        //69 ordenes en total

        $(document).ready(function (){
            var  indice,numOrdenes,indiceFam,idOrden
            $("select[name=clase]").change(function () {
                $('#orden').empty().append('elige una opcion');

                indice=$('select[name=clase]').prop('selectedIndex');
                indice=parseInt(indice);

                misordenes=eval("orden_" + indice)
                num = misordenes.length

                //if (clase2 != "...") {
                //si estaba definido, entonces coloco las opciones de los ordenes.
                //selecciono el array de provincia adecuado
                if(indice >=1) {

                    for (a = 0; a < num; a++)
                        $('<option value="' + eval("orden_" + indice)[a] + '">' + eval("orden_" + indice)[a] + '</option>').appendTo("#orden");

                }

                if(indice<=0){
                    alert("se metio");
                    $("<option value='5'>Selecciona clase</option>").appendTo("#orden");

                }

            });



            $("select[name=orden]").change(function () {
                var div=$(this).val();
                $('#familia').empty().append('elige una opcion');

                if(indice==1)
                    numOrdenes=0;
                else if(indice==2)
                    numOrdenes=4;
                else if(indice==3)
                    numOrdenes=37;
                else if(indice==4)
                    numOrdenes=60;
                else
                    numOrdenes=66;

                indiceFam=$('select[name=orden]').prop('selectedIndex');
                indiceFam=parseInt(indiceFam);

                var idOrden=numOrdenes+indiceFam;


                $.ajax({
                    type:'get',
                    url:'{!! URL::to('cargarFamilias')!!}',
                    data:{'idOrden':idOrden},
                    success:function(data){
                        console.log('exito colega')
                        console.log(data)


                        $("#familia").append('<option value="1"> Seleciona Familia</option>');
                        for (var i=0;i<data.length;i++){

                            $("#familia").append('<option value="' + data[i].idFam+ '">' + data[i].nombre+ '</option>');
                        }
                    },
                    error:function(){
                        console.log('hay error')


                    }

                })

            });

            $("select[name=familia]").change(function () {
                var idFamilia=$(this).val();
                $("#idFamilia").val(''+idFamilia);

            });

        });

    </script>

@endsection