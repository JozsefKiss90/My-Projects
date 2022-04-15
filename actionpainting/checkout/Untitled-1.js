for(i=0; i< inputs.length; i++) {
    let inputval[] = {input : inputs[i].value};
    fin.push(inputval)
}
for (y=0; y< prices.length; y++) {
    let priceval = { price : prices[y].innerText};
    fin.push(priceval)
}
for (z=0; z< inputs.length; z++) {
    let idval = { id : inputs[z].dataset.id};
    fin.push(idval)
}

for(i=0; i< inputs.length; i++) {
    var values = new Array()
    values['input'] = inputs[i].value
    values['price'] = prices[i].innerText
    values['id'] = inputs[i].dataset.id
    fin.push(values)
}

for(i=0; i< inputs.length; i++) {
    arr= []
    let inputval = {input : inputs[i].value};
    arr.push(inputval)
    let priceval = { price : prices[y].innerText};
    arr.push(priceval)
    let idval = { id : inputs[z].dataset.id};
    arr.push(idval)
    fin.push(arr)
}