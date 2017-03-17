$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment


            $(wrapper).append('<div class="row"><div class="row"><div class="col-md-4"><div class="form-group"><input class="form-control" type="text" name="alias[]" placeholder="Casa/Trabajo/Otra" required></div></div></div><div class="col-md-4"><div class="form-group"><input class="form-control" type="text" name="direccion[]" placeholder="Calle y Número" required></div></div><div class="col-md-3"><div class="form-group"><input class="form-control" type="text" name="cp[]" placeholder="Código Postal" required></div></div><div class="col-md-5"><div class="form-group"><div class="form-group"><input class="form-control" type="text" name="colonia[]" placeholder="Colonia/Barrio" required></div></div></div><div class="col-md-4"><div class="form-group"><input class="form-control" type="text" name="municipio[]" placeholder="Delegación /Municipio" required></div></div><div class="col-md-4"><div class="form-group"><select class="form-control" name="estado[]" ><option>--Selecciona--</option><option value="09" selected> Distrito Federal</option><option value="08"> Chihuahua</option><option value="07"> Chiapas</option><option value="06"> Colima</option><option value="05"> Coahuila de Zaragoza</option><option value="04"> Campeche</option><option value="03"> Baja California Sur</option><option value="02"> Baja California</option><option value="32"> Zacatecas</option><option value="01"> Aguascalientes</option><option value="31"> Yucatan</option><option value="30"> Veracruz Llave</option><option value="19"> Nuevo Leon</option><option value="18"> Nayarit</option><option value="17"> Morelos</option><option value="16"> Michoacan de Ocampo</option><option value="15"> Mexico</option><option value="14"> Jalisco</option><option value="13"> Hidalgo</option><option value="12"> Guerrero</option><option value="11"> Guanajuato</option><option value="10"> Durango</option><option value="29"> Tlaxcala</option><option value="28"> Tamaulipas</option><option value="27"> Tabasco</option><option value="26"> Sonora</option><option value="25"> Sinaloa</option><option value="24"> San Luis Potosi"/option><option value="23"> Quintana Roo</option><option value="22"> Queretaro de Arteaga</option><option value="21"> Puebla</option><option value="20"> Oaxaca</option></select></div></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
            $('#documentsform').validator('update')
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })



});