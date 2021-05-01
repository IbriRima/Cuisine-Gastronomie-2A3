function Verif()
{
   
    var ID=document.getElementById("ID").value;
    var NB_Places=document.getElementById('NB_Places').value;
    alert('ID');
    
    if(ID=="")
    {
        //alert('hello1');
        document.getElementById("labelID").innerHTML="Tapez votre numéro de téléphone!";
        return false; 
    }
    else
    if(NB_Places=="")
    {
        //alert('hello');
        document.getElementById('labelNB_Places').innerHTML="Tapez le nombre de places !";
        return false;
    }
    else
    return true;


    

    

}