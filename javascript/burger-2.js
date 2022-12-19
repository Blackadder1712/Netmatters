const hamMenu2 = document.querySelector(".hamburger-menu-2");

const cover = document.querySelector("#cover");

cover.addEventListener("click",() =>
{
  
        closeNav();
  
})


hamMenu2.addEventListener("click",() =>
{
    if(
    hamMenu2.classList.toggle("active"))
    {
        openNav();
    }

    else
    {
        closeNav();
    }
});

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
    document.getElementById("cover").style.backgroundColor = "black";
 




    
    
  
}
   
    function closeNav() {
        document.getElementById("contain").style.marginLeft = "0px";
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
        document.getElementById("cover").style.backgroundColor = "transparent";
 
      }

      
   

    
  

