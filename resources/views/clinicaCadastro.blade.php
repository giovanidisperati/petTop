

@if (Route::has('login'))
         @if (Auth::check())
            @if((Auth::user()->tipo) ==0)
    <section class="content-header">
        <h1>
            Cadastro da Cĺínica
            <small>Descrição</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Clínica</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Clínicas</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                <form  id="formClinicas">
                     {{ csrf_field() }}
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nome_fantasia">Nome Fantasia</label>
                                        <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" placeholder="Nome Fantasia">
                                    </div>  
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="razao_social">Razão Social</label>
                                        <input type="text" class="form-control required" id="razao_social" name="razao_social" placeholder="Razão Social">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cnpj">CNPJ</label>
                                        <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="endereco">Endereço</label>
                                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="numero">Número</label>
                                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Número">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bairro">Bairro</label>
                                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cidade">Cidade</label>
                                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="estado">Estado</label>
                                        <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="transporte">Transporte</label>
                                        <input type="radio" id="transporte" name="transporte" value="0">Não
                                        <input type="radio" id="transporte" name="transporte" value="1">Sim
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="especialidades">Especialidades</label>
                                        <select name="especialidades" id="especialidades">
                                            <option value="geral">Geral</option>
                                            <option value="ortopedia">Ortopedia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tratamentos">Tratamentos</label>
                                        <input type="text" class="form-control required" id="tratamentos" name="tratamentos" placeholder="Tratamentos">
                                    </div>
                                </div><div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exame">Exames</label>
                                        <input type="text" class="form-control required" id="exames" name="exames" placeholder="Exames">
                                    </div>
                                </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <button class="btn btn-default back">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
     @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Registrar</a>
    @endif
    @endif
</div>
@endif     

<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous">
</script>


    <script>

        $(function () {
            
            $('#formClinicas').on('submit', function(e){
                e.preventDefault();
                $(".required").parent('.form-group').removeClass('has-error');
                $(".required").each(function(){
                    if ($(this).val() == '')
                        $(this).parent('.form-group').addClass('has-error');
                });
                
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            
                var clinicas = {
                    _token: "{{ csrf_token() }}",
                    fantasia: $("#nome_fantasia").val(),
                    razao_social: $("#razao_social").val(),
                    cnpj: $("#cnpj").val(),
                    endereco: $("#endereco").val(),
                    numero: $("#numero").val(),
                    bairro: $("#bairro").val(),
                    cidade: $("#cidade").val(),
                    estado: $("#estado").val(),
                    especialidades: $("#especialidades").val(),
                    transporte: $("#transporte:checked").val(),
                    tratamentos: $("#tratamentos").val(),
                    exames: $("#exames").val(),
                }

                $.ajax({
                    type: "POST",
                    url: "/clinica",
                    data:  JSON.stringify(clinicas) , 
                    contentType: "application/json; charset=utf-8",
                    success: function(response) {
                        console.log('foi');
                    },
                    error: function(response){
                        console.log('não foi');
                    }
                });
            });
        });
    </script>