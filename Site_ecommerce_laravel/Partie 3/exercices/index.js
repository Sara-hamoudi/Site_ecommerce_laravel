//Etape 2 :

console.log("Hello");




//Etape 3 :

console.log("Hello".concat(" world !"));




//Etape 4 :

function concate(beginWith, endingWith) 
{

    console.log(beginWith.concat(" ", endingWith));

}




//Etape 5 : 

function concate_string(beginWith, endingWith) 
{

    if (beginWith === Number(beginWith)) 
    {
         console.log("" + beginWith + endingWith);
    }
    else 
    {
       console.log(beginWith.concat(" ", endingWith));
    }

}




//Etape 6 :

function aff_x_times(x, str) 
{

    str = str+'\n';
    console.log(str.repeat(x));

}




//Etape 7 :

function print_arr_delayed (array, t)
{

     i=0;
    setInterval(function()
    {
    
    console.log(array[i++ % array.length])
    
    }, t * 1000)

}