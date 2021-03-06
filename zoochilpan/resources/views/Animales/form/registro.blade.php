
<fieldset class="scheduler-border">
    <legend align="left">Taxonomia</legend>

<div class="form-group">
    {!! Form::label('nombreCientifico', 'Nombre Científico', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('nombreCientifico',null,['class'=>'form-control','placeholder'=>'Pathera Leo','required' => 'required']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('nombreComun','Nombre Común', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('nombreComun',null,['class'=>'form-control','placeholder'=>'León','required' => 'required']) !!}
        </div>
</div>



<div class="form-group clase">


        {!! Form::label('clase', 'Clase', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
   {!! Form::select('clase',['Selecciona Clase'=>'Selecciona Clase','Anfibios'=>'Anfibios','Aves'=>'Aves',
        'Mamiferos'=>'Mamiferos','Peces'=>'Peces','Reptiles'=>'Reptiles'],null,['class'=>'form-control','required' => 'required'],array('onchange'=>'cambia_orden()')) !!}
            </div>
</div>

<div class="form-group">
    {!! Form::label('orden', 'Orden', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
{!! Form::select ('orden',['placeholder'=>'Selecciona orden'],null,['id'=>'orden','class'=>'form-control','required' => 'required']) !!}

</div>

</div>

<div class="form-group">

    {!! Form::label('familia', 'Familia', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::select ('familia',['placeholder'=>'Selecciona Familia'],null,['id'=>'familia','class'=>'form-control']) !!}
    {!! Form::hidden('famili',null,['class'=>'form-control','placeholder'=>'1-4 Crías','id'=>'famili','required' => 'required']) !!}
        </div>
</div>


<div class="form-group">
    {!! Form::label('especie', 'Especie', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::select ('especie',['placeholder'=>'selecciona Especie'],null,['id'=>'especie','class'=>'form-control','required' => 'required']) !!}
</div>
</div>
</fieldset>
<fieldset class="scheduler-border">
    <legend align="left">Vida y Reproduccion </legend>
<div class="form-group ">
    {!! Form::label('habitat', 'Habitat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::select('habitat',['Altiplano'=>'Altiplano','Arrecife de coral'=>'Arrecife de coral','Bosque'=>'Bosque','Desierto'=>'Desierto',
    'Lago'=>'Lago','Marisma'=>'Marisma','Montaña'=>'Montaña','Océano'=>'Océano','Pantano'=>'Pantano','Pastizales'=>'Pastizales','Playa'=>'Playa','Pradera'=>'Pradera',
    'Quebrada'=>'Quebrada','Región polar'=>'Región polar','Sabana'=>'Sabana','Selva'=>'Selva'],'carnivoros',['class'=>'form-control','required' => 'required']) !!}
</div>

</div>

<div class="form-group">
    {!! Form::label('gestacion', 'Gestación', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('gestacion',null,['class'=>'form-control','placeholder'=>'120 dias']) !!}
</div>
</div>
<div class="form-group">
    {!! Form::label('camada', 'Camada', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('camada',null,['class'=>'form-control','placeholder'=>'1-4 Crías']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('longevidad', 'Longevidad', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('longevidad',null,['class'=>'form-control','placeholder'=>'10-14 años']) !!}
    </div>
</div>


<div class="form-group">
    {!! Form::label('peso', 'Peso', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('peso',null,['class'=>'form-control','placeholder'=>'90-130 kg']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('ubicacionGeografica','Ubicación Geografíca', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('ubicacionGeografica',null,['class'=>'form-control','placeholder'=>'Noroeste de Africa']) !!}
    </div>
</div>


<div class="form-group">
    {!! Form::label('Alimentacion', 'Alimentación', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('Alimentacion',null,['class'=>'form-control','placeholder'=>'cebras,buffalos']) !!}
    </div>
</div>

</fieldset>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($ButtonText) ? $ButtonText : 'Registrar', ['class' => 'btn btn-primary']) !!}
    </div>
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
        //22 ordenes

        var orden_4=new Array("Seleccione orden","Bericiformes","Escorpeniformes","Lofiformes","Mugiliformes","Tetraodontiformes","Zeiformes")
        //6 ordenes
        var orden_5=new Array("Seleccione orden","Crocodylia","Rhynchocephalia","Squamata","Testudines")
        //4 ordenes

        //69 ordenes en total

        $(document).ready(function (){

         //   $("#familia").append('<option value="' + $(gestacn).val()+ '">' + $(gestacn).val()+ '</option>');
            var  indice,numOrdenes,indiceFam,idOrden
            var famiNombres= new Array();
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
            //evento de cambio de orden

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
                var  op= "";

                $.ajax({
                    type:'get',
                    url:'{!! URL::to('cargarFamilias')!!}',
                    data:{'idOrden':idOrden},
                    success:function(data){
                        console.log('exito colega')
                        console.log(data)

                        op+='<option value="0" selected disabled> Elige familia </option>';
                        $("#familia").append('<option value="1"> Seleciona Familia</option>');

                        for (var i=0;i<data.length;i++){
                           // op+='<option value="'+data[i].nombre+'"> '+data[i].nombre+'</option>';
                          //  $('<option value="' + data[i].idFam+ '">' + data[i].nombre+ '</option>').appendTo("#familia");
                            $("#familia").append('<option value="' + data[i].idFam+ '">' + data[i].nombre+ '</option>');
                            famiNombres.push(data[i].nombre);
                        }
                    },
                    error:function(){
                        console.log('hay error')
                    }
                })



            });

            $("select[name=familia]").change(function () {
               $('#especie').empty().append('elige una especie');

                var idFamilia=$(this).val();
                indiceFam2=$('select[name=familia]').prop('selectedIndex');


                $("#famili").val(''+famiNombres[indiceFam2-1]);
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
                            $("#especie").append('<option value="' + data[i].nombre+ '">' + data[i].nombre+ '</option>');

                        }

                        //  div.find('.familia').html();
                        // div.find('.familia').append(op);


                    },
                    error:function(){
                        console.log('hay error')


                    }

                })

            });






        });

    </script>

@endsection



