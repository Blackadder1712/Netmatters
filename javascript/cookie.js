

let acceptCookies =

    {
      showModal()
      {
        $('.cookie-content').show();
      },
    

    $param(Date,trad)
    {
    return(trad)
    },

    Expired(Date)
    {
      let Day = Date.now();
      let Spent = Day - Date;
      return (Spent >= 8.95e+7);
    },

    hideModal()
    {
      $('.cookie-content').hide();
    },

    getCookie()
   {
    return localStorage.getItem('accepted');
   },

   deleteCookies()
   {
    localStorage.clear();
   },

   createCookies(Date)
   {
    localStorage.setItem('accepted', Date.getTime());

   }





  };




const cookiebtn = document.getElementById('cookie-2');

cookiebtn.addEventListener("click",() =>
{
   
   acceptCookies;
   document.getElementById('myModal').style.display = "none";
   console.log("accept");

});


 
if(Date !== null)
{
  if(acceptCookies.Expired(Date))
  {
    acceptCookies.deleteCookies();
    document.getElementById('myModal').style.display = "block";

  }
else
{
  document.getElementById('myModal').style.display = "none";
}


}  