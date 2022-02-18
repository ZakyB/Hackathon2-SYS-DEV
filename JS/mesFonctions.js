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
                alert("erreur sur l'appel des demande de services");
            }
        }
    );
}
function getLesCategories()
{
    $.ajax(
        {
            //appel a un script php
            url:"../PHP/getLesCategories.php",
            success: function(data)
            {
                $('#lstCategories').append(data);
            },
            error:function()
            {
                alert("erreur sur l'appel des catégories");
            }
        }
    );
}

function getLesVilles()
{
    $.ajax(
        {
            //appel a un script php
            url:"../PHP/getLesVilles.php",
            success: function(data)
            {
                $('#lstVilles').append(data);
            },
            error:function()
            {
                alert("erreur sur l'appel des catégories");
            }
        }
    );
}

function Rechercher(){
    
    var info = document.getElementById('search').value;
    var cat = document.getElementById('lstCategories').value;
    if (info != "" | cat != ""){
        // alert(info);
        $.ajax
            (
            {
                method:"GET",
                url:"../PHP/rechercher.php",
                data: 'info='+info+"&cat="+cat,
                success: function(data)
                {
                    if(data != ""){
                        $('#Services').empty();
                        $('#Services').append(data);
                        $('#demandeServices').empty();
                        $('#demandeServices').append(data);
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

function RechercherDemandes(){
    
    var info = document.getElementById('search').value;
    var cat = document.getElementById('lstCategories').value;
    if (info != "" | cat != ""){
        // alert(info);
        $.ajax
            (
            {
                method:"GET",
                url:"../PHP/rechercherDemande.php",
                data: 'info='+info+"&cat="+cat,
                success: function(data)
                {
                    if(data != ""){
                        $('#Services').empty();
                        $('#Services').append(data);
                        $('#demandeServices').empty();
                        $('#demandeServices').append(data);
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

/* function Rechercher(){
    
    var info = document.getElementById('search').value;
    var cat = document.getElementById('lstCategories').value;
    var ville = document.getElementById('lstVilles').value;
    if (info != "" | cat != "" | ville != ""){
        // alert(info);
        $.ajax
            (
            {
                method:"GET",
                url:"../PHP/rechercher.php",
                data: 'info='+info+"&cat="+cat+"&ville="+ville,
                success: function(data)
                {
                    if(data != ""){
                        $('#Services').empty();
                        $('#Services').append(data);
                        $('#demandeServices').empty();
                        $('#demandeServices').append(data);
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
} */

function getLesRecherches()
{
    $.ajax(
        {
            //appel a un script php
            url:"../PHP/getLesRecherches.php",
            success: function(data)
            {
                $('#mesRecherches').append(data);
            },
            error:function()
            {
                alert("erreur sur l'appel des recherches");
            }
        }
    );
}