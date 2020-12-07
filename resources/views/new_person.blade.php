@extends('layouts.header')

@section('content')

<div class="container">
  



    <div class="d-flex flex-column justify-content-center align-items-center mt-5">
      <h2>Cadastrar Pessoa</h2>
      <div class="card bg-secondary col-sm-12 col-lg-4 col-md-8">
        <div class="card-body">
         {{--action="{{ route('new_person')}}"--}} {{--method="POST"--}}
        <form  class=" " id = "person-data" method="POST" >
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
              <input type="email" class="form-control" id="email" name="email">
            </div>
         
            
            <div class="form-group">
                <label for="date">Date</label>
                <input  type="date" id="birthdate" class="form-control" name="birthdate">
            </div>
            
            
           
            <input type="submit" class="btn btn-dark" value = "Enviar"/>
          </form>
        </div>
        </div>
      </div>
    
  
</div>


@endsection

@section('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<script>
function isCPF(cpf) {

}


$('#person-data').submit(function(event){
  event.preventDefault();

  var formData = new FormData(this);
  console.log(formData);
  $.ajax({
    type: 'post',
    data: formData,
    contentType: false,
    processData: false,
    url: ('/pessoa/criar'),
    dataType: 'json',
    success: function(data) {
      swal('Sucesso',data.message,'success');
      document.getElementById("person-data").reset();
      console.log('teste',data);
    }
  });
});
// $.ajax({
//     type: "post",
//     data: formData,
//     contentType: false,
//     processData: false,
//     url: (url da api),
//     dataType: "json",
//     success: function(data) {
//         console.log(data);
//     }
// });




$(function() {
  alert("teste ajx")
});</script>

@endsection