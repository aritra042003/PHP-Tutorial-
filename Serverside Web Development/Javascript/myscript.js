function validation(){
    // alert("hello")
    var result=true
   var i= document.getElementsByTagName("input")
   if (i[0].value.length==0) {
    return(false)
   }
return(result)
}