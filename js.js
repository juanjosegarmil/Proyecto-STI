      var color1 = "";
var juniperEX2200 = "juniper";
var hp2510 = "hp";
var huawei = "huawei";
var cosas = [];
var cosas4 = [];
var contador = 0;
var php = [];

function myFunction() {    
   document.getElementById("demo").style.color = document.getElementById('color').value;
   color1 = document.getElementById('color').value;
   cont += 1;
   
 }
 function miFunc(a) {
   document.getElementById("demo").style.color = a;
  }
   function activa(b) {
   document.getElementById("demo").style.color = document.getElementById('color').value;
   color1 = document.getElementById('color').value;
   document.getElementById(b).style.backgroundColor = color1;
   var boca =  Number(document.getElementById(b).value);
   var id = boca;
   if (color1 == "#000000") {
    cosas.push(cont + juniperEX2200 + color1 +  "   "  + boca + "  Trunk" );
    php.push(cont);
    php.push(juniperEX2200);
    php.push(color1);
    php.push(boca);
    php.push("trunk");
    php.push(id);
    

    cosas4.push("vlan : " + cont);
    cosas4.push("modelo : " + juniperEX2200);
    cosas4.push("color : " + color1);
    cosas4.push("boca : " + boca);
    cosas4.push("modo : " + "Trunk");
  
   } else if(color1 == "#ffffff"){
    cosas.push(cont + juniperEX2200 + color1 + "   " + boca);
    php.push(cont);
    php.push(juniperEX2200);
    php.push(color1);
    php.push(boca);
    php.push("access");
    php.push(id)
    cosas4.push("vlan : " + cont + "," + " modelo : " + juniperEX2200 + "," + " color : " + color1 + "," + " boca : " + boca + "," + " modo : " + " access" + "," + " id :" + id);
   }else{
    cosas.push(cont + juniperEX2200 + color1 +  "  "  + boca);
    php.push(cont);
    php.push(juniperEX2200);
    php.push(color1);
    php.push(boca);
    php.push("access"); 
    php.push(id);
    cosas4.push("vlan : " + cont + "," + " modelo : " + juniperEX2200 + "," + " color : " + color1 + "," + " boca : " + boca + "," + " modo : " + " access" + "," + " id :" + id);  
   }
   
  }
  function activa2(b) {
   document.getElementById("demo").style.color = document.getElementById('color').value;
   color1 = document.getElementById('color').value;
   document.getElementById(b).style.backgroundColor = color1;
   var boca = Number( document.getElementById(b).value);
   var id=boca  + 48;
   if (color1 == "#000000") {
    cosas.push(cont + hp2510 + color1 +  "  "  + boca + "  Trunk");
    php.push(cont);
    php.push(hp2510);
    php.push(color1);
    php.push(boca);
    php.push("trunk");
    php.push(id);
    cosas4.push("vlan : " + cont + "," + " modelo : " + hp2510 + "," + " color : " + color1 + "," + " boca : " + boca + "," + " modo : " + " Trunk" + "," + " id :" + id);
   } else if(color1 == "#ffffff"){
    cosas.push(cont + hp2510 + color1 +  "  "  + boca);
    php.push(cont);
    php.push(hp2510);
    php.push(color1);
    php.push(boca);
    php.push("access");
    php.push(id);
    cosas4.push("vlan : " + cont + "," + " modelo : " + hp2510 + "," + " color : " + color1 + "," + " boca : " + boca + "," + " modo : " + " Access" +"," + " id :" + id);

   }else{
    cosas.push(cont + hp2510 + color1 +  "  " + boca);    
    php.push(cont);
    php.push(hp2510);
    php.push(color1);
    php.push(boca);
    php.push("access");
    php.push(id);
    cosas4.push("vlan : " + cont + "," + " modelo : " + hp2510 + "," + " color : " + color1 + "," + " boca : " + boca + "," + " modo : " + " Trunk" +"," + " id :" + id);

   }
  }
  function activa3(b) {
   document.getElementById("demo").style.color = document.getElementById('color').value;
   color1 = document.getElementById('color').value;
   document.getElementById(b).style.backgroundColor = color1;
   var boca = Number(document.getElementById(b).value);
   var id = boca + 96;
   if (color1 == "#000000") {
    cosas.push(cont + huawei + color1 + "  " + boca + "  Trunk");
    php.push(cont);
    php.push(huawei);
    php.push(color1);
    php.push(boca);
    php.push("trunk");
    php.push(id);
    cosas4.push("vlan : " + cont + "," + " modelo : " + huawei + "," + " color : " + color1 + "," + " boca : " + boca + "," + " modo : " + " Trunk" +  "," + " id :" + id);
   } else if(color1 == "#ffffff"){
    cosas.push(cont + huawei + color1 + "  " + boca);
    php.push(cont);
    php.push(huawei);
    php.push(color1);
    php.push(boca);
    php.push("access");
    php.push(id);
    cosas4.push("vlan : " + cont + "," + " modelo : " + huawei + "," + " color : " + color1 + "," + " boca : " + boca + "," + " modo : " + " Access" +  "," + " id :" + id);

   }else{

    cosas.push(cont + huawei + color1 + "  " + boca);
    php.push(cont);
    php.push(huawei);
    php.push(color1);
    php.push(boca);
    php.push("trunk");
    php.push(id);
    cosas4.push("vlan : " + cont + "," + " modelo : " + hp2510 + "," + " color : " + color1 + "," + " boca : " + boca + "," + " modo : " + " Access" + "," + " id :" + id);

   }
  }
