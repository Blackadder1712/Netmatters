


function openNav() {
    document.getElementById("mypanel").style.width = "260px";
    document.getElementById("netmatters-work").style.marginRight = "260px";
    document.getElementById("netmatters-work").style.marginLeft ="-260px";
    document.getElementById("cards").style.marginRight = "270px";
    document.getElementById("cards").style.marginLeft = "-270px";
    document.getElementById("email-form").style.marginRight = "270px";
    document.getElementById("email-form").style.marginLeft = "-270px";
    document.getElementById("tail").style.marginRight = "270px";
    document.getElementById("tail").style.marginLeft = "-260px";
    document.getElementById("foot").style.marginRight = "270px";
    document.getElementById("foot").style.marginLeft = "-260px";
   
    
   

    
  }


    
 
  
  /* Set the width of the side navigation to 0 */
  function closeNav() {
    document.getElementById("mypanel").style.width = "0";
    document.getElementById("netmatters-work").style.marginLeft = "0";
    document.getElementById("netmatters-work").style.marginRight = "0";
    document.getElementById("cards").style.marginRight = "0";
    document.getElementById("cards").style.marginLeft = "0";
    document.getElementById("email-form").style.marginRight = "0";
    document.getElementById("email-form").style.marginLeft = "0";
    document.getElementById("tail").style.marginRight = "0";
    document.getElementById("tail").style.marginLeft = "0";
    document.getElementById("foot").style.marginRight = "0";
    document.getElementById("foot").style.marginLeft = "0";
  }
  $(".hamburger").on("click", function()
  {
    if($('#mypanel').is('width:0')) {
      openNav();
      } 
    
      else {
        closeNav();
        } 
  })

    
