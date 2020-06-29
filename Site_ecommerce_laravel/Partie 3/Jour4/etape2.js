function new_item() 
{
    document.getElementById("submit").onclick = function() {monBouton()};

    function monBouton()
    {
        var valeur=document.getElementById("name").value;

        document.write("<div id='effacer'> \n");
        document.write(valeur+"\n");
        document.getElementById('name').value='';
        document.write('   <button>x</button> \n');
        document.getElementById("effacer").onclick = function() {effacer_div()};
        document.write("</div>\n");
        document.write("<br />\n");

            function effacer_div() 
            {
               document.getElementById('effacer').remove();
            }        
    }
            
}
