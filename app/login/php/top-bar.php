<style type="text/css">
  .bg-gradient-black2 {
    background: #121212;
  }
</style>

       <!-- Topbar -->
       <nav class="navbar navbar-expand navbar-dark bg-gradient-black2 text-white topbar mb-4 static-top shadow">

         <!-- Sidebar Toggle (Topbar) -->
         <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
           <i class="fa fa-bars"></i>
         </button>

         <!-- Topbar Search -->
         <div class=" d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
           <h5 class="mt-2"><b><?php echo $titulo; ?></b></h5>
         </div>

         <!-- Topbar Navbar -->
         <ul class="navbar-nav ml-auto">

           <!-- Nav Item - User Información -->
           <li class="nav-item dropdown no-arrow">
             <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="mr-2 d-none d-lg-inline text-white small"> <b>Elias Astrada</b> </span>
               <img class="img-profile rounded-circle" src="https://i.imgur.com/3UjJphv.png">
             </a>
             <!-- Dropdown - User Información -->
             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="../../index.php">
                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                 Cerrar sesión
               </a>
             </div>
           </li>

         </ul>

       </nav>
       <!-- End of Topbar -->
