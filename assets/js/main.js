function validateform(){  
   var name=document.myform.name.value;  
   var description=document.myform.description.value;  
   var price=document.myform.price.value;  
   var status=document.myform.status.value;  
   
   if (name==null || name==""){  
   alert("Name can't be blank");  
   return false;  
   }
   else if (description==null || description==""){  
   alert("Description can't be blank");  
   return false;  
   }
   else if(price.length<6){  
   alert("Price must be at least 6 characters long.");  
   return false;  
   }
   else if (status==null || status==""){  
   alert("Status can't be blank");  
   return false;  
   }
   else if (image==null || image==""){  
   alert("Image can't be blank");  
   return false;  
   }
}