function Rechercher(){
    
    var info = document.getElementById('search').value;
    $.ajax
    (
        {
            method:"GET",
            data:"info="+info,
            success: function(data)
            {
                alert(data);
            },
            error:function()
            {
                alert("error");
            }
        }
    );
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