//function to set the cookie
setCookie = (cName, cValue, expDays) =>
{
  let date = new Date();
  date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
  const expires = "expires=" + date.toUTCString();
  document.cookie = cName + "=" + cValue + ";" + expires + "; path=/"; //this makes path to homepage
}

//check if cookie exists and retrieve it

getCookie = (cName) =>
{
  const name = cName + "=";
  const cDecoded = decodeURIComponent(document.cookie);//creates an array
  const cArr = cDecoded.split(";"); //split array
  let value;
  cArr.forEach(val => 
  {
    if(val.indexOf(name) === 0) value = val.substring(name.length) // grab value if element has a name (so each element)
  })

  return value; 
}

//make modal dissapear on buttton click and create cookie

document.querySelector('#cookie-2').addEventListener("click", () =>
{
  document.querySelector('#myModal').style.display = "none";
  setCookie("cookie", true, 30);//name, value, length of time till expiry(days)
})

//check if a cookie already exists 

cookieMessage = () =>
{
  if(!getCookie("cookie"))
  { //check if our cookie doesnt exist
   document.querySelector("#myModal").style.display = "block"; //if no cookie exists bring up modal
  }
  

}

window.addEventListener("load", cookieMessage);// bring up this function on every page load