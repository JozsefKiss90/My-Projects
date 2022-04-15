var subtotal = 0;


function plusButton() {
    
    document.getElementById("btnplus").parentNode.querySelector('input[type=number]').stepUp();
    var x = document.getElementById("id_form-0-quantity").value;
        var btn = document.getElementById("btnplus").value


    function sendId(){ 
        var xhr = new XMLHttpRequest();
        xhr.onload = function () {
            var resp = this.responseText
            var obj = JSON.parse(resp);
            var item_price = obj[0]['item_price'];
            var total = item_price*x
            console.log(total)
            document.getElementById('total').innerHTML = total;
            subtotal += Number(item_price);
            document.getElementById('subtotal').innerHTML = subtotal;
            console.log(subtotal);
        }
        xhr.open('POST', '../database/ajax.php'); 
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send('btn=' + btn);

      }
      sendId(); 
  }

  function minusButton() {
    document.getElementById("btnminus").parentNode.querySelector('input[type=number]').stepDown();
    var x = document.getElementById("id_form-0-quantity").value;
    console.log(x); 
    var btn = document.getElementById("btnminus").value
    function sendId(){
        var btn = document.getElementById("btnminus").value 
        var xhr = new XMLHttpRequest();
        xhr.onload = function () {
            var resp = this.responseText
            var obj = JSON.parse(resp);
            var item_price = obj[0]['item_price'];
            var total = item_price*x
            console.log(total)
            document.getElementById('total').innerHTML = total;
            return total;
        }
        xhr.open('POST', '../database/ajax.php'); 
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send('btn=' + btn);
      }
      sendId(); 
    
  }

