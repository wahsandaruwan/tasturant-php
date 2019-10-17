// first combo boxes
function populate(c1,c2,c3){
    var c1 = document.getElementById(c1);
    var c2 = document.getElementById(c2);
    var c3 = document.getElementById(c3);
    c2.innerHTML = "";
    c3.innerHTML = "";

    if(c1.value == "pizza"){
        var optionArray = ["Cheese|Cheese","Pineapple|Pineapple","Peanuts|Peanuts"];

        var optionArray1 = ["Small|Small","Medium|Medium","Large|Large"];
    }

    else if(c1.value == "rice"){
        var optionArray = ["Pineapple|Pineapple","Button Mushrooms|Button Mushrooms","Fried Cashew|Fried Cashew"];
    }

    else if(c1.value == "drinks"){
        var optionArray = ["Ice Cubes|Ice Cubes"];
    }


    for(var option in optionArray){
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        c2.options.add(newOption);

        }

    for(var option1 in optionArray1){
        var pair = optionArray1[option1].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        c3.options.add(newOption);
    
        }

    
    
}
