<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    
html, body {
  width: 100vw;
  height: 100vh;
  margin: 0;
  padding: 0;
display: flex;
 overflow-x: hidden;
}
#sidebar
{


width: 15%;

    background-color: #a678e2;
border-bottom-right-radius:5px ;
border-top-right-radius: 5px;

height:100vh;

position: fixed;
top: 0;
left:0;
z-index: 10;


}
.main{
width: 85%;

}



tbody tr {
      background-color: #fff2f7; /* light pink */
    }
    td img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 6px;
    }


 table {
    border-collapse: separate;
    border-spacing: 0 7px; /* vertical space between rows */
  }

  tbody tr,thead {
    background-color:rgb(234, 168, 193);
    border-radius: 12px;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.26);
  }

  tbody td {
    border: none; /* ensure borderless cells */
     padding: 1rem; 
  }

  tr{
    height:50px;
    
  }

  .icons{
    color:#9C60DD;
  }
  
  
  
  


     .btn {
       color: white;
      font-weight: 500;

      background: linear-gradient(180deg, rgba(106, 15, 224, 0.47) 0%, rgba(95, 72, 126, 0.42) 100%);
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.26);
      cursor: pointer;
      transition: transform 0.2s, box-shadow 0.2s;


    }



@media (max-width: 575.98px) {
 

        #sidebar
{

position: fixed;
top: 0;
left:0;
z-index: 10;
width: 20vh;
display: none;
min-height:100vh;
}
.main{
width:100vw;


    
}

        .table  {
font-size:0.6rem;


    }








}


@media (min-width: 576px) and (max-width: 767.98px) {
 

    #sidebar
{
height:100vh;

position: fixed;
top: 0;
left:0;
z-index: 10;
width: 20vw;
display:none ;
}
.main{
width:100%;

    
}






}


@media (min-width: 768px) and (max-width: 991.98px) {


        #sidebar
    {

height:100vh;
width: 20%;

    }
 
.main
{

height:100vh;
background: rgb(249, 249, 249);
width: 80%;
margin-left:20%;
}

  
}

@media (min-width: 992px) and (max-width: 1199.98px) {


        #sidebar
    {

height:100vh;
width: 15%;

    }
 
.main
{

height:100vh;
background: rgb(249, 249, 249);
width: 85%;
margin-left:15%;

}

}

@media (min-width: 1200px) and (max-width: 1399.98px) {


        #sidebar
    {

height:100vh;
width: 15%;

    }
 
.main
{

height:100vh;
background: rgb(249, 249, 249);
width: 85%;
margin-left:14%;

}

tr
{
  height:50px;
}


}


@media (min-width: 1400px) {


    #sidebar
    {

height:100vh;
width: 15%;

    }
 
.main
{

height:100vh;
background: rgb(249, 249, 249);
width: 85%;
margin-left:15%;


}
tr
{
  height:60px;
}



}

</style>


</head>
<body>
    
<div id="sidebar">
  <div class="d-flex d-md-none justify-content-end p-2 b">
    <button class="btn p-2" id="sidebarToggle" style="background: transparent; border: none;">
      <i class="fa-solid fa-xmark  text-dark" onclick="hideSidebar()"></i>
    
    </button>
  </div>

        <?php include 'sidebar.php'; ?>
      
    
    </div>
<div class="main">

<div class="container-fluid shadow-sm d-flex justify-content-between justify-content-sm-end align-items-center p-2">
  <div class="d-md-none p-2 bg-light">
    <button class="btn p-2" id="sidebarToggle" style="background: transparent; border: none;">
      <i class="fas fa-bars fs-4 text-dark" onclick="showSidebar()"></i>
    </button>
  </div>
        <?php include 'navbar.php'; ?>

</div>

<div class="container-sm-fluid px-sm-1 px-3">
          <div class="d-flex">
          
          <div class="col-md-2 col-sm-2 my-2">
  <select id="ProductStatus" name="Filter" class="form-select btn" required>
    <option value="" disabled selected class="">Filter</option>
    <option value="All">All</option>
    <option value="Pending">Pending</option>
    <option value="Placed">Placed</option>
   
  </select>
</div>
  </div>
        

<div class="container px-3 table-responsive px-md-3 px-0 my-4">
  <table class="table text-center table-sm  table-borderless rounded align-middle" >
  <thead class="">
    <tr>
      <th>Id</th>
      <th>Customer Name</th>
      <th>Contact</th>
      <th>City</th>
      <th>Pin</th>
      <th>Date</th>
      <th>Total</th>
      <th>Status</th>

    </tr>
  </thead>
  <tbody>
    <tr>
        <td>1</td>
        <td>Pat Black </td>

        <td>9049978256</td>
        <td>Nashik</td>
        <td>431122</td>
        <td>17/03/2025</td>
        <td> $22 </td>
        <td> <a href="<?php echo site_url('Welcome/OrderDetails'); ?>">
          <i class="fa-solid fa-truck icons"></i>
        </a> 
        </td>

    </tr>
    <tr>
        <td>1</td>
        <td>Pat Black </td>

        <td>9049978256</td>
        <td>Nashik</td>
        <td>431122</td>
        <td>17/03/2025</td>
        <td> $22 </td>
       <td> <a href="<?php echo site_url('Welcome/OrderDetails'); ?>">
          <i class="fa-solid fa-truck icons"></i>
        </a> 
        </td>

    </tr>
   <tr>
        <td>1</td>
        <td>Pat Black </td>

        <td>9049978256</td>
        <td>Nashik</td>
        <td>431122</td>
        <td>17/03/2025</td>
        <td> $22 </td>
        <td> <a href="<?php echo site_url('Welcome/OrderDetails'); ?>">
          <i class="fa-solid fa-truck icons"></i>
        </a> 
        </td>

    </tr>
    <tr>
        <td>1</td>
        <td>Pat Black </td>

        <td>9049978256</td>
        <td>Nashik</td>
        <td>431122</td>
        <td>17/03/2025</td>
        <td> $22 </td>
        <td> <a href="<?php echo site_url('Welcome/OrderDetails'); ?>">
          <i class="fa-solid fa-truck icons"></i>
        </a> 
        </td>

    </tr>
  <tr>
        <td>1</td>
        <td>Pat Black </td>

        <td>9049978256</td>
        <td>Nashik</td>
        <td>431122</td>
        <td>17/03/2025</td>
        <td> $22 </td>
        <td> <a href="<?php echo site_url('Welcome/OrderDetails'); ?>">
          <i class="fa-solid fa-truck icons"></i>
        </a> 
        </td>

    </tr>
       
      


    <!-- Repeat -->
  </tbody>
</table>



</div>







    


  <script src="<?php echo base_url("assets/js/sidebar.js"); ?>"></script>

  <script>









  </script>

</body>
</html>