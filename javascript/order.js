function addItem(name, price)
{
    var x = document.getElementById("item-list");
    var p = createMenuItem(name, price);
    x.append(p);
    updatePrice(price);
}

function createMenuItem()
{
    if(name!='-1')
    {
        var row = document.createElement("div");
        row.setAttribute("class", "row");
        
        var col_name = document.createElement("div");
        col_name.setAttribute("class", "col-6");
        col_name.innerHTML = name;
        if(variant!='-1') col_name.innerHTML+=', ' + variant;
        if(topping!='-1') col_name.innerHTML+=', ' + topping;
        col_name.innerHTML+=', '+level;

        var col_price = document.createElement("div");
        col_price.setAttribute("class", "col-5");
        col_price.innerHTML = menuPrice.get(name);
    
        var col_button = document.createElement("button");
        col_button.setAttribute("class", "col-1");
        col_button.innerHTML = 'subtract';
        
        row.append(col_name);
        row.append(col_price);
        row.append(col_button);
    
        return row;
    }
}

function updatePrice()
{
    var price = document.getElementById("price-total");
    var currentPrice= parseInt(price.innerHTML);
    currentPrice+=menuPrice.get(name);

    price.innerHTML = currentPrice;
}

var name = '-1';
var variant = '-1';
var topping = '-1';
var level = 0;

var menuPrice = new Map();
menuPrice.set('Pisang', 6000);
menuPrice.set('Apel', 5000);

function setMenu(itemName)
{
    name = itemName;
    variant='-1';
    topping='-1';
    level=0;
}

function setVariant(itemVariant)
{
    variant = itemVariant;
}

function setTopping(itemTopping)
{
    topping = itemTopping;
}

function setLevel(itemLevel)
{
    level = itemLevel;
}

function addMenu()
{
    console.log(name, variant, topping, level);
}