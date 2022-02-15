function Rechercher(){
    $.ajax
    (
        {
            method:"GET",
            url:"./PHP/rechercher.php",
            success: function(data)
            {
                $('#Services').empty();
                $('#Services').append(data);
            },
            error:function()
            {
                alert("error");
            }
        }
    );
}