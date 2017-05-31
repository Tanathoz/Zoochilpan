<div class="fish"> </div>
<fieldset class="scheduler-border">
    <legend align="left">Taxonomia</legend>
<div class="form-group   ">
    {!! Form::input('hidden','id',null,['id'=>'id','class'=>'form-control','placeholder'=>'numero de identificacion']) !!}

</div>

<div class="form-group ">
    {!! Form::label('Nombre cientifico') !!}
    {!! Form::text('nombreCientifico',null,['class'=>'form-control','placeholder'=>'Pathera Leo']) !!}

</div>
<div class="form-group">
    {!! Form::label('Nombre Común') !!}
    {!! Form::text('nombreComun',null,['class'=>'form-control','placeholder'=>'León']) !!}

</div>



<div class="form-group clase">
    <?php $opciones = array();?>

    {!! Form::label('Clase') !!}
   {!! Form::select('clase',['Selecciona Clase'=>'Selecciona Clase','Anfibios'=>'Anfibios','Aves'=>'Aves',
        'Mamiferos'=>'Mamiferos','Peces'=>'Peces','Reptiles'=>'Reptiles'],null,['class'=>'form-control'],array('onchange'=>'cambia_orden()')) !!}
            <!--
    {!! Form::select( 'clase', $opciones, 'default', array('onchange' => 'cambia_orden()') ,['class'=>'form-control'] ) !!}
            -->
</div>

<div class="form-group">
    {!! Form::label('Orden') !!}
{!! Form::select ('orde',['placeholder'=>$animal->orden],null,['id'=>'orde','class'=>'form-control']) !!}

    <input type="hidden" name="orden" id="orden">


</div>

<div class="form-group">
    {!! Form::label('Familia') !!}

    {!! Form::select ('famili',['placeholder'=>$animal->familia],null,['id'=>'famili','class'=>'form-control']) !!}

    <input type="hidden" name="familia" id="familia">

</div>


<div class="form-group">
    {!! Form::label('Especie') !!}
    {!! Form::select ('especi',['placeholder'=>$animal->especie],null,['id'=>'especi','class'=>'form-control']) !!}

    <input type="hidden" name="especie" id="especie">
</div>

</fieldset>
<fieldset class="scheduler-border">
    <legend align="left">Vida y Reproduccion </legend>

<div class="form-group ">
    {!! Form::label('Habitat') !!}
    {!! Form::select('habitat',['Altiplano'=>'Altiplano','Arrecife de coral'=>'Arrecife de coral','Bosque'=>'Bosque','Desierto'=>'Desierto',
    'Lago'=>'Lago','Marisma'=>'Marisma','Montaña'=>'Montaña','Océano'=>'Océano','Pantano'=>'Pantano','Pastizales'=>'Pastizales','Playa'=>'Playa','Pradera'=>'Pradera',
    'Quebrada'=>'Quebrada','Región polar'=>'Región polar','Sabana'=>'Sabana','Selva'=>'Selva'],null,['placeholder'=>$animal->habitat,'class'=>'form-control']) !!}


</div>

<div class="form-group">
    {!! Form::label('Gestación') !!}
    {!! Form::text('gestacion',null,['class'=>'form-control','placeholder'=>'120 dias']) !!}

</div>
<div class="form-group">
    {!! Form::label('Camada') !!}
    {!! Form::text('camada',null,['class'=>'form-control','placeholder'=>'1-4 Crías']) !!}

</div>

<div class="form-group">
    {!! Form::label('Longevidad') !!}
    {!! Form::text('longevidad',null,['class'=>'form-control','placeholder'=>'10-14 años']) !!}

</div>


<div class="form-group">
    {!! Form::label('Peso') !!}
    {!! Form::text('peso',null,['class'=>'form-control','placeholder'=>'130 kg']) !!}

</div>

<div class="form-group">
    {!! Form::label('Ubicación Geografíca') !!}
    {!! Form::text('ubicacionGeografica',null,['class'=>'form-control','placeholder'=>'Noroeste de Africa']) !!}

</div>


<div class="form-group">
    {!! Form::label('Alimentacion') !!}
    {!! Form::text('Alimentacion',null,['class'=>'form-control','placeholder'=>'cebras,buffalos']) !!}

</div>
</fieldset>

