function clearGuests(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
            alertify.success('Guest carts cleared.');
            console.log("button clicked");
        }
    };
    xmlhttp.open("POST","../functions/guestClear.php",true);
    xmlhttp.send();
}

function updateFood(){
/*
id
type (option)
name
price
stock
*/

let id =document.getElementById("id").value;
    let name = document.getElementById("id").value;
    let price =document.getElementById("price").value;
    let stock =document.getElementById("stock").value;
    let select = document.getElementById("type");
    let type = select.options[select.selectedIndex].value;


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
            //alertify.success('Guest carts cleared.');
            //console.log("button clicked");
            console.log(this.responseText);
            //setTimeout(function(){window.location.reload();},500);
        }
    };
    xmlhttp.open("GET","../functions/updateFoodItem.php?id="+id+"&name="+name+"&price="+price+"&stock="+stock+"&type="+type,true);
    xmlhttp.send();
}