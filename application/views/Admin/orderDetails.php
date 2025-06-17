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
  background:white;
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




  
  
  
  


     .btn {
       color: white;
      font-weight: 500;

      background: linear-gradient(180deg, rgba(106, 15, 224, 0.47) 0%, rgba(95, 72, 126, 0.42) 100%);
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.26);
      cursor: pointer;
      transition: transform 0.2s, box-shadow 0.2s;


    }




        .stepper-wrapper {
      display: flex;
      justify-content: space-between;
      margin: 40px auto;
      max-width: 600px;
      position: relative;
    }

    .stepper-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      flex: 1;
      position: relative;
    }

    .stepper-item::before {
      content: '';
      position: absolute;
      top: 20px;
      left: -50%;
      height: 3px;
      width: 100%;
      background-color: #d3d3d3;
      z-index: 0;
    }

    .stepper-item:first-child::before {
      content: none;
    }

    .step-counter {
      width: 40px;
      height: 40px;
      background-color: #915cd1;
      border-radius: 50%;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      z-index: 1;
    }

    .stepper-item.completed .step-counter {
      background-color: #28a745;
    }

    .stepper-item.active .step-counter {
      background-color: white;
      border: 3px solid #915cd1;
      color: #915cd1;
    }

    .step-name {
      margin-top: 8px;
      font-weight: 500;
    }

    .stepper-item.completed .step-name {
      color: #6c757d;
    }

    .stepper-item.active .step-name {
      color: #000;
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

           <div class="container">
            <div class="card mx-auto mb-4 shadow-sm mt-3" style="max-width: 400px; border-radius: 12px;">
                <div class="card-body text-center">
                    <h5 class="mb-3 detailcolor">Order Details</h5>
                    <img src="<?php echo base_url("assets/images/pearl.png"); ?>" class="img-fluid rounded mb-3" alt="Pearl Studs" style="height: 150px; object-fit: cover;">
                    <div class="text-start" >
                    <p><strong class="detailcolor">Product Name:</strong> <span>Pearl Studs</span></p>
                    <p><strong class="detailcolor">Price:</strong> $ 33</p>
                    <p><strong class="detailcolor">Qty.:</strong> 1</p>
                    <p><strong class="detailcolor">Total:</strong> $ 23</p>
                    </div>
                </div>
            </div>

                       
            <div class="card p-4 bg-white shadow-sm rounded mx-auto" style="max-width: 500px;">
                <h6 class="mb-3 detailcolor">Order Summary</h6>
                <div class="d-flex justify-content-between mb-2">
                    <span>Item Subtotal</span>
                    <span>₹ 100.00</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span>Shipping</span>
                    <span>₹ 50.00</span>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <span>Order Total</span>
                    <span>₹ 150.00</span>
                </div>

                <h6 class=" mb-2 detailcolor">Order Tracking</h6>
                <div class="d-flex justify-content-between mb-3 " style="color:#915cd1; cursor:pointer; " data-bs-toggle="modal" data-bs-target="#OrderTracking">
                   Check Status
                </div>

                <h6 class=" mb-2 detailcolor">Payment Details</h6>
                <div class="d-flex justify-content-between">
                    <span>Payment Id</span>
                    <span>pay_Q3pixcYlUM9ZO</span>
                </div>
            </div>
</div>



</div>



<div class="modal fade" id="OrderTracking" tabindex="-1">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Order Tracking</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
         <div class="stepper-wrapper">

            <div class="stepper-item completed">
              <div class="step-counter"><i class="fa fa-check"></i></div>
              <div class="step-name">Order Placed</div>
            </div>
        
            <div class="stepper-item active">
              <div class="step-counter">2</div>
              <div class="step-name">Shipped</div>
            </div>
        
            <div class="stepper-item">
              <div class="step-counter">3</div>
              <div class="step-name">Out for Delivery</div>
            </div>
        
            <div class="stepper-item">
              <div class="step-counter">4</div>
              <div class="step-name">Delivered</div>
            </div>

       </div>
      </div>
    </div>
  </div>
</div>



    


  <script src="<?php echo base_url("assets/js/sidebar.js"); ?>"></script>

  <script>









  </script>

</body>
</html>