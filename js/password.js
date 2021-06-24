function passwd(){

    var password = prompt('Enter the password to download the file:');
    if(password.toLowerCase() == "khaie"){
      window.open("folder/history.zip")    
    }else{
      alert("incorrect password!! please try again");
    }
  }