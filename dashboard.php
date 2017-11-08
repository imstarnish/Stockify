
<?php
    
   include('session.php');
?>
<html>
<head>
	<title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="normalise.css">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    
     <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css" rel="stylesheet">
    
<!--    google icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
    
</head>
    <script src="js/jquery-3.2.1.js"></script>
<!--script>
function s() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
		  });
}
    </script-->
    
    


    
    <!--script>
function myFunction() {
    
    
    var table = document.getElementById("mytable");
    var row = table.insertRow(cell1);
    var cell1 = row.insertCell(0);
    var cellimg = row.insertCell(1);
    var cell2 = row.insertCell(2);
    var cell3 = row.insertCell(3);
    var cell4 = row.insertCell(4);
    var lines = '<div  class="imgtd"><img class="imgap" id="image"/></div>';
    cell1.innerHTML = document.getElementById("stid").value;
    cellimg.innerHTML = lines;
    cell2.innerHTML = document.getElementById("stname").value;
    cell3.innerHTML = document.getElementById("stq").value;
    cell4.innerHTML = document.getElementById("stprice").value;
}
</script-->
<body>
    
     
        <div class="container-fluid display-table">
            <div class="row display-table-row">
            <!--side menu -->
                <div class="col-md-2 valine-top sidenav1 no-float" id="side-nav">
                    <h2>Dashboard</h2>
                    <a href="#" class="nav-link navbar-custom active"><h3   id="f1">Stock Data</h3></a>
                    <!--a href=""><h3 class="a1a"></h3></a-->
                </div>

            <!-- Main content-->
                <div class="col-md-10 display-table-cell valine-top">
                    <div class="row nav-header">
                        
                            <div class="col-md-5 part">
                               
                            </div>
                            
                            <div class="col-md-7 part">
                                <ul class="pull-right">
                                    <li class="welcome">Welcome <?php echo $user_check; ?></li>
                                    <li>
                                        <a href="#">
                                            <i class="material-icons" style="color: #676a6c;">notifications</i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="material-icons" style="color: #676a6c">email</i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="lower slide-bottom bottomside">
                                                <div class="container-ios">
                                                            <div class="holder">		
                                                                <input type="checkbox" value="None" id="check" name="check" class="check-ios" onclick="setTimeout(myfun,1000);" checked="true">
                                                                <label for="check"></label>
                                                                <span></span>
                                                            </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <br>
                                
                            </div>
                        
                    </div>
                    <script type="text/javascript">
        function myfun(){
            if(document.getElementById('check').checked) {
            }
            else{
                window.location.href = "logout.php";
            }
        }
    </script>
	         <form>    
          <section class="row text-center placeholders">
                <div class="col-6">
                    <input type="text" placeholder="Enter Stock Name" class="inputdata form-control" id="pn">
                    <input type="text" placeholder="Enter Price" class="inputdata form-control" id="ref">
                </div>
                <div class="col-6">
                    <input type="text" placeholder="Enter Quantity" class="inputdata form-control" id="cdn">
                    <input type="file" placeholder="Enter Image" class="inputdata form-control" id="wn" name="pic" accept="image/*">
                </div>
              <button type="button" onclick="add1()" name="anish" class="btn btn-block btn-primary">Add</button>
          </section>
            </form>
           
          <hr>
          <h2>Stock List</h2>
          <div class="table-responsive"> 
            <div class="form-group pull-right">
            <input type="text" class="search form-control" onkeyup="s()" placeholder="Search Stock...">
            </div>
            <span class="counter pull-right"></span>
            <table class="table table-hover table-bordered results" id="ptable">  
              <thead>
                <tr>
                  <th>id</th>
                  <th>Name</th>
                  <th>Quantity&#40;in Rs.&#41;</th>
                  <th>Price</th>
                  <th>Appearance</th>
                  <th>Remove</th>    
                </tr>
                <tr class="warning no-result">
                  <td colspan="10"><i class="fa fa-warning"></i> No Matching Records Found</td>
                </tr>  
              </thead>
              <tbody>
                <tr>
                  <td scope="row">1</td>
                  <td contenteditable="true">Dell Monitor</td>
                  <td contenteditable="true">100</td>
                  <td contenteditable="true">12000</td>
                  <td><div  class="imgtd"><img src="https://cdn.pixabay.com/photo/2013/07/13/01/08/monitor-155158_960_720.png" class="imgap"></div></td>
                  <td class="remove"><button class="btn btn-block btn-danger btn-circle" onclick="deleteRow(this)"><i class="fa fa-close"></i></button></td>    
                </tr>
                <tr>
                  <td scope="row">2</td>
                  <td contenteditable="true">Sandisk Pendrive 64gb</td>
                  <td contenteditable="true">200</td>
                  <td contenteditable="true">999</td>
                  <td><div  class="imgtd"><img src="http://www.allwhitebackground.com/images/1/Pen-Drive-3.jpg" class="imgap"></div></td>
                  <td class="remove"><button class="btn btn-block btn-danger btn-circle" onclick="deleteRow(this)"><i class="fa fa-close"></i></button></td>
                </tr>
                <tr>
                  <td scope="row">3</td>
                  <td contenteditable="true">Dell Mouse</td>
                  <td contenteditable="true">150</td>
                  <td contenteditable="true">599</td>
                  <td><div  class="imgtd"><img src="http://www.freepngimg.com/download/pc_mouse/8-2-pc-mouse-png.png" class="imgap"></div></td>
                  <td class="remove"><button class="btn btn-block btn-danger btn-circle" onclick="deleteRow(this)"><i class="fa fa-close"></i></button></td>
                </tr>
                <tr>
                  <td scope="row">4</td>
                  <td contenteditable="true">Macbook</td>
                  <td contenteditable="true">150</td>
                  <td contenteditable="true">52000</td>
                  <td><div  class="imgtd"><img src="https://images.anandtech.com/doci/4022/MBP.png" class="imgap"></div></td>
                  <td class="remove"><button class="btn btn-block btn-danger btn-circle" onclick="deleteRow(this)"><i class="fa fa-close"></i></button></td>
                </tr>
              </tbody>
            </table>
          </div>
        <div id="snackbar"></div>    
      </div>
    </div>
      <script>
          function s(){
              $(".search").keyup(function () {
                var searchTerm = $(".search").val();
                var listItem = $('.results tbody').children('tr');
                var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

              $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
                    return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
                }
              });

              $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
                $(this).attr('visible','false');
              });

              $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
                $(this).attr('visible','true');
              });

              var jobCount = $('.results tbody tr[visible="true"]').length;
                $('.counter').text(jobCount + ' item');

              if(jobCount == '0') {$('.no-result').show();}
                else {$('.no-result').hide();}
                      });
          }
          
          
          function deleteRow(btn) {
          var row1 = btn.parentNode.parentNode;
          row1.parentNode.removeChild(row1);
        }
      </script>
                    
                    <!--div class="form-group pull-right">
                            
                        </div>
                    
                    
                    <div>
                        <input type="text" placeholder="Enter Stock Id" class="inputdata" id="stid">
                        <input type="file" id="files" name="pic" accept="image/*">
                        <input type="text" placeholder="Enter Stock Name" class="inputdata" id="stname">
                        <input type="text" placeholder="Enter Quantity" class="inputdata" id="stq">
                        <input type="text" placeholder="Enter Price" class="inputdata" id="stprice">
                        <button onclick="myFunction()">Add Stock</button>
                        
                      
                    </div>
                    
                    
                        <span class="counter pull-right"></span>
                    
                        <table class="table table-hover table-bordered results" id="mytable">
                     <thead>
                       <tr>
                         <th style="padding: 0 20px;">ID</th>
                        <th style="padding: 0 100px;">Appearance</th>
                         <th class="col-md-5 col-xs-5">Stock Name</th>
                         <th class="col-md-4 col-xs-4">Quantity</th>
                         <th class="col-md-3 col-xs-3">Price</th>
                       </tr>
                       <tr class="warning no-result">
                         <td colspan="4"><i class="fa fa-warning"></i> No result</td>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <td scope="row">1</td>
                           <td><div  class="imgtd"><img src="https://cdn.pixabay.com/photo/2013/07/13/01/08/monitor-155158_960_720.png" class="imgap"></div></td>
                         <td>Monitor</td>
                         <td>10</td>
                         <td>10000</td>
                       </tr>
                       <tr>
                         <td scope="row">2</td>
                        <td><div  class="imgtd"><img src="http://www.freepngimg.com/download/pc_mouse/8-2-pc-mouse-png.png" class="imgap"></div></td>
                         <td>Dell Mouse</td>
                         <td>25</td>
                         <td>2000</td>
                       </tr>
                       <tr>
                         <td scope="row">3</td>
                           <td><div  class="imgtd"><img src="http://www.allwhitebackground.com/images/1/Pen-Drive-3.jpg" class="imgap"></div></td>
                         <td>Sandisk pendrive 64Gb</td>
                         <td>50</td>
                         <td>999</td>
                       </tr>
                      
                           <tr>
                         <td scope="row">4</td>
                        <td><div  class="imgtd"><img src="https://store.storeimages.cdn-apple.com/8750/as-images.apple.com/is/image/AppleInc/aos/published/images/M/ME/MMEF2/MMEF2_AV1?wid=1000&hei=1000&fmt=jpeg&qlt=95&op_sharpen=0&resMode=bicub&op_usm=0.5,0.5,0,0&iccEmbed=0&layer=comp&.v=1473201135463" class="imgap"></div></td>
                         <td>Air pods</td>
                         <td>100</td>
                         <td>11999</td>
                       </tr>
                         
                       
                           <tr>
                         <td scope="row">5</td>
                        <td><div  class="imgtd"><img src="https://images.anandtech.com/doci/4022/MBP.png" class="imgap"></div></td>
                         <td>Macbook Pro</td>
                         <td>70</td>
                         <td>17869</td>
                       </tr>
                           <tr>
                         <td scope="row">6</td>
                          <td><div  class="imgtd"><img src="https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/4/2/42/alu/42-alu-silver-nike-plat-black-s3-grid?wid=270&hei=275&fmt=jpeg&qlt=95&op_sharpen=0&resMode=bicub&op_usm=0.5,0.5,0,0&iccEmbed=0&layer=comp&.v=1504647835842" class="imgap"></div></td>
                         <td>Apple Watch</td>
                         <td>200</td>
                         <td>82399</td>
                       </tr>    
                     </tbody>
                    </table>
                </div>          
            </div>
        
        </div-->
        

    
      <!--    Script for image -->
