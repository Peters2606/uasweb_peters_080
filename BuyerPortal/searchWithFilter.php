<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
          function state() {
               var a = document.getElementById('states').value;

               if (a === '31') {
                    var array = ['medan','siantar'];
               } else if (a === '01') {
                    var array = ['padang', 'padangpanjang', 'pariaman'];
               }

               var string = "";
               for (let i = 0; i < array.length; i++) {
                    string = string + "<option>" + array[i] + "</option>";

               }
               string = "<select nmae = 'lol'>" + string + "</select>"
               document.getElementById('district').innerHTML = string;
          }
     </script>
     <script>
          var a;

          function display() {
               if (a == 0) {
                    document.getElementById("majic").style.visibility = "hidden";
                    document.getElementById("show").style.visibility = "visible";
                    return a = 1;
               } else {
                    document.getElementById("majic").style.visibility = "visible";
                    document.getElementById("show").style.visibility = "hidden";
                    // document.getElementById("show").style. visibility= "hidden";

                    return a = 0;
               }

          }
     </script>
 
<label>State</label>
                <table>
                    <select id="states" onchange="state()" tabindex="1">
                         <option value="0">Select State</option>
                         <option value="31">sumatera utara</option>
                         <option value="01">sumatera barat</option>

                    </select>


                    <select name="" id="district">
                         <option>Select District</option>
                    </select>


               </table>

</body>
</html>