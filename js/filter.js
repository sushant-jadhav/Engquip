 function ajaxFunction(){
               var ajaxRequest;  // The variable that makes Ajax possible!
               try{
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }
               catch (e){
                  // Internet Explorer Browsers
                  try{
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }
                  catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }
                     catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('ajaxDiv');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               var category = document.getElementById('category').value;
               var option = document.getElementById('option').value;
               var type = document.getElementById('type').value;
               var queryString = "?category=" + category ;
               queryString +=  "&option=" + option + "&type=" + type;
               ajaxRequest.open("GET", "search.php" + queryString, true);
               ajaxRequest.send(null); 
            }