
// first combo and second combo
    function populate(c1,c2){
        var c1 = document.getElementById(c1);
        var c2 = document.getElementById(c2);
        
        c2.innerHTML = "";

        if(c1.value == "Pizza"){
            var optionArray = ["|","Italian|Italian","Indian|Indian","SriLankan|SriLankan"];
        }

        else if(c1.value == "Rice"){
            var optionArray = ["|","SriLankan|SriLankan","Indian|Indian","Malaysian|Malaysian"];
        }

        else if(c1.value == "Drinks"){
            var optionArray = ["|","Hot Drinks|Hot Drinks","Cool Drinks|Cool Drinks"];
        }


        for(var option in optionArray){
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.value = pair[0];
            newOption.innerHTML = pair[1];
            c2.options.add(newOption);

            }

        
        
    }

// second combo and third combo
    function populateNxt(c2,c3){

        var c2 = document.getElementById(c2);
        var c3 = document.getElementById(c3);

        c3.innerHTML = "";

        if(c2.value == "Italian" || c2.value == "Indian" || c2.value == "SriLankan" || c2.value == "Malaysian"){
        var optionArray = ["|","Vege|Vegetarian","Nonvege|Non Vegetarian"];    
        }

        for(var option in optionArray){
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        c3.options.add(newOption);

     }
    }
