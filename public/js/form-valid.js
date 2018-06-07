(function(){
    window.addEventListener('load',function(){

        var sku = document.getElementById('sku');

        var hasClass = function(element , classe){
            return (element.className).indexOf(classe) > 1;
        };
        var validarDados = function(){
            if(sku.val == null){
                sku.classList.add('is-invalid')
                return false;
            }
        }

        sku.addEventListener('focus',function(){
            if(hasClass(this,'is-invalid')){
                sku.classList.remove('is-invalid');
            }
        })

        document.getElementById('form-produto').addEventListener('submit',function(event){
            var form = document.getElementById('form-produto');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            event.preventDefault();
            var urlAction = form.getAttribute('action');


            if(validarDados()){
                $.ajax({
                    url: urlAction,
                    method: 'post',
                    data: $('form').serialize(),

                    success: function(result){
                        $('#aviso-cadastro').modal('show');
                    },

                    error: function(errorData){
                        alert(errorData);
                    }
                });
            }
        })
    })
})()


