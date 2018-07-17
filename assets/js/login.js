 
$("#form-login").submit(function(e) {
  e.preventDefault();  
  ;
  $.ajax({
    type: "POST",
    url: url+'/sistema/login',
    data: $(this).serialize(), 
    success: function(data)
    {
      if(data == false){
        toastr.error('Datos de acceso incorrectos.','Error',{
            "positionClass": "toast-top-right",
            timeOut: 5000,
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            "tapToDismiss": false
        });
        return false;
      }else{
        setTimeout(function(){
            window.location = url+"page/";
        },2100);
        toastr.success('Ingresando..','Login Correcto',{
            "positionClass": "toast-top-right",
            timeOut: 2000,
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            "tapToDismiss": false
        });
        

      }
    }
  });
});