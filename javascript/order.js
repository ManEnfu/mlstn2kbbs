function addItem(name, price)
{
    //var x = document.getElementById("item-list");
    var p = createMenuItem(name, price);
    x.append(p);
    //updatePrice(price);
}

var id=1;

function createMenuItem()
{
    if(name!='-1')
    {
        var table = document.getElementById("menu-list");
        var tr = document.createElement("tr");
        var td1 = document.createElement("td");
        var td2 = document.createElement("td");
        var td3 = document.createElement("td");
        var td4 = document.createElement("td");
        var td5 = document.createElement("td");

        td1.innerHTML = id++;
        tr.appendChild(td1);
        td2.innerHTML = name + ' ' + topping;
        tr.appendChild(td2);
        td3.innerHTML = variant;
        tr.appendChild(td3);
        td4.innerHTML = level;
        tr.appendChild(td4);
        td5.innerHTML = 25000;
        tr.appendChild(td5);


        table.append(tr);

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