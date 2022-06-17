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
 function examen() {
    for (let i = 1; i < 48; i++) {
      color2 = "#" + Math.floor(Math.random()*16777215).toString(16);
      document.getElementById("b" + i).style.backgroundColor = color2;
      boca = i;
      php.push(i);
      php.push(juniperEX2200);
      php.push(color2);
      php.push(boca);
      php.push("access");
      php.push(i);
      cosas.push(i + juniperEX2200 + color2 + boca + "access");
    }
    for (let i = 96; i < 143; i++) {
      color4 = "#" + Math.floor(Math.random()*16777215).toString(16);
      boca = i-95;
      id3 = i - 95;
      document.getElementById("d" + id3).style.backgroundColor = color4;
      php.push(i);
      php.push(huawei);
      php.push(color4);
      php.push(boca);
      php.push("access");
      php.push(i);
      cosas.push(i + huawei + color4 + boca + "access");
    }
    for (let i = 48; i < 96; i++) {
      color3 = "#" + Math.floor(Math.random()*16777215).toString(16);
      boca = i-47;
      id2 = i-47;
      document.getElementById("c" + id2).style.backgroundColor = color3;
      php.push(i);
      php.push(hp2510);
      php.push(color3);
      php.push(boca);
      php.push("access");
      php.push(i);
      cosas.push(i + hp2510 + color3 + boca + "access");
    }


  }
