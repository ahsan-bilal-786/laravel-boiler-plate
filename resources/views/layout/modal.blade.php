<!-- Modal -->
<div class="modal-dialog modal-lg">
   <div class="modal-content">
       <!-- Modal Header -->
       <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
           </button>
           <h4 class="modal-title" id="myModalLabel">
           @yield('modal_title')
           </h4>
       </div>
       
       <!-- Modal Body -->
       <div class="modal-body">

       <div class="notification"></div>

       @yield('content')

       </div>
       <!-- Modal Footer -->
       @yield('modal_footer')
       
   </div>
</div>
