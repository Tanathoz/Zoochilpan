<div class="fish"> </div>
<div class="form-group col-md-4  ">
    {!! Form::label('Numero de registro') !!}
    {!! Form::input('number','id',null,['class'=>'form-control','placeholder'=>'numero de identificacion']) !!}

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
   {!! Form::select('clase',['Selecciona clase'=>'Selecciona clase','Anfibios'=>'Anfibios','Aves'=>'Aves',
        'Mamiferos'=>'Mamiferos','Peces'=>'Peces','Reptiles'=>'Reptiles'],'Elige Clase',['class'=>'form-control'],array('onchange'=>'cambia_orden()')) !!}
            <!--
    {!! Form::select( 'clase', $opciones, 'default', array('onchange' => 'cambia_orden()') ,['class'=>'form-control'] ) !!}
            -->
</div>

<div class="form-group">
    {!! Form::label('Orden') !!}

    <select name="orden" id="orden" class="form-control">
        <option >Selecciona una opción</option>

    </select>

</div>

<div class="form-group">
    {!! Form::label('Familia') !!}
    {!! Form::text('familia',null,['class'=>'form-control','placeholder'=>'felinos']) !!}

</div>


<div class="form-group">
    {!! Form::label('Especie') !!}
    {!! Form::text('especie',null,['class'=>'form-control','placeholder'=>'Pathera ']) !!}

</div>



<div class="form-group ">
    {!! Form::label('Habitat') !!}
    {!! Form::select('habitat',['Altiplano'=>'Altiplano','Arrecife de coral'=>'Arrecife de coral','Bosque'=>'Bosque','Desierto'=>'Desierto',
    'Lago'=>'Lago','Marisma'=>'Marisma','Montaña'=>'Montaña','Océano'=>'Océano','Pantano'=>'Pantano','Pastizales'=>'Pastizales','Playa'=>'Playa','Pradera'=>'Pradera',
    'Quebrada'=>'Quebrada','Región polar'=>'Región polar','Sabana'=>'Sabana','Selva'=>'Selva'],'Altiplano',['class'=>'form-control']) !!}


</div>

<div class="form-group">
    {!! Form::label('Gestación') !!}
    {!! Form::text('gestacion',null,['class'=>'form-control','placeholder'=>'110 dias']) !!}

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
    {!! Form::text('alimentacion',null,['class'=>'form-control','placeholder'=>'cebras,buffalos']) !!}

</div>


<!--{!! Form::text('prueba',null,['class'=>'form-control','placeholder'=>'']) !!} -->
@section('javascript')
    <script>

        var orden_1=Array("Anura","Caudata","Gymnophiona","Mugiliformes");
                <?php $ord1 = array("Anura","Caudata","Gymnophiona","Mugiliformes");?>
        var orden_2=new Array("Accipitriformes","Anseriformes","Apodiformes","Bucerotiformes","Charadriiformes","Ciconiiformes",
                "Coliiformes","Columbiformes","Coraciiformes", "Craciformes","Cuculiformes"," Falconiformes","Galbuliformes","Galliformes","Gaviiformes",
                "Gruiformes"," Musophagiformes","Passeriformes","Pelecaniformes","Phaethontiformes", "Phoenicopteriformes","Piciformes","Podicipediformes",
                "Procellariiformes","Psittaciformes","Pteroclidiformes","Sphenisciformes","Strigiformes", "Struthioniformes"," Suliformes","Tinamiformes",
                "Trogoniformes","Upupiformes")

        var orden_3=new Array("Artiodáctilos","Carnívoros","Cetáceos","Dermapteros","Desdentados","Escandentios",
                "Folidotos","Hiracoideos","Insectívoros","Lagomorfos","Macroscelídos","Marsupiales","Monotremas","Perisodáctilos",
                "Pinnípedos","Primates","Proboscídeos","Quirópteros ","Roedores","Sirénidos","Tubulidentados","Xenarthra")


        var orden_4=new Array("Bericiformes","Escorpeniformes","Lofiformes","Mugiliformes","Tetraodontiformes","Zeiformes")

        var orden_5=new Array("Crocodylia","Rhynchocephalia","Squamata","Testudines")
        $(document).ready(function (){
            $("select[name=clase]").change(function () {
                $('#orden').empty().append('elige una opcion');
                var indice

                $('input[name=valor1]').val($(this).val());
                var clase2=$('select[name=clase]').val();

                indice=$('select[name=clase]').prop('selectedIndex');

                misordenes=eval("orden_" + indice)
                num = misordenes.length

                //if (clase2 != "...") {
                    //si estaba definido, entonces coloco las opciones de la provincia correspondiente.
                    //selecciono el array de provincia adecuado
                if(indice!="0"){
                    alert(indice)
                    for(a = 0; a < num; a++){
                        $('<option value="' + eval("orden_"+indice)[a] + '">' + eval("orden_"+indice)[a] + '</option>').appendTo("#orden");
                    }
                  }

                    //calculo el numero de provincias

                else{
                    alert("se metio");
                    $("<option value='5'>Selecciona clase</option>").appendTo("#orden");

               }
                //marco como seleccionada la opción primera de provincia
               // document.f1.orden.options[0].selected = true

            });

        });

    </script>

@endsection



