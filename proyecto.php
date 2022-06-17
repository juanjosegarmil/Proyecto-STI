<!DOCTYPE html>
<html>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <body>
        <script type="text/javascript" src="js.js"></script>
    <h3 id="demo" onclick="myFunction()" class="p-3 mb-2 bg-primary text-white">Proyecto STI</h3>
    <label for="color" style="font-size: x-large; font-family: monospace;"  class="text-justify" >Elige Color de la VLAN</label>
    <input type='color' name='color' id="color" onchange="myFunction()">
    
        <div class="row">
          <div class="col">
            <label for="color" style="font-size: x-large; font-family: monospace;" class="text-white bg-dark">Color #000000 (Negro) para modo trunk</label>
          </div>
          <div class="col">
            <label for="color" style="font-size: x-large; font-family: monospace;">Color #ffffff (Blanco) para modo access</label>
          </div>
        </div>
    <br>
    <br>
    <div class="input-group">
        <div class="input-group-prepend">
    <input type="button" id="grabadora" value="Descargar conf" class="form-control">
        </div>
        <div class="input-group-prepend">
    <input type="button" id="exposicion" value="Botón examen" onclick="examen()" class="form-control">
        </div>
       <!-- <div class="input-group-prepend">
    <input type="button" id="mostrar" value="Mostrar array" class="form-control">
        </div>-->  
        <div class="input-group-prepend">
    <form id="myForm" action="script.php" method="post"> 
		<input type="hidden" id="jsarray" name="jsarray"  />
    	<input type="submit" id="btn" name="submit" value="Grabar BD" class="form-control"/>
 	</form>
        </div>
        <div class="input-group-prepend">
     <form id="tabla" action="mostrar.php" method="post"> 
    	<input type="submit" id="boton" name="submit" value="Mostrar BD" class="form-control"/>
 	</form>
        </div>
      	<div class="input-group-prepend">
     <form id="grabar" action="grabar.php" method="post"> 
    	<input type="submit" id="boton2" name="submit" value="Grabar en Switch juniper" class="form-control"/>
 	</form>
        </div>
        <div class="input-group-prepend">
     <form id="grabar" action="grabar2.php" method="post"> 
    	<input type="submit" id="boton3" name="submit" value="Grabar en Switch huawei" class="form-control"/>
 	</form>
        </div>
        <div class="input-group-prepend">
     <form id="grabar" action="grabar3.php" method="post"> 
    	<input type="submit" id="boton4" name="submit" value="Grabar en Switch hp" class="form-control"/>
 	</form>
        </div>
    </div>
    <br>
    <br>
    <div style="display: flex; flex-direction: column;  padding: 1%; border: 3px solid darkgray; border-radius: 9px;">
        <table>
            <tr>
                <td>
                    <div>
                        <table>
                            <tr>
                                <td><h2 >SWITCH Juniper EX2200</h2></td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="display: flex; flex-direction: row;">
                    <div style="margin: 1%;">
                        
                        <table>
                        <tr>
                            <?php 
                                for ($i=1; $i < 7; $i++) { 
                                    ?>
                                <td><button id="b<?php echo $i?>" onclick="activa('b<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                        </tr>
                            <tr>
                            <?php 
                                for ($i=7; $i < 13; $i++) { 
                                    ?>
                                <td><button id="b<?php echo $i?>" onclick="activa('b<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                        </table>
                    </div>
                    <div style="margin: 1%;">
                        <table>
                            <tr>
                            <?php 
                                for ($i=13; $i < 19; $i++) { 
                                    ?>
                                <td><button id="b<?php echo $i?>" onclick="activa('b<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                            <tr>
                            <?php 
                                for ($i=19; $i < 25; $i++) { 
                                    ?>
                                <td><button id="b<?php echo $i?>" onclick="activa('b<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                        </table>
                    </div>
                    <div style="margin: 1%;">
                        <table>
                            <tr>
                            <?php 
                                for ($i=25; $i < 31; $i++) { 
                                    ?>
                                <td><button id="b<?php echo $i?>" onclick="activa('b<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                            <tr>
                            <?php 
                                for ($i=31; $i < 37; $i++) { 
                                    ?>
                                <td><button id="b<?php echo $i?>" onclick="activa('b<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                        </table>
                    </div>
                    <div style="margin: 1%;">
                        <table>
                            <tr>
                            <?php 
                                for ($i=37; $i < 43; $i++) { 
                                    ?>
                                <td><button id="b<?php echo $i?>" onclick="activa('b<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                            <tr>
                            <?php 
                                for ($i=43; $i < 48; $i++) { 
                                    ?>
                                <td><button id="b<?php echo $i?>" onclick="activa('b<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                        </table>
                    </div>
                </td>
                <td>
                </td>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <div style="display: flex; flex-direction: column;  padding: 1%; border: 3px solid darkgray; border-radius: 9px;">
        <table>
            <tr>
                <td>
                    <div>
                        <table>
                            <tr>
                                <td><h2>SWITCH HP 2510G-48</h2></td>
                            </tr>                    
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="display: flex; flex-direction: row;">
                    <div style="margin: 1%;">
                        <table>
                        <tr>
                            <?php 
                                for ($i=1; $i < 7; $i++) { 
                                    ?>
                                <td><button id="c<?php echo $i?>" onclick="activa2('c<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                        </tr>
                            <tr>
                            <?php 
                                for ($i=7; $i < 13; $i++) { 
                                    ?>
                                <td><button id="c<?php echo $i?>" onclick="activa2('c<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                        </tr>
                        </table>
                    </div>
                    <div style="margin: 1%;">
                        <table>
                            <tr>
                            <?php 
                                for ($i=13; $i < 19; $i++) { 
                                    ?>
                                <td><button id="c<?php echo $i?>" onclick="activa2('c<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                            <tr>
                            <?php 
                                for ($i=19; $i < 25; $i++) { 
                                    ?>
                                <td><button id="c<?php echo $i?>" onclick="activa2('c<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                        </table>
                    </div>
                    <div style="margin: 1%;">
                        <table>
                            <tr>
                            <?php 
                                for ($i=25; $i < 31; $i++) { 
                                    ?>
                                <td><button id="c<?php echo $i?>" onclick="activa2('c<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                            <tr>
                            <?php 
                                for ($i=31; $i < 37; $i++) { 
                                    ?>
                                <td><button id="c<?php echo $i?>" onclick="activa2('c<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                        </table>
                    </div>
                    <div style="margin: 1%;">
                        <table>
                            <tr>
                            <?php 
                                for ($i=37; $i < 43; $i++) { 
                                    ?>
                                <td><button id="c<?php echo $i?>" onclick="activa2('c<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                            <tr>
                            <?php 
                                for ($i=43; $i < 48; $i++) { 
                                    ?>
                                <td><button id="c<?php echo $i?>" onclick="activa2('c<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                        </table>
                    </div>
                </td>
                <td>
                </td>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <div style="display: flex; flex-direction: column;  padding: 1%; border: 3px solid darkgray; border-radius: 9px;">
        <table>
            <tr>
                <td>
                    <div>
                        <table>
                            <tr>
                                <td><h2>SWITCH Huawei s5300 series</h2></td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="display: flex; flex-direction: row;">
                    <div style="margin: 1%;">
                        
                        <table>
                        <tr>
                            <?php 
                                for ($i=1; $i < 7; $i++) { 
                                    ?>
                                <td><button id="d<?php echo $i?>" onclick="activa3('d<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                        </tr>
                            <tr>
                            <?php 
                                for ($i=7; $i < 13; $i++) { 
                                    ?>
                                <td><button id="d<?php echo $i?>" onclick="activa3('d<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                        </table>
                    </div>
                    <div style="margin: 1%;">
                        <table>
                            <tr>
                            <?php 
                                for ($i=13; $i < 19; $i++) { 
                                    ?>
                                <td><button id="d<?php echo $i?>" onclick="activa3('d<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                            <tr>
                            <?php 
                                for ($i=19; $i < 25; $i++) { 
                                    ?>
                                <td><button id="d<?php echo $i?>" onclick="activa3('d<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                        </table>
                    </div>
                    <div style="margin: 1%;">
                        <table>
                            <tr>
                            <?php 
                                for ($i=25; $i < 31; $i++) { 
                                    ?>
                                <td><button id="d<?php echo $i?>" onclick="activa3('d<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                            <tr>
                            <?php 
                                for ($i=31; $i < 37; $i++) { 
                                    ?>
                                <td><button id="d<?php echo $i?>" onclick="activa3('d<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                        </table>
                    </div>
                    <div style="margin: 1%;">
                        <table>
                            <tr>
                            <?php 
                                for ($i=37; $i < 43; $i++) { 
                                    ?>
                                <td><button id="d<?php echo $i?>" onclick="activa3('d<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                            <tr>
                            <?php 
                                for ($i=43; $i < 48; $i++) { 
                                    ?>
                                <td><button id="d<?php echo $i?>" onclick="activa3('d<?php echo $i?>')" value="<?php echo $i?>"><?php echo $i?></button></td>
                            <?php
                        }
                        ?>
                            </tr>
                        </table>
                    </div>
                </td>
                <td>
                </td>
            </tr>
        </table>
    </div>
    </body>
    <script>
    var cont = 0;

        function downloadasTextFile(filename, text) {
     var element = document.createElement('a');
     element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
     element.setAttribute('download', filename);
 
     element.style.display = 'none';
     document.body.appendChild(element);
 
     element.click();
 
     document.body.removeChild(element);
     }

 // Start file download.
 document.getElementById("grabadora").addEventListener("click", function(){
     // Generate download of phpcodertech.txt file with some content
     var text =  JSON.stringify(cosas);
     var filename = "confswitch.txt";
     
     downloadasTextFile(filename, text);

 }, false);

      document.getElementById("btn").addEventListener("click", function(){
            var arrayphp = JSON.stringify(php);
            document.getElementById("jsarray").value = arrayphp;

      });
      document.getElementById("mostrar").addEventListener("click", function(){
        
            var arrayphp = JSON.stringify(php);
            document.write(arrayphp);

      });


 
    </script>
</html>
