@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8" />
                <title>Liberty commerce</title>
                <link rel="stylesheet" type="text/css" href="style2.css">  
       
        </head>


        <body>
                <img id="imageF" src="fond.jpeg" width="250px" height="250px">
                
                <table BORDER="20" id="tableau_p"> 
                <CAPTION> Votre panier </CAPTION> 
                        <TR> 
                        <TH> Livre titre </TH> 
                        <TH> Prix </TH> 
                        <TH> Quantité acheté </TH> 
                        </TR> 
                        
                        <TR> 
                        <TH> Livre Black butler </TH> 
                        <TH> 7€ </TH> 
                        <TH> <input type="number" value="0" min="0" max="5"> </TH> 
                        </TR> 

                        <TR> 
                        <TH> Livre Labyrinthe </TH> 
                        <TH> 10€ </TH> 
                        <TH> <input type="number" value="0" min="0" max="20"> </TH> 
                        </TR> 

                        <TR> 
                        <TH> Livre Astérix </TH> 
                        <TH> 8€ </TH> 
                        <TH> <input type="number" value="0" min="0" max="30"> </TH> 
                        </TR> 

                        <TR> 
                        <TH> Livre Anglais pour les Nuls </TH> 
                        <TH> 12€ </TH> 
                        <TH> <input type="number" value="0" min="0" max="10"> </TH> 
                        </TR> 

                        <TR> 
                        <TH> Livre la Torah </TH> 
                        <TH> 15€ </TH> 
                        <TH> <input type="number" value="0" min="0" max="200"> </TH> 
                        </TR>
                        
                
                        <TR> 
                        <TH> Livre Petit Ours Brun </TH> 
                        <TH> 2€ </TH> 
                        <TH> <input type="number" value="0" min="0" max="34"> </TH>              
                        </TR> 
                
                        <tr>
                        <th>
                        </tr>

                        <tr>
                            <th id="gpt">
                                Total
                            </th>
                            <th>
                                200$
                            </th>
                            <th>
                                4
                            </th>
                        </tr>
</table> 
<button>
                            Acheter
                             </button>    
        </body>
     
</html>
@endsection