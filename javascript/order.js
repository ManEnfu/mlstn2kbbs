function addItem(name, price)
{
    //var x = document.getElementById("item-list");
    var p = createMenuItem(name, price);
    x.append(p);
    //updatePrice(price);
}

var id=1;
var total = 0;
function createMenuItem()
{
    if(name!='')
    {
        var table = document.getElementById("menu-list");
        var tr = document.createElement("tr");
        var td1 = document.createElement("td");
        var td2 = document.createElement("td");
        var td3 = document.createElement("td");
        var td4 = document.createElement("td");
        var td5 = document.createElement("td");

        td1.innerHTML = id;
        tr.appendChild(td1);
        td2.innerHTML = name + ' ' + topping;
        tr.appendChild(td2);
        td3.innerHTML = variant;
        tr.appendChild(td3);
        td4.innerHTML = level;
        tr.appendChild(td4);
        if (variant == "BIG") stotal += 4000;
        td5.innerHTML = stotal;
        tr.appendChild(td5);

        table.appendChild(tr);

        total += stotal;
        document.getElementById("numtotal").innerHTML = "IDR " + total;

    }
}

function updatePrice()
{
    var price = document.getElementById("price-total");
    var currentPrice= parseInt(price.innerHTML);
    currentPrice+=menuPrice.get(name);

    price.innerHTML = currentPrice;
}

var name = '';
var variant = '';
var topping = '';
var stotal = 0;
var level = 0;

function setMenu(id, itemName, price)
{
    id = id;
    name = itemName;
    stotal = price;
    variant='';
    topping='';
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