<!--
                        <script type="text/javascript">
                            
                            
                                document.getElementById("wn").onmouseover = function () {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    // get loaded data and render thumbnail.
                                    document.getElementById("image").src = e.target.result;
                                };

                                // read the image file as a data URL.
                                reader.readAsDataURL(this.files[0]);
                            };
                        </script>
-->
     <script>
         var ijk=0;
function add1() {
    var pn=document.getElementById("pn").value;
    var dn=document.getElementById("cdn").value;
    var ref=document.getElementById("ref").value;
    var table = document.getElementById("ptable").rows.length;
    var i1=table-1;
    var row="";var ijk=0;

                       
    if(pn=="" || dn=="")
    {    
    var x = document.getElementById("snackbar");
    x.innerHTML="Please fill required fields";    
    x.className = "show1";    
    setTimeout(function(){ x.className = x.className.replace("show1", ""); }, 3000);
    }
    else
    {
    var lines = '<div  class="imgtd"><img class="imgap" id="image"/></div>';
    row+='<tr><td>' + i1 + '</td><td  contenteditable="true">' + pn + '</td><td  contenteditable="true">' + dn + '</td><td  contenteditable="true">' + ref + '</td><td><div  class="imgtd"><img class="imgap" id="image"/></div></td><td class="remove"><button class="btn btn-block btn-danger btn-circle" onclick="deleteRow(this)"><i class="fa fa-close"></i></button></td></tr>';
    $(row).appendTo("#ptable tbody");
    var x = document.getElementById("snackbar");
    x.innerHTML="Row inserted";
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    document.getElementById("pn").value="";
    document.getElementById("cdn").value="";
    document.getElementById("ref").value="";
   
          
                

                                var reader = new FileReader();
                                var file    = document.getElementById("wn").files[ijk];
                                reader.readAsDataURL(file);
                                reader.onload = function (e) {
                                    // get loaded data and render thumbnail.
                                    document.getElementById("image").src = e.target.result;
                                

                                // read the image file as a data URL.
                                   document.getElementById("wn").value=""; 
                            };
    }
}
</script>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.js"><\/script>')</script>
    <script src="bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    
    
</body>
</html>