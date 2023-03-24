 // Collapse Sidebar

 const collapse = localStorage.getItem('sidebarCollapse');

 if (collapse === "true") {
     $(".sidebar-text").toggleClass("hidden");
     $(".sidebar").toggleClass("w-52");
 }else{
     localStorage.setItem('sidebarCollapse', "false");
 }
 
 $(".collapseSidebar").click(function (e) {
     e.preventDefault();
     $(".sidebar-text").toggleClass("hidden");
     $(".sidebar").toggleClass("w-52");
 
     const collapse = localStorage.getItem('sidebarCollapse');
 
     if (collapse === "true") {
         localStorage.setItem('sidebarCollapse', "false");
     }else{
         localStorage.setItem('sidebarCollapse', "true");
     }
 });