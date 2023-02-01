

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
    document.getElementById("web").style.marginRight = "260px";
    document.getElementById("web").style.marginLeft ="-260px";
    document.getElementById("web").style.overflowY ="auto";
    document.getElementById("web").style.height ="100%";
    document.getElementById("body").style.overflow ="hidden";
    document.getElementById("html").style.height = "100%";
   

   
  
    document.getElementById("overlay").style.display = "block";


    

  



   
}
   
    function closeNav() {
        document.getElementById("mypanel").style.width = "0";
        document.getElementById("web").style.marginLeft = "0";
        document.getElementById("web").style.marginRight = "0";
       
     
        document.getElementById("overlay").style.display = "none";
            document.getElementById("web").style.height ="auto";
          document.getElementById("body").style.overflow ="auto";
          document.getElementById("html").style.height = "auto";
   
 
        
       
       
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

   

      
    
   

    
  

