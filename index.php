 <?php
            $elementos=array();
			$elementos["elementos"]=['H', '.', '.','.','.','.', '.','.','.','.', '.','.','.','.', '.','.', 'He',
              'Li', 'Be', '.', '.','.','.','.', '.','.','.','.', '.','.','.','.', 'B', 'C', 'N', 'O', 'F', 'NE',
              'Na', 'Mg', '.', '.','.','.','.', '.','.','.','.', '.','.','.','.', 'AL', 'Si', 'P', 'S', 'CI', 'Ar',
              'K', 'Ca', 'Sc', 'Ti', 'V', 'Cr', 'Mn', 'Fe', 'Co', 'Ni', 'Cu', 'Zn', 'Ga', 'Ge', 'As', 'Se', 'Br', 'Kr',
              'Rb', 'Sr', 'Y', 'Zr', 'Nb', 'Mo', "Tc", 'Ru', 'Rh', 'Pd', 'Ag', 'Cd', 'In', 'Sn', 'Sb', 'Te', 'I', 'Xe',
              'Cs', 'Ba', 'Lu', 'Hf', 'Ta', 'W', 'Re', 'Os', 'Ir', 'Pt', 'Au', 'Hg', 'Ti', 'Pb', 'Bi', 'Po', 'At', 'Rn',
              'Fr', 'Ra', 'Lr', 'Rf','Db', 'Sg', 'Bh', 'Hs', 'Mt', 'Ds', 'Rg', 'Cn', 'Nh', 'FL', 'Mc', 'Lv', 'Ts', 'Og',
			  'La','Ce','Pr','Nd','Pm','Sm','Eu','Gd','Tb','Dy','Ho','Er','Tm','Yb','Ac','Th','Pa','U','Np','Pu','Am','Cm','Bk',
			  'Cf','Es','Fm','Md','No','Lr',];
			?>	  

<html>
<head>
</head>
<tile class="salmon"> <p>"TABLA PERIODICA DE LOS ELEMENTOS"</p></tile>

<style>

   body{
        background-color: blueGreen;
   }
     
	 .Verde{
		  background-color: mediumseagreen;
		  }.Verde:hover{
		  background-color: white;
		  } .Rosa{
		  background-color: pink;
		  }.Rosa:hover{
		  background-color: white;
		  }.Violeta{
		  background-color: lightcoral;
		  } .Violeta:hover{
		  background-color: white;
		  } .Naranja{
		  background-color: orange;
		  }.Naranja:hover{
		  background-color: white;
		  }.amarillo{
		  background-color: gold;
		  }.amarillo:hover{
		  background-color: white;
		  }.azul{
		  background-color: lightskyblue;
		 }.azul:hover{
		  background-color: white;
		  }.Green{
		  background-color: lightgreen;
		  } .Green:hover{
		  background-color: white;
		  } .blueGreen{
		  background-color: mediumaquamarine;
		  } .blueGreen:hover{
		  background-color: white;
		  }.indianred{
		  background-color: indianred;
		  }.indianred:hover{
		  background-color: white;
		  }.lightsalmon{
		  background-color: lightsalmon;
		  }.lightsalmon:hover{
		  background-color: white;
		  }.silver{
		  background-color: silver;
		  }
		  
</style>

  <body>
 
 <?php
  
  foreach ($elementos as $key=> $value){
	}
	
   ?> 
	 
	 
