const body = document.body;



let lastScroll = 0;

window.addEventListener("scroll", () =>
{
    const currentScroll = window.pageYOffset //logs movement of page in pixels

    if(currentScroll <= 0)
    {
        body.classList.remove("scroll-up"); //if at top of page remove scroll up css

        
      
     
        
        
    }

 

    if (currentScroll > lastScroll && !body.classList.contains("scroll-down"))
    {
       body.classList.remove("scroll-up")
       body.classList.add("scroll-down")
    } //comparing values and detecting scrolling down

    if (currentScroll < lastScroll && body.classList.contains("scroll-down"))
    {
       body.classList.remove("scroll-down")
       body.classList.add("scroll-up")
    }

   


    
    lastScroll = currentScroll;
})