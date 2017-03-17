@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registro Persona</div>
                    <div class="panel-body">
                        {!! Form::open(['files'=>false,'class' => 'form','data-toggle' => 'validator','id' => 'documentsform']) !!}


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('persona_nombre', 'Nombre *', ['class' => 'control-label']); ?>
                                    <?php echo Form::text('persona_nombre', '', ['placeholder' => 'Nombre',
                                            'class' => 'form-control',
                                            'data-minlength' =>'4',
                                            'required' => '',]); ?>
                                    <div class="help-block with-errors">{!!$errors->first('persona_nombre')!!} </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('persona_email', 'Email *', ['class' => 'control-label']); ?>
                                    <?php echo Form::email('persona_email', '', ['placeholder' => 'john@doe.com',
                                            'class' => 'form-control',
                                            'required' => '',]); ?>
                                    <div class="help-block with-errors">{!!$errors->first('persona_nombre')!!} </div>
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <?php echo Form::label('persona_fecha_nacimiento', 'Fecha de Nacimiento *', ['class' => 'control-label']); ?>
                                    <?php echo Form::text('persona_fecha_nacimiento', '', ['placeholder' => 'dd/mm/yyyy',
                                            'class' => 'form-control',
                                            'pattern' =>'^(?:(0[1-9]|[12][0-9]|3[01])[\/.](0[1-9]|1[012])[\/.](19|20)[0-9]{2})$',
                                            'required' => '',]); ?>
                                    <div class="help-block with-errors">{!!$errors->first('persona_nombre')!!} </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group input_fields_wrap">
                            <button class="btn add_field_button addAddress">Agregar Direccion</button>
                            <br><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="alias[]" placeholder="Casa/Trabajo/Otra" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <input class="form-control" type="text" name="direccion[]" placeholder="Calle y Número" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="cp[]" placeholder="Código Postal" required>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="colonia[]" placeholder="Colonia/Barrio" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="municipio[]" placeholder="Delegación /Municipio" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" name="estado[]" >
                                            <option>--Selecciona--</option>
                                            <option value="09" selected> Distrito Federal</option>
                                            <option value="08"> Chihuahua</option>
                                            <option value="07"> Chiapas</option>
                                            <option value="06"> Colima</option>
                                            <option value="05"> Coahuila de Zaragoza</option>
                                            <option value="04"> Campeche</option>
                                            <option value="03"> Baja California Sur</option>
                                            <option value="02"> Baja California</option>
                                            <option value="32"> Zacatecas</option>
                                            <option value="01"> Aguascalientes</option>
                                            <option value="31"> Yucatan</option>
                                            <option value="30"> Veracruz Llave</option>
                                            <option value="19"> Nuevo Leon</option>
                                            <option value="18"> Nayarit</option>
                                            <option value="17"> Morelos</option>
                                            <option value="16"> Michoacan de Ocampo</option>
                                            <option value="15"> Mexico</option>
                                            <option value="14"> Jalisco</option>
                                            <option value="13"> Hidalgo</option>
                                            <option value="12"> Guerrero</option>
                                            <option value="11"> Guanajuato</option>
                                            <option value="10"> Durango</option>
                                            <option value="29"> Tlaxcala</option>
                                            <option value="28"> Tamaulipas</option>
                                            <option value="27"> Tabasco</option>
                                            <option value="26"> Sonora</option>
                                            <option value="25"> Sinaloa</option>
                                            <option value="24"> San Luis Potosi"/option>
                                            <option value="23"> Quintana Roo</option>
                                            <option value="22"> Queretaro de Arteaga</option>
                                            <option value="21"> Puebla</option>
                                            <option value="20"> Oaxaca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 savebutton">
                                <?php echo Form::submit('Registrar', ['class' => 'btn btn-primary'
                                    ,'id' => 'send_address'
                                    ,'data-loading-text' => 'Saving...']); ?>
                            </div>


                        </div>


                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Oops!</strong>Revisa el contenido de tu registro.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection