<!-- dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/sidebar.css"); ?>">
  <style>
tbody tr {
      background-color: #fff2f7; /* light pink */
    }
    td img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 6px;
    }





thead{



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

.btn
{
    color:white;
    font-weight:500;

background: linear-gradient(180deg, rgba(106, 15, 224, 0.47) 0%, rgba(95, 72, 126, 0.42) 100%);
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.26);
      cursor: pointer;
      transition: transform 0.2s, box-shadow 0.2s;


}
.btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px  rgba(106, 15, 224, 0.47) ;
    }
.popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 1050;
  }

  .popup-box {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    max-width: 600px;
  }
    @media (max-width: 768px) {
  table {
    font-size: 12px;
  }

  tbody td {
    padding: 0.5rem;
  }

  td img {
    width: 40px;
    height: 40px;
  }

  tbody tr {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
  }
}




</style>
</head>

<body>

<div class="container-fluid p-0">
  <div class="row g-0">

    <!-- Sidebar is  -->
     <h1>hello</h1>
    <div class="col-md-2 d-md-block bg-purple text-white" id="sidebar">
      <?php include 'sidebar.php'; ?>
    </div>

    <!-- Main Content -->
    <div class="col-md-10 col-12 main">
      <!-- Top bar -->
      <div class="container-fluid shadow-sm d-flex justify-content-between justify-content-sm-end align-items-center p-2">
        <div class="d-md-none p-2 bg-light">
          <button class="btn p-2" id="sidebarToggle" style="background: transparent; border: none;">
            <i class="fas fa-bars fs-4 text-dark"></i>
          </button>
        </div>
        <div>
          <i class="fa-solid fa-bell p-2 me-3 fs-4"></i>
          <i class="fa-regular fa-user p-2 me-3 fs-4"></i>
        </div>
        
      </div>

      <!-- Content -->
        <div class="container  m-2  d-flex justify-content-start  align-items-center p-2 pt-4">
            <form class="d-flex p-2  w-50" role="search">
              <input type="text" class="form-control rounded-start-5 p-2 rounded-end-0 border-end-0 " placeholder="Search Here" aria-label="Search user">
              <span class="input-group-text bg-white rounded-end-5 rounded-start-0 border-start-0">
                <i class="fa-solid text-dark fa-magnifying-glass"></i>
              </span>
            </form>
  </div>


<div class="container px-3  my-4">
  <table class="table text-center  table-borderless rounded align-middle" cellspacing="10" cellpadding="15">
  <thead class="">
    <tr>
      <th>Id</th>
      <th>Customer Name</th>
      <th>Total Orders</th>
       <th>Contact</th>
      <th>City</th>
      <th>Address</th>
      <th>Total Spend</th>
      <th>Edit/Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>1</td>
        <td>Pat Black </td>
        <td>25</td>
        <td>9049978256</td>
        <td>Nashik</td>
        <td>Pandit colony</td>
        <td> 2500 </td>
        <td ><i class="fa-solid fa-user-pen edit-btn" style="cursor:pointer;"></i>&emsp; 
        <i class="fa-solid fa-trash del-btn" style="cursor:pointer;"></i></td>
    </tr>
    <tr>
        <td>1</td>
        <td>Pat Black </td>
        <td>25</td>
        <td>9049978256</td>
        <td>Nashik</td>
        <td>Pandit colony</td>
        <td> 2500 </td>
        <td ><i class="fa-solid fa-user-pen edit-btn" style="cursor:pointer;"></i>&emsp;
         <i class="fa-solid fa-trash del-btn" style="cursor:pointer;"></i></td>
    </tr>
    <tr>
        <td>1</td>
        <td>Pat Black </td>
        <td>25</td>
        <td>9049978256</td>
        <td>Nashik</td>
        <td>Pandit colony</td>
        <td> 2500 </td>
        <td ><i class="fa-solid fa-user-pen edit-btn" style="cursor:pointer;"></i>&emsp;
         <i class="fa-solid fa-trash del-btn" style="cursor:pointer;"></i></td>
    </tr>
    <tr>
        <td>1</td>
        <td>Pat Black </td>
        <td>25</td>
        <td>9049978256</td>
        <td>Nashik</td>
        <td>Pandit colony</td>
        <td> 2500 </td>
       <td ><i class="fa-solid fa-user-pen edit-btn" style="cursor:pointer;"></i>&emsp;
        <i class="fa-solid fa-trash del-btn" style="cursor:pointer;"></i></td>
    </tr>
    <tr>
        <td>1</td>
        <td>Pat Black </td>
        <td>25</td>
        <td>9049978256</td>
        <td>Nashik</td>
        <td>Pandit colony</td>
        <td> 2500 </td>
        <td ><i class="fa-solid fa-user-pen edit-btn" style="cursor:pointer;"></i>&emsp; 
        <i class="fa-solid fa-trash del-btn" style="cursor:pointer;"></i></td>
    </tr>
       
      


    
  </tbody>
</table>
</div>
     
    </div>
  </div>
</div>

<div class="popup-overlay popup-overlay-del" style="display:none;">
  <div class="popup-box text-center p-4 bg-white rounded shadow">
    <div class="popup-icon mb-2"><i class="fas fa-exclamation fa-2x " style="color:#915cd1;"></i></div>
    <div class="popup-message fw-bold">Are you sure?</div>
    <div class="popup-sub text-muted mb-3">Do you want to delete the Customer?</div>
    <div class="popup-buttons d-flex justify-content-center gap-3">
      <button class="btn  btn-yes">Yes</button>
      <button class="btn  btn-cancel-del">Cancel</button>
    </div>
  </div>
</div>

<!-- EDIT FORM POPUP -->
<div class="popup-overlay popup-overlay-edit" style="display:none;">
  <div class="popup-box p-4 bg-white rounded shadow" style="width: 600px;">
    <h5 class="text-center mb-3">Edit Customer</h5>
    <form id="editForm">
      <div class="mb-2">
        <label for="edit-id" class="form-label">Customer ID</label>
        <input type="text" class="form-control" id="edit-id" readonly>
      </div>

      <div class="mb-2">
        <label for="edit-name" class="form-label">Customer Name</label>
        <input type="text" class="form-control" id="edit-name" required>
      </div>

       <div class="mb-2">
        <label for="edit-password" class="form-label">Password</label>
        <input type="password" class="form-control" id="edit-password">
      </div>

      <div class="mb-2">
        <label for="edit-contact" class="form-label">Contact</label>
        <input type="tel" class="form-control" id="edit-contact" required>
      </div>

      <div class="mb-2">
        <label for="edit-city" class="form-label">City</label>
        <input type="text" class="form-control" id="edit-city">
      </div>

      <div class="mb-2">
        <label for="edit-address" class="form-label">Address</label>
        <textarea class="form-control" id="edit-address" rows="2"></textarea>
      </div>

      <div class="d-flex justify-content-end gap-2 mt-3">
        <button type="submit" class="btn ">Save</button>
        <button type="button" class="btn  btn-cancel-edit">Cancel</button>
      </div>
    </form>
  </div>
</div>
<script>
   // Delete popup
  document.querySelectorAll(".del-btn").forEach(btn => {
    btn.addEventListener("click", () => {
      document.querySelector(".popup-overlay-del").style.display = "flex";
    });
  });

  document.querySelector(".btn-cancel-del").addEventListener("click", () => {
    document.querySelector(".popup-overlay-del").style.display = "none";
  });

  // Edit popup
  document.querySelectorAll(".edit-btn").forEach(btn => {
    btn.addEventListener("click", () => {
      document.querySelector(".popup-overlay-edit").style.display = "flex";
    });
  });

  document.querySelector(".btn-cancel-edit").addEventListener("click", () => {
    document.querySelector(".popup-overlay-edit").style.display = "none";
  });

  // (Optional) On Submit
  document.getElementById("editForm").addEventListener("submit", function (e) {
    e.preventDefault();
    // Handle form submission logic here
    alert("Customer details updated!");
    document.querySelector(".popup-overlay-edit").style.display = "none";
  });
</script>
<script src="<?php echo base_url("assets/js/sidebar.js"); ?>"></script>  
</body>

</html>