<!--{!! Form::text('prueba',null,['class'=>'form-control','placeholder'=>'']) !!} -->
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
        //22 ordenes

        var orden_4=new Array("Seleccione orden","Bericiformes","Escorpeniformes","Lofiformes","Mugiliformes","Tetraodontiformes","Zeiformes")
        //6 ordenes
        var orden_5=new Array("Seleccione orden","Crocodylia","Rhynchocephalia","Squamata","Testudines")
        //4 ordenes

        //69 ordenes en total

        $(document).ready(function (){

            var  indice,numOrdenes,indiceFam,idOrden,id;
            var famiNombres= new Array(), ordeNombres = new Array(), espeNombres=new Array();
             id=$('#id').val()



            indice=$('select[name=clase]').prop('selectedIndex');
            indice=parseInt(indice);

            misordenes=eval("orden_" + indice)
            num = misordenes.length

            //if (clase2 != "...") {
            //si estaba definido, entonces coloco las opciones de los ordenes.
            //selecciono el array de provincia adecuado

            $.ajax({
                type:'get',
                url:'{!! URL::to('cargarDatosAnimales')!!}',
                data:{'id':id},
                success:function(data){
                    console.log('exito colega22')
                    console.log(data)

                   $("#famili").empty().append('<option value="' + data[0].id+ '">' + data[0].familia+ '</option>');
                    $("#orde").append('<option value="' + data[0].id+ '">' + data[0].orden+ '</option>');
                    $("#especi").append('<option value="' + data[0].id+ '">' + data[0].especie+ '</option>');
                    $("#familia").val(data[0].familia)
                    $("#orden").val(data[0].orden)
                    $("#especie").val(data[0].especie)
                },
                error:function(){
                    console.log('hay error')


                }

            })

            $("select[name=clase]").click(function () {
                $('#orde').empty().append('elige una opcion');

                indice=$('select[name=clase]').prop('selectedIndex');
                indice=parseInt(indice);

                misordenes=eval("orden_" + indice)
                num = misordenes.length

                //if (clase2 != "...") {
                    //si estaba definido, entonces coloco las opciones de los ordenes.
                    //selecciono el array de provincia adecuado
                if(indice >=1) {

                    for (a = 0; a < num; a++)
                        $('<option value="' + eval("orden_" + indice)[a] + '">' + eval("orden_" + indice)[a] + '</option>').appendTo("#orde");


                            ordeNombres.push(eval("orden_" + indice)[a]);

                }

                if(indice<=0){

                    $("<option value='5'>Selecciona clase</option>").appendTo("#orde");

               }


            });
            //evento de cambio de orden

            $("select[name=orde]").click(function () {
               var div=$(this).val();
                $('#famili').empty().append('elige una opcion');





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

                indiceFam=$('select[name=orde]').prop('selectedIndex');
                indiceFam=parseInt(indiceFam);

                var idOrden=numOrdenes+indiceFam;
                var  op= "";

                $.ajax({
                    type:'get',
                    url:'{!! URL::to('cargarFamilias')!!}',
                    data:{'idOrden':idOrden},
                    success:function(data){
                        console.log('exito colega')
                        console.log(data)
                        op+='<option value="0" selected disabled> Elige familia </option>';
                        $("#famili").append('<option value="1"> Seleciona Familia</option>');

                        for (var i=0;i<data.length;i++){

                            $("#famili").append('<option value="' + data[i].idFam+ '">' + data[i].nombre+ '</option>');
                            famiNombres.push(data[i].nombre);
                        }
                    },
                    error:function(){
                        console.log('hay error')
                    }
                })
                $("#orden").val(''+$('select[name=orde]').val());
            });

            $("select[name=famili]").click(function () {
               $('#especi').empty().append('elige una especie');


                var idFamilia=$(this).val();
                indiceFam2=$('select[name=famili]').prop('selectedIndex');
                $("#familia").val(''+famiNombres[indiceFam2-1]);
                $.ajax({
                    type:'get',
                    url:'{!! URL::to('cargarEspecies')!!}',
                    data:{'idFamilia':idFamilia},
                    success:function(data){
                        console.log('exito colega22')
                        console.log(data)


                       // $("#especie").append('<option value="1"> Elige Especie</option>');
                        for (var i=0;i<data.length;i++){
                            // op+='<option value="'+data[i].nombre+'"> '+data[i].nombre+'</option>';
                            //  $('<option value="' + data[i].idFam+ '">' + data[i].nombre+ '</option>').appendTo("#familia");
                            $("#especi").append('<option value="' + data[i].nombre+ '">' + data[i].nombre+ '</option>');

                        }
                        $("#especie").val(''+data[0].nombre);

                    },
                    error:function(){
                        console.log('hay error')


                    }



                })

            });

            $("select[name=especi]").click(function () {
                $("#especie").val(''+$('select[name=especi]').val());;

              });





        });

    </script>

@endsection



