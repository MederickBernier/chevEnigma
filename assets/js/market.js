$(document).ready(function(){
    var query = document.getElementById("marketSearch").value;

    var dataString = "query="+query;

    $(function(){
        $.ajax({
            type: 'POST',
            url: 'src/search/marketSearch.php',
            data: dataString,
            success: function(response){
                var searchResults = response;
                var results = {};

                for(var i = 0; i<searchResults.length;i++){
                    results[i] = searchResults[i].name;
                }
                $('input.autocomplete').autocomplete({
                    data: results,
                    limit:10,
                });
            }
        });
    });
});