<table border="2"> 
		<tr><!---Primera Fila-->
		<td class="Verde">H</td>
		   <td colspan="16"></td>
		   		   <td class="azul">He</td>
				   </tr>
	
		 <tr><!---Segunda Fila---->
		   <td class="Violeta">Li</td>
		   <td class="Rosa">Be</td>
		   <td colspan="10"></td>
		   <td class="Green">B</td>
		   <td class="Verde">C</td>
		   <td class="Verde">N</td>
		   <td class="Verde">O</td>
		   <td class="bluegreen">F</td>
		   <td class="azul">Ne</td>
		   </tr>
		   
		   <tr><!---Tercera Fila---->
		   <td class="Violeta">Na</td>
		   <td class="Rosa">Mg</td>
		   <td colspan="10"></td>
		   <td class="amarillo">Al</td>
		   <td class="Green">Si</td>
		   <td class="Verde">P</td>
		   <td class="Verde">S</td>
		   <td class="bluegreen">Cl</td>
		   <td class="azul">Ar</td>
		   </tr>
		   
		   <tr><!---cuarta Fila---->
		   <td class="Violeta">K</td>
		   <td class="Rosa">Ca</td>
		   <td class="Naranja">Sc</td>
		   <td class="Naranja">Ti</td>
		   <td class="Naranja">V</td>
		   <td class="Naranja">Cr</td>
		   <td class="Naranja">Mn</td>
		   <td class="Naranja">Fe</td>
		   <td class="Naranja">Co</td>
		   <td class="Naranja">Ni</td>
		   <td class="Naranja">Cu</td>
		   <td class="Naranja">Zn</td>
		   <td class="amarillo">Ga</td>
		   <td class="Green">Ge</td>
		   <td class="Green">As</td>
		   <td class="Verde">Se</td>
		   <td class="bluegreen">Br</td>
		   <td class="azul">Kr</td>
		    </tr>
			
			<tr><!---Quinta Fila---->
		   <td class="Violeta">Rb</td>
		   <td class="Rosa">Sr</td>
		   <td class="Naranja">Y</td>
		   <td class="Naranja">Zr</td>
		   <td class="Naranja">Nb</td>
		   <td class="Naranja">Mo</td>
		   <td class="Naranja">Tc</td>
		   <td class="Naranja">Ru</td>
		   <td class="Naranja">Rh</td>
		   <td class="Naranja">Pd</td>
		   <td class="Naranja">Ag</td>
		   <td class="Naranja">Cd</td>
		   <td class="amarillo">In</td>
		   <td class="amarillo">Sn</td>
		   <td class="Green">Sb</td>
		   <td class="Green">Te</td>
		   <td class="bluegreen">I</td>
		   <td class="azul">Xe</td>
		   
		    </tr>
			
			<tr><!---Sesta Fila---->
		   <td class="Violeta">Cs</td>
		   <td class="Rosa">Ba</td>
		   <td class="indianred">la-Lu</td>
		   <td class="Naranja">Hf</td>
		   <td class="Naranja">Ta</td>
		   <td class="Naranja">W</td>
		   <td class="Naranja">Re</td>
		   <td class="Naranja">Os</td>
		   <td class="Naranja">Ir</td>
		   <td class="Naranja">Pt</td>
		   <td class="Naranja">Au</td>
		   <td class="Naranja">Hg</td>
		   <td class="amarillo">Ti</td>
		   <td class="amarillo">Pb</td>
		   <td class="amarillo">Bi</td>
		   <td class="Green">Po</td>
		   <td class="bluegreen">At</td>
		   <td class="azul">Rn</td>
		    </tr>
			
			
			<tr><!---Septima Fila---->
		   <td class="Violeta">Fr</td>
		   <td class="Rosa">Ra</td>
		   <td class="lightsalmon">Ac-Lr</td>
		   <td class="Naranja">Rf</td>
		   <td class="Naranja">Db</td>
		   <td class="Naranja">Sg</td>
		   <td class="Naranja">Bh</td>
		   <td class="Naranja">Hs</td>
		   <td class="Naranja">Mt</td>
		   <td class="Naranja">Ds</td>
		   <td class="Naranja">Rg</td>
		   <td class="Naranja">Cn</td>
		   <td class="amarillo">Nh</td>
		   <td class="amarillo">Fl</td>
		   <td class="amarillo">Mc</td>
		   <td class="amarillo">Lv</td>
		   <td class="bluegreen">Ts</td>
		   <td class="azul">Og</td>
		    </tr>

</table>

<table border="16"> 

			<tr><!---Octava Fila---->
		   <td class="indianred">La</td>
		   <td class="indianred">Ce</td>
		   <td class="indianred">Pr</td>
		   <td class="indianred">Nd</td>
		   <td class="indianred">Pm</td>
		   <td class="indianred">Sm</td>
		   <td class="indianred">Eu</td>
		   <td class="indianred">Gd</td>
		   <td class="indianred">Tb</td>
		   <td class="indianred">Dy</td>
		   <td class="indianred">Ho</td>
		   <td class="indianred">Er</td>
		   <td class="indianred">Tm</td>
		   <td class="indianred">Yb</td>
		   <td class="indianred">Lu</td>
		    </tr>
			
			<tr><!---Novena Fila---->
		   <td class="lightsalmon">Ac</td>
		   <td class="lightsalmon">Th</td>
		   <td class="lightsalmon">Pa</td>
		   <td class="lightsalmon">U</td>
		   <td class="lightsalmon">Np</td>
		   <td class="lightsalmon">Pu</td>
		   <td class="lightsalmon">Am</td>
		   <td class="lightsalmon">Cm</td>
		   <td class="lightsalmon">Bk</td>
		   <td class="lightsalmon">Cf</td>
		   <td class="lightsalmon">Es</td>
		   <td class="lightsalmon">Fm</td>
		   <td class="lightsalmon">Md</td>
		   <td class="lightsalmon">No</td>
		   <td class="lightsalmon">Lr</td>
		    </tr>

</table>

		<table border="2"> 
		<tr><!---Primera Fila-->
		<td class="silver">Metales</td>
		   <td colspan=20"></td>
		   
			  
		   		   <td class="Silver">No Metales</td>
				   </tr>

	
		 <tr><!---Segunda Fila---->
		   <td class="Violeta">Alcalinos</td>
		   <td class="Rosa">AlcalinosTerreros</td>
		   <td colspan="10"></td>
		   <td class="Naranja">Transicion</td>
		   <td class="lightsalmon">Lantanidos/Actinidos</td>
		   <td class="amarillo">Otros Metales</td>
		   <td colspan="1"></td>
		   <td colspan="2"></td>
		   <td>
		   <td class="verde">Otros No Metales</td>
		   <td class="bluegreen">Haologenos</td>
		   <td class="azul">Gases Nobles</td>
		   </tr>

		 

		   
		 
		   
		   
</table>		 

</html>
