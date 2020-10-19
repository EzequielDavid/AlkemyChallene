let login=document.getElementById("login");
if(login)
{
  login.addEventListener("click",()=>
  {
    let content = document.getElementById("login-content");

    if(content.style.display=="block")
    {
      content.style.display="none";
    }
    else{
      content.style.display="block";
    }
  });
}





