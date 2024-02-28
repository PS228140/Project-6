function fetchProduct(id) {
    fetch(`https://kuin.summaict.nl/api/product/` + id, {
        headers: {Authorization: 'Bearer 50|Oy8mM3g2A8jSTpiHoxrRXXdspGlvQHbbQ45qM272'}
    })
    .then(resp => resp.json())
    .then(respData => {
        let display = respData;
        let name = [];
        let description = [];
        let price = [];
        let image = [];
            
        name.push(display.name);
        description.push(display.description);
        price.push(display.price);
        image.push(display.image);
        
        alert('Product naam: ' + display.name +
        '\nPrijs: ' + display.price +
        '\nHoogte: ' + display.height_cm + 'cm' +
        '\nBreedte: ' + display.width_cm + 'cm' +
        '\nDiepte: ' + display.depth_cm + 'cm' +
        '\nOmschrijving: ' + display.description)    
    })
}