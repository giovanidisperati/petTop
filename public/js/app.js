new Vue({
  el: 'body',
  data: {
    clinicas: [],
    loading: false,
    error: false,
    query: ''
  },
  methods: {
    search: function() {
        // Clear the error message.
        this.error = '';
        // Empty the products array so we can fill it with the new products.
        this.clinicas = [];
        // Set the loading property to true, this will display the "Searching..." button.
        this.loading = true;

        // Making a get request to our API and passing the query to it.
        this.$http.get('/api/search?q=' + this.query).then((response) => {
            // If there was an error set the error message, if not fill the products array.
            response.body.error ? this.error = response.body.error : this.clinicas = response.body;
            // The request is finished, change the loading to false again.
            this.loading = false;
            // Clear the query.
            this.query = '';
        });
    }
  }
});

var x=document.getElementById("demo");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition);
    }
  else{x.innerHTML="O seu navegador não suporta Geolocalização.";}
  }
function showPosition(position)
  {
  x.innerHTML="Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude; 
  }

 function buscarCEP(){
    var cep =  $("#cep").val().replace(/[^\d]+/g,'');
     //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#endereco").val("...");
                $("#cidade").val("...");
                $("#bairro").val("...");
                $("#uf").val("...");
                $("#latitude").val("...");
                $("#longitude").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#endereco").val(dados.logradouro);
                        $("#cidade").val(dados.localidade);
                        $("#bairro").val(dados.bairro);
                        $("#estado").val(dados.uf);
                      } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        alert("CEP não encontrado.");
                    }
                });
            }
        } //end if.        
} 