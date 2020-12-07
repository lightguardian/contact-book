@extends('layouts.header')

@section('content')

<div class="container">
  



    <div class="d-flex flex-column justify-content-center align-items-center mt-5">
      <h2>Cadastrar Pessoa</h2>
      <div class="card bg-secondary col-sm-12 col-lg-4 col-md-8">
        <div class="card-body">
        <form  class=" " id = "person-data" method="POST"  >
          @csrf
            <div class="form-group">
              <label for="name">Nome Completo</label>
              <input type="text" class="form-control" id="name" name="name"
              required="required" pattern="^([A-zÀ-ú]*[\s]?)*$">
            </div>
            <div class="form-group">
              <label for="cpf">CPF</label>
              <input type="text" class="form-control" id="cpf" name="cpf"
              required="required" pattern="^([\d]{3}[\.]?){2}[\d]{3}[-]?[\d]{2}$">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email"
              required="required">
            </div>
         
            
            <div class="form-group">
                <label for="date">Date</label>
                <input  type="date" id="birthdate" class="form-control" name="birthdate"
                required="required">
            </div>
            
            
           
            <input type="submit" class="btn btn-dark" value = "Enviar"/>
          </form>
        </div>
        </div>
      </div>
    
  
</div>


@endsection

@section('scripts')
  {{-- SWEET ALERT --}}
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <script>
    $(document).ready(function(){
      $('#cpf').mask('000.000.000-00', {reverse: true});
    });

    $("#person-data").submit(function(event){
        event.preventDefault();
        $('#cpf').unmask();
        var fd = new FormData(this);
        $('#cpf').mask('000.000.000-00', {reverse: true});
        $.ajax({
        type: "post",
        data: fd,
        contentType: false,
        processData: false,
        url: ('/pessoa/criar'),
        dataType: 'json',
        success: function(data) {
            swal('Sucesso',data.message,'success');
            document.getElementById('person-data').reset();
        },
        error: function(data) {
            swal('Não foi possível inserir','O CPF ou EMAIL já estão cadastrados','info');
        }  
        });

    });

  
  
  
  


  </script>

@endsection