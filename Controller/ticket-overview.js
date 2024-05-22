(function() {
    var dataFetched = false; 

    document.addEventListener("DOMContentLoaded", function() { 
        fetchData();
    });

    function fetchData() {
        if (dataFetched) {
            return; 
        }

        var xhr = new XMLHttpRequest();
        xhr.open("GET", "../../Model/tickets-overview.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                displayData2(data);
            }
        };
        xhr.send();
    }

    function displayData2(data) {
        var stockContainer2 = document.getElementById("tiketsat");
        for(var i = 0; i < data.length; i++){
            stockContainer2.innerHTML += data[i].title + " " + data[i].status + "<br>";
        }
    }
})();
