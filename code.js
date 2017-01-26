if (navigator.cookieEnabled == 0) {
   var answer = confirm("You must enable cookies for the site to work properly.\nClick OK to continue to our Information Page or click Cancel to leave the site and be refirected to google.ca");
    if(answer)
       window.location = 'show.php'
    else
       window.location = 'https://www.google.ca/'
       
}
  



