@extends('layouts.app')
@section('title','Registo de pessoa perdida')

<style type="text/css">
    .form-group{
        top: 20px;
        position: relative;
    }
    .conteiner{
     margin: 35px;
    }

</style>
@section('content')


<div class="content">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center d-flex justify-content-center">
        <a href="#" class="nav-link" style="color: white;"><h4>PROCURA-SE</h4></a>
    </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="/pessoa_perdida/" class="nav-link">
            <i class="pe-7s-home"></i>Pagina Inicial</a>
          </li>
          <li class="nav-item active">
            <a href="/pessoa_perdida/create/" class="nav-link">
            <i class="pe-7s-add-user"></i>Pessoa Perdida</a>
          </li>
        </ul>

        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Edson Gomes</span>
              <img class="img-xs rounded-circle" src="/imgs_p_perdidas/1538714846foto.jpg" alt="Profile image">
              <i class="pe-7s-edit"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="pe-7s-edit"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="pe-7s-id"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="pe-7s-users"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item mt-2">
                Editar conta
              </a>
              <a class="dropdown-item">
                Lista de Ajudas
              </a>
              <a class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
</div>
<br>
<br>
<br>
<br>
<div class="content"  style="background-image: url("/images/register.jpg");">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9" style="position: relative;left: 180px">
                        <div class="card">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="header">
                                <h4 class="title">Registo de Pessoa Perdida</h4>
                            </div>

                            <div class="content">
                                <form method="POST" action="/pessoa_perdida" enctype="multipart/form-data">
                                        @csrf 
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" class="form-control" name="nome" placeholder="nome completo">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sexo</label>
                                                <select class="form-control" name="sexo" style="height: 34px">
                                                    <option value="M">Masculino</option>
                                                    <option value="F">Feminino</option>
                                                </select> 
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Data de Nascimento</label>
                                                <input type="date" class="form-control" placeholder="DD/MM/AAAA" name="d_nasc">
                                            </div>
                                        </div>
                                
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nacionalidade</label>
                                                <input type="text" class="form-control" placeholder="Nacionalidade"  name="nacionalidade">

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>naturalidade</label>

                                                <input type="text" class="form-control" placeholder="naturalidade"  name="naturalidade">

                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h4><i class="pe-7s-cloud-upload"></i> <label>Foto</label></h4>
                                                <input type="file" name="foto" class="form-control" style="height: 43px">
                                            </div>
                                        </div>  
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Informação adicional</label>
                                                <textarea rows="7" name="obs" class="form-control" placeholder="informação adicional sobre a pessoa perdida"></textarea>
                                            </div>
                                        </div>
                                    
                                    <button type="submit" class="btn btn-info btn-fill pull-right" id="destaque">Gravar</button>
                                    
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <script type="text/javascript">
                document.querySelector('#destaque').onclick = function() {
                    alert("kme");
                };
            </script>
            <!-- Modal -->
        <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Não faz parte da lista a baixo??</h2>
                    </div>
                    <div class="modal-body">
                    @foreach($pessoa_perdida as $p_perdida)

                    @endforeach
                    </div>
                    <div class="modal-footer">
                        
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <a href="" class="nav-link">
                            <button type="button" class="btn btn-primary">Ver no Mapa</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        </div>

       


@endsection
