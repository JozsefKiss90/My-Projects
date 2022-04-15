$(document).ready(function(){
    // product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    // let $input = $(".qty .qty_input");
    
    // click on qty up button
    $qty_up.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);
      
        // change product price using ajax call
        $.ajax({url: "../database/ajax2.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];
                if($input.val() >= 1 && $input.val() <= 9){
                    $input.val(function(i, oldval){
                        return ++oldval;
                    });

                    let inputval = {input : $input.val()};
                    let priceval = { price : $price.text()};
                    
                    let finals = [inputval,priceval]
                    let id = $input.data("id")

                    // increase price of the product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    console.log(id);
                    // set subtotal price
                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }

            }}); // closing ajax request
    }); // closing qty up button

    // click on qty down button
    $qty_down.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "../database/ajax2.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() > 1 && $input.val() <= 10){
                    $input.val(function(i, oldval){
                        return --oldval;
                    });


                    // increase price of the product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }

            }}); // closing ajax request
    }); // closing qty down button

    let $final = $('.checkout');

    $final.click(function(e){
        var inputs = document.querySelectorAll(".qty_input");
        var prices = document.querySelectorAll(".product_price");
        var fin = [];
        for(i=0; i< inputs.length; i++) {
            arr= []
            let inputval = {input : inputs[i].value};
            arr.push(inputval)
            let priceval = { price : prices[i].innerText};
            arr.push(priceval)
            let idval = { id : inputs[i].dataset.id};
            arr.push(idval)
            fin.push(arr)
        }
        console.log(fin)
        $.ajax({url: "ajax3.php ", type : 'post', data : {'fin' : fin }, dataType: "JSON", success: function(data){ 
        console.log(data);
          }   
      });
    });
    
});