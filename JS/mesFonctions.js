function getLesServices()
{
    $.ajax(
        {
            //appel a un script php
            url:"../PHP/getLesServices.php",
            success: function(data)
            {
                $('#Services').empty();
                $('#Services').append(data);
            },
            error:function()
            {
                alert("erreur sur l'appel des services");
            }
        }
    );
}

function getLesDemandeServices()
{
    $.ajax(
        {
            //appel a un script php
            url:"../PHP/getLesDemandeServices.php",
            success: function(data)
            {
                $('#demandeServices').empty();
                $('#demandeServices').append(data);
            },
            error:function()
            {
                alert("erreur sur l'appel des services");
            }
        }
    );
}

function Rechercher(){
    
    var info = document.getElementById('search').value;
    if (info != ""){
        // alert(info);
        $.ajax
            (
            {
                method:"GET",
                url:"../PHP/rechercher.php",
                data: 'info='+info,
                success: function(data)
                {
                    if(data != ""){
                        $('#Services').empty();
                        $('#ServicesRechercher').empty();
                        $('#ServicesRechercher').append(data);
                    }   
                },
                error:function()
                {
                    alert("error");
                }
            }
        );
    }else{
        alert("Veuillez indiquez ce que vous rechercher");
    }
}
/* 
function Rechercher(){
    $(document).ready(function(){
        $('#search').keyup(function(){
            $('#Services').html('');
        
            var utilisateur = $(this).val();
        
            if(utilisateur != ""){
            $.ajax
            (
                {
                    method:"GET",
                    url:"../PHP/rechercher.php",
                    data: 'user=' + encodeURIComponent(utilisateur),
                    success: function(data)
                    {
                        if(data != ""){
                            $('#Services').append(data);
                        }   
                    },
                    error:function()
                    {
                        alert("error");
                    }
                }
            );
        }
    });
  });
} */