// Num 1 :

function select_body() 
{
    var corps = document.getElementsByTagName("body");
    return corps;
}

// Num 2 :

function select_input_name()
{
    var Name = document.getElementsByName("name");
    return Name;
}

// Num 3 :

function add_input_to(node)
{
    var ajout = document.createElement("input");
    document.getElementById(node).appendChild(ajout);
}

// Num 4 :
function del_input_from(node)
{
    var supp = document.del("input");
    document.getElementById(node).appendChild(supp);
}

// Num 5 :

function select_node(id)
{
    var trouverId = (document.getElementById(id));
    return trouverId;
}

//Num 6 :

