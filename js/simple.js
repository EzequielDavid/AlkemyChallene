let search=document.getElementById("searchMobile");
let inputSearch=document.getElementById("inputsearch");


function searchMobile()
{
   
    if(search.style.width == "100%")
    {
        search.style.width="20%";
        inputSearch.style.display="inline-block"; 
    }
    else
    {
        search.style.width="100%";
        inputSearch.style.display="none"; 
    }
}