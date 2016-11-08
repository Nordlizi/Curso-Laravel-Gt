{!! Form::open(             ['route'   => 'post_envio_solicitud_trabajo_form',
                            'method'   => 'post',
                            'files'    =>  true,
                            'id'       => 'solicitud-trabajo-form'
                            ])               !!}

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('name', 'Nombre *') !!}
                    {!! Form::text('name', null ,['class'       => 'form-control',
                                                  'placeholder' => 'Escribe tu nombre aquí',
                                                  'required'    => 'required' ,
                                                  'data-error'  => 'Por favor, ingresa tu nombre.' ]) !!}                   
                    
                </div>
                <div class="help-block with-errors"></div>
            </div>            

        </div>  
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('email', 'Email *') !!}
                    {!! Form::text('email', null ,['class'       => 'form-control',
                                                  'placeholder' => 'Escribe tu dirección de correo aquí',
                                                  'required'    => 'required' ,
                                                  'data-error'  => 'Por favor, ingresa una dirección de correo válida.' ]) !!}  
                    
                </div>
                <div class="help-block with-errors"></div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('telefono', 'Teléfono') !!}
                    {!! Form::text('telefono', null ,['class'       => 'form-control',
                                                      'placeholder' => 'Escribe aquí tu número de línea o celular' ]) !!}
                    
                </div>
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">                   
                    {!! Form::label('mensaje', 'Cuéntanos acerca de ti *') !!}
                    {!! Form::textarea('mensaje', null ,['class'       => 'form-control',
                                                         'placeholder' => '¿Deseas trabajar con nosotros? Cuéntanos tus razones', 
                                                         'rows'        => '4',
                                                         'required'    => 'required',
                                                         'data-error'  => 'Por favor, nos gustaría saber acerca de ti.' ]) !!}
                    
                </div>
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 space-bottom">
                <div class="input-group">
                        <span>
                           {!! Form::file('file',['class' => 'form-control']) !!} 

                            {{-- <input  type="file" 
                                    style="visibility:hidden; width: 1px;" 
                                    id='${multipartFilePath}' name='${multipartFilePath}'  
                                    onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> Chrome security returns 'C:\fakepath\' 
                              
                             <input class="btn btn-primary" type="button" value="Upload File.." onclick="$(this).parent().find('input[type=file]').click();"/> <!-- on button click fire the file click event -->

                            &nbsp; --}}
                            <span  class="badge badge-important" ></span>
                        </span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary btn-lg btn-send" value="Enviar">
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <p class="text-muted small"><strong>*</strong> Estos campos son obligatorios.</p>
            </div>
        </div>
    </div>



{!! Form::close() !!}
