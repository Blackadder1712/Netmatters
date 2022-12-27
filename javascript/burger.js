

const hamMenu = document.querySelector(".hamburger-menu ");
let overlay = document.querySelector("#overlay");
let netmatters = document.querySelector("#netmatters-work");






hamMenu.addEventListener("click",() =>
{
    if(
    hamMenu.classList.toggle("active"))
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
    document.getElementById("overlay").style.width = "100%";

    

  



   
}
   
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
        document.getElementById("overlay").style.width = "0px";
        
       
       
      }

overlay.addEventListener("click",() =>
{
  
        closeNav();
   
})

 
hamMenu.addEventListener("click", () =>
{
 
    if(document.getElementById("overlay").style.width = "100%")
    {
        overlay.style.display="block";
        console.log("done")
    }
    else
    {
        overlay.style.display="none";
        console.log("not")
    }

})

   

      
    
   

    
  

