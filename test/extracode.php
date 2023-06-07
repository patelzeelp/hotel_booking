 <!-- <script>
     let general_data;

     function grt_general() {
         let site_tital;
         let site_about;

         let xhr = new XMLHttpRequest();
         xhr.open('POST', "ajax/setting_crud.php", true)
         xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

         xhr.onload = function() {
             general_data = this.responseText;
             console.log(general_data);
         }
         xhr.send('grt_general');

     }
     window.onload = function() {
         general_data();
     }
 </script>

 <div class="alert ${bs_class} alert-dismissible fade show custom-alert" role="alert">
     <strong class="me-3"> ${msg}</strong>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> -->
  
 <!--
 function alert(type,msg) {
 let bs_class = (type == "success") ? 'alert-success' : 'alert-denger';
 let element = document.createElement('div');
 element.innerHTML = `
 <div class="alert ${bs_class} alert-dismissible fade show " role="alert">
     <strong class="me-2"> ${msg}</strong>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
 `;
 document.body.append(element);
 } -->