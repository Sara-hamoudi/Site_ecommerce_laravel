// Etape 1 :

function make_linear_array(n) 
{
    var i=0;
    var tab=[];

    if (n != Number(n)) 
    {
       console.log("[ 0 ]");
    }
    
    if (n < 0) 
    {
        console.log("[ 0 ]");
    }

    else 
    {    
        while (i != n)
        {
          tab.push(i);
            ++i;           
        }
        tab.push(n);
        console.log("[ "+tab+" ]");
    }
}

// Etape 2 :

function zip_arrays(array1, array2) 
{

    if (array1.length != array2.length)
    {
    console.log("false");
    }

    else {
        var i=0;
        var total={};
        while (i < array1.length && array2.length) {
        total[array1[i]]=array2[i];
        ++i;
        }
        return total;
    }
}

// Etape3

function has_property(obj, key)
{
    i = key

    if(obj[i] != null)
    {
        return(true)
    }
    
    else
    {
    return false
    }
}
        

// Etape4

function obj_is_equals(obj1, obj2)
{

    for(var i in obj1)
    {
        if (obj1[i] != obj2[i])
        {
        return(false)
        }
        
        else
        {
        return(true)
        }
    }
}