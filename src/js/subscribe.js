function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function subscribe(){
     console.log("Test");

     email = $("#email").val();

     var error = null;

     if(!validateEmail(email))
          error = "Некорректный email"

     if(error) return document.getElementById('result').innerHTML = '<div class="alert alert-danger">'+error+'</div>';
     else{
          $.ajax({
               url: '/contacts',
               method: 'POST',
               data: {
                    'email': email
               },
               headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
               },
               success: function(res)
               {
                    document.getElementById('result').innerHTML = res;
                    document.getElementById('subscribe_form').reset();
                    document.getElementById('subscribe_form').style.display = '';
               }
          });
     }
};